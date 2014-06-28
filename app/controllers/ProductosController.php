<?php
class ProductosController extends BaseController{

	public function mostrarProductos(){
		$productos=Producto::all();//devuelve un array con todas los productos
		return View::make('productos.lista',array('productos'=>$productos));
		//se pasa como parametro todo lo que queramos mostrar por la vista, en
		//este caso un array con productos
	}

	/*
   Muestra formulario para crear una Bodega
    */
	public function nuevoProducto()
	{
		
		return View::make('productos.crear');
	}
/*
/*
    Metodo prara crear la nueva producto
*/
	public function crearProducto()
	{
         Producto::create(Input::all());
         
         return Redirect::to('productos');        
	}

	public function verProducto($id)
	{         
		$producto=Producto::find($id);		
		return View::make('productos.ver',array('producto'=>$producto));
	}

	public function borrarProducto($id)
	{
		$bodega=Bodega::destroy($id);
		return Redirect::to('productos'); 

	}

	public function formModificarProducto()
	{
		return View::make('productos.modificar');


	}

	public function modificarProducto()
	{
		   $id = Input::get('id');
		   $producto= Producto::find($id);
		   $producto->nombre_producto=Input::get('nombre_producto');
		   $producto->codigo_producto=Input::get('codigo_producto');
		   $producto->precio_neto=Input::get('precio_neto');
		   $producto->fk_bodega_id=Input::get('fk_bodega_id');
		   $producto->save();
		   return Redirect::to('productos');
	}

}
?>