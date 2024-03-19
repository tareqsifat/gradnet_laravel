<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- style  -->
		<link rel="stylesheet" href="{{ asset('assets/web') }}/css/custom.css" />
		<title>Gradnet</title>
	</head>
    <body>
        {{-- @dd(Auth::user()) --}}
		<!-- signup area start -->
		<div class="max-w-[620px] mx-auto min-h-screen lg:py-24 md:py-16 py-12">
            <!-- logo area -->
            <div class="logo_area flex flex-col items-center gap-3 pb-10">
                <a href="index.html">
                    <img src="{{ asset('assets/web') }}/img/logo/logo.png" class="w-[50px] h-10" alt="" />
                </a>
                <div id="step-count" class="text-text_color text-base font-semibold font-poppins leading-normal">
                    Step 1/3
                </div>
            </div>
            {{-- @dd(session()->all()); --}}
            <!-- account area -->
            <div class="flex flex-col gap-5">
                <div class="bg-[#fff0d0] text-[#855d0b] p-4 rounded-md text-base font-normal font-poppins leading-normal text-left">
                    <p> Only
                        <span class="font-semibold">Alumni Association</span>
                        members and eligible people are entitled to create an account or sign up here
                    </p>
                </div>
                <form id="multi-step-form">
                    <div class="bg-white lg:p-12 p-4 rounded-md shadow-primary_shadow">
                        <div class="step active" id="step3">
                            <div class="conf_content">
                                <div class="logo_icon flex justify-center">
                                    <svg class="h-16 w-16 text-gray-600" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M21.75 9v.906a2.25 2.25 0 0 1-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 0 0 1.183 1.981l6.478 3.488m8.839 2.51-4.66-2.51m0 0-1.023-.55a2.25 2.25 0 0 0-2.134 0l-1.022.55m0 0-4.661 2.51m16.5 1.615a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V8.844a2.25 2.25 0 0 1 1.183-1.981l7.5-4.039a2.25 2.25 0 0 1 2.134 0l7.5 4.039a2.25 2.25 0 0 1 1.183 1.98V19.5Z"
                                        ></path>
                                    </svg>
                                </div>
                                <div class="content_inner text-center">
                                    <h4 class="text-black text-xl font-semibold font-poppins pb-3">Please Check your email</h4>
                                    <span class="inline-block text-red-400 text-base font-medium font-poppins">{{ Auth::user()->email }}</span>
                                    <div class="max-w-[405px] mx-auto">
                                        <p class="text-black text-opacity-60 text-sm font-normal font-poppins py-3">
                                            We have set a verification link to your email. Click to verify your email. We will take it from there.
                                        </p>
                                        <p class="text-black text-opacity-60 text-sm font-normal font-poppins">
                                            We are very strick about opening account in Gradnet.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-center gap-3 pt-12">
                                <a href="index.html" class="bg-theme_color text-white rounded-md py-2 px-4 text-sm font-normal font-poppins">Back To login</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    <!-- signup area ends  -->
  </body>
</html>
