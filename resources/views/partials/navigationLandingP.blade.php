<header>
      <nav class=" wrapper h-20  flex bg-green-400">
        <h1 class="h-12 text-white">Rakun<span class="h-8 text-slate-700">Master</span></h1>

        <input type="checkbox" name="" id="menu" />
        <label for="menu">Activa/Desactiva</label>

        <div class="fixed inset-0 bg-gradient-to-b from-white/70 to-black/70 ">
         
          <ul class="absolute inset-x-0 top-24 p-12 bg-white 
          w-[90%] mx-auto rounded-md max-h-max text-center grid gap-6">
           
            <li><a href=" {{ route ('welcome') }}">Inicio</a></li>
           <li><a href=" {{ route ('about') }}">Acerca de</a></li>
           <li><a href=" {{ route ('contact') }}">Contacto</a></li>
           
          </ul>
         <!--<button class="absolute flex-col inset-x-0 top-24 p-12 bg-slate-700
          w-[90%] mx-auto rounded-md max-h-max text-center grid gap-6bg-slate-700 ">Comenzar</button>  --> 
        </div>   




        <a href="{{ route ('login') }}" class="">Comenzar</a>
        @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
        
       
       
        @if (Route::has('register'))
        <a href="{{ route ('register') }}">registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif
      
    </nav>
    </header>