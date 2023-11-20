<x-modal-absolute name="add-customer" :show="$errors->userDeletion->isNotEmpty()" focusable>
    <x-content-modal classes="h-full w-full flex flex-col">
        <div class="h-1/10 w-full flex justify-between flex-row p-5 bg-gray-200">
            <p class="mx-3 text-xl font-bold">Crear un proveedor</p>
            <button class="mx-3 hover:bg-white rounded-md" x-on:click="show = false">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>                                   
            </button>
        </div>
        <div class="flex justify-center items-center flex-1">
            <div class="h-auto w-80 bg-white border-2 border-gray-200 overflow-hidden rounded-xl">
                <div class="py-4 bg-gray-200">
                    <p class="text-xl font-bold text-black text-center ">Proveedor</p>
                </div>
                <form method="POST" action="{{ route('suppliers.store') }}" class="w-full p-5 flex flex-col gap-y-6">
                    @csrf
                    <input name="name" placeholder="Nombre" class="h-18 w-full py-4 px-3 border-2 border-gray-300 rounded-xl " >
                    <input name="email" placeholder="Email" class="h-18 w-full py-4 px-3 border-2 border-gray-300 rounded-xl " >
                    <input name="telefono" placeholder="Telefono" class="h-18 w-full py-4 px-3 border-2 border-gray-300 rounded-xl " >
                    <button class="h-12 rounded-xl text-gray-200 bg-blue-600" type="submit">Guardar</button>
                </form>
            </div>
        </div>
    </x-content-modal>
</x-modal-absolute>