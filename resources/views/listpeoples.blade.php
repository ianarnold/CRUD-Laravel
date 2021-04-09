<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listagem de pessoas') }}
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
                            <th class="w-1/4 px-4 py-2">CPF</th>
                            <th class="w-1/2 px-4 py-2">EMAIL</th>
                            <th class="w-1/2 px-4 py-2">ENDEREÇO</th>
                            <th class="w-1/4 px-4 py-2">IDADE</th>
                            <th class="w-1/4 px-4 py-2">EDITAR</th>
                            <th class="w-1/4 px-4 py-2">APAGAR</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($peoples as $people)
                          <tr>
                            <td class="border px-4 py-2">{{ $people->id }}</td>
                            <td class="border px-4 py-2">{{ $people->name }}</td>
                            <td class="border px-4 py-2">{{ $people->cpf }}</td>
                            <td class="border px-4 py-2">{{ $people->email }}</td>
                            <td class="border px-4 py-2">{{ $people->address }}</td>
                            <td class="border px-4 py-2">{{ $people->age }}</td>
                            <td class="border px-2 py-2"><a href="{{ route('editPeopleView', ['id' => $people->id]) }}">Editar</a></td>
                            <td class="border px-2 py-2"><a href="{{ route('deletePeople', ['id' => $people->id]) }}">Apagar</a></td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
