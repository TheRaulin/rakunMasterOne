<aside x-data="{ open: false }" class="dark:bg-primary-50 h-9.7/10 w-9.2/10 p-0.7/10 rounded-xl flex flex-col">
    <div class="h-0.8/10 flex flex-row justify-center items-center">
        <h1 class="text-white mb-4">Rakun</h1>
        <span class="text-gray-400 mb-4">Master</span></div>
    <div class="bg-blue-300 h-1.2/10 rounded-xl bg-three-50 flex flex-col justify-center items-center">
        <p class="text-lg text-white">Federico Posada</p>
        <span class="text-sm text-white">Administrador</span>
    </div>
    <div class="flex justify-center items-center flex-col gap-y-0.05/10 flex-grow">
            <x-option-menu icon="bx bxs-dashboard" :href="route('dashboard')" :active="request()->is('dashboard*')" class="mt-4">
                {{ __('Dashboard') }}
            </x-option-menu> 
            <x-option-menu icon="bx bxs-wallet" :href="route('customers.index')" :active="request()->is('csto*')">
                {{ __('Sales') }}
            </x-option-menu> 
            <x-option-menu icon="bx bxs-cabinet" :href="route('dashboard')" :active="request()->is('dasoar*')">
                {{ __('Inventory') }}
            </x-option-menu> 
            <x-option-menu icon="bx bxs-user" :href="route('customers.index')" :active="request()->is('customers*')">
                {{ __('Customers') }}
            </x-option-menu> 
            <x-option-menu icon="bx bxs-truck" :href="route('dashboard')" :active="request()->is('dashord*')">
                {{ __('Suppliers') }}
            </x-option-menu> 

            <div class="w-full border-b-2 border-white flex-1"></div>

            <x-option-menu icon="bx bxs-message-detail" :href="route('dashboard')" :active="request()->is('dashbard*')">
                {{ __('support') }}
            </x-option-menu> 
            <x-option-menu icon="bx bxs-cog" :href="route('customers.index')" :active="request()->is('custoer*')">
                {{ __('Settings') }}
            </x-option-menu> 

            <div class="w-full border-b-2 border-white"></div>

            <form class="h-0.8/10 w-full flex justify-center items-center" method="POST" action="{{ route('logout') }}">
                @csrf
                <x-option-menu class="h-full" icon="bx bx-log-out" :href="route('logout')" :active="request()->is('dasboard*')" onclick="event.preventDefault(); this.closest('form').submit();">
                    {{ __('Log out') }}
                </x-option-menu> 
            </form>   
    </div>
</aside>