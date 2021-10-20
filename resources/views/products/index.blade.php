<x-app-layout>
<x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
        Gestion de Stock
    </h2>
    <div class="flex flex-wrap px-8 -mx-2 overflow-hidden lg:px-0 sm:px-0 xl:px-0">
        <div class="flex px-2 my-2 overflow-hidden">
            <a href="{{route('products.create')}}">Agregar Producto</a>
        </div>
        <div class="flex px-2 my-2 overflow-hidden">
            <a href="{{route('products.show',[1])}}">Asignar Sucursal</a>
        </div>
    </div>
</x-slot>
<br>
{!! Form::open(['route' => 'products.store']) !!}
        <x-jet-validation-errors class="mb-4"/>

        {{Form::label('nombre', 'Nombre:')}}
        {{Form::text('nombre', null,)}}

        {{Form::label('codigo', 'Codigo:')}}
        {{Form::text('codigo')}}

        {{Form::label('size', 'Sucursales:')}}
        {{Form::select('size', ['0' => 'Seleccione Sucursal','1' => 'Sucursal 1',
			 '2' => 'Sucursal 2', '3' => 'Sucursal 3', '4' => 'Sucursal 4', '5' => 'Sucursal 5'])}}
        
        {{Form::submit('Buscar',
            ['style' => 'width:100px; border:3px solid purple; background-color:#2a2a2e; color:white;'])}}

    {!! Form::close() !!}
	<br>
<link
	href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
	rel="stylesheet">
	<div class="col-span-12">
		<div class="overflow-auto lg:overflow-visible ">
			<table class="table text-gray-400 border-separate space-y-6 text-sm">
				<thead class="bg-gray-800 text-gray-500">
					<tr>
						<th class="p-6">Nombre</th>
						<th class="p-6">Categoría</th>
						<th class="p-6">Código</th>
						<th class="p-6">Sucursal</th>
						<th class="p-6">Cantidad</th>
						<th class="p-6">Precio Venta</th>
						<th class="p-6">Descripcion</th>
						<th class="p-6">Acciones</th>
					</tr>
				</thead>
				<tbody>
					<tr class="bg-gray-800">
						<td class="p-6" style="align-self: center;">Producto 1</td>
						<td class="p-6">
							Categoria 1
						</td>
						<td class="p-6">
							123-t
						</td>
						<td class="p-6">
							Sucursal 3
						</td>
						<td class="p-6">
							200 unidades
						</td>
						<td class="p-6 font-bold">
							200.00$
						</td>
						<td class="p-6">
							<span class="bg-green-400 text-gray-50 rounded-md px-2">Descripcion 1</span>
						</td>
						<td class="p-6">
							<a href="{{route('products.show',[1])}}" class="text-gray-400 hover:text-gray-100 mr-2">
								<i class="material-icons-outlined text-base">visibility</i>
							</a>
							<a href="{{route('products.edit',[1])}}" class="text-gray-400 hover:text-gray-100  mx-2">
								<i class="material-icons-outlined text-base">edit</i>
							</a>
							<a href="{{route('products.destroy',[1])}}" class="text-gray-400 hover:text-gray-100  ml-2">
								<i class="material-icons-round text-base">delete_outline</i>
							</a>
						</td>
					</tr>
					<tr class="bg-gray-800">
						<td class="p-6" style="align-self: center;">Producto 2</td>
						<td class="p-6">
							Categoria 2
						</td>
						<td class="p-6">
							321-t
						</td>
						<td class="p-6">
							Sucursal 2
						</td>
						<td class="p-6">
							100 unidades
						</td>
						<td class="p-6 font-bold">
							500.00$
						</td>
						<td class="p-6">
							<span class="bg-green-400 text-gray-50 rounded-md px-2">Descripcion 2</span>
						</td>
						<td class="p-6">
							<a href="{{route('products.show',[2])}}" class="text-gray-400 hover:text-gray-100 mr-2">
								<i class="material-icons-outlined text-base">visibility</i>
							</a>
							<a href="{{route('products.edit',[2])}}" class="text-gray-400 hover:text-gray-100  mx-2">
								<i class="material-icons-outlined text-base">edit</i>
							</a>
							<a href="{{route('products.destroy',[2])}}" class="text-gray-400 hover:text-gray-100  ml-2">
								<i class="material-icons-round text-base">delete_outline</i>
							</a>
						</td>
					</tr>
					<tr class="bg-gray-800">
						<td class="p-6" style="align-self: center;">Producto 3</td>
						<td class="p-6">
							Categoria 3
						</td>
						<td class="p-6">
							312-t
						</td>
						<td class="p-6">
							Sucursal 1
						</td>
						<td class="p-6">
							250 unidades
						</td>
						<td class="p-6 font-bold">
							60.00$
						</td>
						<td class="p-6">
							<span class="bg-green-400 text-gray-50 rounded-md px-2">Descripcion 3</span>
						</td>
						<td class="p-6">
							<a href="{{route('products.show',[3])}}" class="text-gray-400 hover:text-gray-100 mr-2">
								<i class="material-icons-outlined text-base">visibility</i>
							</a>
							<a href="{{route('products.edit',[3])}}" class="text-gray-400 hover:text-gray-100  mx-2">
								<i class="material-icons-outlined text-base">edit</i>
							</a>
							<a href="{{route('products.destroy',[3])}}" class="text-gray-400 hover:text-gray-100  ml-2">
								<i class="material-icons-round text-base">delete_outline</i>
							</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

<style>
	.table {
		border-spacing: 0 15px;
		border-radius: 4px;
	}

	i {
		font-size: 1rem !important;
	}

	.table tr {
		border-radius: 20px;
	}

	tr td:nth-child(n+5),
	tr th:nth-child(n+5) {
		border-radius: 0 .625rem .625rem 0;
	}

	tr td:nth-child(1),
	tr th:nth-child(1) {
		border-radius: .625rem 0 0 .625rem;
	}
</style>

</x-app-layout>