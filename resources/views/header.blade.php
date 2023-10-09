
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>


     

<header>
    <div class="header-left">
        <div class="logo">
            <img  src="{{ asset('Img/1.png') }}" alt="Example Image">
        </div>
        <nav>
            <ul>
                <li>
                    <a  href="{{ url('/') }}" class="active">prinsipal</a>
                </li>


                
                <li class="">



               @if (Route::has('login'))
                    
                    <a 
                    @auth
                    href="{{ url('/appointmentsA') }}"
                    @else
                    href="{{ url('/login') }}"
                    @endauth
                    @endif
                    >Rendez-vous</a>
                    




                </li>


                {{-- @if (Route::has('login'))
                <li class="">
                    @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-success">Dashboard</a>
                </li>
                @else
                <li class="">
                    <a href="{{ route('login') }}"   class="">LogIn</a>
                </li>
                @if (Route::has('register'))
                <li>
                    <a href="{{ route('register') }}" type="button" class="btn btn-success">Register</a>
                </li>
                @endif
                @endauth
                @endif
                 --}}



{{--                 
                <li>
                @else
                <li class="">
                    <a href="{{ route('login') }}"   class="">LogIn</a>
                </li> --}}
                 {{-- @if (Route::has('register'))
                <li>
                    <a href="{{ route('register') }}" type="button" class="btn btn-success">Register</a>
                </li>
                @endif --    --}}
                {{-- @endauth
                @endif --}}










                {{-- <li>
                    <a href="{{ url('/appointments') }}">Rendez-vous</a>
                </li>

 --}}









               

                @if (Route::has('login'))
                <li class="">
                    @auth












                    {{-- <a href="{{ url('/dashboard') }}" class="btn btn-success">Dashboard</a> --}}
                    <div class="">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="inline-flex items-center px-3 py-2  text-sm leading-4 font-medium rounded-md text-white-500 white:text-white-400 bg-success dark:bg-white-800 hover:text-white-700 white:hover:text-white-300 focus:outline-none transition ease-in-out duration-150">
                                    {{-- <div>{{ Auth::user()->name }}</div> --}}
                                    <div>Dashboard</div>
        
                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>
        
        
        
                            {{-- hadihia  ------------------------ --}}
        
                            <x-slot name="content">
                                <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>
        
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
        
                                    <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>















                </li>
                @else
                <li class="">
                    <a href="{{ route('login') }}"   class="">LogIn</a>
                </li>
                @if (Route::has('register'))
                <li>
                    <a href="{{ route('register') }}" type="button" class="btn btn-success">Register</a>
                </li>
                @endif
                @endauth
                @endif
                

                {{-- <li>
                    <a href="">
                        @if (Route::has('login'))
                        <div  class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10"
                        >
                            @auth
                                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
        
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                    </a>
                </li> --}}
            </ul>
            {{-- <div class="login-signup">
                <a href="">Login</a> or <a href="">Signup</a>
            </div> --}}
        </nav>
    </div>
    <div class="header-right">
        {{-- <div class="login-signup">
            <a href="">Login</a> or <a href="">Signup</a>
        </div> --}}
        <div class="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>








    {{-- ------------ --}}
    <nav x-data="{ open: false }" class="">
        <!-- Primary Navigation Menu -->
        {{-- <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16"> --}}
                {{-- <div class="flex">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('dashboard') }}">
                            <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                        </a>
                    </div>
    
                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                    </div>
                </div> --}}
    
                <!-- Settings Dropdown -->




                {{-- <div class="">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2  text-sm leading-4 font-medium rounded-md text-white-500 white:text-white-400 bg-success dark:bg-white-800 hover:text-white-700 white:hover:text-white-300 focus:outline-none transition ease-in-out duration-150">
                               
                                <div>Dashboard</div>
    
                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>
    
    
    
    
                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>
    
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
    
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div> --}}
    
                <!-- Hamburger -->
                {{-- <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div> --}}
            {{-- </div>
        </div> --}}
    
        <!-- Responsive Navigation Menu -->
        {{-- <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>
            </div>
    
            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
    
                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>
    
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
    
                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        </div> --}}
    </nav>
    































</header>











<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        text-decoration: none;
        list-style: none;
        font-family: "ubuntu";
        
    }
    img {
        width: 80%;
    }
 
    header{
        height: 70px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 50px;
        background:#0081C9;
        width: 100%;
        /* position:sticky; */
        /* top: -150px; */
        /* z-index: 100; */
        
    }
    header .header-left {
        display: flex;
        align-items: center;
        width: 100%;
    }
    header .header-left .logo {
        width: 140px;
    }
    header .header-left nav {
       margin-left: 60%;
    }
    header .header-left nav ul {
        display: flex;
         justify-content:left;
         margin-top: 3%;
         list-style-type: none;
    
    }
    nav ul li a {
        display: block;
        color: #cfd9e0;
        font-size: 18px;
        padding: 5px 10px;
        transition: 0.2s;
        text-decoration: none
    }
    nav ul li a:hover,
    nav ul li a.active {
        color: #000000;
    }
    nav .login-signup {
        display: none;
    }
    /* header .header-right {
        display: flex;
        align-items: center;
    } */
    /* header .login-signup {
        color: #cfd9e0;
        font-weight: bold;
    } */
    /* header .login-signup a {
        display: inline-block;
        color: #0b2239;
        background: #4ad295;
        padding: 5px 12px;
        border-radius: 5px;
    } */
    header .hamburger {
        margin-left: 20px;
        cursor: pointer;
        display: none;
    }
    header .hamburger div {
        width: 30px;
        height: 2px;
        margin: 6px 0;
        background: #fff;
    }
    @media only screen and (max-width: 1000px) {
        header {
            padding: 0 20px;
        }
        header .header-right .hamburger {
            display: block;
        }
        header .header-left nav {
            margin: 0;
            position: absolute;
            top: -100%;
            left: 0;
            width: 100%;
            height: fit-content;
            background-color: #0081C9;
            padding: 30px;
            transition: 0.3s;
            text-align: center;
            z-index: -1;
        }
        header .header-left nav.active {
            top: 70px;
        }
        header .header-left nav ul {
            display: block;
        }
    }
    @media only screen and (max-width: 500px) {
        nav .login-signup {
            display: block;
            margin-top: 20px;
        }
        header .header-right .login-signup {
            display: none;
        }
    }
    
    
    
    
    
    
    
    
    
    
    </style>





</body>
</html>
