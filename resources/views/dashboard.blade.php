<x-app-layout>
    <x-slot name="header">
        
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Bienvenido rey  
        </h2>
        <div class="flex flex-wrap px-8 -mx-2 overflow-hidden lg:px-0 sm:px-0 xl:px-0">
            <div class="flex px-2 my-2 overflow-hidden">
                <a href="{{route('products.index')}}">Ingresa aqui al Menu Principal  🡫</a>
            </div>
           
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
