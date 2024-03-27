<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Style -->
        <link rel="stylesheet" href="{{ asset('assets/web') }}/css/custom.css" />
        <!-- Title -->
        <title>DCS Alumni</title>
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('assets/web/img/logo/icon-title.png') }}">
    </head>
    <body>
        <style>
            .bg-\[url\(\'\/src\/img\/banner\/bg-1\.png\'\)\]{
                background-image: url("{{ asset('assets/web') }}/img/banner/bg-1.png");
            }

            .bg-\[url\(\'\/src\/img\/banner\/business_bg\.png\'\)\]{
                background-image: url("{{ asset('assets/web') }}/img/banner/business_bg.png");
            }

            .bg-\[url\(\'\/src\/img\/media\/bg-2\.png\'\)\]{
                background-image: url("{{ asset('assets/web') }}/img/media/bg-2.png");
            }

            .bg-\[url\(\'\/src\/img\/story\/01\.jpg\'\)\]{
                background-image: url("{{ asset('assets/web') }}/img/story/01.jpg");
            }
            /* Dropdown container */
            .dropdown {
                position: relative;
                display: inline-block;
            }

            /* Dropdown button */
            .dropbtn {
                background-color: transparent;
                color: inherit;
                padding: 0;
                border: none;
                cursor: pointer;
            }

            /* Dropdown content (hidden by default) */
            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            /* Links inside the dropdown */
            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            /* Change color of dropdown links on hover */
            .dropdown-content a:hover {
                background-color: #f1f1f1;
            }

            /* Show the dropdown menu on hover */
            .dropbtn:hover + .dropdown-content {
                display: block;
            }
            .dropdown:hover .dropdown-content {
                display: block;
            }

            .dropdown-content:hover{
                display: block;
            }

        </style>
        <!-- header area start -->
        <header class="bg-white border-b border-b-[#d8e2ef] fixed top-0 left-0 w-full z-50">
            <div class="container mx-auto">
                <div class="header_menu flex items-center justify-between gap-10 max-lg:py-3">
                <div class="logo_area">
                    <a href="{{ route('home') }}">
                    <img class="w-10" src="{{ asset('assets/web') }}/img/logo/logo.jpeg" alt="" />
                    </a>
                </div>
                <div id="toggle_menu"
                    class="left_position bg-white main_menu flex lg:flex-row flex-col lg:items-center lg:justify-between lg:gap-10 gap-4 max-lg:p-10 lg:w-[calc(100%_-_80px)] md:w-[400px] w-[300px] lg:static fixed top-0 max-lg:shadow-theme_shadow h-full transition-all">
                    <ul class="flex lg:flex-row flex-col lg:items-center items-start lg:gap-5 gap-1">
                    <li>
                        <a href="{{ route('about') }}"
                        class="text-black text-opacity-80 text-[13.5px] lg:py-6 py-1 inline-block font font-semibold font-poppins hover:text-black transition-all">
                        About
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}"
                        class="text-[#0000008c] text-opacity-80 text-[13.5px] lg:py-6 py-1 inline-block font font-semibold font-poppins hover:text-black transition-all">
                        Contact
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('committee') }}"
                        class="text-[#0000008c] text-opacity-80 text-[13.5px] lg:py-6 py-1 inline-block font font-semibold font-poppins hover:text-black transition-all">
                        Committee
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('business') }}"
                        class="text-[#0000008c] text-opacity-80 text-[13.5px] lg:py-6 py-1 inline-block font font-semibold font-poppins hover:text-black transition-all"
                        >Businesses</a>
                    </li>
                    <li>
                        <a href="{{ route('directories') }}"
                        class="text-[#0000008c] text-opacity-80 text-[13.5px] lg:py-6 py-1 inline-block font font-semibold font-poppins hover:text-black transition-all">
                        Directory
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('articles') }}"
                        class="text-[#0000008c] text-opacity-80 text-[13.5px] lg:py-6 py-1 inline-block font font-semibold font-poppins hover:text-black transition-all">
                        Articles
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('news') }}"
                        class="text-[#0000008c] text-opacity-80 text-[13.5px] lg:py-6 py-1 inline-block font font-semibold font-poppins hover:text-black transition-all">
                        News
                        </a
                        >
                    </li>
                    <li>
                        <a
                        href="{{ route('stories') }}"
                        class="text-[#0000008c] text-opacity-80 text-[13.5px] lg:py-6 py-1 inline-block font font-semibold font-poppins hover:text-black transition-all"
                        >Stories</a
                        >
                    </li>
                    <li>
                        <a
                        href="{{ route('offer') }}"
                        class="text-[#0000008c] text-opacity-80 text-[13.5px] lg:py-6 py-1 inline-block font font-semibold font-poppins hover:text-black transition-all"
                        >Offer</a
                        >
                    </li>
                    </ul>
                    <div class="auth_dropdown">
                        {{-- @if (auth()->check()) --}}
                            {{-- <span>{{auth()->user()->name}}</span> --}}
                            {{-- <select name="" id="">
                                <option value="">{{auth()->user()->name}}</option>
                                <option value="" class="logout">
                                    <a href="{{ route('logout') }}">
                                        logout
                                    </a>
                                </option>
                            </select> --}}
                        {{-- @else --}}
                            <button type="button" class="flex items-center gap-1 group">
                                <span class="text-[#0000008c] text-sm font-medium font-poppins group-hover:text-black transition-all">
                                    @auth()
                                        <div class="dropdown">
                                            <button class="dropbtn">{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}</button>
                                            <div class="dropdown-content">
                                                <a href="{{ route('user-dashboard')}}">User Dashboard</a>
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    @endauth
                                    @guest
                                        <a href="{{ route('login') }}">Login</a>
                                    @endguest
                                </span>

                                <i>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="none"
                                        class="w-[14px] h-[14px] fill-[#0000008c] group-hover:fill-black">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                                    </svg>
                                </i>
                            </button>
                        {{-- @endif --}}
                    </div>
                </div>
                <div class="lg:hidden">
                    <button type="button" id="toggle_bars">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        class="w-10 h-10"
                    >
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25"
                        />
                    </svg>
                    </button>
                </div>
                </div>
            </div>
        </header>
        <!-- header area ends  -->
        @yield('content')
        <!-- footer area start -->
        <footer class="bg-[#0b1727]">
            <div class="container mx-auto">
                <div class="lg:pt-20 pt-10 pb-8">
                    <div class="grid grid-cols-12 gap-5">
                        <div class="xl:col-span-4 lg:col-span-3 md:col-span-4 col-span-12">
                            <h4 class="text-[#f9fafd] md:text-lg text-base uppercase font-medium font-poppins pb-2">
                                About
                            </h4>
                            <p class="text-[#b6c1d2] text-base font-normal font-poppins">
                                Gradnet enables alumni to be collaborate easily, helps to grow the grow the bond among them.
                            </p>
                            <a href="#0" class="text-white text-base font-medium font-poppins flex items-center gap-1 mt-5">
                                Read more
                                <i>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>
                                </i>
                            </a>
                            <ul class="flex items-center gap-4 mt-8">
                                <li>
                                    <a href="#0" class="flex items-center justify-center bg-white text-[#3c5a99] h-10 w-10 rounded-full">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" class="w-3 h-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                            <path
                                                fill="currentColor"
                                                d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"
                                            ></path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="flex items-center justify-center bg-white text-[#1da1f2] h-10 w-10 rounded-full">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" class="h-4 w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path
                                                fill="currentColor"
                                                d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"
                                            ></path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="flex items-center justify-center bg-white text-[#0077b5] h-10 w-10 rounded-full">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in" class="w-4 h-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path
                                                fill="currentColor"
                                                d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"
                                            ></path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="xl:col-span-8 lg:col-span-7 md:col-span-8 col-span-12 xl:pl-20 md:pl-8">
                            <div class="grid lg:grid-cols-3 grid-cols-2 gap-5">
                                <div class="footer_links">
                                    <h4 class="text-[#f9fafd] md:text-lg text-base uppercase font-medium font-poppins pb-2">
                                        Links
                                    </h4>
                                    <ul class="flex flex-col gap-2 text-[#b6c1d2] text-base font-light font-poppins">
                                        <li>
                                            <a class="hover:underline transition-all" href="0#">Constitution</a>
                                        </li>
                                        <li>
                                            <a class="hover:underline transition-all" href="0#">Terms</a>
                                        </li>
                                        <li>
                                            <a class="hover:underline transition-all" href="#0">Privacy</a>
                                        </li>
                                        <li>
                                            <a class="hover:underline transition-all" href="#0">Refund</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer_links">
                                    <h4 class="text-[#f9fafd] md:text-lg text-base uppercase font-medium font-poppins pb-2">
                                        Features
                                    </h4>
                                    <ul class="flex flex-col gap-2 text-[#b6c1d2] text-base font-light font-poppins">
                                        <li>
                                            <a class="hover:underline transition-all" href="0#">Mentoring</a>
                                        </li>
                                        <li>
                                            <a class="hover:underline transition-all" href="0#">Fundraising</a>
                                        </li>
                                        <li>
                                            <a class="hover:underline transition-all" href="#0">Events</a>
                                        </li>
                                        <li>
                                            <a class="hover:underline transition-all" href="#0">Stories</a>
                                        </li>
                                        <li>
                                            <a class="hover:underline transition-all" href="#0">Directories</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer_links max-sm:col-span-2">
                                    <h4 class="text-[#f9fafd] md:text-lg text-base uppercase font-medium font-poppins pb-2">
                                        Contact
                                    </h4>
                                    <div class="flex flex-col gap-2 text-[#b6c1d2] text-base font-light font-poppins">
                                        <h5 class="text-white text-lg font-medium font-poppins">
                                            Gradnet
                                        </h5>
                                        <p class="text-[#5e6e82]">Mobile: +880 **** ****</p>
                                        <div class="flex items-center gap-1">
                                            <p class="text-[#5e6e82]">Email:</p>
                                            <p>contact@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- payment option -->
                <div class="pb-6">
                    <a href="#0" class="block bg-[#4d5969] p-1 rounded-md">
                        <img src="{{ asset('assets/web') }}/img/footer/payment.png" alt="" />
                    </a>
                </div>
            </div>
            <div class="border border-[#232e3c] py-3">
                <div class="container mx-auto">
                    <div class="flex items-center justify-between gap-3">
                        <div class="flex flex-wrap text-[#5e6e82] font-base font-poppins">
                            Built with
                            <a href="index.html" class="mx-1">
                                <div class="flex items-center text-[#2c7be5] font-medium font-poppins">
                                    <img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHgAAAB4CAYAAAA5ZDbSAAAACXBIWXMAAAsTAAALEwEAmpwYAAAGfGlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDUgNzkuMTYzNDk5LCAyMDE4LzA4LzEzLTE2OjQwOjIyICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1sbnM6cGhvdG9zaG9wPSJodHRwOi8vbnMuYWRvYmUuY29tL3Bob3Rvc2hvcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ0MgMjAxOSAoV2luZG93cykiIHhtcDpDcmVhdGVEYXRlPSIyMDIwLTAxLTA3VDExOjAwOjMzKzA2OjAwIiB4bXA6TW9kaWZ5RGF0ZT0iMjAyMC0wNC0yN1QxMjo0NToxOCswNjowMCIgeG1wOk1ldGFkYXRhRGF0ZT0iMjAyMC0wNC0yN1QxMjo0NToxOCswNjowMCIgZGM6Zm9ybWF0PSJpbWFnZS9wbmciIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo5NTdmMzk5OC0wMzkwLTBjNGQtYjI4Ni1hM2JlYjc1ZGIwYzAiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MDI4ZTI3YjgtY2RkMC01YzQ1LTk1NTQtZDFiOWMzNGFkYjY4IiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6MDI4ZTI3YjgtY2RkMC01YzQ1LTk1NTQtZDFiOWMzNGFkYjY4Ij4gPHBob3Rvc2hvcDpEb2N1bWVudEFuY2VzdG9ycz4gPHJkZjpCYWc+IDxyZGY6bGk+eG1wLmRpZDo5ZWQyZDM0MS01M2RkLTc3NDAtOTk2OC1kMmI3ZDJjNjFkYjA8L3JkZjpsaT4gPC9yZGY6QmFnPiA8L3Bob3Rvc2hvcDpEb2N1bWVudEFuY2VzdG9ycz4gPHhtcE1NOkhpc3Rvcnk+IDxyZGY6U2VxPiA8cmRmOmxpIHN0RXZ0OmFjdGlvbj0iY3JlYXRlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDowMjhlMjdiOC1jZGQwLTVjNDUtOTU1NC1kMWI5YzM0YWRiNjgiIHN0RXZ0OndoZW49IjIwMjAtMDEtMDdUMTE6MDA6MzMrMDY6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE5IChXaW5kb3dzKSIvPiA8cmRmOmxpIHN0RXZ0OmFjdGlvbj0ic2F2ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6OTU3ZjM5OTgtMDM5MC0wYzRkLWIyODYtYTNiZWI3NWRiMGMwIiBzdEV2dDp3aGVuPSIyMDIwLTA0LTI3VDEyOjQ1OjE4KzA2OjAwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgQ0MgMjAxOSAoV2luZG93cykiIHN0RXZ0OmNoYW5nZWQ9Ii8iLz4gPC9yZGY6U2VxPiA8L3htcE1NOkhpc3Rvcnk+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+piXq/AAAFoRJREFUeJztnXtwHMWdxz8zs7PalVaW/EB+SLZsbBkDtrGNjRWwFfPyEXMOYBwuhQkkqToSLtyRCwUEUuQqOfKskLoHdeTyOC4UkCMhVAIJCXABnzBgIIDjYOIHsQEL42Ajy17J2t3Zmbk/etozu97VvmZmBehbpdrV7Ew/ft/5df/617/uVhLtKxnl0JxPs8jvOjANmAWcBJwIdABTgElAAmgGWp17AQxgAEgCg8BBYD/QB+wGdgB7gH3OvdWUKxQk+3pH/D0SUjkqhVd4+QJsBRYBy4FuYCEwHZe8cqADJzh/xWAAe4GtwGbgOWAL4sWQZStU3lGF0UawDlgcL6guYBWwBjiLwsQUeg5c4QOonnslij2jI1qDE4GLnesHgKeBR4CNwK68NDQnj2JaHzpGC8GSWK9gOoHVwHrgbHI11ACyCGGquIJVKQ9qke9eyBfGcv4iiBfrYufPAJ4EHgAeA97AbXFGDdH1JtjbJ4IQzEpgA7AOmOC5d9j5jOBqWJDIf2HkC5h1/o8jXsDVQD/wIHAv8BQu0fn1Cx1KnYwsHUFSyvk/BlwEXA2c47lPktpA+doZFiwg7XyPe64/AXwf+CW59TMJgOjRaGTFEBU3EERfBlyLMJgkhhFlix/39OiBils+qdlxxAt6DsIwuwP4KblEpwgRYWqFTm4F1yLe9nsQ5FoIYi2EoIJugv2Ejiiztw7diLo9gagriLrHCLFuYREcQ7zlKWA+8DPgIWCF87tsiuMhlikIeLVa1mkFoq4/Q9Rdtl6xsAoUNLxaezOwCWEZQ67GvpeJzYckWmo0iDpvQsgAXG0OvCBBQXf+pNY+BXwdaEG8wQbvP2LzIYmW9W1ByOApXG2WcgqsAEFANskGcA3wPG5zbBDOMGc0QY4apBW9AiGTa3DlFIg2B0GwbJI1xLjwP3DfYgtR2fez1haDSq5DJ46Qzb24Q0bfSfZb0LJJng68AFyOWyHp3fmgQ3re5At/OUJW03GbbF8z8wMabqGXI5zyi3GbpA+q1haD1GYQMlqMkNlyXGXQCj5ZRUa1QsN1za0FnkG4GNOMEVsKkug0QmbPIGTo9WnXnEEtkOSC8B8/5KSZRrgXx1AeGhAyUxEy3OBcr5nkWgjOJ/ce57uBKLBV6KExFISFkJns0u7BJ5L9aD7zyZWW4ljTXD5U3BFGIZKrRrWTDbIga6kTuWrLFGKL1qJEG8ns2oTx+ou+pKvP7iY6+0PYqSSpl36BNXjQl3TLQD7JOkK2R4CHySW/bFQzXSjHucsRRoGc2A6N3OjclTRf8lVQ3ZbLPPg6Q4/9C0bfH8GsVA4KkWkn03T+PxCZdop72coy+OtvkX7lUX8KXh6kDL0yPRMRMnTcbFSp6cJKCZYZTEeY9dJaln1u4OQqsXFMuO4hUAtnle17heEX7sd4/UXs9FGwbecX23OXAoqCEkugd5xG7PRL0GctLZyhmeXQHeuwjg74WY1SkLKUsu1HxKHtJY9kPwmWTYSGGJgvJmRyAZrX3Ub0pJ6S99lGiuy+bWT3bsU88o4gGwtFb0RNTETvXEykYyGKXtrYN/a8wJH/ud6H0leEfJJfBpbhRooYEMyE/924TgwpnVDI1SbOKItcAEWPoXeejt55es356rOWoZ0wC/PAnprTqgBSptK6XoyQfUWGV7nEyMmDa3Ddj754WipB88VfCTtLN+9LvooSqdvQXsN1a8oJirL81uUQLNv8+cDtzjWzzGd9gz5rKVrb7DCzzIE2sZPo3BWlbwwGKq7P4XbcqcaSJJciSU4eANyJOysU+lRf87qvhZ3lcWhacxNKfByg1CN72e/GEVwApJo7ekbkohTBshm+GXc+N/SmufHDf4sSrX/8naLHaFzxSXIt8lAhZb8CNzJkRD5GItjbNN/kXDNKPOM7lFiC+JmfCDPLERFbcgnahOn1yt4bTH8TMD/Z15tq7ugp2lQXI8vbNP8TbphN6NqbuPDm0jeFCVWj6YLrQambJ1ZOy7YguMEhuWBTXayUksi1uAFyI90fCCLtpxKdO/pWP+qdS4h2nUWd+mIvB+ubO3pkSG5B5StEmNReHbjRuTZMHQyrxNovhZ1l2WhafV1ZTpKAoONGa97Y3NGjF9PikTTyMlzDKvSaNCz8CNr4jrCzLRtqcxux0y/N8YeHDMnJCgRXBZFPsDTFY4jlJCDelNA7nKbV/xh2lhUjvuIqlPr1xSquFl/b3NETS/b1GvlanF86OUl/Ee5yktC1t+nca1H0UAL/a4Kix4TBpdZtkaacB+hGcAZ5gRZegnXc6IGrnWtpQtZetWUKsTOKtjijDg0L16CNb69X9nIyAuDq5o4eLdnXa3q1OH/9K4j1uXIJZ+jam1hzY+mbRhkSF34RtLrF8UuOzkFwBx4tlgTnx1dBHfreSPup6DOLzMuOYkTaTyU650P1yt7bF28AcLRYkz960YlYWQ+hrx1WaP7ol8PN0kc0rf48atP4emUvuVrX3NHT6f1BEiy1dzUiSiP0cW982XrU1qlhZukr1MQkYmf8Tb08XHJcPAHBIcm+XhPcZRQS6497NCREOhbUK2vfEJl2Kkr9+mKJYxw2d/Ro3tetC7GbDdTBuLKNUHc2CAa2CUpd3JfgcnZ2c0dPl7zonUhehavqobczqZd/GXaWvsPY8wK2mS19YzCQxpaO4JJkX6/pJXJNHQp1DNm3tjH4629hZzP1LEZ1sG3Srz5OetvjYNWNYC+OcSmjKluBnYiNvuoSsSGhTT2JpnP/Hn36Auo0W1MRrMP7GX7+fjI7erGSB+pdHMndAWBusq93QBK8CrFr26hYx6s0NBGdu5J49wa0SZ2lH6gDrKFDpLc9Tmb7k2Tf3g7WqNimUu7OpwNnJ/t6N8rx03LnM8so2FrBTg+R/uOjZHb00jD/AmJLLhJE18+x7xTMxho8iPH670lteZjs2zvAzFLHEJ58SNeljuD0GMHdnhtGCWzszFFSL/+C9NZfEWk/ldjS9egzT0eJNoZbFDND9p09ZP70u2NNsW2ZYI/KBZSSw24QfbAObEfsqlrX/ndEKCpKJCqa7zkfQp+7Er19AUqsiSD6ats0MA/sJvPasxi7n8M8+DpkM46VPGo0thAkh7uBeUqifWUnYlvc8JZ9qlGyU3qwY22o/VvQBl6t6HFF01EamlBiCdTECeizlhJpn4/aMhm1ISGmGiPR8hKzTOxsGjt9FGvwINn9O8m+uQXz3Tewhg9jZ45iZ4Yr6mNnTEixbtFBkmmNu56ZihXu++BdvNalJNpXrsI1sALXXrP1FFJLv4kdbRUXbAv1yE4att+J9u7LlSeoqCgNjajxFhQ9DtEYSiSG0tSKljgBNTEBoo0ozpytbZtgpLGGD2MNvos9dAg7PYSdTWEbKezUIHYqWZXjpTFq8d9X/YnVJx9CUwWrA8MRrr5nLr/ZNrHyulUPyeXZSqJ95WeA7xEGwYrK4OpHQSvgKDNT6Ps3ov/5HtTBN6tJ3PmQnyqKqgrDTFFzPUy2JVYdWia2/A7OZ3XqdsP5b3Ltqn1MaDp+6erRjMrsW7sZTIcW3iO5/KwWHdd5GWIX9cDXG6UX3ojVenLhH9UI1rg5ZNvOQjUGUI/uA7sap4FDkm2JZtXKivXCOX9Zcf0YudUTO2/yMD//zDY+vuwd4tHCRpeu2SxoH+KnL7ZVlUcVkFy+qiIOsAg+x8YOjI4LS95nxyeTWngL6XnXYMdGOlKhvlAUuOKMv/DUDS+xZEay5P1/dUo/p0wdCqFkOehQEaeTBAyF1KJbK7hdw+i8hNTir2AlZgRXrBrwnUv/zJ2X7yQWKX+o9OOrthPXQx1aTVEB2fsH1jybk5YWb5pHem78fFLLbsecsMj/QlUJXbN5/Lo/cPWKfRU/O2/KUdYufDeAUh0HyeVEFXGmUHBQVFKnVR/AbsUnk1pyG9m2uoXEHENj1OT5L75I96wjVafxnUtfoyUe2oREc+AEZ2Z/ArthQukbR4AdHUf6tFvJttVtuQgt8SzP3/QSc04YLn3zCBjfmOWWC6oZJVSFZhUxkxQI7EgTmbmf9ictPUF60a1kJ5/pS3qVoLUxy7M3vkTnRH+CEj7bs48p40KZFm31borpuwcrPf8L+KlxdqSR9IKbMCcu9i3NUmiOmTzyua1MH58ufXOZUBWbOy/f6Vt6hbJwPvXA3JJWYibZaef7nq4dbSW14ItYLXN9TzsfjVGLuz/5Jxa0+z+8OW/eIT7cNeB7uvnwLij21X5PnR7clgt241TSJ38OOx7cCE/XbG6+4A3Om3cosDy+tyEwLZZcGiruYYu+ITtlFVZTsKvgzQmLMWauw9b9txE11ea8eYf4/Dl9vqftRUdrmiu79weZxYCKOGLVPygq6QXhLD/JzFyP2XaW74EAbc0GP/zEdl/TLIZvXbKbqBbYdFPSd4Izc67E1hN+JlkcSoTM7A1YTf6F9eiazb9etotxsXBCcBINJl+7aDdqMKO/pApI10rNNbIbJpGZc1WtyVQEK9GJMfNSUGufCFMUYfx85NR+H0pWPq5euY/21pSfIdWSy3dVxMnXviB12s2ghL/iPTvtPMyJS2pOJ9Fgcvv613woUWVQFfivK3cQ131vNfariGPNa4bVMhdz0jI/kqoYdqSRzOwNNb1cigKfXfmWr+PdStA96wg9XYf9TrZPRcTu1IzUgptK3xQgzPELyLZ1V21wtTZm+fy5b/lcqspw+6V/9jvJ3Sqwo9ZUslPPwRrXVfrGIKFoZLo+VfWw6Ybz32RcrL6rEmZMSHHhAl9nm3aowB5ydxevGJkTP+5noaqG1TwHq+Wkig2uxqjJlcv/ElCpKsNfz6+ZYO+xAHtUYB9iJ3Go0pJWzFGyMlBRMTrWOAF95Zuk65ccCHMKb0QYZs2mtORwL7BPuiq3Oher0uDozh/VWijfkJ28ArthIuXGWKkK3HD+3tI3hoSf/H5yrUlIDrcm+3oNaZFszvuxImj9fyC6+75aC+YP1CjmhNOcvri0Npw8ZYiZPk0D1or7f9/Gs7vH1ZqM5HAzuHs7POd8Rqgy+D26/Xuoh3eQ6fo0VqK+C8aMaeehHdiMkh3yHMpxPFQFrumpPPTGb7zRH+PO/5vGj56peQsLizxO5T9bEEsO5fLRqsYakbefJPKXp0l3fQpjds1nOlUNK9GJHZ8KQyMP8ZsaTM47ObjZonJw9+YpfOmhWQylNb/6X7l8dAu4RA4ATzvfa7M2rAwNO/6T2Etfpm5reLQY1rg5JR0f7a3psCIrjoNlK3zhgdlc//PZDByN+EEuuNw9nezrHYBcTX3EjxwkIvs3Et98nZ9JVgRz/ELsaAsj9cPrFx84tsQkTNjAp358Ej/YNI2UEUjMxTEuvbvsbMQ9E8CXyX+tfwsNW7/hR1IVw0rMwGrqKOrZaohYLO30d6a0XPzzr2fy4Bbfg/ot3DM1NsLxu+zsQixCA3f/w5qh9/2GyL7/9Su5smE1TMSOTy5KcEs8S1dbbRGS1eB328fzb08Gsrel5OzJZF/vLnnRu8sOwANB5Bz7w20QtjNEaxAOjyIET0oYtLeGO7GQMlQ+c99c0tlAV+ge49C7y45sph9DnJMnVd0f2BbR1+72LblyYTVOxy7SBy+dkQy9/73r2akcSJa5brkyyK61H8EhxfaqfAN40Pnuq+8uuvsnhG1VW/G2opb0nJCbZ8NUuO2RGUEtBpdcPZjs633D+4N3r0opiXudT9+MLQBsk8iB531LrixEWyFS+Lyltmb/Gqhy8OrbTRxJBbK/qzSuwOFO7hsNuRosvz8FPOF897GTUoj0/cq/5MqAHWkq6rIstFA7SPzqlcBW+EuOnkBwBx5evQTLPbJM4PvONbllvA+w0fq3EWYzbWsN2JHGgvtHNocUVAeQtRR+sWVSEEl7j1z4vtwnOtnXe+ztze+D5f+/RDirvVvG1wzFOIJiDPqVXBkZRsRfngarCjRFwyN4KK3x9uFAjCt55MJmBGeQx2k+wXLiPwXc4Vzzry+2s+EOl1TNMbJyCdZUm2gkvJYkk1UwLd/jYr197x3y3CSv9sLIkwo/BTY53/3RYtsOefMwtS5RnvkoNlSrEZKTTQiuCqIQwfLcJAP4tnPNn3GxokAkzF3qbGcjl1xtNS0l1FXGUc3ye3gkx70A33bOS4rlay8U12DZQT1MrnerNvWzbZTUwZqSqASKcQRleL/YqNsDy4ZDR8M7kmIoo3E041tL4uXggWRf78PO94JGRTGCvUeIfwU4jHuuUg2wie78YW1JVIBI329Ri7xQ/74xvLOOvvs7XxfiyTnfwwhuKKa9AFp0XNHoiyyC5H0IK+Vc3LPkq27h1KG9YA5jtZ4CaiCWJdhZ9LceJfr6z1CMwjNGu95pZOCozvJZR2gIyOBKZ1XuemYKX/+tbxEu3oiNrwIPfuO7d8WSfb1FLVe5X3QxyPBLEIPoFYzmDUvf/5Cy34R7CNZxlrMXpaY1vE31NbhnAoTrBhoDuOQOI7gAKNo0S5Qzb5VCkPwKcL1zTTbVYwgH3m0mr0dwEcM9pb0oyp2YlAdG3wncx/HzyGMIFiZC5vchOJDOqJKoZub5SuBlJxM52B7TZv8hZSq36H8ZIfuKUAnBsj82EWfV9iMc3dIfOkayf5Cx6WmEjPsRMjdxnVBloVINlv3xXsTZPHI2Q8ZSj5FcO7w7tsvZvDUImZfV73pRTRMt++PngIuda9KyHiO5NnjJlUPRixGyLrvf9aLa6C85d/wwcIVzbYzk2lCI3CsQMtaocmjqR3jfvYyRXCuKkXtv0SfKRC0E58dxeUmWhtcYyoP3QCvIJdd7OntVCdeCfJI/imt41Wc3k/cmpLVsIWToC7ngj5ZJkmWffCbuEMpgrKkeCRautdyPkJ3sc2smF/xrRk3caazngEW4zhAYIzofklhwnRiLcK1lKc+a4Xc/KZ0he4FluG5NWegxknNPCJXux2W441xfJ3KCMISkM8QENgB/hzsLJS3FDyLRUmvlCz+MkM0GXA+V7xGJQVm60hkiJyjOwA3gk9r8QZpyNHC1FoQszsCdOKjKiVEOghzKGLhN9iuICepbcMN/5Fv8ftZmC7f1kmE2tyBkIaf8pJwCQRhjVdlkA3wDERUiA/niThneb0RLYlXc6McHEHWXK+IDaZLzEZYzQjbZUps/hhjvyWZbCuG9TrQkFtw6bULU9WO4WhtYk5yPML1NBrna/DBwDsJrI5fJeDX6vdRHG+RqrFxOcgWijjK0VWptaHWrhzvRq80GwmtzNvBx3FWNcdw+erRqtdRW2cdKjX0CUZezEXWTdkhoWutFeNHfuZCGhbQqU8D9iH5qJWLosA7wHpkmm74IwssT9sspx69ysXUcl9R+xML5exHRp9JJ4a1fXVAqbDYsyJ1uvd6bTmA1sB6hDd5QXQMhaBV3pyC/CZflsXDjkfPL8CTipXwMsTuChCxP4E1xsq93xN9HC8EShYgG6AJWISIbzkLsyJePQs9B7qmqqudeiWLPFHphDiA2jHsEsVXRrrzfQyNWohTB9Wqii0EKRpIihb/L+fsB4qzFRcByoBtYCEzH9ZSVg0I7GxQqy17ETrybEX7iLRQ+Z8pb3lEVbTraCJbwCimf7AGE9mx0/teBacAs4CTgRMSp5lOASUACccJqK7mTHwOII4UGgYOIw0n6EEcc7EBslL6P4to4akn14v8Brw/Lab66QloAAAAASUVORK5CYII="
                                        alt="Gradnet"
                                        style="width: 24px; height: 24px; margin-right: 3px;"
                                    />
                                    Gradnet
                                </div>
                            </a>
                            by<a href="#0" class="mx-1">JRK International Ltd.</a>
                        </div>
                        <div class="">
                            <p class="text-[#5e6e82] font-base font-poppins">
                                © 2023 Alumni Association
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer area ends  -->

        <!-- optional js -->
        <script>
        // mobile menu js
        let menuBar = document.getElementById("toggle_bars");
        let mainMenu = document.getElementById("toggle_menu");

        menuBar.addEventListener("click", () => {
            mainMenu.classList.toggle("left-0");
            mainMenu.classList.toggle("left_position");
        });
        document.addEventListener('DOMContentLoaded', function () {
            // Get all elements with the class 'logout'
            var logoutElements = document.getElementsByClassName('logout');
            console.log('123');

            // Add a click event listener to each element
            Array.from(logoutElements).forEach(function (element) {
                element.addEventListener('click', function (event) {
                    // Prevent the default action (e.g., following a link)
                    event.preventDefault();

                    // Create a new XMLHttpRequest object
                    var xhr = new XMLHttpRequest();

                    // Configure it to make a GET request to the logout route
                    xhr.open('GET', '{{ route('logout') }}', true);

                    // Define the callback function to handle the response
                    xhr.onreadystatechange = function () {
                        if (xhr.readyState === 4 && xhr.status === 200) {
                            // Redirect to '/'
                            window.location.href = '/';
                        }
                    };

                    // Send the request
                    xhr.send();
                });
            });
        });


        </script>
    </body>
</html>

