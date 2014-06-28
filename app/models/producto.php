<?php

class Producto extends Eloquent{
	protected $table='producto';
	protected $fillable =['id','nombre_producto','precio_neto','codigo_producto','fk_bodega_id'];
}
?>