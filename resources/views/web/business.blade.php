@extends('web.layout.index')
@section('content')
    <!-- businesses area start -->
    <section class="businesses_area bg-[#f9fafd] lg:py-24 pt-[120px!important] py-16">
        <div class="container mx-auto">
            <div class="page_header pb-10">
                <h4 class="text-[#344050] lg:text-3xl md:text-2xl text-xl font-normal font-poppins">
                    Business Directory
                </h4>
                <p class="text-[#5e6e82] text-lg font-light font-poppins">
                    All initiatives by our Home Grown Talents
                </p>
            </div>
            <div class="section_wrapper">
                <div class="grid grid-cols-12 items-start gap-5">
                    <div class="bg-white rounded-lg shadow-theme_shadow lg:col-span-4 col-span-12 lg:sticky lg:top-0">
                        <h4 class="text-text_color text-base font-medium font-poppins p-4">
                            Business directory categories
                        </h4>
                        <ul class="flex flex-col text-text_color text-sm font-light font-poppins">
                            <li class="flex items-center gap-3 border-t p-4">
                                <input id="default-radio-1" type="radio" value="" name="default-radio" checked class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-transparent dark:ring-offset-gray-800 focus:ring-2" />
                                <label for="default-radio-1" class="ml-2">All categories</label>
                            </li>
                            <li class="flex items-center gap-3 border-t p-4">
                                <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-transparent dark:ring-offset-gray-800 focus:ring-2" />
                                <label for="default-radio-1" class="ml-2">Product/ Service</label>
                            </li>
                            <li class="flex items-center gap-3 border-t p-4">
                                <input id="default-radio-2" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-transparent dark:ring-offset-gray-800 focus:ring-2" />
                                <label for="default-radio-2" class="ml-2">Business Services</label>
                            </li>
                            <li class="flex items-center gap-3 border-t p-4">
                                <input id="default-radio-3" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-transparent dark:ring-offset-gray-800 focus:ring-2" />
                                <label for="default-radio-3" class="ml-2">E-commerce</label>
                            </li>
                        </ul>
                    </div>
                    <div class="lg:col-span-8 col-span-12 flex flex-col gap-5">
                        <div class="search_bar bg-white border py-4 px-6 rounded-lg">
                            <input type="text" class="border-0 h-9 w-full bg-white text-text_color placeholder:text-opacity-40 font-light font-poppins placeholder:font-poppins focus:outline-none" placeholder="Type to search" />
                        </div>
                        <div class="grid md:grid-cols-2 gap-5">
                            <div class="bg-white border rounded-lg">
                                <div class="card_body flex items-center gap-3 p-4">
                                    <div class="border rounded-md p-1">
                                        <img class="w-[60px] rounded-md" src="../src/img/business/01.png" alt="" />
                                    </div>
                                    <div class="card_text">
                                        <a href="businesses-details.html">
                                            <h4 class="text-text_color lg:text-lg text-base font-medium font-poppins">
                                                T20 Service
                                            </h4>
                                        </a>
                                        <p class="text-text_color text-sm font-light font-poppins">
                                            Delivering with Passion
                                        </p>
                                    </div>
                                </div>
                                <div class="card_footer border-t px-4 py-2">
                                    <a href="businesses-details.html" class="text-theme_color text-start font-normal font-poppins flex items-center gap-1">
                                        View Details
                                        <i>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-theme_color">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                            </svg>
                                        </i>
                                    </a>
                                </div>
                            </div>
                            <div class="bg-white border rounded-lg">
                                <div class="card_body flex items-center gap-3 p-4">
                                    <div class="border rounded-md p-1">
                                        <img class="w-[60px] rounded-md" src="../src/img/business/02.png" alt="" />
                                    </div>
                                    <div class="card_text">
                                        <a href="businesses-details.html">
                                            <h4 class="text-text_color lg:text-lg text-base font-medium font-poppins">
                                                Graduate Network
                                            </h4>
                                        </a>
                                        <p class="text-text_color text-sm font-light font-poppins">
                                            Portal with Online Payment
                                        </p>
                                    </div>
                                </div>
                                <div class="card_footer border-t px-4 py-2">
                                    <a href="businesses-details.html" class="text-theme_color text-start font-normal font-poppins flex items-center gap-1">
                                        View Details
                                        <i>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-theme_color">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                            </svg>
                                        </i>
                                    </a>
                                </div>
                            </div>
                            <div class="bg-white border rounded-lg">
                                <div class="card_body flex items-center gap-3 p-4">
                                    <div class="border rounded-md p-1">
                                        <img class="w-[60px] rounded-md" src="../src/img/business/03.png" alt="" />
                                    </div>
                                    <div class="card_text">
                                        <a href="businesses-details.html">
                                            <h4 class="text-text_color lg:text-lg text-base font-medium font-poppins">
                                                Technext Limited
                                            </h4>
                                        </a>
                                        <p class="text-text_color text-sm font-light font-poppins">
                                            We believe in excellency
                                        </p>
                                    </div>
                                </div>
                                <div class="card_footer border-t px-4 py-2">
                                    <a href="businesses-details.html" class="text-theme_color text-start font-normal font-poppins flex items-center gap-1">
                                        View Details
                                        <i>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-theme_color">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                            </svg>
                                        </i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="show_pages bg-white shadow-theme_shadow p-4 rounded-lg flex flex-wrap items-center justify-between gap-3">
                            <span class="text-text_color text-sm font-light font-poppins">Showing 1 of 1 pages</span>
                            <div class="flex items-center gap-2">
                                <button type="button" class="border p-1 rounded-md text-text_color text-opacity-80 text-sm font-medium font-poppins flex items-center gap-1">
                                    <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                                        </svg>
                                    </i>
                                    Previous
                                </button>
                                <button type="button" class="border p-1 rounded-md text-text_color text-opacity-80 text-sm font-medium font-poppins flex items-center gap-1">
                                    Next
                                    <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                        </svg>
                                    </i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- businesses area ends  -->

@endsection
