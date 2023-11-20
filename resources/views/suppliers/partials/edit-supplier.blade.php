<x-app-layout>
    <div classes="h-auto w-80 bg-white rounded-xl">
        <div class="py-4 bg-three-50">
            <p class="text-xl text-bold text-gray-100 text-center ">Agregar usuario</p>
        </div>
        <form method="POST" action="{{ route('suppliers.update', $supplier) }}" class="w-full p-5 flex flex-col gap-y-6">
            @csrf @method('PUT')
            <input name="name" value="{{ $supplier->name }}" placeholder="Nombre" class="h-18 w-full py-4 px-3 border-2 border-gray-300 rounded-xl " >
            <input name="email" value="{{ $supplier->email }}" placeholder="Email" class="h-18 w-full py-4 px-3 border-2 border-gray-300 rounded-xl " >
            <input name="telefono" value="{{ $supplier->telefono }}" placeholder="Telefono" class="h-18 w-full py-4 px-3 border-2 border-gray-300 rounded-xl " >
            <button class="h-12 rounded-xl text-gray-200 bg-blue-600">Guardar</button>
        </form>
    </div>
</x-app-layout>