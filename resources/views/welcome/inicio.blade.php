<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class=""> <!--h-screen w.screen-->
       <header class=""> <!--h-1/10 w-full bg-red-500-->
            @include('welcome.partials.nav-landing')


            <section class="wrapper grid gap-8 justify-items-center items-center pb-12
       md:grid-cols-2 py-14 md:py-24 md:px-9 min-[855px]:px-0"> <!--md:px-11  y min-[855px]:px-0 
       para evitar rompimiento del hero-text-->

           <!-- <img src="../images/illustration-intro.svg" alt="ilustración"
             class="w-full max-w-lg md:order-1">-->

            <article class="text-center space-y-6
            md:text-left md:space-y-8">
                
                <h1 class="text-4xl font-bold text-Very-Dark-Blue md:text-6xl">Organice su <span class="text-violet-900"> stock</span>
                 fácil, rápido, seguro con <span class="text-violet-900"> RakunMaster</span></h1>
               
                <p class="text-gray-800">RakunMaster, programa de gestión de stocks, puede transformar su negocio al optimizar 
                    inventarios y gestionar sus cuentas de manera eficiente, impulsando asi un crecimiento significativo.</p>
               
                    <a href="#" class="button-login mx-auto shadow-xl shadow-orange-500/30">Login</a>

            </article>


        </section>

        </header>

      

       
       <!-- <main class="h-9/10 w-full">

           <h1>
                inicio
            </h1>

            <h2>
                contact
            </h2>-->


                <!-- Probando situar el login button en otro sitio -->
          <!--  <x-primary-button class="ms-3 ">
                {{ __('Log in') }}
           
         </x-primary-button>-->
           
         
        <!--Probando situar el login en la homepage o landingpage--> 
        


        </main>
    </body>
</html>