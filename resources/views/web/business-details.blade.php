@extends('web.layout.php')
@section('content')
    <!-- page header area start -->
<section class="page_header bg-[#f9fafd] lg:pt-[70px] pt-10 relative overflow-hidden lg:min-h-[70vh] min-h-[50vh] bg-[url('/src/img/banner/business_bg.png')] bg-cover bg-center bg-no-repeat"></section>
<!-- page header area ends  -->

<!-- businesses area start -->
<section class="businesses_area bg-white lg:py-24 py-16">
    <div class="container mx-auto">
        <div class="section_wrapper">
            <div class="grid grid-cols-12 items-start gap-5">
                <div class="lg:col-span-8 col-span-12 flex flex-col gap-5">
                    <div class="bg-white shadow-theme_shadow rounded-lg">
                        <div class="card_body flex items-center justify-between gap-3 p-4">
                            <div class="flex items-center gap-3">
                                <div class="card_thumb p-1">
                                    <img class="w-[100px] rounded-md" src="../src/img/business/03.png" alt="" />
                                </div>
                                <div class="card_text">
                                    <a href="#0">
                                        <h4 class="text-[#344050] xl:text-2xl lg:text-xl text-lg font-medium font-poppins">
                                            Graduate Network
                                        </h4>
                                    </a>
                                    <p class="text-text_color text-sm font-light font-poppins">
                                        Alumni Engagement Portal
                                    </p>
                                </div>
                            </div>
                            <button type="button" class="w-10 h-10 rounded-full bg-theme_color bg-opacity-25 flex items-center justify-center">
                                <i>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="none" class="w-6 h-6 fill-theme_color">
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"
                                        />
                                    </svg>
                                </i>
                            </button>
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
                <div class="lg:col-span-4 col-span-12 flex flex-col gap-5">
                    <div class="bg-white rounded-lg shadow-theme_shadow p-4">
                        <h4 class="text-[#344050] lg:text-xl text-lg font-normal font-poppins">
                            Offer
                        </h4>
                        <p class="text-base text-[#5e6e82] font-light font-poppins leading-relaxed">
                            5% for PME Alumni
                        </p>
                    </div>
                    <div class="bg-white rounded-lg shadow-theme_shadow p-4">
                        <h4 class="text-[#344050] lg:text-xl text-lg font-normal font-poppins border-b pb-2">
                            More
                        </h4>
                        <h6 class="text-[#5e6e82] text-sm font-medium font-poppins pt-2">
                            Categories
                        </h6>
                        <span class="inline-block bg-theme_color bg-opacity-25 text-xs py-1 px-3 text-theme_color rounded-3xl font-medium font-poppins leading-relaxed mt-2">
                            Business Services
                        </span>
                    </div>
                    <div class="bg-white rounded-lg shadow-theme_shadow p-4">
                        <h4 class="text-[#344050] lg:text-xl text-lg font-normal font-poppins border-b pb-2">
                            Associated Members
                        </h4>
                        <div class="flex items-center gap-2 mt-3">
                            <img src="../src/img/member/testi-1.jpg" class="w-10 h-10 rounded-full" alt="" />
                            <h6 class="text-[#344050] text-sm font-medium font-poppins">
                                Syed Rezwanul Haque Rubel
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- businesses area ends  -->

@endsection
