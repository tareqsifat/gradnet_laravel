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
        <style>
            .login-form-card {
                padding: 20px;
                border: 1px solid #d3d5c2;
                box-sizing: border-box;
                border-radius: 8px; /* Add border radius for a rounded look */
                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow */
            }
            .alert-container {
                display: flex;
                justify-content: center; /* Centering the alerts horizontally */
            }

            .alert {
                padding: 10px;
                border-radius: 4px;
                width: 50%; /* Adjust width as needed */
                text-align: center; /* Centering the text */
            }

            .alert-danger {
                background-color: #f8d7da; /* Red alert background color */
                color: #721c24; /* Red alert text color */
            }

            .alert-success {
                background-color: #d4edda; /* Green alert background color */
                color: #155724; /* Green alert text color */
            }
        </style>
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <!-- signup area start -->
		<div class="max-w-[620px] mx-auto min-h-screen lg:py-24 md:py-16 py-12">
            <!-- logo area -->
            <div class="logo_area flex flex-col items-center gap-3 pb-10">
                <a href="index.html">
                    <img src="{{ asset('assets/web') }}/img/logo/logo.png" class="w-[50px] h-10" alt="" />
                </a>
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
                <div class="login-form-card">
                    <form id="multi-step-form" action="{{ route('postLogin') }}" method="POST">
                        @csrf
                        <div class="input_group col-span-4">
                            <label for="email">Email address*</label>
                            <input type="email" id="email" name="email" placeholder="Enter your email address" class="border rounded-md h-10 w-full p-2 text-sm font-light font-poppins text-text_colors focus:outline-none focus:border-theme_color">
                        </div>
                        <div class="input_group col-span-4">
                            <label for="password">Password*</label>
                            <input type="password" id="password" name="password" placeholder="Enter your password" class="border rounded-md h-10 w-full p-2 text-sm font-light font-poppins text-text_colors focus:outline-none focus:border-theme_color">
                        </div>
                        <button type="submit" style="background-color: #3498db; color: #fff; border: none; border-radius: 4px; padding: 10px 20px; cursor: pointer; float: right; margin-top: 10px;">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    <!-- signup area ends  -->
  </body>
</html>
