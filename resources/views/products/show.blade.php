<x-app-layout>
<x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
        Mostrar
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


    <table align="center" style="background-color: #d1c4e9; width:400px;
         height:480px; border-radius:20px; box-shadow:15px 15px 10px #555555;">
        <thead style="background-color: #673ab7; color: #c3c2c2;">
            <tr>
                <th colspan="2" align="center"> Formulario para mostrar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td align="center">
                    {{Form::label('nombre', 'Nombre:')}}
                </td>
                <td>
                    {{Form::label('nombre', $nombre )}}
                </td>
            
            <tr>
                <td align="center">
                    {{Form::label('codigo', 'Codigo:')}}
                </td>
                <td>
                    {{Form::label('codigo', $codigo )}}
                </td>
            </tr>
            
            <tr>
                <td align="center">
                    {{Form::label('pVenta', 'Precio Venta:')}}
                </td>
                <td>
                    {{Form::label('pVenta', $precioventa)}}
                </td>
            </tr>
           
            <tr>
                <td align="center">
                    {{Form::label('cantidad', 'Cantidad:')}}
                </td>
                <td>
                    {{Form::label('cantidad', $cantidad)}}
                </td>
            </tr>
           
            <tr>
                <td align="center">
                    {{Form::label('descripcion', 'Descripcion:')}}
                </td>
                <td>
                    {{Form::label('descripcion', $descripcion)}}
                </td>
            </tr>
            <tr>
            <td align="center">
                    {{Form::label('sucursal', 'Sucursal :')}}
                </td>
                <td>
                    {{Form::label('sucursal', $sucursal)}}
                </td>
            </tr>
            
            <td align="center">
                    {{Form::label('categoria', 'Categoria :')}}
                </td>
                <td>
                    {{Form::label('categoria', $categoria)}}
                </td>
            </tr>
            
            

                 
            </tr>
        </tbody>
    </table>


</x-app-layout>