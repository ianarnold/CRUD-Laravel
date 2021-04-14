<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro de produtos') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex items-center min-h-screen bg-gray-50 dark:bg-gray-900">
                        <div class="container mx-auto">
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
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td class="border px-4 py-2">{{ $product->id }}</td>
                                        <td class="border px-4 py-2">{{ $product->name }}</td>
                                        <td class="border px-4 py-2">{{ $product->description }}</td>
                                        <td class="border px-4 py-2">{{ $product->value }}</td>
                                        <td class="border px-4 py-2">{{ $product->quantity }}</td>
                                        <td class="border px-4 py-2">{{ $product->bar_code }}</td>
                                      </tr>
                                    </tbody>
                                  </table>
                            </div>
                            <div class="max-w-md mx-auto my-10 bg-white p-5 rounded-md shadow-sm">
                                <div class="text-center">
                                    <h1 class="my-3 text-3xl font-semibold text-gray-700 dark:text-gray-200">Edição de produto</h1>
                                    <p class="text-gray-400 dark:text-gray-400">Edite o produto de acordo com suas vontades</p>
                                </div>
                                <div class="m-7">
                                    @if ($errors->any())
                                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                                        <strong>Whoops!</strong>
                                        Tem alguns problemas com sua edição<br>
                                            <br>
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <br>
                                            @endif
                                            <form action="{{ route('editProduct',  ['product' => $product->id]) }}" method="POST" id="form">
                                                @csrf
                                                @method('PUT')
                                                <div class="mb-6">
                                                    <label for="name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">NOME DO PRODUTO</label>
                                                    <input
                                                        type="text"
                                                        name="name"
                                                        id="name"
                                                        value="{{ $product->name }}"
                                                        placeholder="Digite o nome do produto"
                                                        required="required"
                                                        class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"/>
                                                </div>
                                                <div class="mb-6">
                                                    <label for="description" class="text-sm text-gray-600 dark:text-gray-400">DESCRIÇÃO</label>
                                                    <textarea
                                                        type="text"
                                                        name="description"
                                                        id="description"
                                                        placeholder="Digite a descrição do produto"
                                                        required="required"
                                                        value="{{ $product->description }}"
                                                        class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"></textarea>
                                                </div>
                                                <div class="mb-6">
                                                    <label for="value" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">VALOR DO PRODUTO</label>
                                                    <input
                                                        type="number"
                                                        name="value"
                                                        id="value"
                                                        placeholder="Digite o valor do produto"
                                                        value="{{ $product->value }}"
                                                        required="required"
                                                        class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"/>
                                                </div>
                                                <div class="mb-6">
                                                    <label for="quantity" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">QUANTIDADE DE PRODUTOS</label>
                                                    <input
                                                        type="number"
                                                        name="quantity"
                                                        id="quantity"
                                                        value="{{ $product->quantity }}"
                                                        placeholder="Digite a quantidade do produto"
                                                        required="required"
                                                        class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"/>
                                                </div>
                                                <div class="mb-6">
                                                    <label for="bar_code" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">CÓDIGO DE BARRAS</label>
                                                    <input
                                                        type="number"
                                                        disabled
                                                        name="bar_code"
                                                        id="bar_code"
                                                        value="{{ $product->bar_code }}"
                                                        placeholder="Digite o código de barras do produto"
                                                        class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"/>
                                                </div>
                                                <input type="hidden" id="user_id" name="user_id" value="{{Auth::user()->id}}"/>
                                                <div class="mb-6">
                                                    <button
                                                        type="submit"
                                                        class="w-full px-3 py-4 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none">Cadastrar produto</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </x-app-layout>