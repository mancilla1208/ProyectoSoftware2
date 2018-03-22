@extends('store.template')
@section('content')


<div class="container text-center">
	<div class="page-header">
	  <h1><i class="fa fa-shopping-cart"></i> Detalle del producto</h1>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="product-block">
				<img src="{{ $product->imagen }}">
			</div>
		</div>
		<div class="col-md-2">
			<div class="product-block">
        <h4>referencia:<h5>{{ $product->nombre }}</h5></h4>
			</div>
			</div>
			<div class="col-md-2">
				<div class="product-block">
					<h4>material<h5>{{$product->material}}</h5></h4>
			</div>
			</div>
			<div class="col-md-2">
				<div class="product-block">
					<h4>disponibles:<h5>{{$product->cantidad}}</h5></h4>
			</div>
			</div>
			<h3><i descripcion del producto:</h3>
<h2><i class="fa fa-arrow-circle-down"></i>descripcion del producto:</h2>
			<div class="col-md-6">
			<div class="product-block panel">
				<h3> </h3>
				<h5>{{ $product->descripcion }}</h5>
			</div>
			</div>
				<h1>
					<span class="label label-success"> Precio: ${{ number_format($product->precio,2) }}</span>
				</h1>

					<a class="btn btn-warning" href="{{ route('carrito-add', $product->direccion) }}"><i class="fa fa-cart-plus"></i> Agregar A Carrito De Compras
					</a>
					<a class="btn btn-info" href="{{ route('home') }}"> Regresar A Catalogo De Productos</a>

			</div>
		</div>
	</div><hr>

@stop
