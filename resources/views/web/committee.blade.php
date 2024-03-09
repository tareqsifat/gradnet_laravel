@extends('web.layout.index')
@section('content')
    <!-- committee area start -->
    <section class="committee_area bg-[#f9fafd] lg:py-24 pt-[120px!important] py-16">
        <div class="container mx-auto">
            <div class="page_header text-center pb-10">
                <h4 class="text-[#344050] lg:text-3xl md:text-2xl text-xl font-normal font-poppins">
                    Committee
                </h4>
            </div>
            <div class="section_wrapper">
                <div class="bg-white shadow-theme_shadow rounded-md grid grid-cols-9">
                    <div class="card_nav md:col-span-3 col-span-9 border-r flex flex-col justify-between">
                        <div class="flex divide-x items-start">
                            <button type="button" id="tab1-link" class="bg-white shadow-bmpshadow p-3 flex min-w-[140px] rounded-tl-md w-[calc(100%_/_2)] border-b border-b-theme_color" onclick="changeTab(0)">
                                <p class="text-black text-base font-normal font-archivo">
                                    Active
                                </p>
                            </button>
                            <button type="button" id="tab2-link" class="bg-white shadow-bmpshadow p-3 flex min-w-[140px] w-[calc(100%_/_2)] border-b" onclick="changeTab(1)">
                                <p class="text-black text-base font-normal font-archivo">
                                    Previous
                                </p>
                            </button>
                        </div>
                        <div class="member_menu flex flex-col h-full">
                            <button type="button" class="bg-theme_color text-left bg-opacity-10 text-theme_color p-2 text-base font-normal font-poppins">
                                Executive Committee
                            </button>
                            <button type="button" class="text-left text-text_color p-2 text-base font-normal font-poppins">
                                Finance Committee
                            </button>
                        </div>
                        <div class="border-t flex flex-wrap items-center justify-between p-3 gap-4">
                            <span class="text-text_color text-sm font-normal font-poppins">Showing 1 of 1 pages</span>
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
                    <div class="card_nav_panel md:col-span-6 col-span-9">
                        <div id="tab1" class="tab-content">
                            <div class="panel_header bg-[#f9fafd] p-4 rounded-tr-md border-b">
                                <h4 class="text-[#344050] text-base leading-3 font-medium font-poppins">
                                    Executive Committee
                                </h4>
                                <span class="text-[#344050] text-xs font-light font-poppins">01 April 2020 - 31 December 2021</span>
                            </div>
                            <div class="panel_body p-4">
                                <p class="text-text_color text-base font-light leading-normal font-poppins">
                                    Considering this situation, IUTAA is proposing to create a "CoronaVirus Crisis Fund". This fundraising is not limited to only alumni. Any current student/faculty/general people can participate to this noble
                                    cause.
                                </p>
                                <ul class="flex flex-wrap xl:gap-10 lg:gap-5 gap-3 py-8">
                                    <li>
                                        <div class="member_item text-center">
                                            <a href="#0" class="inline-block h-24 w-24 rounded-full border-4">
                                                <img class="w-full h-full rounded-full" src="../src/img/member/testi-1.jpg" alt="" />
                                            </a>
                                            <h6 class="text-text_color text-xs font-medium font-poppins">
                                                Md. Sayem
                                            </h6>
                                            <span class="inline-block text-text_color text-xs font-light font-poppins">Software engineer</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="member_item text-center">
                                            <a href="#0" class="inline-block h-24 w-24 rounded-full border-4">
                                                <img class="w-full h-full rounded-full" src="../src/img/member/testi-2.jpg" alt="" />
                                            </a>
                                            <h6 class="text-text_color text-xs font-medium font-poppins">
                                                Mrs. Mourin
                                            </h6>
                                            <span class="inline-block text-text_color text-xs font-light font-poppins">Ui/Ux designer</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="member_item text-center">
                                            <a href="#0" class="inline-block h-24 w-24 rounded-full border-4">
                                                <img class="w-full h-full rounded-full" src="../src/img/member/testi-3.jpg" alt="" />
                                            </a>
                                            <h6 class="text-text_color text-xs font-medium font-poppins">
                                                Md. Monir
                                            </h6>
                                            <span class="inline-block text-text_color text-xs font-light font-poppins">Flutter developer</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="tab2" class="tab-content hidden">
                            <div class="panel_header bg-[#f9fafd] p-4 rounded-tr-md border-b">
                                <h4 class="text-[#344050] text-base leading-3 font-medium font-poppins">
                                    Executive Committee 2020-2022
                                </h4>
                            </div>
                            <div class="panel_body p-4">
                                <ul class="flex flex-wrap xl:gap-10 lg:gap-5 gap-3 py-8">
                                    <li>
                                        <div class="member_item text-center">
                                            <a href="#0" class="inline-block h-24 w-24 rounded-full border-4">
                                                <img class="w-full h-full rounded-full" src="../src/img/member/testi-1.jpg" alt="" />
                                            </a>
                                            <h6 class="text-text_color text-xs font-medium font-poppins">
                                                Md. Sayem
                                            </h6>
                                            <span class="inline-block text-text_color text-xs font-light font-poppins">Software engineer</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="member_item text-center">
                                            <a href="#0" class="inline-block h-24 w-24 rounded-full border-4">
                                                <img class="w-full h-full rounded-full" src="../src/img/member/testi-2.jpg" alt="" />
                                            </a>
                                            <h6 class="text-text_color text-xs font-medium font-poppins">
                                                Mrs. Mourin
                                            </h6>
                                            <span class="inline-block text-text_color text-xs font-light font-poppins">Ui/Ux designer</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="member_item text-center">
                                            <a href="#0" class="inline-block h-24 w-24 rounded-full border-4">
                                                <img class="w-full h-full rounded-full" src="../src/img/member/testi-3.jpg" alt="" />
                                            </a>
                                            <h6 class="text-text_color text-xs font-medium font-poppins">
                                                Md. Monir
                                            </h6>
                                            <span class="inline-block text-text_color text-xs font-light font-poppins">Flutter developer</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- committee area ends  -->

@endsection
