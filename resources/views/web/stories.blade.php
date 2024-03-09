@extends('web.layout.index')
@section('content')

    <!-- directory area start -->
    <section class="directory_area bg-[#f9fafd] lg:py-24 pt-[120px!important] py-16">
        <div class="container mx-auto">
            <div class="page_header pb-8">
                <h4 class="text-[#344050] lg:text-3xl md:text-2xl text-xl font-medium font-poppins">
                    Latest Stories
                </h4>
            </div>
            <div class="section_wrapper">
                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-5">
                    <div class="blog_item border border-border_color border-opacity-30 rounded-md">
                        <div class="item_thumb">
                            <img class="w-full rounded-tl-md rounded-tr-md" src="../src/img/story/01.jpg" alt="" />
                        </div>
                        <div class="item_text">
                            <div class="p-5">
                                <a href="#0">
                                    <h4 class="text-[#4d5969] xl:text-xl md:text-lg text-base font-medium font-poppins pb-3 h-[65px] line-clamp-2">
                                        Distribution of winter clothing to the underprivileged
                                    </h4>
                                </a>
                                <p class="text-[#9da9bb] text-base font-medium font-poppins">
                                    Even though the winter is welcomed by the privileged wealthy people by colorful pashminas and ...
                                </p>
                            </div>
                            <a href="stories-details.html" class="p-5 rounded-bl-md rounded-br-md border-t border-t-border_color border-opacity-30 text-theme_color flex items-center gap-2 text-sm font-medium font-poppins">
                                Read more
                                <i>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-theme_color">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </i>
                            </a>
                        </div>
                    </div>
                    <div class="blog_item border border-border_color border-opacity-30 rounded-md">
                        <div class="item_thumb">
                            <img class="w-full rounded-tl-md rounded-tr-md" src="../src/img/story/02.jpg" alt="" />
                        </div>
                        <div class="item_text">
                            <div class="p-5">
                                <a href="#0">
                                    <h4 class="text-[#4d5969] xl:text-xl md:text-lg text-base font-medium font-poppins pb-3 h-[65px] line-clamp-2">
                                        BUET team becomes Asia West Champion in international programming contest
                                    </h4>
                                </a>
                                <p class="text-[#9da9bb] text-base font-medium font-poppins">
                                    A team from the Bangladesh University of Engineering and Technology (BUET) has been crowned ‘The ...
                                </p>
                            </div>
                            <a href="stories-details.html" class="p-5 rounded-bl-md rounded-br-md border-t border-t-border_color border-opacity-30 text-theme_color flex items-center gap-2 text-sm font-medium font-poppins">
                                Read more
                                <i>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-theme_color">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </i>
                            </a>
                        </div>
                    </div>
                    <div class="blog_item border border-border_color border-opacity-30 rounded-md">
                        <div class="item_thumb">
                            <img class="w-full rounded-tl-md rounded-tr-md" src="../src/img/story/03.jpg" alt="" />
                        </div>
                        <div class="item_text">
                            <div class="p-5">
                                <a href="#0">
                                    <h4 class="text-[#4d5969] xl:text-xl md:text-lg text-base font-medium font-poppins pb-3 h-[65px] line-clamp-2">
                                        SUST CSE is producing top-notch programmers
                                    </h4>
                                </a>
                                <p class="text-[#9da9bb] text-base font-medium font-poppins">
                                    Some great news to share!From CSE SUST '11 Gaurab Khairullah has recently joined Amazon dublin ...
                                </p>
                            </div>
                            <a href="stories-details.html" class="p-5 rounded-bl-md rounded-br-md border-t border-t-border_color border-opacity-30 text-theme_color flex items-center gap-2 text-sm font-medium font-poppins">
                                Read more
                                <i>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-theme_color">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </i>
                            </a>
                        </div>
                    </div>
                    <div class="blog_item border border-border_color border-opacity-30 rounded-md">
                        <div class="item_thumb">
                            <img class="w-full rounded-tl-md rounded-tr-md" src="../src/img/story/04.jpg" alt="" />
                        </div>
                        <div class="item_text">
                            <div class="p-5">
                                <a href="#0">
                                    <h4 class="text-[#4d5969] xl:text-xl md:text-lg text-base font-medium font-poppins pb-3 h-[65px] line-clamp-2">
                                        From SUST to Google
                                    </h4>
                                </a>
                                <p class="text-[#9da9bb] text-base font-medium font-poppins">
                                    Syed Rezwanul Haque is an entrepreneur. He co-founded Technext Limited in 2012 with only 2 ...
                                </p>
                            </div>
                            <a href="stories-details.html" class="p-5 rounded-bl-md rounded-br-md border-t border-t-border_color border-opacity-30 text-theme_color flex items-center gap-2 text-sm font-medium font-poppins">
                                Read more
                                <i>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-theme_color">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </i>
                            </a>
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
    </section>
    <!-- directory area ends  -->


@endsection
