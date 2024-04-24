<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Event Master | The Ultimate Event Management Service Provider.">
    <meta name="keywords" content="event planning, event management services, corporate events, wedding planning, event coordination, event organization, event logistics, venue selection, event design, event production, event marketing, event consulting, party planning, conference management, trade show coordination, event scheduling, budget management for events, event technology solutions, event staffing, virtual events">
    <meta name="author" content="Event Master">
    <title>Event Master - Professional Event Planning Services</title>
    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="https://unpkg.com/sheryjs/dist/Shery.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" integrity="sha256-5uKiXEwbaQh9cgd2/5Vp6WmMnsUr3VZZw0a8rKnOKNU=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    <link rel="stylesheet" href="./assets/css/output.css">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
</head>

<body class="bg-[#EFFBFF]">
    <!-- Navbar -->
    <header class="relative py-5  overflow-hidden ">
        <nav class="relative py-6 bg-transparent pt-10">
            <div class="container px-4 mx-auto">
                <div class="flex items-center relative">
                    <a class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 inline-block text-lg font-bold" href="#">
                        <img id="logo" class="size-48 pt-4" src="./assets/img/logo.svg" alt="Event Master Logo">
                    </a>
                    <div class="lg:hidden ml-auto">
                        <button class="navbar-burger flex w-12 h-12 items-center justify-center bg-[#97AFB9] hover:bg-gray-200 rounded-md transition duration-200">
                            <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 12H21" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M3 6H21" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M3 18H21" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>
                    </div>
                    <ul class="hidden lg:flex lg:w-auto lg:space-x-12">
                        <li>
                            <a class=" inline-block text-base text-[#111827] hover:text-white transition duration-500 font-semibold tracking-tight" href="./index.php">Home</a>
                        </li>
                        <li><a class=" inline-block text-base text-[#111827] hover:text-white transition duration-500 font-semibold tracking-tight" href="./about.php">About</a></li>
                        <li>
                            <a class=" inline-block text-base text-[#111827] hover:text-white transition duration-500 font-semibold tracking-tight" href="./service.php">Service</a>
                        </li>
                        <li><a class=" inline-block text-base text-[#111827] hover:text-white transition duration-500 font-semibold tracking-tight" href="./gallery.php">Gallery</a></li>
                    </ul>
                    <div class="hidden lg:block ml-auto">
                        <div class="flex items-center">
                            <a class="relative group inline-block py-3 px-5 text-sm font-semibold text-black hover:text-white border border-gray-400 rounded-md overflow-hidden transition duration-300" href="./form.php?key=<?= password_hash('72615251727', PASSWORD_DEFAULT) ?>">
                                <div class="absolute top-0 right-full w-full h-full bg-[#97AFB9] transform group-hover:translate-x-full group-hover:scale-102 transition duration-500">
                                </div>
                                <span class="relative">Book Here</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- navMenu -->
        <div class="hidden navbar-menu fixed top-0 left-0 bottom-0 w-5/6 max-w-md z-50">
            <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
            <nav class="relative flex flex-col py-6 px-10 w-full h-full bg-[#97AFB9] border-r overflow-y-auto">
                <div class="flex items-center mb-16">
                    <a class="mr-auto text-2xl font-medium leading-none" href="./index.html">
                        <img class="h-40" src="./assets/img/logo.svg" alt="" width="auto">
                    </a>
                    <button class="navbar-close">
                        <svg class="h-6 w-6 text-gray-500 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div>
                    <ul class="mb-2">
                        <li><a class="block py-4 px-5 text-[#060318] hover:bg-orange-50 rounded-lg" href="./index.html">Home</a>
                        </li>
                        <li><a class="block py-4 px-5 text-[#060318] hover:bg-orange-50 rounded-lg" href="./about.html">About</a>
                        </li>
                        <li><a class="block py-4 px-5 text-[#060318] hover:bg-orange-50 rounded-lg" href="./service.html">Service</a>
                        </li>
                        <li><a class="block py-4 px-5 text-[#060318] hover:bg-orange-50 rounded-lg" href="./gallery.html">Gallery</a>
                        </li>
                    </ul>
                    <div class="py-8 px-6 mb-6 border-t border-b border-gray-200">
                        <span class="block mb-3 text-sm text-gray-500">Drop us a line</span>
                        <a class="flex items-center text-sm font-semibold text-orange-900 hover:text-orange-600" href="">
                            <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" id="Email">
                                <path fill="#d8a353" d="M53.42 52.82H10.58a8 8 0 0 1-8-8V19.18a8 8 0 0 1 8-8h42.84a8 8 0 0 1 8 8v25.64a8 8 0 0 1-8 8ZM10.58 13.18a6 6 0 0 0-6 6v25.64a6 6 0 0 0 6 6h42.84a6 6 0 0 0 6-6V19.18a6 6 0 0 0-6-6Z" class="color222222 svgShape"></path>
                                <path fill="#d8a353" d="M32 37.58A8 8 0 0 1 27.18 36L3.82 18.31A1 1 0 1 1 5 16.72l23.38 17.65a6 6 0 0 0 7.24 0L59 16.72a1 1 0 1 1 1.21 1.59L36.82 36A8 8 0 0 1 32 37.58Z" class="color222222 svgShape"></path>
                                <path fill="#d8a353" d="M4.17 48.64a1 1 0 0 1-.66-1.74L21.9 30.49A1 1 0 0 1 23.23 32L4.84 48.39a1 1 0 0 1-.67.25zm55.66 0a1 1 0 0 1-.67-.25L40.77 32a1 1 0 1 1 1.33-1.49L60.49 46.9a1 1 0 0 1 .08 1.41 1 1 0 0 1-.74.33z" class="color222222 svgShape"></path>
                            </svg>
                            <span class="ml-3">masterevents@hotmail.com</span>
                        </a>
                    </div>
                    <div class="flex px-6 mb-16 items-center">
                        <a class="inline-block mr-9 text-sm font-semibold text-orange-900 hover:text-[#060318]" href="#contact">Contact</a>
                        <a class="inline-block py-3 px-4 text-sm font-semibold text-orange-900 hover:text-white border border-gray-300 hover:border-orange-600 hover:bg-orange-900 rounded-md transition duration-200" href="./form.html">Book Here</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>