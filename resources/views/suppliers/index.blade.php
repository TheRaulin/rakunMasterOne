<x-app-layout>
    <div class="h-1.2/10 w-full flex justify-between items-center rounded-xl bg-text-50">
        <input class="mx-5 rounded-xl h-3/5 w-1/5" type="text" placeholder="Buscar cliente">
        <button class="bg-blue-600 h-3/5 w-1/10 mx-5 rounded-xl text-white" x-data="" x-on:click.prevent="$dispatch('open-modal', 'add-customer')" type="submit">Agregar</button>
    </div>
    <div class="flex-1 w-full rounded-xl bg-white overflow-hidden">
        <table class="w-full border border-collapse">
            <thead>
                <tr class="h-11 bg-gray-200">
                    <th class="w-1/5 border border-gray-500">ID</th>
                    <th class="w-1/5 border border-gray-500">Nombre</th>
                    <th class="w-1/5 border border-gray-500">Email</th>
                    <th class="w-1/5 border border-gray-500">Telefono</th>
                    <th class="w-1/5 border border-gray-500">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($suppliers as $supplier)
                <tr class="h-11">
                    <td class="w-1/5 text-center border border-gray-500">{{ $supplier->id}}</td>
                    <td class="w-1/5 text-center border border-gray-500">{{ $supplier->name }}</td>
                    <td class="w-1/5 text-center border border-gray-500">{{ $supplier->email }}</td>
                    <td class="w-1/5 text-center border border-gray-500">{{ $supplier->telefono }}</td>
                    <td class="w-1/5 text-center border border-gray-500">
                        <a class="text-white border-4 rounded-xl border-blue-500 bg-blue-500" href="{{ route('suppliers.edit', $supplier) }}">Editar</a>
                        <form class="inline" method="POST" action="{{ route('suppliers.destroy', $supplier) }}">
                            @csrf @method('DELETE')
                            <a class="text-white border-4 rounded-xl border-red-500 bg-red-600" href="{{ route('suppliers.edit', $supplier) }}" 
                               onclick="event.preventDefault();
                               this.closest('form').submit();" 
                             >Borrar</a>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table> 

    <div>
        @include('suppliers.partials.add-supplier')
</x-app-layout>