<x-app-layout>
<x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
        Gestion de Stock
    </h2>
    <div class="flex flex-wrap px-8 -mx-2 overflow-hidden lg:px-0 sm:px-0 xl:px-0">
        <div class="flex px-2 my-2 overflow-hidden">
            <a href="{{route('products.index')}}">Menu Principal</a>
        </div>
        <div class="flex px-2 my-2 overflow-hidden">
            <a href="{{route('products.create')}}">Agregar Producto</a>
        </div>
    </div>
</x-slot>
{!! Form::open(['route' => 'products.show']) !!}
        <x-jet-validation-errors class="mb-4"/>
        
        {{Form::select('producto', ['0' => 'Seleccione producto','1' => 'Poducto 1', '2' => 'Poducto 2',
            '3' => 'Poducto 3', '4' => 'Poducto 4', '5' => 'Poducto 5'])}}

        {{Form::select('size', ['0' => 'Seleccione Sucursal','1' => 'Sucursal 1', '2' => 'Sucursal 2',
            '3' => 'Sucursal 3', '4' => 'Sucursal 4', '5' => 'Sucursal 5'])}}
        
        {{Form::submit('Guardar Cambios',
            ['style' => 'width:100px; border:3px solid purple; background-color:#2a2a2e; color:white;'])}}

    {!! Form::close() !!}
</x-app-layout>