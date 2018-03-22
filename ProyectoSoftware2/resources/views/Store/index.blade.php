@extends('store.template')
@section('content')
@include('store.partials.slider')
<div class="container text-center">
	<div id="products">
		@foreach($products as $product)
			<div class="product white-panel">
				<h3>{{ $product->nombre }}</h3><hr>
				<img src="{{ $product->imagen }}" width="200">
				<div class="product-info panel">
					<p>{{ $product->extracto }}</p>
					<h3><span class="label label-success">Precio: ${{ number_format($product->precio,2) }}</span></h3>
					<p>
						<a class="btn btn-warning" href="{{ route('carrito-add', $product->direccion) }}"><i class="fa fa-cart-plus"></i> Agregar Carrito De Compras
						<p></a>
						<a class="btn btn-info" href="{{ route('product-detail', $product->direccion) }}"><i class="fa fa-chevron-circle-right"></i> Ver Descripcion De Producto</a>
					</p>
					</p>
				</div>
			</div>
		@endforeach
	</div>
</div>
@stop
