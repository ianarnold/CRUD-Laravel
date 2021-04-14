<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listagem de produtos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table-fixed">
                        <thead>
                          <tr>
                            <th class="w-1/4 px-4 py-2">ID</th>
                            <th class="w-1/4 px-4 py-2">NOME</th>
                            <th class="w-1/4 px-4 py-2">DESCRIÇÃO</th>
                            <th class="w-1/2 px-4 py-2">VALOR</th>
                            <th class="w-1/2 px-4 py-2">QUANTIDADE</th>
                            <th class="w-1/4 px-4 py-2">CÓDIGO DE BARRAS</th>
                            <th class="w-1/4 px-4 py-2">EDITAR</th>
                            <th class="w-1/4 px-4 py-2">APAGAR</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                          <tr>
                            <td class="border px-4 py-2">{{ $product->id }}</td>
                            <td class="border px-4 py-2">{{ $product->name }}</td>
                            <td class="border px-4 py-2">{{ $product->description }}</td>
                            <td class="border px-4 py-2">{{ $product->value }}</td>
                            <td class="border px-4 py-2">{{ $product->quantity }}</td>
                            <td class="border px-4 py-2">{{ $product->bar_code }}</td>
                            <td class="border px-2 py-2"><a href="{{ route('editProductView', ['product' => $product->id]) }}">Editar</a></td>
                            <td class="border px-2 py-2"><a href="{{ route('deleteProduct', ['id' => $product->id]) }}">Apagar</a></td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
