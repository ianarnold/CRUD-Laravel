<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro de pessoas e produtos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-center">
                        <div class="pr-10">
                        <h2 class="font-semibold text-xl text-gray-600 leading-tight">
                            {{ __('Cadastro de pessoas') }}
                        </h2>
                        <a href="{{route('listPeopleView')}}"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Listagem de pessoas
                        </button>
                        </a>
                        </div>
                        
                        <div>
                        <h2 class="font-semibold text-xl text-gray-600 leading-tight">
                            {{ __('Cadastro de produtos') }}
                        </h2>
                        <a href="{{route('listProductView')}}"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Listagem de produtos
                        </button>
                        </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
