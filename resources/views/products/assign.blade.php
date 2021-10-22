<x-app-layout>
<x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
        Asignar Productos
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
{!! Form::open(['route' => ['products.update', 2], 'method'=>'put']) !!}
        <x-jet-validation-errors class="mb-4"/>
        {{Form::select('producto', ['1' => 'Poducto 1', '2' => 'Poducto 2',
            '3' => 'Poducto 3', '4' => 'Poducto 4', '5' => 'Poducto 5'],
                                    null, ['placeholder' => 'Selecciona Producto'])}}

        {{Form::select('sucursal', ['1' => 'Sucursal Victoria', '2' => 'Sucursal Temuco',
            '3' => 'Sucursal Cañete', '4' => 'Sucursal Valdivia', '5' => 'Sucursal Villarrica'],
                                    null, ['placeholder' => 'Selecciona Sucursal'])}}
        
        {{Form::submit('Guardar Cambios',
            ['style' => 'width:100px; border:3px solid purple; background-color:#2a2a2e; color:white;'])}}

    {!! Form::close() !!}
</x-app-layout>