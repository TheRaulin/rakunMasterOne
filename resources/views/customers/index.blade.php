<x-app-layout>
    <div class="h-1.2/10 w-full flex justify-between items-center rounded-xl bg-text-50">
        <input class="mx-5 rounded-xl h-3/5 w-1/5" type="text" placeholder="Buscar cliente">
        <button class="bg-blue-600 h-3/5 w-1/10 mx-5 rounded-xl text-white" x-data="" x-on:click.prevent="$dispatch('open-modal', 'add-customer')" type="submit">Agregar cliente</button>
    </div>
    <div class="flex-1 w-full rounded-xl bg-white">
        
    
        @include('customers.partials.add-customer')
    <div>

</x-app-layout>