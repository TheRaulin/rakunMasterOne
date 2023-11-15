<x-app-layout>
    <div class="h-1.2/10 w-full flex justify-between items-center rounded-xl bg-text-50">
        <input class="mx-5 rounded-xl h-3/5 w-1/5" type="text" placeholder="Buscar cliente">
        <button class="bg-blue-600 h-3/5 w-1/10 mx-5 rounded-xl text-white" x-data="" x-on:click.prevent="$dispatch('open-modal', 'add-customer')" type="submit">Agregar cliente</button>
    </div>
    <div class="flex-1 w-full rounded-xl bg-text-50">
        <table class="w-2/3 border border-collapse">
            <thead>
                <tr>
                    <th class="w-1/5 border border-gray-500">ID</th>
                    <th class="w-1/5 border border-gray-500">Nombre</th>
                    <th class="w-1/5 border border-gray-500">Email</th>
                    <th class="w-1/5 border border-gray-500">Telefono</th>
                    <th class="w-1/5 border border-gray-500">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                <tr>
                    <td class="w-1/5 border border-gray-500">{{ $customer->id}}</td>
                    <td class="w-1/5 border border-gray-500">{{ $customer->name }}</td>
                    <td class="w-1/5 border border-gray-500">{{ $customer->email }}</td>
                    <td class="w-1/5 border border-gray-500">{{ $customer->telefono }}</td>
                    <td>
                        <a class="bg-blue-600" href="{{ route('customers.edit', $customer) }}">Edit</a>
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    <div>

    @include('customers.partials.add-customer')

</x-app-layout>