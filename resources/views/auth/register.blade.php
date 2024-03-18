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
                <form id="multi-step-form" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="bg-white lg:p-12 p-4 rounded-md shadow-primary_shadow">
                        <div class="step" id="step1">
                            <div class="flex flex-wrap items-center justify-between gap-2">
                                <h4 class="text-text_colors md:text-2xl text-xl font-medium font-poppins">
                                    Sign up
                                </h4>
                                <div class="flex items-center gap-1 text-xs font-light font-poppins">
                                    <span class="text-[#748194]">Or</span>
                                    <a href="#0" class="text-theme_color">login</a>
                                </div>
                            </div>
                            <div class="mt-4 text-sm text-[#5e6e82] font-normal font-poppins">
                                <span>You are signing up as -</span>
                                <div class="flex items-center gap-3 mt-2 pb-6">
                                    <button type="button" class="border border-border_color border-opacity-25 rounded-md flex items-center gap-2 w-full px-2">
                                        <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-0" />
                                        <label for="default-radio-1" class="text-sm text-text_colors text-opacity-70 font-normal w-[calc(100%_-_24px)] text-left py-2">SUST Member</label>
                                    </button>
                                    <button type="button" class="border border-border_color border-opacity-25 rounded-md flex items-center gap-2 w-full px-2">
                                        <input checked id="default-radio-2" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-0" />
                                        <label for="default-radio-2" class="text-sm text-text_colors text-opacity-70 font-normal w-[calc(100%_-_24px)] text-left py-2">SUST Student</label>
                                    </button>
                                </div>
                                <div class="grid grid-cols-4 gap-5 pt-5 border-t">
                                    <div class="md:col-span-1">
                                        <div class="user_thumb">
                                            <img id="selectedImage" src="{{ asset('assets/web') }}/img/member/testi-1.jpg" class="w-20 h-20 rounded-full" alt="user-thumb" />
                                        </div>
                                    </div>
                                    <div class="col-span-3">
                                        <div class="flex items-center justify-center w-full">
                                            <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-20 border border-gray-300 border-dashed rounded-lg cursor-pointer hover:bg-gray-100">
                                                <div class="flex flex-col items-center justify-center p-2">
                                                    <svg aria-hidden="true" class="w-6 h-6 mb-1 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                                    </svg>
                                                    <p class="text-sm text-gray-500 dark:text-gray-400">
                                                        Select a recognizable photo
                                                    </p>
                                                    <p class="text-xs text-gray-500 dark:text-gray-400">
                                                        SVG, PNG, JPG or GIF (MAX. 400x400px)
                                                    </p>
                                                </div>
                                                <input id="dropzone-file" name="photo" type="file" class="hidden" onchange="handleFileChange()"/>
                                                @error('photo')
                                                    <span style="color: #f00">{{ $message }}</span>
                                                @enderror
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input_group sm:col-span-2">
                                        <input type="text" name="first_name" placeholder="First name*" class="border rounded-md h-10 w-full p-2 text-sm font-light font-poppins text-text_colors focus:outline-none focus:border-theme_color" />
                                        @error('first_name')
                                            <span style="color: #f00">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input_group sm:col-span-2">
                                        <input type="text" name="last_name" placeholder="Last name*" class="border rounded-md h-10 w-full p-2 text-sm font-light font-poppins text-text_colors focus:outline-none focus:border-theme_color" />
                                        @error('last_name')
                                            <span style="color: #f00">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input_group col-span-4">
                                        <div class="grid grid-cols-5 gap-5">
                                            <div class="col-span-2">
                                                <select name="countryCode" class="w-full border h-10 rounded-md p-2 focus:outline-none focus:border-theme_color" aria-invalid="false">
                                                    <option value="">Country code</option>
                                                    <option value="+247">+247 - Ascension Island</option>
                                                    <option value="+376">+376 - Andorra</option>
                                                    <option value="+971">+971 - United Arab Emirates</option>
                                                    <option value="+93">+93 - Afghanistan</option>
                                                    <option value="+1 268">
                                                        +1 268 - Antigua And Barbuda
                                                    </option>
                                                    <option value="+1 264">+1 264 - Anguilla</option>
                                                    <option value="+355">+355 - Albania</option>
                                                    <option value="+374">+374 - Armenia</option>
                                                    <option value="+244">+244 - Angola</option>
                                                    <option value="+672">+672 - Antarctica</option>
                                                    <option value="+54">+54 - Argentina</option>
                                                    <option value="+1 684">+1 684 - American Samoa</option>
                                                    <option value="+43">+43 - Austria</option>
                                                    <option value="+61">+61 - Australia</option>
                                                    <option value="+297">+297 - Aruba</option>
                                                    <option value="+358">+358 - Åland Islands</option>
                                                    <option value="+994">+994 - Azerbaijan</option>
                                                    <option value="+387">
                                                        +387 - Bosnia &amp; Herzegovina
                                                    </option>
                                                    <option value="+1 246">+1 246 - Barbados</option>
                                                    <option value="+880">+880 - Bangladesh</option>
                                                    <option value="+32">+32 - Belgium</option>
                                                    <option value="+226">+226 - Burkina Faso</option>
                                                    <option value="+359">+359 - Bulgaria</option>
                                                    <option value="+973">+973 - Bahrain</option>
                                                    <option value="+257">+257 - Burundi</option>
                                                    <option value="+229">+229 - Benin</option>
                                                    <option value="+590">+590 - Saint Barthélemy</option>
                                                    <option value="+1 441">+1 441 - Bermuda</option>
                                                    <option value="+673">+673 - Brunei Darussalam</option>
                                                    <option value="+591">
                                                        +591 - Bolivia, Plurinational State Of
                                                    </option>
                                                    <option value="+599">
                                                        +599 - Bonaire, Saint Eustatius And Saba
                                                    </option>
                                                    <option value="+55">+55 - Brazil</option>
                                                    <option value="+1 242">+1 242 - Bahamas</option>
                                                    <option value="+975">+975 - Bhutan</option>
                                                    <option value="+267">+267 - Botswana</option>
                                                    <option value="+375">+375 - Belarus</option>
                                                    <option value="+501">+501 - Belize</option>
                                                    <option value="+1">+1 - Canada</option>
                                                    <option value="+61">+61 - Cocos (Keeling) Islands</option>
                                                    <option value="+243">
                                                        +243 - Democratic Republic Of Congo
                                                    </option>
                                                    <option value="+236">
                                                        +236 - Central African Republic
                                                    </option>
                                                    <option value="+242">+242 - Republic Of Congo</option>
                                                    <option value="+41">+41 - Switzerland</option>
                                                    <option value="+225">+225 - Côte d'Ivoire</option>
                                                    <option value="+682">+682 - Cook Islands</option>
                                                    <option value="+56">+56 - Chile</option>
                                                    <option value="+237">+237 - Cameroon</option>
                                                    <option value="+86">+86 - China</option>
                                                    <option value="+57">+57 - Colombia</option>
                                                    <option value="+506">+506 - Costa Rica</option>
                                                    <option value="+53">+53 - Cuba</option>
                                                    <option value="+238">+238 - Cabo Verde</option>
                                                    <option value="+599">+599 - Curacao</option>
                                                    <option value="+61">+61 - Christmas Island</option>
                                                    <option value="+357">+357 - Cyprus</option>
                                                    <option value="+420">+420 - Czech Republic</option>
                                                    <option value="+49">+49 - Germany</option>
                                                    <option value="+253">+253 - Djibouti</option>
                                                    <option value="+45">+45 - Denmark</option>
                                                    <option value="+1 767">+1 767 - Dominica</option>
                                                    <option value="+1 809,+1 829,+1 849">
                                                        +1 809+1 829+1 849 - Dominican Republic
                                                    </option>
                                                    <option value="+213">+213 - Algeria</option>
                                                    <option value="+593">+593 - Ecuador</option>
                                                    <option value="+372">+372 - Estonia</option>
                                                    <option value="+20">+20 - Egypt</option>
                                                    <option value="+212">+212 - Western Sahara</option>
                                                    <option value="+291">+291 - Eritrea</option>
                                                    <option value="+34">+34 - Spain</option>
                                                    <option value="+251">+251 - Ethiopia</option>
                                                    <option value="+388">+388 - European Union</option>
                                                    <option value="+358">+358 - Finland</option>
                                                    <option value="+679">+679 - Fiji</option>
                                                    <option value="+500">+500 - Falkland Islands</option>
                                                    <option value="+691">
                                                        +691 - Micronesia, Federated States Of
                                                    </option>
                                                    <option value="+298">+298 - Faroe Islands</option>
                                                    <option value="+33">+33 - France</option>
                                                    <option value="+241">+241 - France, Metropolitan</option>
                                                    <option value="+241">+241 - Gabon</option>
                                                    <option value="+44">+44 - United Kingdom</option>
                                                    <option value="+473">+473 - Grenada</option>
                                                    <option value="+995">+995 - Georgia</option>
                                                    <option value="+594">+594 - French Guiana</option>
                                                    <option value="+44">+44 - Guernsey</option>
                                                    <option value="+233">+233 - Ghana</option>
                                                    <option value="+350">+350 - Gibraltar</option>
                                                    <option value="+299">+299 - Greenland</option>
                                                    <option value="+220">+220 - Gambia</option>
                                                    <option value="+224">+224 - Guinea</option>
                                                    <option value="+590">+590 - Guadeloupe</option>
                                                    <option value="+240">+240 - Equatorial Guinea</option>
                                                    <option value="+30">+30 - Greece</option>
                                                    <option value="+502">+502 - Guatemala</option>
                                                    <option value="+1 671">+1 671 - Guam</option>
                                                    <option value="+245">+245 - Guinea-bissau</option>
                                                    <option value="+592">+592 - Guyana</option>
                                                    <option value="+852">+852 - Hong Kong</option>
                                                    <option value="+504">+504 - Honduras</option>
                                                    <option value="+385">+385 - Croatia</option>
                                                    <option value="+509">+509 - Haiti</option>
                                                    <option value="+36">+36 - Hungary</option>
                                                    <option value="+62">+62 - Indonesia</option>
                                                    <option value="+353">+353 - Ireland</option>
                                                    <option value="+972">+972 - Israel</option>
                                                    <option value="+44">+44 - Isle Of Man</option>
                                                    <option value="+91">+91 - India</option>
                                                    <option value="+246">
                                                        +246 - British Indian Ocean Territory
                                                    </option>
                                                    <option value="+964">+964 - Iraq</option>
                                                    <option value="+98">
                                                        +98 - Iran, Islamic Republic Of
                                                    </option>
                                                    <option value="+354">+354 - Iceland</option>
                                                    <option value="+39">+39 - Italy</option>
                                                    <option value="+44">+44 - Jersey</option>
                                                    <option value="+1 876">+1 876 - Jamaica</option>
                                                    <option value="+962">+962 - Jordan</option>
                                                    <option value="+81">+81 - Japan</option>
                                                    <option value="+254">+254 - Kenya</option>
                                                    <option value="+996">+996 - Kyrgyzstan</option>
                                                    <option value="+855">+855 - Cambodia</option>
                                                    <option value="+686">+686 - Kiribati</option>
                                                    <option value="+269">+269 - Comoros</option>
                                                    <option value="+1 869">
                                                        +1 869 - Saint Kitts And Nevis
                                                    </option>
                                                    <option value="+850">
                                                        +850 - Korea, Democratic People's Republic Of
                                                    </option>
                                                    <option value="+82">+82 - Korea, Republic Of</option>
                                                    <option value="+965">+965 - Kuwait</option>
                                                    <option value="+1 345">+1 345 - Cayman Islands</option>
                                                    <option value="+7,+7 6,+7 7">
                                                        +7+7 6+7 7 - Kazakhstan
                                                    </option>
                                                    <option value="+856">
                                                        +856 - Lao People's Democratic Republic
                                                    </option>
                                                    <option value="+961">+961 - Lebanon</option>
                                                    <option value="+1 758">+1 758 - Saint Lucia</option>
                                                    <option value="+423">+423 - Liechtenstein</option>
                                                    <option value="+94">+94 - Sri Lanka</option>
                                                    <option value="+231">+231 - Liberia</option>
                                                    <option value="+266">+266 - Lesotho</option>
                                                    <option value="+370">+370 - Lithuania</option>
                                                    <option value="+352">+352 - Luxembourg</option>
                                                    <option value="+371">+371 - Latvia</option>
                                                    <option value="+218">+218 - Libya</option>
                                                    <option value="+212">+212 - Morocco</option>
                                                    <option value="+377">+377 - Monaco</option>
                                                    <option value="+373">+373 - Moldova</option>
                                                    <option value="+382">+382 - Montenegro</option>
                                                    <option value="+590">+590 - Saint Martin</option>
                                                    <option value="+261">+261 - Madagascar</option>
                                                    <option value="+692">+692 - Marshall Islands</option>
                                                    <option value="+389">
                                                        +389 - Macedonia, The Former Yugoslav Republic Of
                                                    </option>
                                                    <option value="+223">+223 - Mali</option>
                                                    <option value="+95">+95 - Myanmar</option>
                                                    <option value="+976">+976 - Mongolia</option>
                                                    <option value="+853">+853 - Macao</option>
                                                    <option value="+1 670">
                                                        +1 670 - Northern Mariana Islands
                                                    </option>
                                                    <option value="+596">+596 - Martinique</option>
                                                    <option value="+222">+222 - Mauritania</option>
                                                    <option value="+1 664">+1 664 - Montserrat</option>
                                                    <option value="+356">+356 - Malta</option>
                                                    <option value="+230">+230 - Mauritius</option>
                                                    <option value="+960">+960 - Maldives</option>
                                                    <option value="+265">+265 - Malawi</option>
                                                    <option value="+52">+52 - Mexico</option>
                                                    <option value="+60">+60 - Malaysia</option>
                                                    <option value="+258">+258 - Mozambique</option>
                                                    <option value="+264">+264 - Namibia</option>
                                                    <option value="+687">+687 - New Caledonia</option>
                                                    <option value="+227">+227 - Niger</option>
                                                    <option value="+672">+672 - Norfolk Island</option>
                                                    <option value="+234">+234 - Nigeria</option>
                                                    <option value="+505">+505 - Nicaragua</option>
                                                    <option value="+31">+31 - Netherlands</option>
                                                    <option value="+47">+47 - Norway</option>
                                                    <option value="+977">+977 - Nepal</option>
                                                    <option value="+674">+674 - Nauru</option>
                                                    <option value="+683">+683 - Niue</option>
                                                    <option value="+64">+64 - New Zealand</option>
                                                    <option value="+968">+968 - Oman</option>
                                                    <option value="+507">+507 - Panama</option>
                                                    <option value="+51">+51 - Peru</option>
                                                    <option value="+689">+689 - French Polynesia</option>
                                                    <option value="+675">+675 - Papua New Guinea</option>
                                                    <option value="+63">+63 - Philippines</option>
                                                    <option value="+92">+92 - Pakistan</option>
                                                    <option value="+48">+48 - Poland</option>
                                                    <option value="+508">
                                                        +508 - Saint Pierre And Miquelon
                                                    </option>
                                                    <option value="+872">+872 - Pitcairn</option>
                                                    <option value="+1 787,+1 939">
                                                        +1 787+1 939 - Puerto Rico
                                                    </option>
                                                    <option value="+970">
                                                        +970 - Palestinian Territory, Occupied
                                                    </option>
                                                    <option value="+351">+351 - Portugal</option>
                                                    <option value="+680">+680 - Palau</option>
                                                    <option value="+595">+595 - Paraguay</option>
                                                    <option value="+974">+974 - Qatar</option>
                                                    <option value="+262">+262 - Reunion</option>
                                                    <option value="+40">+40 - Romania</option>
                                                    <option value="+381">+381 - Serbia</option>
                                                    <option value="+7,+7 3,+7 4,+7 8">
                                                        +7+7 3+7 4+7 8 - Russian Federation
                                                    </option>
                                                    <option value="+250">+250 - Rwanda</option>
                                                    <option value="+966">+966 - Saudi Arabia</option>
                                                    <option value="+677">+677 - Solomon Islands</option>
                                                    <option value="+248">+248 - Seychelles</option>
                                                    <option value="+249">+249 - Sudan</option>
                                                    <option value="+46">+46 - Sweden</option>
                                                    <option value="+65">+65 - Singapore</option>
                                                    <option value="+290">
                                                        +290 - Saint Helena, Ascension And Tristan Da Cunha
                                                    </option>
                                                    <option value="+386">+386 - Slovenia</option>
                                                    <option value="+47">+47 - Svalbard And Jan Mayen</option>
                                                    <option value="+421">+421 - Slovakia</option>
                                                    <option value="+232">+232 - Sierra Leone</option>
                                                    <option value="+378">+378 - San Marino</option>
                                                    <option value="+221">+221 - Senegal</option>
                                                    <option value="+252">+252 - Somalia</option>
                                                    <option value="+597">+597 - Suriname</option>
                                                    <option value="+211">+211 - South Sudan</option>
                                                    <option value="+239">+239 - Sao Tome and Principe</option>
                                                    <option value="+503">+503 - El Salvador</option>
                                                    <option value="+1 721">+1 721 - Sint Maarten</option>
                                                    <option value="+963">+963 - Syrian Arab Republic</option>
                                                    <option value="+268">+268 - Swaziland</option>
                                                    <option value="+290">+290 - Tristan de Cunha</option>
                                                    <option value="+1 649">
                                                        +1 649 - Turks And Caicos Islands
                                                    </option>
                                                    <option value="+235">+235 - Chad</option>
                                                    <option value="+228">+228 - Togo</option>
                                                    <option value="+66">+66 - Thailand</option>
                                                    <option value="+992">+992 - Tajikistan</option>
                                                    <option value="+690">+690 - Tokelau</option>
                                                    <option value="+670">
                                                        +670 - Timor-Leste, Democratic Republic of
                                                    </option>
                                                    <option value="+993">+993 - Turkmenistan</option>
                                                    <option value="+216">+216 - Tunisia</option>
                                                    <option value="+676">+676 - Tonga</option>
                                                    <option value="+90">+90 - Turkey</option>
                                                    <option value="+1 868">
                                                        +1 868 - Trinidad And Tobago
                                                    </option>
                                                    <option value="+688">+688 - Tuvalu</option>
                                                    <option value="+886">+886 - Taiwan</option>
                                                    <option value="+255">
                                                        +255 - Tanzania, United Republic Of
                                                    </option>
                                                    <option value="+380">+380 - Ukraine</option>
                                                    <option value="+256">+256 - Uganda</option>
                                                    <option value="+1">
                                                        +1 - United States Minor Outlying Islands
                                                    </option>
                                                    <option value="+1">+1 - United States</option>
                                                    <option value="+598">+598 - Uruguay</option>
                                                    <option value="+998">+998 - Uzbekistan</option>
                                                    <option value="+379,+39">
                                                        +379+39 - Vatican City State
                                                    </option>
                                                    <option value="+1 784">
                                                        +1 784 - Saint Vincent And The Grenadines
                                                    </option>
                                                    <option value="+58">
                                                        +58 - Venezuela, Bolivarian Republic Of
                                                    </option>
                                                    <option value="+1 284">
                                                        +1 284 - Virgin Islands (British)
                                                    </option>
                                                    <option value="+1 340">
                                                        +1 340 - Virgin Islands (US)
                                                    </option>
                                                    <option value="+84">+84 - Viet Nam</option>
                                                    <option value="+678">+678 - Vanuatu</option>
                                                    <option value="+681">+681 - Wallis And Futuna</option>
                                                    <option value="+685">+685 - Samoa</option>
                                                    <option value="+383">+383 - Kosovo</option>
                                                    <option value="+967">+967 - Yemen</option>
                                                    <option value="+262">+262 - Mayotte</option>
                                                    <option value="+27">+27 - South Africa</option>
                                                    <option value="+260">+260 - Zambia</option>
                                                    <option value="+263">+263 - Zimbabwe</option>
                                                    <option value="+93">+93 - Afghanistan</option>
                                                    <option value="+355">+355 - Albania</option>
                                                    <option value="+213">+213 - Algeria</option>
                                                    <option value="+1 684">+1 684 - American Samoa</option>
                                                    <option value="+376">+376 - Andorra</option>
                                                    <option value="+244">+244 - Angola</option>
                                                    <option value="+1 264">+1 264 - Anguilla</option>
                                                    <option value="+672">+672 - Antarctica</option>
                                                    <option value="+1 268">
                                                        +1 268 - Antigua And Barbuda
                                                    </option>
                                                    <option value="+54">+54 - Argentina</option>
                                                    <option value="+374">+374 - Armenia</option>
                                                    <option value="+297">+297 - Aruba</option>
                                                    <option value="+247">+247 - Ascension Island</option>
                                                    <option value="+61">+61 - Australia</option>
                                                    <option value="+43">+43 - Austria</option>
                                                    <option value="+994">+994 - Azerbaijan</option>
                                                    <option value="+1 242">+1 242 - Bahamas</option>
                                                    <option value="+973">+973 - Bahrain</option>
                                                    <option value="+880">+880 - Bangladesh</option>
                                                    <option value="+1 246">+1 246 - Barbados</option>
                                                    <option value="+375">+375 - Belarus</option>
                                                    <option value="+32">+32 - Belgium</option>
                                                    <option value="+501">+501 - Belize</option>
                                                    <option value="+229">+229 - Benin</option>
                                                    <option value="+1 441">+1 441 - Bermuda</option>
                                                    <option value="+975">+975 - Bhutan</option>
                                                    <option value="+591">
                                                        +591 - Bolivia, Plurinational State Of
                                                    </option>
                                                    <option value="+599">
                                                        +599 - Bonaire, Saint Eustatius And Saba
                                                    </option>
                                                    <option value="+387">
                                                        +387 - Bosnia &amp; Herzegovina
                                                    </option>
                                                    <option value="+267">+267 - Botswana</option>
                                                    <option value="+55">+55 - Brazil</option>
                                                    <option value="+246">
                                                        +246 - British Indian Ocean Territory
                                                    </option>
                                                    <option value="+673">+673 - Brunei Darussalam</option>
                                                    <option value="+359">+359 - Bulgaria</option>
                                                    <option value="+226">+226 - Burkina Faso</option>
                                                    <option value="+257">+257 - Burundi</option>
                                                    <option value="+238">+238 - Cabo Verde</option>
                                                    <option value="+855">+855 - Cambodia</option>
                                                    <option value="+237">+237 - Cameroon</option>
                                                    <option value="+1">+1 - Canada</option>
                                                    <option value="+1 345">+1 345 - Cayman Islands</option>
                                                    <option value="+236">
                                                        +236 - Central African Republic
                                                    </option>
                                                    <option value="+235">+235 - Chad</option>
                                                    <option value="+56">+56 - Chile</option>
                                                    <option value="+86">+86 - China</option>
                                                    <option value="+61">+61 - Christmas Island</option>
                                                    <option value="+61">+61 - Cocos (Keeling) Islands</option>
                                                    <option value="+57">+57 - Colombia</option>
                                                    <option value="+269">+269 - Comoros</option>
                                                    <option value="+682">+682 - Cook Islands</option>
                                                    <option value="+506">+506 - Costa Rica</option>
                                                    <option value="+385">+385 - Croatia</option>
                                                    <option value="+53">+53 - Cuba</option>
                                                    <option value="+599">+599 - Curacao</option>
                                                    <option value="+357">+357 - Cyprus</option>
                                                    <option value="+420">+420 - Czech Republic</option>
                                                    <option value="+225">+225 - Côte d'Ivoire</option>
                                                    <option value="+243">
                                                        +243 - Democratic Republic Of Congo
                                                    </option>
                                                    <option value="+45">+45 - Denmark</option>
                                                    <option value="+253">+253 - Djibouti</option>
                                                    <option value="+1 767">+1 767 - Dominica</option>
                                                    <option value="+1 809,+1 829,+1 849">
                                                        +1 809 - Dominican Republic
                                                    </option>
                                                    <option value="+1 809,+1 829,+1 849">
                                                        +1 829 - Dominican Republic
                                                    </option>
                                                    <option value="+1 809,+1 829,+1 849">
                                                        +1 849 - Dominican Republic
                                                    </option>
                                                    <option value="+593">+593 - Ecuador</option>
                                                    <option value="+20">+20 - Egypt</option>
                                                    <option value="+503">+503 - El Salvador</option>
                                                    <option value="+240">+240 - Equatorial Guinea</option>
                                                    <option value="+291">+291 - Eritrea</option>
                                                    <option value="+372">+372 - Estonia</option>
                                                    <option value="+251">+251 - Ethiopia</option>
                                                    <option value="+388">+388 - European Union</option>
                                                    <option value="+500">+500 - Falkland Islands</option>
                                                    <option value="+298">+298 - Faroe Islands</option>
                                                    <option value="+679">+679 - Fiji</option>
                                                    <option value="+358">+358 - Finland</option>
                                                    <option value="+33">+33 - France</option>
                                                    <option value="+241">+241 - France, Metropolitan</option>
                                                    <option value="+594">+594 - French Guiana</option>
                                                    <option value="+689">+689 - French Polynesia</option>
                                                    <option value="+241">+241 - Gabon</option>
                                                    <option value="+220">+220 - Gambia</option>
                                                    <option value="+995">+995 - Georgia</option>
                                                    <option value="+49">+49 - Germany</option>
                                                    <option value="+233">+233 - Ghana</option>
                                                    <option value="+350">+350 - Gibraltar</option>
                                                    <option value="+30">+30 - Greece</option>
                                                    <option value="+299">+299 - Greenland</option>
                                                    <option value="+473">+473 - Grenada</option>
                                                    <option value="+590">+590 - Guadeloupe</option>
                                                    <option value="+1 671">+1 671 - Guam</option>
                                                    <option value="+502">+502 - Guatemala</option>
                                                    <option value="+44">+44 - Guernsey</option>
                                                    <option value="+224">+224 - Guinea</option>
                                                    <option value="+245">+245 - Guinea-bissau</option>
                                                    <option value="+592">+592 - Guyana</option>
                                                    <option value="+509">+509 - Haiti</option>
                                                    <option value="+504">+504 - Honduras</option>
                                                    <option value="+852">+852 - Hong Kong</option>
                                                    <option value="+36">+36 - Hungary</option>
                                                    <option value="+354">+354 - Iceland</option>
                                                    <option value="+91">+91 - India</option>
                                                    <option value="+62">+62 - Indonesia</option>
                                                    <option value="+98">
                                                        +98 - Iran, Islamic Republic Of
                                                    </option>
                                                    <option value="+964">+964 - Iraq</option>
                                                    <option value="+353">+353 - Ireland</option>
                                                    <option value="+44">+44 - Isle Of Man</option>
                                                    <option value="+972">+972 - Israel</option>
                                                    <option value="+39">+39 - Italy</option>
                                                    <option value="+1 876">+1 876 - Jamaica</option>
                                                    <option value="+81">+81 - Japan</option>
                                                    <option value="+44">+44 - Jersey</option>
                                                    <option value="+962">+962 - Jordan</option>
                                                    <option value="+7,+7 6,+7 7">+7 - Kazakhstan</option>
                                                    <option value="+7,+7 6,+7 7">+7 6 - Kazakhstan</option>
                                                    <option value="+7,+7 6,+7 7">+7 7 - Kazakhstan</option>
                                                    <option value="+254">+254 - Kenya</option>
                                                    <option value="+686">+686 - Kiribati</option>
                                                    <option value="+850">
                                                        +850 - Korea, Democratic People's Republic Of
                                                    </option>
                                                    <option value="+82">+82 - Korea, Republic Of</option>
                                                    <option value="+383">+383 - Kosovo</option>
                                                    <option value="+965">+965 - Kuwait</option>
                                                    <option value="+996">+996 - Kyrgyzstan</option>
                                                    <option value="+856">
                                                        +856 - Lao People's Democratic Republic
                                                    </option>
                                                    <option value="+371">+371 - Latvia</option>
                                                    <option value="+961">+961 - Lebanon</option>
                                                    <option value="+266">+266 - Lesotho</option>
                                                    <option value="+231">+231 - Liberia</option>
                                                    <option value="+218">+218 - Libya</option>
                                                    <option value="+423">+423 - Liechtenstein</option>
                                                    <option value="+370">+370 - Lithuania</option>
                                                    <option value="+352">+352 - Luxembourg</option>
                                                    <option value="+853">+853 - Macao</option>
                                                    <option value="+389">
                                                        +389 - Macedonia, The Former Yugoslav Republic Of
                                                    </option>
                                                    <option value="+261">+261 - Madagascar</option>
                                                    <option value="+265">+265 - Malawi</option>
                                                    <option value="+60">+60 - Malaysia</option>
                                                    <option value="+960">+960 - Maldives</option>
                                                    <option value="+223">+223 - Mali</option>
                                                    <option value="+356">+356 - Malta</option>
                                                    <option value="+692">+692 - Marshall Islands</option>
                                                    <option value="+596">+596 - Martinique</option>
                                                    <option value="+222">+222 - Mauritania</option>
                                                    <option value="+230">+230 - Mauritius</option>
                                                    <option value="+262">+262 - Mayotte</option>
                                                    <option value="+52">+52 - Mexico</option>
                                                    <option value="+691">
                                                        +691 - Micronesia, Federated States Of
                                                    </option>
                                                    <option value="+373">+373 - Moldova</option>
                                                    <option value="+377">+377 - Monaco</option>
                                                    <option value="+976">+976 - Mongolia</option>
                                                    <option value="+382">+382 - Montenegro</option>
                                                    <option value="+1 664">+1 664 - Montserrat</option>
                                                    <option value="+212">+212 - Morocco</option>
                                                    <option value="+258">+258 - Mozambique</option>
                                                    <option value="+95">+95 - Myanmar</option>
                                                    <option value="+264">+264 - Namibia</option>
                                                    <option value="+674">+674 - Nauru</option>
                                                    <option value="+977">+977 - Nepal</option>
                                                    <option value="+31">+31 - Netherlands</option>
                                                    <option value="+687">+687 - New Caledonia</option>
                                                    <option value="+64">+64 - New Zealand</option>
                                                    <option value="+505">+505 - Nicaragua</option>
                                                    <option value="+227">+227 - Niger</option>
                                                    <option value="+234">+234 - Nigeria</option>
                                                    <option value="+683">+683 - Niue</option>
                                                    <option value="+672">+672 - Norfolk Island</option>
                                                    <option value="+1 670">
                                                        +1 670 - Northern Mariana Islands
                                                    </option>
                                                    <option value="+47">+47 - Norway</option>
                                                    <option value="+968">+968 - Oman</option>
                                                    <option value="+92">+92 - Pakistan</option>
                                                    <option value="+680">+680 - Palau</option>
                                                    <option value="+970">
                                                        +970 - Palestinian Territory, Occupied
                                                    </option>
                                                    <option value="+507">+507 - Panama</option>
                                                    <option value="+675">+675 - Papua New Guinea</option>
                                                    <option value="+595">+595 - Paraguay</option>
                                                    <option value="+51">+51 - Peru</option>
                                                    <option value="+63">+63 - Philippines</option>
                                                    <option value="+872">+872 - Pitcairn</option>
                                                    <option value="+48">+48 - Poland</option>
                                                    <option value="+351">+351 - Portugal</option>
                                                    <option value="+1 787,+1 939">
                                                        +1 787 - Puerto Rico
                                                    </option>
                                                    <option value="+1 787,+1 939">
                                                        +1 939 - Puerto Rico
                                                    </option>
                                                    <option value="+974">+974 - Qatar</option>
                                                    <option value="+242">+242 - Republic Of Congo</option>
                                                    <option value="+262">+262 - Reunion</option>
                                                    <option value="+40">+40 - Romania</option>
                                                    <option value="+7,+7 3,+7 4,+7 8">
                                                        +7 - Russian Federation
                                                    </option>
                                                    <option value="+7,+7 3,+7 4,+7 8">
                                                        +7 3 - Russian Federation
                                                    </option>
                                                    <option value="+7,+7 3,+7 4,+7 8">
                                                        +7 4 - Russian Federation
                                                    </option>
                                                    <option value="+7,+7 3,+7 4,+7 8">
                                                        +7 8 - Russian Federation
                                                    </option>
                                                    <option value="+250">+250 - Rwanda</option>
                                                    <option value="+590">+590 - Saint Barthélemy</option>
                                                    <option value="+290">
                                                        +290 - Saint Helena, Ascension And Tristan Da Cunha
                                                    </option>
                                                    <option value="+1 869">
                                                        +1 869 - Saint Kitts And Nevis
                                                    </option>
                                                    <option value="+1 758">+1 758 - Saint Lucia</option>
                                                    <option value="+590">+590 - Saint Martin</option>
                                                    <option value="+508">
                                                        +508 - Saint Pierre And Miquelon
                                                    </option>
                                                    <option value="+1 784">
                                                        +1 784 - Saint Vincent And The Grenadines
                                                    </option>
                                                    <option value="+685">+685 - Samoa</option>
                                                    <option value="+378">+378 - San Marino</option>
                                                    <option value="+239">+239 - Sao Tome and Principe</option>
                                                    <option value="+966">+966 - Saudi Arabia</option>
                                                    <option value="+221">+221 - Senegal</option>
                                                    <option value="+381">+381 - Serbia</option>
                                                    <option value="+248">+248 - Seychelles</option>
                                                    <option value="+232">+232 - Sierra Leone</option>
                                                    <option value="+65">+65 - Singapore</option>
                                                    <option value="+1 721">+1 721 - Sint Maarten</option>
                                                    <option value="+421">+421 - Slovakia</option>
                                                    <option value="+386">+386 - Slovenia</option>
                                                    <option value="+677">+677 - Solomon Islands</option>
                                                    <option value="+252">+252 - Somalia</option>
                                                    <option value="+27">+27 - South Africa</option>
                                                    <option value="+211">+211 - South Sudan</option>
                                                    <option value="+34">+34 - Spain</option>
                                                    <option value="+94">+94 - Sri Lanka</option>
                                                    <option value="+249">+249 - Sudan</option>
                                                    <option value="+597">+597 - Suriname</option>
                                                    <option value="+47">+47 - Svalbard And Jan Mayen</option>
                                                    <option value="+268">+268 - Swaziland</option>
                                                    <option value="+46">+46 - Sweden</option>
                                                    <option value="+41">+41 - Switzerland</option>
                                                    <option value="+963">+963 - Syrian Arab Republic</option>
                                                    <option value="+886">+886 - Taiwan</option>
                                                    <option value="+992">+992 - Tajikistan</option>
                                                    <option value="+255">
                                                        +255 - Tanzania, United Republic Of
                                                    </option>
                                                    <option value="+66">+66 - Thailand</option>
                                                    <option value="+670">
                                                        +670 - Timor-Leste, Democratic Republic of
                                                    </option>
                                                    <option value="+228">+228 - Togo</option>
                                                    <option value="+690">+690 - Tokelau</option>
                                                    <option value="+676">+676 - Tonga</option>
                                                    <option value="+1 868">
                                                        +1 868 - Trinidad And Tobago
                                                    </option>
                                                    <option value="+290">+290 - Tristan de Cunha</option>
                                                    <option value="+216">+216 - Tunisia</option>
                                                    <option value="+90">+90 - Turkey</option>
                                                    <option value="+993">+993 - Turkmenistan</option>
                                                    <option value="+1 649">
                                                        +1 649 - Turks And Caicos Islands
                                                    </option>
                                                    <option value="+688">+688 - Tuvalu</option>
                                                    <option value="+256">+256 - Uganda</option>
                                                    <option value="+380">+380 - Ukraine</option>
                                                    <option value="+971">+971 - United Arab Emirates</option>
                                                    <option value="+44">+44 - United Kingdom</option>
                                                    <option value="+1">+1 - United States</option>
                                                    <option value="+1">
                                                        +1 - United States Minor Outlying Islands
                                                    </option>
                                                    <option value="+598">+598 - Uruguay</option>
                                                    <option value="+998">+998 - Uzbekistan</option>
                                                    <option value="+678">+678 - Vanuatu</option>
                                                    <option value="+379,+39">
                                                        +379 - Vatican City State
                                                    </option>
                                                    <option value="+379,+39">+39 - Vatican City State</option>
                                                    <option value="+58">
                                                        +58 - Venezuela, Bolivarian Republic Of
                                                    </option>
                                                    <option value="+84">+84 - Viet Nam</option>
                                                    <option value="+1 284">
                                                        +1 284 - Virgin Islands (British)
                                                    </option>
                                                    <option value="+1 340">
                                                        +1 340 - Virgin Islands (US)
                                                    </option>
                                                    <option value="+681">+681 - Wallis And Futuna</option>
                                                    <option value="+212">+212 - Western Sahara</option>
                                                    <option value="+967">+967 - Yemen</option>
                                                    <option value="+260">+260 - Zambia</option>
                                                    <option value="+263">+263 - Zimbabwe</option>
                                                    <option value="+358">+358 - Åland Islands</option>
                                                </select>
                                                @error('countryCode')
                                                    <span style="color: #f00">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input_group col-span-3">
                                                <input type="number" name="number" placeholder="Mobile number*" class="border rounded-md h-10 w-full p-2 text-sm font-light font-poppins text-text_colors focus:outline-none focus:border-theme_color" />
                                                @error('number')
                                                    <span style="color: #f00">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input_group col-span-4">
                                        <input type="email" name="email" placeholder="Email address*" class="border rounded-md h-10 w-full p-2 text-sm font-light font-poppins text-text_colors focus:outline-none focus:border-theme_color" />
                                        @error('email')
                                            <span style="color: #f00">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input_group sm:col-span-2">
                                        <input type="password" name="password" placeholder="Password*" class="border rounded-md h-10 w-full p-2 text-sm font-light font-poppins text-text_colors focus:outline-none focus:border-theme_color" />
                                        @error('password')
                                            <span style="color: #f00">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input_group sm:col-span-2">
                                        <input type="password" name="password_confirmation" placeholder="Retype Password*" class="border rounded-md h-10 w-full p-2 text-sm font-light font-poppins text-text_colors focus:outline-none focus:border-theme_color" />
                                    </div>
                                    <div class="input_group col-span-4">
                                        <input type="text" name="city" placeholder="Your current city" class="border rounded-md h-10 w-full p-2 text-sm font-light font-poppins text-text_colors focus:outline-none focus:border-theme_color" />
                                        @error('city')
                                            <span style="color: #f00">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="input_group col-span-4">
                                        <div class="flex items-center mb-4">
                                            <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-theme_color bg-white border-border_color rounded focus:ring-0 focus:border-theme_color"  onchange="enableButton(this)"/>
                                            <label for="default-checkbox" class="ml-2 text-sm font-normal font-poppins">I accept to the <a href="#0" class="text-theme_color">Terms & conditions</a></label>
                                        </div>
                                    </div>
                                    <div class="col-span-4" id="warning_text" style="display: none">
                                        <span style="color: #f00">please accept the terms and conditions</span>
                                    </div>
                                    <div class="input_btn col-span-4">
                                        <button type="button" id="proceed-btn" class="bg-gray-500 text-white rounded-md py-2 px-4 text-sm font-normal font-poppins w-full" onclick="nextStep(this)">
                                            Proceed to next step
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="step" id="step2">
                            <h4 class="pb-4 text-text_colors md:text-2xl text-xl font-medium font-poppins">
                                More Information
                            </h4>
                            <div class="grid grid-cols-4 gap-5 pt-5 border-t">
                                <div class="input_group col-span-4">
                                    <label for="" class="inline-block pb-1 text-sm text-black text-opacity-50 font-normal font-poppins">membership type</label>
                                    <select name="member_type" class="text-black font-normal font-poppins w-full border h-10 rounded-md p-2 focus:outline-none focus:border-theme_color" aria-invalid="false">
                                        <option value="associate">Associate</option>
                                        <option value="full_member">Full Member</option>
                                    </select>
                                    @error('member_type')
                                    <span style="color: #f00;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input_group sm:col-span-2">
                                    <label for="ssc_roll" class="inline-block pb-1 text-sm text-black text-opacity-50 font-normal font-poppins">SSC Roll Number</label>
                                    <input type="text" id="ssc_roll" name="ssc_roll" placeholder="" class="border rounded-md h-10 w-full p-2 text-sm font-light font-poppins text-text_colors focus:outline-none focus:border-theme_color" />
                                    @error('ssc_roll')
                                    <span style="color: #f00;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input_group sm:col-span-2">
                                    <label for="ssc_reg" class="inline-block pb-1 text-sm text-black text-opacity-50 font-normal font-poppins">SSC Registration No</label>
                                    <input type="text" id="ssc_reg" name="ssc_reg" placeholder="" class="border rounded-md h-10 w-full p-2 text-sm font-light font-poppins text-text_colors focus:outline-none focus:border-theme_color" />
                                    @error('ssc_reg')
                                    <span style="color: #f00;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input_group sm:col-span-2">
                                    <label for="pass_year" class="inline-block pb-1 text-sm text-black text-opacity-50 font-normal font-poppins">Passing Year</label>
                                    <select id="yearPicker" name="passing_year" class="text-black font-normal font-poppins w-full border h-10 rounded-md p-2 focus:outline-none focus:border-theme_color"></select>
                                    @error('passing_year')
                                    <span style="color: #f00;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input_group sm:col-span-2">
                                    <label for="" class="inline-block pb-1 text-sm text-black text-opacity-50 font-normal font-poppins">membership type</label>
                                    <select name="ssc_board" class="text-black font-normal font-poppins w-full border h-10 rounded-md p-2 focus:outline-none focus:border-theme_color" aria-invalid="false">
                                        <option value="0">Barishal</option>
                                        <option value="1">Chattogram</option>
                                        <option value="2">Dhaka</option>
                                        <option value="3">Khulna</option>
                                        <option value="4">Rajshahi</option>
                                        <option value="5">Rangpur</option>
                                        <option value="6">Mymensingh</option>
                                        <option value="7">Sylhet</option>
                                    </select>
                                    @error('ssc_board')
                                    <span style="color: #f00;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input_group sm:col-span-4">
                                    <label for="" class="inline-block pb-2 text-sm text-black text-opacity-50 font-normal font-poppins">Scan copy of certificate / registration card</label>
                                    <div class="flex items-center justify-center w-full">
                                        <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-20 border border-gray-300 rounded-lg cursor-pointer hover:bg-gray-100">
                                            <div class="flex flex-col items-center justify-center p-2">
                                                <p class="text-sm text-gray-500 dark:text-gray-400">
                                                    Upload an attachment
                                                </p>
                                            </div>
                                            <input id="dropzone-file" name="ssc_document" type="file" />
                                            @error('ssc_document')
                                                <span style="color: #f00;">{{ $message }}</span>
                                            @enderror
                                        </label>
                                    </div>
                                </div>
                                <div class="input_group sm:col-span-4">
                                    <label for="nidNo" class="inline-block pb-1 text-sm text-black text-opacity-50 font-normal font-poppins"><span class="text-sm font-medium">NID No</span> <span class="text-xs">Optional</span></label>
                                    <input type="text" id="nidNo" name="nid_no" placeholder="" class="border rounded-md h-10 w-full p-2 text-sm font-light font-poppins text-text_colors focus:outline-none focus:border-theme_color" />
                                    @error('nid_no')
                                    <span style="color: #f00;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input_group sm:col-span-4">
                                    <label for="" class="inline-block pb-2 text-sm text-black text-opacity-50 font-normal font-poppins"><span class="text-sm font-medium">Scan copy of NID</span> <span class="text-xs">Optional</span></label>
                                    <div class="flex items-center justify-center w-full">
                                        <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-20 border border-gray-300 rounded-lg cursor-pointer hover:bg-gray-100">
                                            <div class="flex flex-col items-center justify-center p-2">
                                                <p class="text-sm text-gray-500 dark:text-gray-400">
                                                    Upload an attachment
                                                </p>
                                            </div>
                                            <input id="dropzone-file" name="nid_scaned" type="file" class="hidden" />
                                        </label>
                                        @error('nid_scaned')
                                            <span style="color: #f00;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="input_group sm:col-span-4">
                                    <label for="emergencyContact" class="inline-block pb-1 text-sm text-black text-opacity-50 font-normal font-poppins">
                                        <span class="text-sm font-medium">Emergency Contact Person name and Mobile number</span> <span class="text-xs">Optional</span>
                                    </label>
                                    <textarea name="emergency_contact" id="emergencyContact" rows="2" class="border rounded-md w-full p-2 text-sm font-light font-poppins text-text_colors focus:outline-none focus:border-theme_color"></textarea>
                                    @error('emergency_contact')
                                    <span style="color: #f00;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input_group sm:col-span-4">
                                    <label for="emergencyContact" class="inline-block pb-1 text-sm text-black text-opacity-50 font-normal font-poppins"> <span class="text-sm font-medium">Permanent Address</span> <span class="text-xs">Optional</span> </label>
                                    <textarea name="permanent_address" id="emergencyContact" rows="2" class="border rounded-md w-full p-2 text-sm font-light font-poppins text-text_colors focus:outline-none focus:border-theme_color"></textarea>
                                    @error('permanent_address')
                                    <span style="color: #f00;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input_group sm:col-span-4">
                                    <label for="busReg" class="inline-block pb-1 text-sm text-black text-opacity-50 font-normal font-poppins">
                                        <span class="text-sm font-medium">Business Registration Number (BRN, if any)</span> <span class="text-xs">Optional</span>
                                    </label>
                                    <input type="text" id="busReg" name="brn_number" placeholder="" class="border rounded-md h-10 w-full p-2 text-sm font-light font-poppins text-text_colors focus:outline-none focus:border-theme_color" />
                                    @error('brn_number')
                                    <span style="color: #f00;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="input_group sm:col-span-4">
                                    <label for="birDay" class="inline-block pb-1 text-sm text-black text-opacity-50 font-normal font-poppins"><span class="text-sm font-medium">Birthday</span> <span class="text-xs">Optional</span></label>
                                    <input type="text" id="birDay" name="birth_day" placeholder="" class="border rounded-md h-10 w-full p-2 text-sm font-light font-poppins text-text_colors focus:outline-none focus:border-theme_color" />
                                    @error('birth_day')
                                    <span style="color: #f00;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="input_group sm:col-span-4">
                                <label for="bloodGroup" class="inline-block pb-1 text-sm text-black text-opacity-50 font-normal font-poppins"><span class="text-sm font-medium">Birthday</span> <span class="text-xs">Optional</span></label>
                                <select name="blood_group" id="bloodGroup" class="border rounded-md h-10 w-full p-2 text-sm font-light font-poppins text-text_colors focus:outline-none focus:border-theme_color">
                                    <option value="0">A(+)</option>
                                    <option value="1">A(-)</option>
                                    <option value="2">B(+)</option>
                                    <option value="3">B(-)</option>
                                    <option value="4">AB(+)</option>
                                    <option value="5">O(-)</option>
                                </select>
                                @error('blood_group')
                                <span style="color: #f00;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="flex items-center justify-between gap-3 pt-6">
                                <button type="button" class="bg-gray-500 py-2 px-4 rounded-md text-white text-sm font-poppins font-medium" onclick="prevStep()">Previous</button>
                                <button type="submit" class="bg-theme_color text-white rounded-md py-2 px-4 text-sm font-normal font-poppins">Proceed to next step</button>
                            </div>
                        </div>

                        {{-- <div class="step" id="step3">
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
                                    <span class="inline-block text-red-400 text-base font-medium font-poppins">ahasan.jrk@gmail.com</span>
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
                        </div> --}}
                    </div>
                </form>
            </div>
        </div>

    <!-- signup area ends  -->

    <script>
        let currentStep = 1;
        const form = document.getElementById("multi-step-form");
        const steps = document.querySelectorAll(".step");
        const stepCountElement = document.getElementById("step-count");

        function showStep(step) {
            steps.forEach((stepElement, index) => {
                if (index + 1 === step) {
                    stepElement.classList.add("active");
                } else {
                    stepElement.classList.remove("active");
                }
            });
            stepCountElement.textContent = `Step ${step} of ${steps.length}`;
        }

        function nextStep(button) {
            var warningText = document.getElementById("warning_text");
            var hasBgGray500 = button.classList.contains("bg-gray-500");
            if (hasBgGray500 && currentStep == 1) {
                warningText.style.display = "block";
            } else {
                if(currentStep == 2){
                    let form = button.closest('form');
                    var formData = new FormData(form);

                    // Create XMLHttpRequest object
                    var xhr = new XMLHttpRequest();

                    // Define AJAX request
                    xhr.open('POST', form.action);
                    xhr.onreadystatechange = function () {
                        if (xhr.readyState === XMLHttpRequest.DONE) {
                            if (xhr.status === 200) {
                                console.log(xhr.responseText); // Success
                            } else {
                                console.error('Error:', xhr.status); // Error
                            }
                        }
                    };

                    // Send form data
                    xhr.send(formData);
                }
                warningText.style.display = "none";
                if (currentStep < steps.length) {
                    currentStep++;
                    showStep(currentStep);
                }
            }
        }

        function prevStep() {
            if (currentStep > 1) {
                currentStep--;
                showStep(currentStep);
            }
        }

        // form.addEventListener("submit", function (event) {
        //     event.preventDefault();
        //     // Handle form submission here
        //     console.log("Form submitted");
        // });

        showStep(currentStep);

        // Get the select element
        var yearPicker = document.getElementById("yearPicker");

        // Get the current year
        var currentYear = new Date().getFullYear();

        // Set the starting year
        var startYear = 1900;

        // Populate the select element with years
        for (var i = startYear; i <= currentYear; i++) {
            var option = document.createElement("option");
            option.value = i;
            option.text = i;
            yearPicker.appendChild(option);
        }

        function enableButton(checkbox) {
            var proceedBtn = document.getElementById("proceed-btn");
            // proceedBtn.disabled = !checkbox.checked;
            if (!checkbox.checked) {
                proceedBtn.classList.remove("bg-theme_color");
                proceedBtn.classList.add("bg-gray-500"); // Change to your desired disabled shade color
            } else {
                proceedBtn.classList.remove("bg-gray-500");
                proceedBtn.classList.add("bg-theme_color");
            }
        }
        function handleFileChange() {
            console.log(123);
            var selectedFile = window.event.target.files[0]; // Accessing event indirectly
            var image = document.getElementById('selectedImage');

            if (selectedFile) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    image.src = e.target.result;
                    image.style.display = 'block'; // Show the image
                }
                reader.readAsDataURL(selectedFile);
            } else {
                image.src = '#';
                image.style.display = 'none'; // Hide the image if no file selected
            }
        }

    </script>
  </body>
</html>
