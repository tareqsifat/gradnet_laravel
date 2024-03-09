@extends('web.layout.index')
@section('content')
    <!-- directory area start -->
    <section class="directory_area bg-[#f9fafd] lg:py-24 pt-[120px!important] py-16">
        <div class="container mx-auto">
            <div class="section_header pb-10 text-center">
                <h4 class="text-[#344050] lg:text-3xl md:text-2xl text-xl font-medium font-poppins">
                    Offers for the Members
                </h4>
            </div>
            <div class="section_wrapper">
                <div class="card_bar">
                    <div class="card_nav director_nav flex flex-wrap items-center justify-center gap-4">
                        <button type="button" id="tab1-link" class="tab_link text-sm font-medium font-poppins shadow-bmpshadow rounded px-4 py-2 active" onclick="changeTab(0)">
                            All Offers
                        </button>
                        <button type="button" id="tab2-link" class="tab_link text-sm font-medium font-poppins shadow-bmpshadow rounded px-4 py-2" onclick="changeTab(1)">
                            Shopping
                        </button>
                        <button type="button" id="tab3-link" class="tab_link text-sm font-medium font-poppins shadow-bmpshadow rounded px-4 py-2" onclick="changeTab(2)">
                            Restaurants
                        </button>
                        <button type="button" id="tab4-link" class="tab_link text-sm font-medium font-poppins shadow-bmpshadow rounded px-4 py-2" onclick="changeTab(3)">
                            Hotels
                        </button>
                        <button type="button" id="tab5-link" class="tab_link text-sm font-medium font-poppins shadow-bmpshadow rounded px-4 py-2" onclick="changeTab(4)">
                            Travels
                        </button>
                        <button type="button" id="tab5-link" class="tab_link text-sm font-medium font-poppins shadow-bmpshadow rounded px-4 py-2" onclick="changeTab(4)">
                            Hospital
                        </button>
                    </div>
                    <div class="card_nav_panel mt-12">
                        <div id="tab1" class="tab-content">
                            <div class="shadow-theme_shadow rounded-md border">
                                <div class="flex flex-col justify-center items-center">
                                    <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-40 h-40 text-text_color text-opacity-40">
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"
                                            />
                                        </svg>
                                    </i>
                                    <p class="text-text_color text-opacity-30 text-xl font-normal font-poppins pb-4">
                                        No Deals found
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div id="tab2" class="tab-content hidden">
                            <div class="shadow-theme_shadow rounded-md border">
                                <div class="flex flex-col justify-center items-center">
                                    <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-40 h-40 text-text_color text-opacity-40">
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"
                                            />
                                        </svg>
                                    </i>
                                    <p class="text-text_color text-opacity-30 text-xl font-normal font-poppins pb-4">
                                        No Deals found
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div id="tab3" class="tab-content hidden">
                            <div class="shadow-theme_shadow rounded-md border">
                                <div class="flex flex-col justify-center items-center">
                                    <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-40 h-40 text-text_color text-opacity-40">
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"
                                            />
                                        </svg>
                                    </i>
                                    <p class="text-text_color text-opacity-30 text-xl font-normal font-poppins pb-4">
                                        No Deals found
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div id="tab4" class="tab-content hidden">
                            <div class="shadow-theme_shadow rounded-md border">
                                <div class="flex flex-col justify-center items-center">
                                    <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-40 h-40 text-text_color text-opacity-40">
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"
                                            />
                                        </svg>
                                    </i>
                                    <p class="text-text_color text-opacity-30 text-xl font-normal font-poppins pb-4">
                                        No Deals found
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div id="tab5" class="tab-content hidden">
                            <div class="shadow-theme_shadow rounded-md border">
                                <div class="flex flex-col justify-center items-center">
                                    <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-40 h-40 text-text_color text-opacity-40">
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"
                                            />
                                        </svg>
                                    </i>
                                    <p class="text-text_color text-opacity-30 text-xl font-normal font-poppins pb-4">
                                        No Deals found
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div id="tab6" class="tab-content hidden">
                            <div class="shadow-theme_shadow rounded-md border">
                                <div class="flex flex-col justify-center items-center">
                                    <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-40 h-40 text-text_color text-opacity-40">
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"
                                            />
                                        </svg>
                                    </i>
                                    <p class="text-text_color text-opacity-30 text-xl font-normal font-poppins pb-4">
                                        No Deals found
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- directory area ends  -->

@endsection
