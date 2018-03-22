@extends('store.template')

@section('content')
	<div class="container text-center">

		<div class="page-header">
		  <h1><i class="fa fa-user"></i> Registrarse</h1>
		</div>
		@include('store.partials.errors')

		<div class="row">
			<div class="col-md-4">
				<div class="page">


					<form method="POST" action="/auth/register">
					    {!! csrf_field() !!}
							<div class="form-group">
					        <label for="identificacion">Identificacion</label>
					        <input class="form-control" type="text" name="identificacion" value="{{ old('identificacion') }}">
					    </div>

					    <div class="form-group">
					        <label for="nombre">Nombre Y Apellido</label>
					        <input class="form-control" type="text" name="nombre" value="{{ old('nombre') }}">
					    </div>
							<div class="form-group">
					        <label for="telefonor">Telefono Residencia</label>
					        <input class="form-control" type="text" name="telefonor" value="{{ old('telefonor') }}">
					    </div>
							<div class="form-group">
					        <label for="telefonoc">Telefono Celular</label>
					        <input class="form-control" type="text" name="telefonoc" value="{{ old('telefonoc') }}">
					    </div>
							<div class="form-group">
					        <label for="direccionr">Direccion Residencia</label>
					        <input class="form-control" type="text" name="direccionr" value="{{ old('direccionr') }}">

					    </div> </div> </div>

						<div class="row">
							<div class="col-md-4">
								<div class="page">
									<div class="form-group">
													<label for="ciudad">Ciudad</label>
													<input class="form-control" type="text" name="ciudad" value="{{ old('ciudad') }}">
										</div>
						<div class="form-group">
								<label for="departamento">Departamento</label>
								<input class="form-control" type="text" name="departamento" value="{{ old('departamento') }}">
						</div>
						<div class="form-group">
								<label for="pais">Pais</label>
								<input class="form-control" type="text" name="pais" value="{{ old('pais') }}">
						</div>
						<div class="form-group">
								<label for="profesion">Profesion</label>
								<input class="form-control" type="text" name="profesion" value="{{ old('profesion') }}">
						</div>

						<div class="form-group">
								<label for="email">Correo</label>
								<input class="form-control" type="email" name="email" value="{{ old('email') }}">
						</div>




						</div>

					 </div>
					 <div class="row">
	 					<div class="col-md-4">
	 						<div class="page">
								<div class="form-group">
										<label for="user">Usuario</label>
										<input class="form-control" type="text" name="user" value="{{ old('user') }}">
								</div>

								<div class="form-group">
										<label for="password">Password</label>
										<input class="form-control" type="password" name="password">
								</div>
	 							<div class="form-group">
	 									<label for="adrress">Dirección</label>
	 									<textarea class="form-control" name="address">{{ old('address') }}</textarea>
	 							</div>					
	 							<div class="form-group">
	 									<button class="btn btn-primary" type="submit">Crear cuenta</button>
	 								</div>


								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
</form>
@stop
