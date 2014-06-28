<?php
class BodegasController extends BaseController{

	public function mostrarBodegas(){
		$bodegas=Bodega::all();//devuelve un array con todas las bodegas
		return View::make('bodegas.lista',array('bodegas'=>$bodegas));
		//se pasa como parametro todo lo que queramos mostrar por la vista, en
		//este caso un array con bodegas

	}
/*
   Muestra formulario para crear una Bodega
*/
	public function nuevaBodega()
	{
		return View::make('bodegas.crear');
	}
/*
    Metodo prara crear la nueva bodega
*/
	public function crearBodega()
	{
         Bodega::create(Input::all());
         /*
                crea un nueva bodega en la base de datos con  los
                parametros enviados por un arreglo con los datos del
                modelo 
         */
         return Redirect::to('bodegas');        
	}
  /*
  Ve la bodega por el id.
  */
     
	public function verBodega($id)
	{
          //este metodo recibe un parametro llamado id que es el
		//que swe usa para filtrar las bodegas y se debe declarar la ruta
		//como un parametro
		$bodega=Bodega::find($id);
		//para buscar la bodega utilizamos find de laravel ,
		//este metodo revuelve un objeto con la info de la bodega
		return View::make('bodegas.ver',array('bodega'=>$bodega));
	}

	public function borrarBodega($id)
	{
		$bodega=Bodega::destroy($id);	
		return Redirect::to('bodegas'); 

	}

	public function formModificarBodega()
	{
		return View::make('bodegas.modificar');


	}

	public function modificarBodega()
	{
		   $id = Input::get('id');
		   $bodega= Bodega::find($id);
		   $bodega->nombre_bodega=Input::get('nombre_bodega');
		   $bodega->codigo_bodega=Input::get('codigo_bodega');
		   $bodega->save();
		   return Redirect::to('bodegas');
		
	}

}
?>