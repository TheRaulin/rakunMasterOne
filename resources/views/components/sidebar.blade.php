<div class="flex flex-col">
    <x-sidebar-link :href="route('dashboard')" :active="request()->is('dashboard*')">
      {{ __('Dashboard') }}
    </x-sidebar-link>
    <x-sidebar-link :href="route('customer')" :active="request()->is('customer*')">
      {{ __('Customers') }}
    </x-sidebar-link>
</div>