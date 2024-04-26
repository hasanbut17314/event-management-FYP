<?php 
session_start();
require "code/config.php";
$select_query = "SELECT * FROM booking";
$result = mysqli_query($con, $select_query);
?>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css">
    <link rel="stylesheet" href="./assets/css/output.css">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
</head>

<body class="bg-[#EFFBFF]">

    <!-- Hero -->
    <header class="relative pb-24 py-5 lg:pb-40 overflow-hidden ">
        <div class="hidden md:block absolute top-0 left-0 w-1/6 lg:w-2/6 h-full rounded-br-2xl bg-[#97AFB9]"></div>
        <!-- navbar -->
        <nav class="relative py-6 bg-transparent mb-12 md:mb-24 pt-10">
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
                        <?php
                            if(mysqli_num_rows($result) === 0) {
                            ?>
                            <a class="relative group inline-block py-3 px-5 text-sm font-semibold text-black hover:text-white border border-gray-400 rounded-md overflow-hidden transition duration-300" href="./form.php?key=<?= password_hash('72615251727', PASSWORD_DEFAULT) ?>">
                                <div class="absolute top-0 right-full w-full h-full bg-[#97AFB9] transform group-hover:translate-x-full group-hover:scale-102 transition duration-500">
                                </div>
                                <span class="relative">Book Here</span>
                            </a>
                            <?php
                            } else {
                            ?>
                            <a class="relative group inline-block py-3 px-5 text-sm font-semibold text-black hover:text-white border border-gray-400 rounded-md overflow-hidden transition duration-300" href="./bookingdetails.php">
                                <div class="absolute top-0 right-full w-full h-full bg-[#97AFB9] transform group-hover:translate-x-full group-hover:scale-102 transition duration-500">
                                </div>
                                <span class="relative">See Booking</span>
                            </a>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- hero_content -->
        <div class="relative container px-4 mx-auto z-20">
            <div class="max-w-7xl mx-auto">
                <div class="flex flex-wrap -mx-4 items-center">
                    <div class="w-full lg:w-2/5 px-4 mb-16 lg:mb-0">
                        <div class="relative max-w-lg lg:max-w-md mx-auto lg:mx-0">
                            <img id="hero-image" class="rounded-xl" src="./assets/img/event/image1.webp" alt="Wedding Event with Pink Flowers and Curtains">
                            <div class="absolute bottom-0 left-0 p-7">
                                <div class="p-6 bg-white rounded-2xl" id="hero-image-content">
                                    <div>
                                        <span class="text-3xl sm:text-5xl font-semibold text-[#30383B]">18k+</span>
                                        <span class="block text-sm text-gray-500">Events Done</span>
                                    </div>
                                    <div class="my-6 w-24 h-px mx-auto bg-gray-300"></div>
                                    <div>
                                        <span class="text-3xl sm:text-5xl font-semibold text-[#30383B]">5+</span>
                                        <span class="block text-sm text-gray-500">Year of Experience</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-3/5 px-4">
                        <div class="max-w-lg lg:max-w-2xl mx-auto lg:mr-0">
                            <div class="max-w-2xl" id="hero-heading">
                                <h1 class="text-target font-heading text-5xl xs:text-6xl md:text-8xl xl:text-10xl font-bold text-[#111827] mb-8 sm:mb-14">
                                    <span>Turn your dreams into </span>
                                    <span class="font-serif italic">reality.</span>
                                </h1>
                            </div>
                            <div class="md:flex mb-14 max-w-xs sm:max-w-sm md:max-w-none" id="hero-para">
                                <div class="mb-6 md:mb-0 md:mr-8 pt-3 text-[#1118278e]">
                                    <svg width="84" height="10" viewbox="0 0 84 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 4.25C0.585786 4.25 0.25 4.58579 0.25 5C0.25 5.41421 0.585786 5.75 1 5.75L1 4.25ZM84 5.00001L76.5 0.669879L76.5 9.33013L84 5.00001ZM1 5.75L77.25 5.75001L77.25 4.25001L1 4.25L1 5.75Z" fill="#1118278e"></path>
                                    </svg>
                                </div>
                                <div class="max-w-md">
                                    <p class="md:text-xl text-[#1118278e] font-semibold">We don't just manage events, we
                                        orchestrate experiences. From concept to celebration, we'll help you create
                                        unforgettable moments that inspire, connect, and leave a lasting impression.</p>
                                </div>
                            </div>
                            <div id="heroBTN" class="sm:flex items-center" id="hero-avatar">
                                <a class="relative group inline-block w-full sm:w-auto py-4 px-6 text-white font-semibold bg-[#97AFB9] rounded-md overflow-hidden" href="#">
                                    <div class="absolute top-0 right-full w-full h-full bg-gray-900 transform group-hover:translate-x-full group-hover:scale-102 transition duration-500">
                                    </div>
                                    <div class="relative flex items-center justify-center">
                                        <span class="mr-4">Meet The Expert</span>
                                        <span>
                                            <svg width="8" height="12" viewbox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.83 5.29L2.59 1.05C2.49704 0.956274 2.38644 0.881879 2.26458 0.83111C2.14272 0.780342 2.01202 0.754204 1.88 0.754204C1.74799 0.754204 1.61729 0.780342 1.49543 0.83111C1.37357 0.881879 1.26297 0.956274 1.17 1.05C0.983753 1.23736 0.879211 1.49082 0.879211 1.755C0.879211 2.01919 0.983753 2.27264 1.17 2.46L4.71 6L1.17 9.54C0.983753 9.72736 0.879211 9.98082 0.879211 10.245C0.879211 10.5092 0.983753 10.7626 1.17 10.95C1.26344 11.0427 1.37426 11.116 1.4961 11.1658C1.61794 11.2155 1.7484 11.2408 1.88 11.24C2.01161 11.2408 2.14207 11.2155 2.26391 11.1658C2.38575 11.116 2.49656 11.0427 2.59 10.95L6.83 6.71C6.92373 6.61704 6.99813 6.50644 7.04889 6.38458C7.09966 6.26272 7.1258 6.13201 7.1258 6C7.1258 5.86799 7.09966 5.73728 7.04889 5.61543C6.99813 5.49357 6.92373 5.38297 6.83 5.29Z" fill="#FFF2EE"></path>
                                            </svg>
                                        </span>
                                    </div>
                                </a>
                                <!-- avatar -->
                                <div id="heroAvatar" class="flex mt-8 sm:mt-0 sm:ml-8 items-center">
                                    <img class="size-10 rounded-full object-cover" src="./assets/img/avatar/avatar2.webp" alt="boy-avatar with black t-shirt" />
                                    <img class="size-10 -ml-2 rounded-full object-cover" src="./assets/img/avatar/avatar4.webp" alt="beautiful-girl-avatar wearing hoody" />
                                    <img class="size-10 -ml-2 rounded-full object-cover" src="./assets/img/avatar/avatar1.webp" alt="model-avatar with black t-shirt" />
                                    <img class="size-10 -ml-2 rounded-full object-cover" src="./assets/img/avatar/avatar3.webp" alt="red-shirt girl with yellow background" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                        <span class="block mb-3 text-sm text-gray-800">Drop us a line</span>
                        <a class="flex items-center text-sm font-semibold text-gray-800 hover:text-gray-600" href="">
                            <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" id="Email">
                                <path fill="#000" d="M53.42 52.82H10.58a8 8 0 0 1-8-8V19.18a8 8 0 0 1 8-8h42.84a8 8 0 0 1 8 8v25.64a8 8 0 0 1-8 8ZM10.58 13.18a6 6 0 0 0-6 6v25.64a6 6 0 0 0 6 6h42.84a6 6 0 0 0 6-6V19.18a6 6 0 0 0-6-6Z" class="color222222 svgShape"></path>
                                <path fill="#000" d="M32 37.58A8 8 0 0 1 27.18 36L3.82 18.31A1 1 0 1 1 5 16.72l23.38 17.65a6 6 0 0 0 7.24 0L59 16.72a1 1 0 1 1 1.21 1.59L36.82 36A8 8 0 0 1 32 37.58Z" class="color222222 svgShape"></path>
                                <path fill="#ccc" d="M4.17 48.64a1 1 0 0 1-.66-1.74L21.9 30.49A1 1 0 0 1 23.23 32L4.84 48.39a1 1 0 0 1-.67.25zm55.66 0a1 1 0 0 1-.67-.25L40.77 32a1 1 0 1 1 1.33-1.49L60.49 46.9a1 1 0 0 1 .08 1.41 1 1 0 0 1-.74.33z" class="color222222 svgShape"></path>
                            </svg>
                            <span class="ml-3">masterevents@hotmail.com</span>
                        </a>
                    </div>
                    <div class="flex px-6 mb-16 items-center">
                        <a class="inline-block py-3 px-4 text-sm font-semibold text-gray-800 hover:text-white border border-gray-300 hover:border-gray-600 hover:bg-gray-800 rounded-md transition duration-200" href="./form.html">Book Here</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <!-- about -->
        <section id="about-section" class="overflow-hidden md:pt-40 sm:pt-0">
            <div class="container px-4 mx-auto">
                <div class="relative mb-32">
                    <div class="flex flex-wrap mb-32 -mx-8">
                        <div id="aboutLeft" class="w-full lg:w-1/2 px-8">
                            <h2 id="about-heading" class="text-5xl lg:text-6xl font-semibold font-heading mb-20 max-w-sm lg:max-w-lg text-[#111827]">
                                A company
                                with
                                values</h2>
                            <img class="abtLftImg rounded-xl mb-8 h-96 w-full lg:w-auto" src="./assets/img/event/image2.webp" alt="Wedding Entry Decoration">
                            <img class="abtLftImg rounded-xl mb-8 h-96 w-full lg:w-auto" src="./assets/img/event/image4.webp" alt="Wedding Decoration with yellow/mehndi theme">
                        </div>
                        <div class="w-full lg:w-1/2 px-8" id="about-content">
                            <p class="text-[#202124] text-lg mb-6">We value listening to your vision, partnering with
                                you
                                to bring it to life, and delivering experiences that exceed your expectations.</p>
                            <div class="flex flex-col gap-2 mb-14">
                                <div class="flex items-center flex-wrap gap-3">
                                    <div class="w-4 h-4 rounded-full bg-[#7FD1AE] border border-[#7FD1AE] flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                                            <path d="M12.4733 4.8067C12.4114 4.74421 12.3376 4.69461 12.2564 4.66077C12.1752 4.62692 12.088 4.6095 12 4.6095C11.912 4.6095 11.8249 4.62692 11.7436 4.66077C11.6624 4.69461 11.5886 4.74421 11.5267 4.8067L6.56001 9.78003L4.47334 7.6867C4.40899 7.62454 4.33303 7.57566 4.2498 7.54286C4.16656 7.51006 4.07768 7.49397 3.98822 7.49552C3.89877 7.49706 3.8105 7.51622 3.72844 7.55188C3.64639 7.58754 3.57217 7.63902 3.51001 7.70336C3.44785 7.76771 3.39897 7.84367 3.36617 7.92691C3.33337 8.01014 3.31728 8.09903 3.31883 8.18848C3.32038 8.27793 3.33953 8.36621 3.37519 8.44826C3.41085 8.53031 3.46233 8.60454 3.52667 8.6667L6.08667 11.2267C6.14865 11.2892 6.22238 11.3388 6.30362 11.3726C6.38486 11.4065 6.472 11.4239 6.56001 11.4239C6.64802 11.4239 6.73515 11.4065 6.81639 11.3726C6.89763 11.3388 6.97137 11.2892 7.03334 11.2267L12.4733 5.7867C12.541 5.72427 12.595 5.6485 12.632 5.56417C12.6689 5.47983 12.688 5.38876 12.688 5.2967C12.688 5.20463 12.6689 5.11356 12.632 5.02923C12.595 4.94489 12.541 4.86912 12.4733 4.8067Z" fill="#EEF8FC"></path>
                                        </svg>
                                    </div>
                                    <span class="text-lg text-[#202124]">Trustworthy</span>
                                </div>
                                <div class="flex items-center flex-wrap gap-3">
                                    <div class="w-4 h-4 rounded-full bg-[#7FD1AE] border border-[#7FD1AE] flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                                            <path d="M12.4733 4.8067C12.4114 4.74421 12.3376 4.69461 12.2564 4.66077C12.1752 4.62692 12.088 4.6095 12 4.6095C11.912 4.6095 11.8249 4.62692 11.7436 4.66077C11.6624 4.69461 11.5886 4.74421 11.5267 4.8067L6.56001 9.78003L4.47334 7.6867C4.40899 7.62454 4.33303 7.57566 4.2498 7.54286C4.16656 7.51006 4.07768 7.49397 3.98822 7.49552C3.89877 7.49706 3.8105 7.51622 3.72844 7.55188C3.64639 7.58754 3.57217 7.63902 3.51001 7.70336C3.44785 7.76771 3.39897 7.84367 3.36617 7.92691C3.33337 8.01014 3.31728 8.09903 3.31883 8.18848C3.32038 8.27793 3.33953 8.36621 3.37519 8.44826C3.41085 8.53031 3.46233 8.60454 3.52667 8.6667L6.08667 11.2267C6.14865 11.2892 6.22238 11.3388 6.30362 11.3726C6.38486 11.4065 6.472 11.4239 6.56001 11.4239C6.64802 11.4239 6.73515 11.4065 6.81639 11.3726C6.89763 11.3388 6.97137 11.2892 7.03334 11.2267L12.4733 5.7867C12.541 5.72427 12.595 5.6485 12.632 5.56417C12.6689 5.47983 12.688 5.38876 12.688 5.2967C12.688 5.20463 12.6689 5.11356 12.632 5.02923C12.595 4.94489 12.541 4.86912 12.4733 4.8067Z" fill="#EEF8FC"></path>
                                        </svg>
                                    </div>
                                    <span class="text-lg text-[#202124]">Reliable</span>
                                </div>
                                <div class="flex items-center flex-wrap gap-3">
                                    <div class="w-4 h-4 rounded-full bg-[#7FD1AE] border border-[#7FD1AE] flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                                            <path d="M12.4733 4.8067C12.4114 4.74421 12.3376 4.69461 12.2564 4.66077C12.1752 4.62692 12.088 4.6095 12 4.6095C11.912 4.6095 11.8249 4.62692 11.7436 4.66077C11.6624 4.69461 11.5886 4.74421 11.5267 4.8067L6.56001 9.78003L4.47334 7.6867C4.40899 7.62454 4.33303 7.57566 4.2498 7.54286C4.16656 7.51006 4.07768 7.49397 3.98822 7.49552C3.89877 7.49706 3.8105 7.51622 3.72844 7.55188C3.64639 7.58754 3.57217 7.63902 3.51001 7.70336C3.44785 7.76771 3.39897 7.84367 3.36617 7.92691C3.33337 8.01014 3.31728 8.09903 3.31883 8.18848C3.32038 8.27793 3.33953 8.36621 3.37519 8.44826C3.41085 8.53031 3.46233 8.60454 3.52667 8.6667L6.08667 11.2267C6.14865 11.2892 6.22238 11.3388 6.30362 11.3726C6.38486 11.4065 6.472 11.4239 6.56001 11.4239C6.64802 11.4239 6.73515 11.4065 6.81639 11.3726C6.89763 11.3388 6.97137 11.2892 7.03334 11.2267L12.4733 5.7867C12.541 5.72427 12.595 5.6485 12.632 5.56417C12.6689 5.47983 12.688 5.38876 12.688 5.2967C12.688 5.20463 12.6689 5.11356 12.632 5.02923C12.595 4.94489 12.541 4.86912 12.4733 4.8067Z" fill="#EEF8FC"></path>
                                        </svg>
                                    </div>
                                    <span class="text-lg text-[#202124]">Compassionate</span>
                                </div>
                                <div class="flex items-center flex-wrap gap-3">
                                    <div class="w-4 h-4 rounded-full bg-[#7FD1AE] border border-[#7FD1AE] flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                                            <path d="M12.4733 4.8067C12.4114 4.74421 12.3376 4.69461 12.2564 4.66077C12.1752 4.62692 12.088 4.6095 12 4.6095C11.912 4.6095 11.8249 4.62692 11.7436 4.66077C11.6624 4.69461 11.5886 4.74421 11.5267 4.8067L6.56001 9.78003L4.47334 7.6867C4.40899 7.62454 4.33303 7.57566 4.2498 7.54286C4.16656 7.51006 4.07768 7.49397 3.98822 7.49552C3.89877 7.49706 3.8105 7.51622 3.72844 7.55188C3.64639 7.58754 3.57217 7.63902 3.51001 7.70336C3.44785 7.76771 3.39897 7.84367 3.36617 7.92691C3.33337 8.01014 3.31728 8.09903 3.31883 8.18848C3.32038 8.27793 3.33953 8.36621 3.37519 8.44826C3.41085 8.53031 3.46233 8.60454 3.52667 8.6667L6.08667 11.2267C6.14865 11.2892 6.22238 11.3388 6.30362 11.3726C6.38486 11.4065 6.472 11.4239 6.56001 11.4239C6.64802 11.4239 6.73515 11.4065 6.81639 11.3726C6.89763 11.3388 6.97137 11.2892 7.03334 11.2267L12.4733 5.7867C12.541 5.72427 12.595 5.6485 12.632 5.56417C12.6689 5.47983 12.688 5.38876 12.688 5.2967C12.688 5.20463 12.6689 5.11356 12.632 5.02923C12.595 4.94489 12.541 4.86912 12.4733 4.8067Z" fill="#EEF8FC"></path>
                                        </svg>
                                    </div>
                                    <span class="text-lg text-[#202124]">Productive</span>
                                </div>
                                <div class="flex items-center flex-wrap gap-3">
                                    <div class="w-4 h-4 rounded-full bg-[#7FD1AE] border border-[#7FD1AE] flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                                            <path d="M12.4733 4.8067C12.4114 4.74421 12.3376 4.69461 12.2564 4.66077C12.1752 4.62692 12.088 4.6095 12 4.6095C11.912 4.6095 11.8249 4.62692 11.7436 4.66077C11.6624 4.69461 11.5886 4.74421 11.5267 4.8067L6.56001 9.78003L4.47334 7.6867C4.40899 7.62454 4.33303 7.57566 4.2498 7.54286C4.16656 7.51006 4.07768 7.49397 3.98822 7.49552C3.89877 7.49706 3.8105 7.51622 3.72844 7.55188C3.64639 7.58754 3.57217 7.63902 3.51001 7.70336C3.44785 7.76771 3.39897 7.84367 3.36617 7.92691C3.33337 8.01014 3.31728 8.09903 3.31883 8.18848C3.32038 8.27793 3.33953 8.36621 3.37519 8.44826C3.41085 8.53031 3.46233 8.60454 3.52667 8.6667L6.08667 11.2267C6.14865 11.2892 6.22238 11.3388 6.30362 11.3726C6.38486 11.4065 6.472 11.4239 6.56001 11.4239C6.64802 11.4239 6.73515 11.4065 6.81639 11.3726C6.89763 11.3388 6.97137 11.2892 7.03334 11.2267L12.4733 5.7867C12.541 5.72427 12.595 5.6485 12.632 5.56417C12.6689 5.47983 12.688 5.38876 12.688 5.2967C12.688 5.20463 12.6689 5.11356 12.632 5.02923C12.595 4.94489 12.541 4.86912 12.4733 4.8067Z" fill="#EEF8FC"></path>
                                        </svg>
                                    </div>
                                    <span class="text-lg text-[#202124]">People-first</span>
                                </div>
                            </div>
                            <img id="abtRgtImg" class="rounded-xl w-full lg:w-auto" src="./assets/img/event/image9.webp" alt="beautiful-lake-view with event Decoration">
                        </div>
                    </div>

                    <h2 id="clHead" class="text-center text-4xl lg:text-5xl mb-9 font-semibold font-heading text-[#111827]">Our
                        investors</h2>
                    <div id="client" class="bg-[#334A52] py-12 rounded-3xl ">
                        <div class=" client-logos">
                            <div class="splide" role="group" aria-label="Splide Client Logos">
                                <div class="splide__track">
                                    <ul class="splide__list">
                                        <li class="splide__slide">
                                            <img width="210px" src="./assets/img/clientLogo/airbnb.svg" alt="airbnb Logo" />
                                        </li>
                                        <li class="splide__slide">
                                            <img width="210px" src="./assets/img/clientLogo/apple.svg" alt="apple Logo" />
                                        </li>
                                        <li class="splide__slide">
                                            <img width="210px" src="./assets/img/clientLogo/spotify.svg" alt="spotify Logo" />
                                        </li>
                                        <li class="splide__slide">
                                            <img width="210px" src="./assets/img/clientLogo/mailchimp.svg" alt="mailchimp Logo" />
                                        </li>
                                        <li class="splide__slide">
                                            <img width="210px" src="./assets/img/clientLogo/mashable.svg" alt="mashable Logo" />
                                        </li>
                                        <li class="splide__slide">
                                            <img width="210px" src="./assets/img/clientLogo/microsoft.svg" alt="microsoft Logo" />
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>

        <!-- team -->
        <section id="team" class=" py-12 md:py-24">
            <div class="container mx-auto ">
                <h1 class="head text-[#111827] tracking-tight text-4xl sm:text-7xl font-semibold mb-10 text-center max-w-sm md:max-w-lg lg:max-w-2xl xl:max-w-4xl mx-auto font-heading">
                    Our dedicated team of experts</h1>
                <p class="head text-center text-xl md:text-2xl font-semibold text-neutral-600 mb-16 md:mb-32 tracking-tight">
                    At
                    the
                    heart of our success is a diverse and talented team.</p>
                <div class="flex flex-wrap -m-3">
                    <!-- team card1 -->
                    <div class="w-full md:w-1/2 lg:w-1/2 p-3">
                        <div class="relative mb-8">
                            <img class="teamImg rounded-3xl h-full w-full object-cover" style="height: 658px;" src="./assets/img/team/team-1.webp" alt="Happy Girl with blue sweater">
                            <div class="cardInfo absolute left-8 bottom-8">
                                <h2 class="text-white text-4xl font-semibold mb-4 tracking-tight font-heading">Laureen
                                    Smith
                                </h2>
                                <p class="text-white font-medium text-xl tracking-tight">Co-Founder</p>
                            </div>
                        </div>
                        <!-- team card3 -->
                        <div class="flex flex-wrap -m-3">
                            <div class="w-full lg:w-1/2 p-3">
                                <div class="relative">
                                    <img class="teamImg rounded-3xl h-full w-full object-cover" style="height: 382px;" src="./assets/img/team/team-3.webp" alt="Girl wih orange sweater and blue background">
                                    <div class="cardInfo absolute left-8 bottom-8">
                                        <h2 class="text-white text-4xl font-semibold mb-4 tracking-tight font-heading">
                                            Mia
                                            M. Mee-Johanson
                                        </h2>
                                        <p class="text-white font-medium text-xl tracking-tight">Graphic Designer</p>
                                    </div>
                                </div>
                            </div>
                            <!-- team card4 -->
                            <div class="w-full lg:w-1/2 p-3">
                                <div class="relative">
                                    <img class="teamImg rounded-3xl h-full w-full object-cover" style="height: 382px;" src="./assets/img/team/team-4.webp" alt="beard men with dark background">
                                    <div class="cardInfo absolute left-8 bottom-8">
                                        <h2 class="text-white  text-4xl font-semibold mb-4 tracking-tight font-heading">
                                            Simon
                                            Pearl</h2>
                                        <p class="text-white  font-medium text-xl tracking-tight">
                                            Photographer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- team card2 -->
                    <div class="w-full md:w-1/2 lg:w-1/2 p-3">
                        <div class="flex flex-wrap -m-3 mb-5">
                            <div class="w-full lg:w-1/2 p-3">
                                <div class="relative">
                                    <img class="teamImg rounded-3xl h-full w-full object-cover" style="height: 382px;" src="./assets/img/team/team-2.webp" alt="girl wearing black hoddie">
                                    <div class=" cardInfo absolute left-8 bottom-8">
                                        <h2 class="text-white text-4xl font-semibold mb-4 tracking-tight font-heading">
                                            Hanna
                                            I. Keaton</h2>
                                        <p class="text-white font-medium text-xl tracking-tight">Co-Founder</p>
                                    </div>
                                </div>
                            </div>
                            <!-- team card5 -->
                            <div class="w-full lg:w-1/2 p-3">
                                <div class="relative">
                                    <img class="teamImg rounded-3xl h-full w-full object-cover" style="height: 382px;" src="./assets/img/team/team-5.webp" alt="girl with green shirt">
                                    <div class="cardInfo absolute left-8 bottom-8">
                                        <h2 class="text-white text-4xl font-semibold mb-4 tracking-tight font-heading">
                                            Henrick Beeman</h2>
                                        <p class="text-white font-medium text-xl tracking-tight">Art Director</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- team card6 -->
                        <div class="relative">
                            <img class="teamImg rounded-3xl h-full w-full object-cover" style="height: 658px;" src="./assets/img/team/team-6.webp" alt="boy wearing glasses and lining shirt">
                            <div class="cardInfo absolute left-8 bottom-8 ">
                                <h2 class="text-white text-4xl font-semibold mb-4 tracking-tight font-heading">Cola
                                    Puncanno
                                </h2>
                                <p class="text-white font-medium text-xl tracking-tight">Account Manager</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- service -->
        <section id="service" class="relative py-12 md:py-24 bg-coolGray-50 overflow-hidden">
            <div class="container mx-auto px-4 relative">
                <h1 class="head font-heading text-6xl md:text-7xl tracking-tighter mb-24 font-semibold text-center text-[#111827]">
                    What we
                    Provide</h1>
                <div id="service-items">
                    <!-- 1 -->
                    <a class="relative group block xl:flex p-8 mb-20 hover:bg-[#97AFB9] rounded-t-2xl items-end border-b border-black" href="/">
                        <div class="mb-8 xl:mb-0">
                            <span class="block lg:-mb-1 text-sm text-[#050313]">01</span>
                            <h3 class="text-4xl xs:text-6xl lg:text-7xl inline-block pb-2 border-b-3 border-transparent group-hover:border-black transition duration-150 text-[#111827]">
                                Concept Design</h3>
                        </div>
                        <div class="max-w-md text-right mb-8 xl:mb-0 ml-auto xl:mr-20">
                            <p>We bring your vision to life,
                                defining the
                                theme, goals, and audience for an unforgettable experience.</p>
                        </div>
                        <div class="text-right">
                            <span class="inline-block group-hover:rotate-45 transform transition duration-100">
                                <svg width="33" height="33" viewbox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M30 3L3 30" stroke="#7FD1AE" stroke-width="4.3875" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M30 27.758V3H5.24196" stroke="#7FD1AE" stroke-width="4.3875" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </div>
                    </a>
                    <!-- 2 -->
                    <a class="relative group block xl:flex p-8 mb-20 hover:bg-[#97AFB9]  transition-colors duration-2000 rounded-t-2xl items-end border-b border-black" href="/">
                        <div class="mb-8 xl:mb-0">
                            <span class="block lg:-mb-1 text-sm text-[#050313]">02</span>
                            <h3 class="text-4xl xs:text-6xl lg:text-7xl inline-block pb-2 border-b-3 border-transparent group-hover:border-black transition duration-150 ">
                                Venue Experts</h3>
                        </div>
                        <div class="max-w-md text-right mb-8 xl:mb-0 ml-auto xl:mr-20">
                            <p>We find the ideal location,
                                considering
                                size, amenities, and budget to perfectly match your needs.</p>
                        </div>
                        <div class="text-right">
                            <span class="inline-block group-hover:rotate-45 transform transition duration-100">
                                <svg width="33" height="33" viewbox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M30 3L3 30" stroke="#7FD1AE" stroke-width="4.3875" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M30 27.758V3H5.24196" stroke="#7FD1AE" stroke-width="4.3875" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </div>
                    </a>
                    <!-- 3 -->
                    <a class="relative group block xl:flex p-8 mb-20 hover:bg-[#97AFB9] rounded-t-2xl items-end border-b border-black" href="#">
                        <div class="mb-8 xl:mb-0">
                            <span class="block lg:-mb-1 text-sm text-[#050313]">03</span>
                            <h3 class="text-4xl xs:text-6xl lg:text-7xl inline-block border-b-3 border-transparent group-hover:border-black transition duration-150 text-[#111827] ">
                                Awards Ceremonies</h3>
                        </div>
                        <div class="max-w-md text-right mb-8 xl:mb-0 ml-auto xl:mr-20">
                            <p>We plan and execute flawless
                                award
                                ceremonies, from nominations to presentations.</p>
                        </div>
                        <div class="text-right">
                            <span class="inline-block group-hover:rotate-45 transform transition duration-100">
                                <svg width="33" height="33" viewbox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M30 3L3 30" stroke="#7FD1AE" stroke-width="4.3875" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M30 27.758V3H5.24196" stroke="#7FD1AE" stroke-width="4.3875" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </div>
                    </a>
                    <!-- 4 -->
                    <a class="relative group block xl:flex p-8 mb-20 hover:bg-[#97AFB9] rounded-t-2xl items-end border-b border-black" href="/">
                        <div class="mb-8 xl:mb-0">
                            <span class="block lg:-mb-1 text-sm text-[#050313]">04</span>
                            <h3 class="text-4xl xs:text-6xl lg:text-7xl inline-block border-b-3 border-transparent group-hover:border-black transition duration-150 text-[#111827] ">
                                Crafting Brands</h3>
                        </div>
                        <div class="max-w-md text-right mb-8 xl:mb-0 ml-auto xl:mr-20">
                            <p>We develop a unique identity
                                for your
                                event, including logos, visuals, and messaging that resonate.</p>
                        </div>
                        <div class="text-right">
                            <span class="inline-block group-hover:rotate-45 transform transition duration-100">
                                <svg width="33" height="33" viewbox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M30 3L3 30" stroke="#7FD1AE" stroke-width="4.3875" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M30 27.758V3H5.24196" stroke="#7FD1AE" stroke-width="4.3875" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </div>
                    </a>
                    <!-- 5 -->
                    <a class="relative group block xl:flex p-8 mb-20 hover:bg-[#97AFB9] rounded-t-2xl items-end border-b border-black" href="/">
                        <div class="mb-8 xl:mb-0">
                            <span class="block lg:-mb-1 text-sm text-[#050313]">05</span>
                            <h3 class="text-4xl xs:text-6xl lg:text-7xl inline-block border-b-3 border-transparent group-hover:border-black transition duration-150 text-[#111827] ">
                                Delicious Catering</h3>
                        </div>
                        <div class="max-w-md text-right mb-8 xl:mb-0 ml-auto xl:mr-20">
                            <p>We select the perfect caterer
                                and create a
                                menu that complements your theme and delights your guests.</p>
                        </div>
                        <div class="text-right">
                            <span class="inline-block group-hover:rotate-45 transform transition duration-100">
                                <svg width="33" height="33" viewbox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M30 3L3 30" stroke="#7FD1AE" stroke-width="4.3875" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M30 27.758V3H5.24196" stroke="#7FD1AE" stroke-width="4.3875" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- gallery -->
        <section id="gallery">
            <div id="effect">
                <div id="top">
                    <h1>Gallery</h1>
                </div>
                <div id="center">
                    <div id="content" class="pb-20">
                        <div id="gallery-image" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 p-4 sm:px-24 y-40">
                            <div class="group cursor-pointer relative">
                                <img src="./assets/img/event/image1.webp" alt="Image 1" class="w-full h-72 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105" />

                            </div>

                            <div class="group cursor-pointer relative">
                                <img src="./assets/img/event/image8.webp" alt="Image 1" class="w-full h-72 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105" />

                            </div>

                            <div class="group cursor-pointer relative">
                                <img src="./assets/img/event/image5.webp" alt="Image 1" class="w-full h-72 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105" />
                            </div>

                            <div class="group cursor-pointer relative">
                                <img src="./assets/img/event/image9.webp" alt="Image 1" class="w-full h-72 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105" />
                            </div>

                            <div class="group cursor-pointer relative">
                                <img src="./assets/img/event/image10.webp" alt="Image 1" class="w-full h-72 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105" />
                            </div>

                            <div class="group cursor-pointer relative">
                                <img src="./assets/img/event/image11.webp" alt="Image 1" class="w-full h-72 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105" />
                            </div>

                            <div class="group cursor-pointer relative">
                                <img src="./assets/img/event/image12.webp" alt="Image 1" class="w-full h-72 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105" />
                            </div>

                            <div class="group cursor-pointer relative">
                                <img src="./assets/img/event/image13.webp" alt="Image 1" class="w-full h-72 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105" />
                            </div>

                            <div class="group cursor-pointer relative">
                                <img src="./assets/img/event/image17.webp" alt="Image 1" class="w-full h-72 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105" />
                            </div>

                            <div class="group cursor-pointer relative">
                                <img src="./assets/img/event/image14.webp" alt="Image 1" class="w-full h-72 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105" />
                            </div>

                            <div class="group cursor-pointer relative">
                                <img src="./assets/img/event/image15.webp" alt="Image 1" class="w-full h-72 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105" />
                            </div>

                            <div class="group cursor-pointer relative">
                                <img src="./assets/img/event/image16.webp" alt="Image 1" class="w-full h-72 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105" />
                            </div>
                        </div>
                    </div>
                </div>
                <div id="bottom">
                    <h1>Gallery</h1>
                </div>
            </div>

        </section>

        <!-- testemonial -->
        <section id="testemonial" class="mt-24 mb-12">
            <div class="flex flex-wrap mx-4 items-center">
                <div class="w-full mx-auto">
                    <h1 class="head font-heading text-5xl xs:text-6xl font-bold text-[#111827] mb-4 md:pl-40 ">
                        <span>What our clients</span>
                        <span class="font-serif italic">said:</span>
                    </h1>
                </div>
            </div>
            <!-- Swiper -->
            <div class="swiper mySwiper py-20 rounded-2xl ">
                <div class="swiper-wrapper ">
                    <div class="swiper-slide ">
                        <div class="container px-4 mx-auto">
                            <div class="relative max-w-5xl sm:px-6 pb-6 mb-10 mx-auto text-center">
                                <div class="relative">
                                    <h2 class="text-2xl md:text-3xl md:font-normal tracking-normal lg:text-4xl text-[#111827]">
                                        “Fantastic
                                        experience
                                        with
                                        Master Events! Flawless execution, exceeded expectations!”</h2>
                                </div>
                            </div>
                            <div class="text-center mb-8">
                                <img class="w-24 h-24 mx-auto mb-6 rounded-full" src="./assets/img/testemonial/image3.webp" alt="girl with grey background">
                                <h3 class="mb-2 text-xl md:text-2xl font-semibold">Sarah Johnson</h3>
                                <span class="text-lg text-coolGray-500 font-medium">Marketing Manager</span>
                            </div>
                            <div class="text-center">
                                <button class="inline-block h-3 w-3 mr-3 rounded-full bg-[#7FD1AE]"></button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="container px-4 mx-auto">
                            <div class="relative max-w-5xl sm:px-6 pb-6 mb-10 mx-auto text-center">
                                <div class="relative">
                                    <h2 class="text-2xl md:text-3xl md:font-normal tracking-tighter lg:text-4xl text-[#111827]">
                                        “I was blown away
                                        by
                                        the
                                        organization and professionalism of Elite Events. A truly memorable experience!”
                                    </h2>
                                </div>
                            </div>
                            <div class="text-center mb-8">
                                <img class="w-24 h-24 mx-auto mb-6 rounded-full" src="./assets/img/testemonial/image2.webp" alt="Happy Boy with blue muflar.">
                                <h3 class="mb-2 text-xl md:text-2xl font-semibold">Michael Smith</h3>
                                <span class="text-lg text-coolGray-500 font-medium">Conference Attendee</span>
                            </div>
                            <div class="text-center">
                                <button class="inline-block h-3 w-3 mr-3 rounded-full bg-[#7FD1AE]"></button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="container px-4 mx-auto">
                            <div class="relative max-w-5xl sm:px-6 pb-6 mb-10 mx-auto text-center">
                                <div class="relative">
                                    <h2 class="text-2xl md:text-3xl md:font-normal tracking-tighter lg:text-4xl text-[#111827]">

                                        “Thank you, Dream
                                        Team
                                        Events, for making our fundraiser a huge success. Your dedication to our cause
                                        was
                                        evident in every detail.”</h2>
                                </div>
                            </div>
                            <div class="text-center mb-8">
                                <img class="w-24 h-24 mx-auto mb-6 rounded-full" src="./assets/img/testemonial/image5.webp" alt="curly hair girl">
                                <h3 class="mb-2 text-xl md:text-2xl font-semibold">Emily Brown</h3>
                                <span class="text-lg text-coolGray-500 font-medium">Charity Organizer</span>
                            </div>
                            <div class="text-center">
                                <button class="inline-block h-3 w-3 mr-3 rounded-full bg-[#7FD1AE]"></button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="container px-4 mx-auto">
                            <div class="relative max-w-5xl sm:px-6 pb-6 mb-10 mx-auto text-center">
                                <div class="relative">
                                    <h2 class="text-2xl md:text-3xl md:font-normal tracking-tighter lg:text-4xl text-[#111827]">

                                        “Bravo to
                                        Visionary
                                        Events
                                        for executing our product launch flawlessly. Their creativity and precision were
                                        commendable.”</h2>
                                </div>
                            </div>
                            <div class="text-center mb-8">
                                <img class="w-24 h-24 mx-auto mb-6 rounded-full" src="./assets/img/testemonial/image4.webp" alt="men with grey background">
                                <h3 class="mb-2 text-xl md:text-2xl font-semibold">David Jones</h3>
                                <span class="text-lg text-coolGray-500 font-medium">Product Launch Manager</span>
                            </div>
                            <div class="text-center">
                                <button class="inline-block h-3 w-3 mr-3 rounded-full bg-[#7FD1AE]"></button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="container px-4 mx-auto">
                            <div class="relative max-w-5xl sm:px-6 pb-6 mb-10 mx-auto text-center">
                                <div class="relative">
                                    <h2 class="text-2xl md:text-3xl md:font-normal tracking-tighter lg:text-4xl text-[#111827]">
                                        “Elite Events
                                        exceeded
                                        all
                                        expectations for our annual conference. Their attention to detail and seamless
                                        execution
                                        ensured a successful event.”</h2>
                                </div>
                            </div>
                            <div class="text-center mb-8">
                                <img class="w-24 h-24 mx-auto mb-6 rounded-full" src="./assets/img/testemonial/image1.webp" alt="Girl with yellow background">
                                <h3 class="mb-2 text-xl md:text-2xl font-semibold">Jessica Lee</h3>
                                <span class="text-lg text-coolGray-500 font-medium">Sales Executive</span>
                            </div>
                            <div class="text-center">
                                <button class="inline-block h-3 w-3 mr-3 rounded-full bg-[#7FD1AE]"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <!-- footer -->

    <?php include 'includes/footer.php'; ?>