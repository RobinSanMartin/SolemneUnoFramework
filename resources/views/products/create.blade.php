<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Agregar Producto
        </h2>
        <div class="flex flex-wrap px-8 -mx-2 overflow-hidden lg:px-0 sm:px-0 xl:px-0">
            <div class="flex px-2 my-2 overflow-hidden">
                <a href="{{route('products.index')}}">Menu Principal</a>
            </div>
            <div class="flex px-2 my-2 overflow-hidden">
                <a href="{{route('product.assign.view')}}">Asignar Sucursal</a>
            </div>
        </div>
    </x-slot>
    {!! Form::open(['route' => 'products.store']) !!}
    <table align="center" style="background-color: #d1c4e9; width:400px;
         height:480px; border-radius:20px; box-shadow:15px 15px 10px #555555;">
        <thead style="background-color: #673ab7; color: #c3c2c2;">
            <tr>
                <th colspan="2" align="center"> Formulario de Registro</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td align="center">
                    {{Form::label('nombre', 'Nombre:')}}
                </td>
                <td>
                    {{Form::text('nombre', null,)}}
                </td>
            <tr>
                <td colspan="2" align="center">
                    @error('nombre') <span style="color:red">{{$errors->first('nombre')}}</span> @enderror
                </td>
            </tr>
            <tr>
                <td align="center">
                    {{Form::label('codigo', 'Codigo:')}}
                </td>
                <td>
                    {{Form::text('codigo')}}
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    @error('codigo') <span style="color:red">{{$errors->first('codigo')}}</span> @enderror
                </td>
            </tr>
            <tr>
                <td align="center">
                    {{Form::label('pVenta', 'Precio Venta:')}}
                </td>
                <td>
                    {{Form::text('pVenta')}}
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    @error('pVenta') <span style="color:red">{{$errors->first('pVenta')}}</span> @enderror
                </td>
            </tr>
            <tr>
                <td align="center">
                    {{Form::label('cantidad', 'Cantidad:')}}
                </td>
                <td>
                    {{Form::text('cantidad')}}
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    @error('cantidad') <span style="color:red">{{$errors->first('cantidad')}}</span> @enderror
                </td>
            </tr>
            <tr>
                <td align="center">
                    {{Form::label('descripcion', 'Descripcion:')}}
                </td>
                <td>
                    {{Form::text('descripcion')}}
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    {{Form::select('sucursal', ['1' => 'Sucursal Victoria', '2' => 'Sucursal Temuco',
                                '3' => 'Sucursal Cañete', '4' => 'Sucursal Valdivia', '5' => 'Sucursal Villarrica'],
                                null, ['placeholder' => 'Selecciona Sucursal'])}}
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    @error('sucursal') <span style="color:red">{{$errors->first('sucursal')}}</span> @enderror
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    {{Form::select('categoria', ['1' => 'Categoria 1', '2' => 'Categoria 2',
                                    '3' => 'Categoria 3', '4' => 'Categoria 4', '5' => 'Categoria 5'],
                                    null, ['placeholder' => 'Selecciona Categoria'])}}
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    @error('categoria') <span style="color:red">{{$errors->first('categoria')}}</span> @enderror
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    {{Form::submit('Agregar',
                                        ['style' => 'width:100px; border:3px solid purple; background-color:#2a2a2e; color:white;'])}}
                </td>
            </tr>

            {!! Form::close() !!}
            </tr>
        </tbody>
    </table>
    <!-- <x-jet-validation-errors/> -->
</x-app-layout>