
@extends('web.layout.index')

@section('content')
    <!-- banner area start -->
    <section class="banner_area lg:pt-[70px] pt-10 relative border-b border-border_color border-opacity-20 overflow-hidden">
        <div class="before_img absolute top-0 left-0">
            <img class="w-[300px]" src="{{ asset('assets/web') }}/img/banner/shap/header-left-shape-1.svg" alt="" />
        </div>
        <div class="container mx-auto">
            <div class="grid grid-cols-2 items-center relative">
                <div class="banner_form py-10 lg:col-span-1 col-span-2 lg:order-1 order-2">
                    <div class="max-w-[450px] lg:ml-0 lg:mr-auto lg:mx-0 mx-auto">
                        <div class="banner_text">
                            <p class="text-[#5e6e82] mt-3 lg:text-lg text-base font-light font-poppins">
                                Join the
                                <strong class="font-medium">Alumni Association</strong> to reconnect with your friends, classmates, seniors &amp; juniors.
                            </p>
                        </div>
                        <div class="grid grid-cols-2 md:gap-5 gap-4 mt-4">
                            <div class="input_group">
                                <label for="email" class="text-text_color text-sm font-normal font-poppins mb-1 inline-block">Email</label>
                                <input type="email" class="border border-border_color border-opacity-50 h-11 rounded-md p-2 w-full focus-visible:border-theme_color focus-visible:outline-none" />
                            </div>
                            <div class="input_group">
                                <label for="password" class="text-text_color text-sm font-normal font-poppins mb-1 inline-block">Password</label>
                                <input type="password" class="border border-border_color border-opacity-50 h-11 rounded-md p-2 w-full focus-visible:border-theme_color focus-visible:outline-none" />
                            </div>
                            <div class="input_btn col-span-2">
                                <button type="button" class="bg-theme_color py-3 px-6 text-white text-center text-sm font-medium font-poppins rounded-md w-full">
                                    Login
                                </button>
                                <a href="#0" class="text-theme_color text-xs font-light font-poppins inline-block mt-2">Forgot password</a>
                                <a type="button" href="{{route('register') }}" class="bg-theme_color bg-opacity-10 text-theme_color py-3 px-6 rounded-md text-sm font-medium font-poppins w-full flex items-center justify-center gap-2 mt-4">
                                    Create an account
                                    <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[14px] h-[14px] text-theme_color">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                        </svg>
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner_thumb -mt-2 lg:col-span-1 col-span-2 lg:order-2 order-1">
                    <div class="lg:w-[50vw] w-full h-[450px] box-border relative">
                        <div class="thumb_bg bg-[url('/src/img/banner/bg-1.png')] bg-left lg:w-full lg:max-w-none max-w-full h-full"></div>
                        <div class="bg_left_shap absolute top-0 left-0 right-0 bottom-0 overflow-hidden lg:block hidden">
                            <svg viewBox="0 0 129 680" fill="none" class="w-auto h-full" xmlns="http://www.w3.org/2000/svg">
                                <path d="M 98.788 0.5 L 0 0.5 L 0 680 L -0.913 680 L 98.788 0.5 Z" fill="white"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner area ends  -->

    <!-- event area start -->
    <section class="event_area md:pb-0 pb-14">
        <div class="container mx-auto relative">
            <div class="event_slider swiper mySwiper py-[60px!important]">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="ev_item border border-border_color border-opacity-50 rounded-md">
                            <div class="lg:p-8 p-5 lg:pb-5 pb-3">
                                <div class="item_img">
                                    <img src="{{ asset('assets/web') }}/img/event/default-event-cover.png" alt="" />
                                </div>
                                <div class="item_text">
                                    <div class="bg-theme_color bg-opacity-30 text-theme_color text-xs font-normal font-poppins rounded-3xl px-2 py-[2px] inline-block">
                                        <div class="flex items-center justify-center gap-1">
                                            <i>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-theme_color">
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z"
                                                    />
                                                </svg>
                                            </i>
                                            Event
                                        </div>
                                    </div>
                                    <a href="#0" class="text-black lg:text-xl text-lg font-semibold font-poppins block">
                                        Web winner
                                    </a>
                                    <div class="flex items-center gap-2 pt-2 pb-3">
                                        <i>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-theme_color">
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z"
                                                />
                                            </svg>
                                        </i>
                                        <span class="text-text_color md:text-lg text-base font-medium font-poppins">May 3, 2023</span>
                                    </div>
                                    <div class="flex flex-wrap items-center justify-between gap-2">
                                        <div class="flex items-center gap-1">
                                            <strong class="text-theme_color">1</strong>
                                            <span class="text-text_color text-opacity-75 text-sm font-normal font-poppins">People are going</span>
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <i>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-text_color text-opacity-75">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </i>
                                            <span class="text-text_color text-opacity-75 text-sm font-normal font-poppins">Registration closing in May 1, 2023</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item_cate border-t border-t-border_color border-opacity-30 flex items-center divide-x divide-text_color divide-opacity-30">
                                <a href="#0" class="text-theme_color text-base font-medium font-poppins w-1/2 text-center p-3">Participate</a>
                                <a href="#0" class="text-text_color text-base font-medium font-poppins flex items-center justify-center p-3 gap-2 w-1/2">
                                    <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-text_color">
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M7.217 10.907a2.25 2.25 0 100 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186l9.566-5.314m-9.566 7.5l9.566 5.314m0 0a2.25 2.25 0 103.935 2.186 2.25 2.25 0 00-3.935-2.186zm0-12.814a2.25 2.25 0 103.933-2.185 2.25 2.25 0 00-3.933 2.185z"
                                            />
                                        </svg>
                                    </i>
                                    Share
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ev_item border border-border_color border-opacity-50 rounded-md">
                            <div class="lg:p-8 p-5 lg:pb-5 pb-3">
                                <div class="item_img">
                                    <img src="{{ asset('assets/web') }}/img/event/default-event-cover.png" alt="" />
                                </div>
                                <div class="item_text">
                                    <div class="bg-theme_color bg-opacity-30 text-theme_color text-xs font-normal font-poppins rounded-3xl px-2 py-[2px] inline-block">
                                        <div class="flex items-center justify-center gap-1">
                                            <i>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-theme_color">
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z"
                                                    />
                                                </svg>
                                            </i>
                                            Event
                                        </div>
                                    </div>
                                    <a href="#0" class="text-black lg:text-xl text-lg font-semibold font-poppins block">
                                        Web winner
                                    </a>
                                    <div class="flex items-center gap-2 pt-2 pb-3">
                                        <i>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-theme_color">
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z"
                                                />
                                            </svg>
                                        </i>
                                        <span class="text-text_color md:text-lg text-base font-medium font-poppins">May 3, 2023</span>
                                    </div>
                                    <div class="flex flex-wrap items-center justify-between gap-2">
                                        <div class="flex items-center gap-1">
                                            <strong class="text-theme_color">1</strong>
                                            <span class="text-text_color text-opacity-75 text-sm font-normal font-poppins">People are going</span>
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <i>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-text_color text-opacity-75">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </i>
                                            <span class="text-text_color text-opacity-75 text-sm font-normal font-poppins">Registration closing in May 1, 2023</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item_cate border-t border-t-border_color border-opacity-30 flex items-center divide-x divide-text_color divide-opacity-30">
                                <a href="#0" class="text-theme_color text-base font-medium font-poppins w-1/2 text-center p-3">Participate</a>
                                <a href="#0" class="text-text_color text-base font-medium font-poppins flex items-center justify-center p-3 gap-2 w-1/2">
                                    <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-text_color">
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M7.217 10.907a2.25 2.25 0 100 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186l9.566-5.314m-9.566 7.5l9.566 5.314m0 0a2.25 2.25 0 103.935 2.186 2.25 2.25 0 00-3.935-2.186zm0-12.814a2.25 2.25 0 103.933-2.185 2.25 2.25 0 00-3.933 2.185z"
                                            />
                                        </svg>
                                    </i>
                                    Share
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ev_item border border-border_color border-opacity-50 rounded-md">
                            <div class="lg:p-8 p-5 lg:pb-5 pb-3">
                                <div class="item_img">
                                    <img src="{{ asset('assets/web') }}/img/event/default-event-cover.png" alt="" />
                                </div>
                                <div class="item_text">
                                    <div class="bg-theme_color bg-opacity-30 text-theme_color text-xs font-normal font-poppins rounded-3xl px-2 py-[2px] inline-block">
                                        <div class="flex items-center justify-center gap-1">
                                            <i>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-theme_color">
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z"
                                                    />
                                                </svg>
                                            </i>
                                            Event
                                        </div>
                                    </div>
                                    <a href="#0" class="text-black lg:text-xl text-lg font-semibold font-poppins block">
                                        Web winner
                                    </a>
                                    <div class="flex items-center gap-2 pt-2 pb-3">
                                        <i>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-theme_color">
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z"
                                                />
                                            </svg>
                                        </i>
                                        <span class="text-text_color md:text-lg text-base font-medium font-poppins">May 3, 2023</span>
                                    </div>
                                    <div class="flex flex-wrap items-center justify-between gap-2">
                                        <div class="flex items-center gap-1">
                                            <strong class="text-theme_color">1</strong>
                                            <span class="text-text_color text-opacity-75 text-sm font-normal font-poppins">People are going</span>
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <i>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-text_color text-opacity-75">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </i>
                                            <span class="text-text_color text-opacity-75 text-sm font-normal font-poppins">Registration closing in May 1, 2023</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item_cate border-t border-t-border_color border-opacity-30 flex items-center divide-x divide-text_color divide-opacity-30">
                                <a href="#0" class="text-theme_color text-base font-medium font-poppins w-1/2 text-center p-3">Participate</a>
                                <a href="#0" class="text-text_color text-base font-medium font-poppins flex items-center justify-center p-3 gap-2 w-1/2">
                                    <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-text_color">
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M7.217 10.907a2.25 2.25 0 100 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186l9.566-5.314m-9.566 7.5l9.566 5.314m0 0a2.25 2.25 0 103.935 2.186 2.25 2.25 0 00-3.935-2.186zm0-12.814a2.25 2.25 0 103.933-2.185 2.25 2.25 0 00-3.933 2.185z"
                                            />
                                        </svg>
                                    </i>
                                    Share
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="ev_item border border-border_color border-opacity-50 rounded-md">
                            <div class="lg:p-8 p-5 lg:pb-5 pb-3">
                                <div class="item_img">
                                    <img src="{{ asset('assets/web') }}/img/event/default-event-cover.png" alt="" />
                                </div>
                                <div class="item_text">
                                    <div class="bg-theme_color bg-opacity-30 text-theme_color text-xs font-normal font-poppins rounded-3xl px-2 py-[2px] inline-block">
                                        <div class="flex items-center justify-center gap-1">
                                            <i>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-theme_color">
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z"
                                                    />
                                                </svg>
                                            </i>
                                            Event
                                        </div>
                                    </div>
                                    <a href="#0" class="text-black lg:text-xl text-lg font-semibold font-poppins block">
                                        Web winner
                                    </a>
                                    <div class="flex items-center gap-2 pt-2 pb-3">
                                        <i>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-theme_color">
                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z"
                                                />
                                            </svg>
                                        </i>
                                        <span class="text-text_color md:text-lg text-base font-medium font-poppins">May 3, 2023</span>
                                    </div>
                                    <div class="flex flex-wrap items-center justify-between gap-2">
                                        <div class="flex items-center gap-1">
                                            <strong class="text-theme_color">1</strong>
                                            <span class="text-text_color text-opacity-75 text-sm font-normal font-poppins">People are going</span>
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <i>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-text_color text-opacity-75">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </i>
                                            <span class="text-text_color text-opacity-75 text-sm font-normal font-poppins">Registration closing in May 1, 2023</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item_cate border-t border-t-border_color border-opacity-30 flex items-center divide-x divide-text_color divide-opacity-30">
                                <a href="#0" class="text-theme_color text-base font-medium font-poppins w-1/2 text-center p-3">Participate</a>
                                <a href="#0" class="text-text_color text-base font-medium font-poppins flex items-center justify-center p-3 gap-2 w-1/2">
                                    <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-text_color">
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M7.217 10.907a2.25 2.25 0 100 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186l9.566-5.314m-9.566 7.5l9.566 5.314m0 0a2.25 2.25 0 103.935 2.186 2.25 2.25 0 00-3.935-2.186zm0-12.814a2.25 2.25 0 103.933-2.185 2.25 2.25 0 00-3.933 2.185z"
                                            />
                                        </svg>
                                    </i>
                                    Share
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination top-full"></div>
            </div>
            <div class="swiper-button-next style_one bg-white shadow-theme_shadow h-[60px!important] w-[60px!important] rounded-full max-md:top-[95%!important]"></div>
            <div class="swiper-button-prev style_one bg-white shadow-theme_shadow h-[60px!important] w-[60px!important] rounded-full max-md:top-[95%!important]"></div>
        </div>
    </section>
    <!-- event area ends  -->

    <!-- globe network start -->
    <section class="bg-[#f9fafd] lg:py-20 py-12">
        <div class="container mx-auto">
            <div class="grid md:grid-cols-9 grid-cols-2 lg:gap-10 gap-6">
                <div class="md:col-span-4 col-span-2 md:order-1 order-2">
                    <div class="text_content max-w-[354px] ml-0">
                        <h4 class="text-[#344050] xl:text-4xl lg:text-3xl text-2xl font-medium font-poppins">
                            Your Network <br />
                            Around the Globe
                        </h4>
                        <p class="text-[#9da9bb] md:text-base text-sm font-medium font-poppins my-3">
                            Easily Find your Connections Everywhere
                        </p>
                        <ul class="flex items-center gap-3 divide-x my-8">
                            <li>
                                <p class="text-theme_color lg:text-3xl md:text-2xl text-xl font-medium font-poppins">
                                    50
                                </p>
                                <span class="text-[#9da9bb] text-sm font-medium font-poppins">Members</span>
                            </li>
                            <li class="pl-3">
                                <p class="text-theme_color lg:text-3xl md:text-2xl text-xl font-medium font-poppins">
                                    9
                                </p>
                                <span class="text-[#9da9bb] text-sm font-medium font-poppins">Organization</span>
                            </li>
                            <li class="pl-3">
                                <p class="text-theme_color lg:text-3xl md:text-2xl text-xl font-medium font-poppins">
                                    4
                                </p>
                                <span class="text-[#9da9bb] text-sm font-medium font-poppins">Initiatives</span>
                            </li>
                        </ul>
                        <button type="button" class="bg-theme_color py-3 px-4 rounded-md text-white text-sm font-medium font-poppins flex items-center justify-center gap-2 w-full">
                            Join your community
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                            </i>
                        </button>
                    </div>
                </div>
                <div class="md:col-span-5 col-span-2 md:order-2 order-1">
                    <div class="our_glob_map rounded-md border border-theme_color border-opacity-60">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.8740308756455!2d-0.07431928777881495!3d51.5155270099921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761d223da79295%3A0xa96d6f1138343d68!2sBritish%20Marketplace!5e0!3m2!1sen!2sbd!4v1685947209901!5m2!1sen!2sbd"
                            class="w-full h-[350px]"
                            style="border: 0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                        ></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- globe network ends  -->

    <!-- news blog area start -->
    <section class="news_blog lg:py-20 py-10">
        <div class="container mx-auto">
            <div class="section_header max-w-[500px] mx-auto text-center">
                <h3 class="text-[#344050] xl:text-4xl lg:text-3xl text-2xl font-medium font-poppins">
                    Latest news about your <br />
                    community
                </h3>
            </div>
            <div class="section_wrapper mt-12">
                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-5">
                    <div class="blog_item border border-border_color border-opacity-30 rounded-md">
                        <div class="item_thumb">
                            <img class="w-full rounded-tl-md rounded-tr-md" src="{{ asset('assets/web') }}/img/blog/blog-1.jpg" alt="" />
                        </div>
                        <div class="item_text">
                            <div class="p-5">
                                <a href="#0">
                                    <h4 class="text-[#4d5969] xl:text-xl md:text-lg text-base font-medium font-poppins pb-3">
                                        Mentoring is a great way for our alumni community to connect with each other and our students.
                                    </h4>
                                </a>
                                <p class="text-[#9da9bb] text-base font-medium font-poppins">
                                    We caught up with MBA graduate and podcaster, Reza Haque, and second-year Fine Art student
                                </p>
                            </div>
                            <a href="news-details.html" class="p-5 rounded-bl-md rounded-br-md border-t border-t-border_color border-opacity-30 text-theme_color flex items-center gap-2 text-sm font-medium font-poppins">
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
                            <img class="w-full rounded-tl-md rounded-tr-md" src="{{ asset('assets/web') }}/img/blog/blog-2.jpg" alt="" />
                        </div>
                        <div class="item_text">
                            <div class="p-5">
                                <a href="#0">
                                    <h4 class="text-[#4d5969] xl:text-xl md:text-lg text-base font-medium font-poppins pb-3">
                                        Mentoring is a great way for our alumni community to connect with each other and our students.
                                    </h4>
                                </a>
                                <p class="text-[#9da9bb] text-base font-medium font-poppins">
                                    We caught up with MBA graduate and podcaster, Reza Haque, and second-year Fine Art student
                                </p>
                            </div>
                            <a href="news-details.html" class="p-5 rounded-bl-md rounded-br-md border-t border-t-border_color border-opacity-30 text-theme_color flex items-center gap-2 text-sm font-medium font-poppins">
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
                            <img class="w-full rounded-tl-md rounded-tr-md" src="{{ asset('assets/web') }}/img/blog/blog-3.jpg" alt="" />
                        </div>
                        <div class="item_text">
                            <div class="p-5">
                                <a href="#0">
                                    <h4 class="text-[#4d5969] xl:text-xl md:text-lg text-base font-medium font-poppins pb-3">
                                        Mentoring is a great way for our alumni community to connect with each other and our students.
                                    </h4>
                                </a>
                                <p class="text-[#9da9bb] text-base font-medium font-poppins">
                                    We caught up with MBA graduate and podcaster, Reza Haque, and second-year Fine Art student
                                </p>
                            </div>
                            <a href="news-details.html" class="p-5 rounded-bl-md rounded-br-md border-t border-t-border_color border-opacity-30 text-theme_color flex items-center gap-2 text-sm font-medium font-poppins">
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
            </div>
        </div>
    </section>

    <!-- news blog area ends  -->

    <!-- story area start -->
    <section class="story_area bg-[#f9fafd]">
        <div class="container mx-auto">
            <div class="story_slider">
                <div class="grid grid-cols-2 items-center relative">
                    <div class="banner_thumb lg:col-span-1 col-span-2 relative">
                        <div class="thumb_bg bg-[url('/src/img/story/01.jpg')] lg:w-[57vw] w-full lg:min-h-[400px] min-h-[200px] bg-cover lg:bg-left-top bg-center overflow-hidden will-change-transform bg-no-repeat float-right"></div>
                        <div class="bg_shape absolute inset-0 overflow-hidden lg:block hidden">
                            <svg viewBox="0 0 122 496" fill="none" class="absolute inset-0 left-auto origin-center w-auto h-full scale-100" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 0H122V496H104L0 0Z" fill="#f9fafd"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="story_content lg:p-20 p-5 lg:col-span-1 col-span-2">
                        <div class="content_inner max-w-[450px]">
                            <h4 class="text-[#344050] lg:text-3xl text-xl font-normal font-poppins pb-2">
                                Distribution of winter clothing to the underprivileged
                            </h4>
                            <p class="text-[#9da9bb] md:text-base text-start font-normal font-poppins">
                                Even though the winter is welcomed by the privileged wealthy people by colorful pashminas and festive moods, it brings a
                            </p>
                            <div class="flex items-center gap-5 mt-7">
                                <button type="button" class="bg-theme_color text-white text-sm font-medium font-poppins py-2 px-4 rounded-md flex items-center gap-1">
                                    Read full story
                                    <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-white">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                        </svg>
                                    </i>
                                </button>
                                <button type="button" class="bg-[#edf2f9] text-theme_color text-sm font-medium font-poppins py-2 px-4 rounded-md flex items-center gap-1">
                                    All stories
                                    <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-theme_color">
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

    <!-- story area ends  -->

    <!-- member area start -->
    <section class="member_area lg:py-20 py-10 relative">
      <div class="mian_shape absolute -bottom-16 left-0">
        <img src="{{ asset('assets/web') }}/img/member/shape/03.png" alt="" />
      </div>
      <div class="container mx-auto relative">
        <div class="member_shape absolute -bottom-10 right-0 md:block hidden">
          <img src="{{ asset('assets/web') }}/img/member/shape/02.png" alt="" />
        </div>
        <div class="grid grid-cols-9 gap-5 items-center">
          <div
            class="text_content xl:pl-16 max-w-[380px] md:mx-0 mx-auto lg:col-span-4 md:col-span-3 col-span-9 md:order-1 order-2 relative"
          >
            <div
              class="recent_shape absolute -top-[75px] -left-[65px] md:block hidden"
            >
              <img src="{{ asset('assets/web') }}/img/member/shape/01.png" alt="" />
            </div>
            <h4
              class="text-[#344050] lg:text-4xl md:text-2xl text-xl font-medium font-poppins"
            >
              Recently joined members
            </h4>
            <p class="text-[#9da9bb] text-base font-medium font-poppins py-6">
              Some Forward-Thinking People Like You Already Joined
            </p>
            <button
              type="button"
              class="bg-theme_color text-white text-sm font-medium font-poppins py-2 px-8 rounded-md flex items-center gap-1"
            >
              Join Now
              <i>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="w-4 h-4 text-white"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M8.25 4.5l7.5 7.5-7.5 7.5"
                  />
                </svg>
              </i>
            </button>
          </div>
          <div
            class="all_member lg:col-span-5 md:col-span-6 col-span-9 max-w-[480px] md:mx-0 mx-auto md:order-2 order-1"
          >
            <ul class="flex flex-wrap items-center gap-5">
              <li>
                <a
                  href="#0"
                  class="inline-block h-24 w-24 rounded-full border-4"
                >
                  <img
                    class="w-full h-full rounded-full"
                    src="{{ asset('assets/web') }}/img/member/testi-1.jpg"
                    alt=""
                  />
                </a>
              </li>
              <li>
                <a
                  href="#0"
                  class="inline-block h-24 w-24 rounded-full border-4"
                >
                  <img
                    class="w-full h-full rounded-full"
                    src="{{ asset('assets/web') }}/img/member/testi-2.jpg"
                    alt=""
                  />
                </a>
              </li>
              <li>
                <a
                  href="#0"
                  class="inline-block h-24 w-24 rounded-full border-4"
                >
                  <img
                    class="w-full h-full rounded-full"
                    src="{{ asset('assets/web') }}/img/member/testi-3.jpg"
                    alt=""
                  />
                </a>
              </li>
              <li>
                <a
                  href="#0"
                  class="inline-block h-24 w-24 rounded-full border-4"
                >
                  <img
                    class="w-full h-full rounded-full"
                    src="{{ asset('assets/web') }}/img/member/testi-1.jpg"
                    alt=""
                  />
                </a>
              </li>
              <li>
                <a
                  href="#0"
                  class="inline-block h-24 w-24 rounded-full border-4"
                >
                  <img
                    class="w-full h-full rounded-full"
                    src="{{ asset('assets/web') }}/img/member/testi-2.jpg"
                    alt=""
                  />
                </a>
              </li>
              <li>
                <a
                  href="#0"
                  class="inline-block h-24 w-24 rounded-full border-4"
                >
                  <img
                    class="w-full h-full rounded-full"
                    src="{{ asset('assets/web') }}/img/member/testi-3.jpg"
                    alt=""
                  />
                </a>
              </li>
              <li>
                <a
                  href="#0"
                  class="inline-block h-24 w-24 rounded-full border-4"
                >
                  <img
                    class="w-full h-full rounded-full"
                    src="{{ asset('assets/web') }}/img/member/testi-1.jpg"
                    alt=""
                  />
                </a>
              </li>
              <li>
                <a
                  href="#0"
                  class="inline-block h-24 w-24 rounded-full border-4"
                >
                  <img
                    class="w-full h-full rounded-full"
                    src="{{ asset('assets/web') }}/img/member/testi-2.jpg"
                    alt=""
                  />
                </a>
              </li>
              <li>
                <a
                  href="#0"
                  class="inline-block h-24 w-24 rounded-full border-4"
                >
                  <img
                    class="w-full h-full rounded-full"
                    src="{{ asset('assets/web') }}/img/member/testi-1.jpg"
                    alt=""
                  />
                </a>
              </li>
              <li>
                <a
                  href="#0"
                  class="inline-block h-24 w-24 rounded-full border-4"
                >
                  <img
                    class="w-full h-full rounded-full"
                    src="{{ asset('assets/web') }}/img/member/testi-2.jpg"
                    alt=""
                  />
                </a>
              </li>
              <li>
                <a
                  href="#0"
                  class="inline-block h-24 w-24 rounded-full border-4"
                >
                  <img
                    class="w-full h-full rounded-full"
                    src="{{ asset('assets/web') }}/img/member/testi-3.jpg"
                    alt=""
                  />
                </a>
              </li>
              <li>
                <a
                  href="#0"
                  class="inline-block h-24 w-24 rounded-full border-4"
                >
                  <img
                    class="w-full h-full rounded-full"
                    src="{{ asset('assets/web') }}/img/member/testi-1.jpg"
                    alt=""
                  />
                </a>
              </li>
              <li>
                <a
                  href="#0"
                  class="inline-block h-24 w-24 rounded-full border-4"
                >
                  <img
                    class="w-full h-full rounded-full"
                    src="{{ asset('assets/web') }}/img/member/testi-2.jpg"
                    alt=""
                  />
                </a>
              </li>
              <li>
                <a
                  href="#0"
                  class="inline-block h-24 w-24 rounded-full border-4"
                >
                  <img
                    class="w-full h-full rounded-full"
                    src="{{ asset('assets/web') }}/img/member/testi-3.jpg"
                    alt=""
                  />
                </a>
              </li>
              <li>
                <a
                  href="#0"
                  class="inline-block h-24 w-24 rounded-full border-4"
                >
                  <img
                    class="w-full h-full rounded-full"
                    src="{{ asset('assets/web') }}/img/member/testi-1.jpg"
                    alt=""
                  />
                </a>
              </li>
              <li>
                <a
                  href="#0"
                  class="inline-block h-24 w-24 rounded-full border-4"
                >
                  <img
                    class="w-full h-full rounded-full"
                    src="{{ asset('assets/web') }}/img/member/testi-2.jpg"
                    alt=""
                  />
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- member area ends  -->

    <!-- service area start -->
    <section class="service_area lg:py-20 py-10 relative overflow-hidden">
      <div class="sec_bg absolute left-0 bottom-0 right-0">
        <img
          class="w-full"
          src="{{ asset('assets/web') }}/img/service/service-background-shape.svg"
          alt=""
        />
      </div>
      <div class="container mx-auto relative">
        <div class="section_header text-center pb-10">
          <span
            class="text-[#9da9bb] md:text-lg text-base font-light font-poppins inline-block"
            >Still thinking over in?</span
          >
          <h3
            class="text-[#344050] lg:text-4xl md:text-2xl text-xl font-medium font-poppins"
          >
            Here us why you should join us
          </h3>
        </div>
        <div class="section_wrapper">
          <div class="grid lg:grid-cols-3 sm:grid-cols-2 gap-5">
            <div
              class="why_item bg-white border border-[#b6c1d2] shadow-theme_shadow rounded-lg xl:p-8 lg:p-6 p-5 text-center hover:border-theme_color hover:scale-[1.02] transition-all"
            >
              <div class="item_thumb">
                <img
                  class="mx-auto"
                  src="{{ asset('assets/web') }}/img/service/service-image-1.svg"
                  alt=""
                />
              </div>
              <div class="item_text pt-4">
                <span
                  class="bg-theme_color bg-opacity-25 text-theme_color py-[2px] px-2 rounded-3xl inline-block text-xs font-normal font-poppins"
                  >Reconnect</span
                >
                <p
                  class="text-[#4d5969] md:text-xl text-lg font-medium font-poppins mt-6"
                >
                  Reunite with the members of Alumni in a secured, ad-free
                  online Network.
                </p>
              </div>
            </div>
            <div
              class="why_item bg-white border border-[#b6c1d2] shadow-theme_shadow rounded-lg xl:p-8 lg:p-6 p-5 text-center hover:border-theme_color hover:scale-[1.02] transition-all"
            >
              <div class="item_thumb">
                <img
                  class="mx-auto"
                  src="{{ asset('assets/web') }}/img/service/service-image-2.svg"
                  alt=""
                />
              </div>
              <div class="item_text pt-4">
                <span
                  class="bg-theme_color bg-opacity-25 text-theme_color py-[2px] px-2 rounded-3xl inline-block text-xs font-normal font-poppins"
                  >Give Back</span
                >
                <p
                  class="text-[#4d5969] md:text-xl text-lg font-medium font-poppins mt-6"
                >
                  Provide help & donation to various causes through fundraising
                  events.
                </p>
              </div>
            </div>
            <div
              class="why_item bg-white border border-[#b6c1d2] shadow-theme_shadow rounded-lg xl:p-8 lg:p-6 p-5 text-center hover:border-theme_color hover:scale-[1.02] transition-all"
            >
              <div class="item_thumb">
                <img
                  class="mx-auto"
                  src="{{ asset('assets/web') }}/img/service/service-image-3.svg"
                  alt=""
                />
              </div>
              <div class="item_text pt-4">
                <span
                  class="bg-theme_color bg-opacity-25 text-theme_color py-[2px] px-2 rounded-3xl inline-block text-xs font-normal font-poppins"
                  >Advance</span
                >
                <p
                  class="text-[#4d5969] md:text-xl text-lg font-medium font-poppins mt-6"
                >
                  Evolve in your career, post a job, and look for opportunities
                  in your network.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- service area ends  -->

    <!-- media area start -->
    <section
      class="media_area lg:py-24 py-16 bg-[url('/src/img/media/bg-2.png')] bg-center w-full min-h-full overflow-hidden will-change-transform bg-no-repeat"
    >
      <div class="container mx-auto">
        <div class="section-wrapper max-w-[1080px] mx-auto text-center">
          <h3
            class="text-[#f9fafd] lg:text-4xl lg:leading-normal md:text-2xl md:leading-normal text-xl leading-normal font-medium font-poppins"
          >
            Join today Alumni Association. Build your network, reunite with
            everyone from your Department. Grow & evolve in your career with us.
          </h3>
          <button
            type="button"
            class="bg-[#f9fafd] mx-auto mt-10 text-theme_color py-3 px-8 text-sm font-medium font-poppins rounded-md flex items-center justify-center gap-1"
          >
            Sign up now
            <i>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-4 h-4 text-theme_color"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M8.25 4.5l7.5 7.5-7.5 7.5"
                />
              </svg>
            </i>
          </button>
        </div>
      </div>
    </section>
@endsection
