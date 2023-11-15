<x-modal name="add-customer" :show="$errors->userDeletion->isNotEmpty()" focusable>
    <x-content-modal classes="h-auto w-80 bg-white rounded-xl">
        <div class="py-4 bg-three-50">
            <p class="text-xl text-bold text-gray-100 text-center ">Agregar usuario</p>
        </div>
        <form method="POST" action="{{ route('customers.store') }}" class="w-full p-5 flex flex-col gap-y-6">
            @csrf
            <x-input-form placeholder="Nombre" name="name"/>
            <x-input-form placeholder="Email" name="email"/>
            <x-input-form placeholder="Telefono" name="telefono"/>
            <button class="h-12 rounded-xl text-gray-200 bg-blue-600" type="submit">Guardar</button>
        </form>
    </x-content-modal>
</x-modal>