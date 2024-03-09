@extends('web.layout.index')
@section('content')
    <!-- directory area start -->
    <section class="directory_area bg-[#f9fafd] lg:py-24 pt-[120px!important] py-16">
        <div class="container mx-auto">
            <div class="section_wrapper">
                <div class="card_bar">
                    <div class="card_nav director_nav flex flex-wrap items-center gap-4">
                        <button type="button" id="tab1-link" class="tab_link text-sm font-medium font-poppins shadow-bmpshadow rounded-md px-4 py-2 active" onclick="changeTab(0)">
                            Find a person
                        </button>
                        <button type="button" id="tab2-link" class="tab_link text-sm font-medium font-poppins shadow-bmpshadow rounded-md px-4 py-2" onclick="changeTab(1)">
                            Knowledge Archive
                        </button>
                        <button type="button" id="tab3-link" class="tab_link text-sm font-medium font-poppins shadow-bmpshadow rounded-md px-4 py-2" onclick="changeTab(2)">
                            Registered (Paid) Members
                        </button>
                    </div>
                    <div class="card_nav_panel mt-6">
                        <div id="tab1" class="tab-content">
                            <div class="flex flex-col gap-6">
                                <div class="search_bar bg-white border border-border_color border-opacity-30 rounded-lg p-4 flex items-center gap-3 divide-x">
                                    <div class="flex items-center justify-between gap-2 w-[150px]">
                                        <select class="text-text_color text-sm font-normal font-poppins focus:outline-none h-8 w-full">
                                            <option value="0">Name</option>
                                            <option value="1">Company</option>
                                            <option value="2">Designation</option>
                                        </select>
                                    </div>
                                    <input type="text" class="w-full h-8 border-0 pl-4 p-2 text-sm font-light font-poppins text-text_color placeholder:text-opacity-30 focus:outline-none" placeholder="Type to search" />
                                </div>
                                <div class="grid lg:grid-cols-6 md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-8">
                                    <div class="person_item text-center">
                                        <div class="item_thumb w-[100px] h-[100px] mx-auto rounded-full">
                                            <img class="w-full rounded-full" src="../src/img/member/testi-1.jpg" alt="" />
                                        </div>
                                        <div class="item_text">
                                            <h4 class="text-text_color text-base font-medium font-poppins">
                                                Md. Sayem
                                            </h4>
                                            <a href="#0" class="text-theme_color text-sm font-medium font-poppins inline-block">View profile</a>
                                        </div>
                                    </div>
                                    <div class="person_item text-center">
                                        <div class="item_thumb w-[100px] h-[100px] mx-auto rounded-full">
                                            <img class="w-full rounded-full" src="../src/img/member/testi-2.jpg" alt="" />
                                        </div>
                                        <div class="item_text">
                                            <h4 class="text-text_color text-base font-medium font-poppins">
                                                Md. Monir
                                            </h4>
                                            <a href="#0" class="text-theme_color text-sm font-medium font-poppins inline-block">View profile</a>
                                        </div>
                                    </div>
                                    <div class="person_item text-center">
                                        <div class="item_thumb w-[100px] h-[100px] mx-auto rounded-full">
                                            <img class="w-full rounded-full" src="../src/img/member/testi-3.jpg" alt="" />
                                        </div>
                                        <div class="item_text">
                                            <h4 class="text-text_color text-base font-medium font-poppins">
                                                Mr. DevOps
                                            </h4>
                                            <a href="#0" class="text-theme_color text-sm font-medium font-poppins inline-block">View profile</a>
                                        </div>
                                    </div>
                                    <div class="person_item text-center">
                                        <div class="item_thumb w-[100px] h-[100px] mx-auto rounded-full">
                                            <img class="w-full rounded-full" src="../src/img/member/testi-1.jpg" alt="" />
                                        </div>
                                        <div class="item_text">
                                            <h4 class="text-text_color text-base font-medium font-poppins">
                                                Md. Sayem
                                            </h4>
                                            <a href="#0" class="text-theme_color text-sm font-medium font-poppins inline-block">View profile</a>
                                        </div>
                                    </div>
                                    <div class="person_item text-center">
                                        <div class="item_thumb w-[100px] h-[100px] mx-auto rounded-full">
                                            <img class="w-full rounded-full" src="../src/img/member/testi-2.jpg" alt="" />
                                        </div>
                                        <div class="item_text">
                                            <h4 class="text-text_color text-base font-medium font-poppins">
                                                Md. Monir
                                            </h4>
                                            <a href="#0" class="text-theme_color text-sm font-medium font-poppins inline-block">View profile</a>
                                        </div>
                                    </div>
                                    <div class="person_item text-center">
                                        <div class="item_thumb w-[100px] h-[100px] mx-auto rounded-full">
                                            <img class="w-full rounded-full" src="../src/img/member/testi-3.jpg" alt="" />
                                        </div>
                                        <div class="item_text">
                                            <h4 class="text-text_color text-base font-medium font-poppins">
                                                Mr. DevOps
                                            </h4>
                                            <a href="#0" class="text-theme_color text-sm font-medium font-poppins inline-block">View profile</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-12">
                                    <div class="show_pages bg-white shadow-theme_shadow p-4 rounded-lg flex flex-wrap items-center justify-between gap-3">
                                        <span class="text-text_color text-sm font-normal font-poppins">Showing 1 of 1 pages</span>
                                        <div class="flex items-center gap-2">
                                            <button type="button" class="border p-1 rounded-md text-text_color text-opacity-80 text-sm font-medium font-poppins flex items-center gap-1">
                                                <i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"></path>
                                                    </svg>
                                                </i>
                                                Previous
                                            </button>
                                            <button type="button" class="border p-1 rounded-md text-text_color text-opacity-80 text-sm font-medium font-poppins flex items-center gap-1">
                                                Next
                                                <i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                                                    </svg>
                                                </i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab2" class="tab-content hidden">
                            <div class="flex flex-col gap-6">
                                <div class="search_bar bg-white border border-border_color border-opacity-30 rounded-lg p-4 flex items-center gap-3 divide-x">
                                    <div class="flex items-center justify-between gap-2 w-[150px]">
                                        <select class="text-text_color text-sm font-normal font-poppins focus:outline-none h-8 w-full">
                                            <option value="0">Name</option>
                                            <option value="1">Company</option>
                                            <option value="2">Designation</option>
                                        </select>
                                    </div>
                                    <input type="text" class="w-full h-8 border-0 pl-4 p-2 text-sm font-light font-poppins text-text_color placeholder:text-opacity-30 focus:outline-none" placeholder="Type to search" />
                                </div>
                                <div class="grid lg:grid-cols-6 md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-8">
                                    <div class="person_item text-center">
                                        <div class="item_thumb w-[100px] h-[100px] mx-auto rounded-full">
                                            <img class="w-full rounded-full" src="../src/img/member/testi-1.jpg" alt="" />
                                        </div>
                                        <div class="item_text">
                                            <h4 class="text-text_color text-base font-medium font-poppins">
                                                Md. Sayem
                                            </h4>
                                            <a href="#0" class="text-theme_color text-sm font-medium font-poppins inline-block">View profile</a>
                                        </div>
                                    </div>
                                    <div class="person_item text-center">
                                        <div class="item_thumb w-[100px] h-[100px] mx-auto rounded-full">
                                            <img class="w-full rounded-full" src="../src/img/member/testi-2.jpg" alt="" />
                                        </div>
                                        <div class="item_text">
                                            <h4 class="text-text_color text-base font-medium font-poppins">
                                                Md. Monir
                                            </h4>
                                            <a href="#0" class="text-theme_color text-sm font-medium font-poppins inline-block">View profile</a>
                                        </div>
                                    </div>
                                    <div class="person_item text-center">
                                        <div class="item_thumb w-[100px] h-[100px] mx-auto rounded-full">
                                            <img class="w-full rounded-full" src="../src/img/member/testi-3.jpg" alt="" />
                                        </div>
                                        <div class="item_text">
                                            <h4 class="text-text_color text-base font-medium font-poppins">
                                                Mr. DevOps
                                            </h4>
                                            <a href="#0" class="text-theme_color text-sm font-medium font-poppins inline-block">View profile</a>
                                        </div>
                                    </div>
                                    <div class="person_item text-center">
                                        <div class="item_thumb w-[100px] h-[100px] mx-auto rounded-full">
                                            <img class="w-full rounded-full" src="../src/img/member/testi-2.jpg" alt="" />
                                        </div>
                                        <div class="item_text">
                                            <h4 class="text-text_color text-base font-medium font-poppins">
                                                Mr. DevOps
                                            </h4>
                                            <a href="#0" class="text-theme_color text-sm font-medium font-poppins inline-block">View profile</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-12">
                                    <div class="show_pages bg-white shadow-theme_shadow p-4 rounded-lg flex flex-wrap items-center justify-between gap-3">
                                        <span class="text-text_color text-sm font-light font-poppins">Showing 1 of 1 pages</span>
                                        <div class="flex items-center gap-2">
                                            <button type="button" class="border p-1 rounded-md text-text_color text-opacity-80 text-sm font-medium font-poppins flex items-center gap-1">
                                                <i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"></path>
                                                    </svg>
                                                </i>
                                                Previous
                                            </button>
                                            <button type="button" class="border p-1 rounded-md text-text_color text-opacity-80 text-sm font-medium font-poppins flex items-center gap-1">
                                                Next
                                                <i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
                                                    </svg>
                                                </i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab3" class="tab-content hidden">
                            <div class="flex flex-col justify-center items-center">
                                <i>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-40 h-40 text-text_color text-opacity-40">
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"
                                        />
                                    </svg>
                                </i>
                                <p class="text-text_color text-opacity-30 text-xl font-normal font-poppins">
                                    No member found
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- directory area ends  -->


@endsection
