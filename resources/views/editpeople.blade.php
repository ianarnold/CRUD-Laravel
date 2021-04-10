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
                                        <th class="w-1/4 px-4 py-2">CPF</th>
                                        <th class="w-1/2 px-4 py-2">EMAIL</th>
                                        <th class="w-1/2 px-4 py-2">ENDEREÇO</th>
                                        <th class="w-1/4 px-4 py-2">IDADE</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td class="border px-4 py-2">{{ $people->id }}</td>
                                        <td class="border px-4 py-2">{{ $people->name }}</td>
                                        <td class="border px-4 py-2">{{ $people->cpf }}</td>
                                        <td class="border px-4 py-2">{{ $people->email }}</td>
                                        <td class="border px-4 py-2">{{ $people->address }}</td>
                                        <td class="border px-4 py-2">{{ $people->age }}</td>
                                      </tr>
                                    </tbody>
                                  </table>
                            </div>
                            <div class="max-w-md mx-auto my-10 bg-white p-5 rounded-md shadow-sm">
                                <div class="text-center">
                                    <h1 class="my-3 text-3xl font-semibold text-gray-700 dark:text-gray-200">Edição de pessoas cadastradas</h1>
                                    <p class="text-gray-400 dark:text-gray-400">Edite o usuário de acordo com suas vontades</p>
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
                                            <form action="{{ route('editPeople',  ['people' => $people->id]) }}" method="POST" id="form">
                                                @csrf
                                                @method('PUT')
                                                <div class="mb-6">
                                                    <label for="name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Nome completo</label>
                                                    <input
                                                        type="text"
                                                        name="name"
                                                        id="name"
                                                        value="{{$people->name}}"
                                                        placeholder="Digite o novo nome"
                                                        required="required"
                                                        class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"/>
                                                </div>
                                                <div class="mb-6">
                                                    <label for="cpf" class="text-sm text-gray-600 dark:text-gray-400">CPF</label>
                                                    <input
                                                        type="number"
                                                        name="cpf"
                                                        id="cpf"
                                                        placeholder="Digite o novo CPF"
                                                        value="{{$people->cpf}}"
                                                        disabled=""
                                                        class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"/>
                                                </div>
                                                <div class="mb-6">
                                                    <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Endereço de email</label>
                                                    <input
                                                        type="email"
                                                        name="email"
                                                        id="email"
                                                        placeholder="Digite o novo email"
                                                        required="required"
                                                        value="{{$people->email}}"
                                                        class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"/>
                                                </div>
                                                <div class="mb-6">
                                                    <label
                                                        for="address"
                                                        class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Endereço completo</label>
                                                    <input
                                                        type="text"
                                                        name="address"
                                                        id="address"
                                                        placeholder="Digite o novo endereço"
                                                        required="required"
                                                        value="{{$people->address}}"
                                                        class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"/>
                                                </div>
                                                <div class="mb-6">
                                                    <label for="age" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Idade</label>
                                                    <input
                                                        type="number"
                                                        name="age"
                                                        id="age"
                                                        placeholder="Digite a nova idade"
                                                        required="required"
                                                        value="{{$people->age}}"
                                                        class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"/>
                                                </div>
                                                <div class="mb-6">
                                                    <button
                                                        type="submit"
                                                        class="w-full px-3 py-4 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none">Cadastrar pessoa</button>
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
