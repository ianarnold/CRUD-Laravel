<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro de pessoas') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex items-center min-h-screen bg-gray-50 dark:bg-gray-900">
                        <div class="container mx-auto">
                            <div class="max-w-md mx-auto my-10 bg-white p-5 rounded-md shadow-sm">
                                <div class="text-center">
                                    <h1 class="my-3 text-3xl font-semibold text-gray-700 dark:text-gray-200">Cadastro de pessoas</h1>
                                    <p class="text-gray-400 dark:text-gray-400">Cadastre quantas pessoas quiser</p>
                                </div>
                                <div class="m-7">
                                    @if ($errors->any())
                                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                                        <strong>Whoops!</strong>
                                        Tem alguns problemas com seu cadastro<br>
                                            <br>
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <br>
                                            @endif
                                            <form action="{{route('registerPeople')}}" method="POST" id="form">
                                                @csrf
                                                <div class="mb-6">
                                                    <label for="name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Nome completo</label>
                                                    <input
                                                        type="text"
                                                        name="name"
                                                        id="name"
                                                        placeholder="Digite o nome"
                                                        required="required"
                                                        class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"/>
                                                </div>
                                                <div class="mb-6">
                                                    <label for="cpf" class="text-sm text-gray-600 dark:text-gray-400">CPF</label>
                                                    <input
                                                        type="number"
                                                        name="cpf"
                                                        id="cpf"
                                                        placeholder="Digite o CPF"
                                                        required="required"
                                                        class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"/>
                                                </div>
                                                <div class="mb-6">
                                                    <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Endereço de email</label>
                                                    <input
                                                        type="email"
                                                        name="email"
                                                        id="email"
                                                        placeholder="Digite o email"
                                                        required="required"
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
                                                        placeholder="Digite o endereço"
                                                        required="required"
                                                        class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"/>
                                                </div>
                                                <div class="mb-6">
                                                    <label for="age" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Idade</label>
                                                    <input
                                                        type="number"
                                                        name="age"
                                                        id="age"
                                                        placeholder="Digite a idade"
                                                        required="required"
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