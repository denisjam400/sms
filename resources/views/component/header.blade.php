<header class="py-2 px-5 md:px-10 h-[60px] min-w-full flex justify-between items-center bg-white">
    <button class="flex w-[9%] xs:w-[5%] h-[60%] lg:hidden justify-center items-center" id="menubarbox">
        <img src="{{ asset('vendor/blade-boxicons/logos/bing.svg') }}" class="w-full h-full object-contain">
    </button>

    <h1 class="w-[30%] md:w-[13%]">Header</h1>

    <div class="w-[22%] lg:w-[83%] h-full flex justify-between items-center">
        @if($Auth)
        <div class="w-[50%] hidden lg:w-1/2 rounded-lg h-[85%] border-[1px] lg:flex items-center bg-white border-[rgba(0,0,0,0.94)]
                            justify-between">
            <button type="submit" class="w-[18%] h-full bg-main-brand-color rounded-tl-lg rounded-bl-lg flex items-center justify-center
                                font-bold">
                <img src="{{ asset('asset/icon/magnifying-glass.png') }}" alt="search icon" class="h-[24px] w-[24px]">
            </button>

            <input type="text" placeholder="Search Cours..." class="w-[70%] h-full bg-white outline-none border-none pl-2 pr-3 py-1
                                text-black" />

            <a href="/" class="w-[10%] pl-1 pr-2 my-1 flex justify-center items-center border-l-[1px] border-black
                                rounded-tr-lg rounded-br-lg">
                <img src="{{ asset('vendor/blade-boxicons/regular/filter-alt.svg') }}" alt="filter_Icon"
                    class="w-[60%] h-[60%] object-contain" />
            </a>

        </div>

        <div class="w-full lg:w-[25%] h-[85%] flex justify-end items-center gap-1">

            <a href="/" class="h-full w-[45%] lg:w-[18%] flex justify-center items-center">
                <img src="{{ asset('vendor/blade-boxicons/regular/notification-off.svg') }}" alt="Notification Icon"
                    class="h-[85%] w-[80%] object-contain">
            </a>

            <div id="Profile_Container"
                class="relative h-full w-[48%] lg:w-[70%] flex justify-center items-center gap-3 cursor-pointer">
                <div
                    class="w-[50%] h-[80%] sm:w-[43%] lg:w-[20%] lg:flex justify-center items-center gap-1 rounded-full">
                    <img src='{{ asset("storage/".$Auth->profile_photo_path) }}' alt="User Profile"
                        class="w-full h-full object-cover rounded-full" />
                </div>

                <div class="hidden lg:flex md:w-[65%] h-[75%] flex-col justify-center gap-0">
                    <h4 class="font-bold text-base capitalize">{{substr($Auth->name,0,7) }}</h4>
                    <h6 class="text-sm capitalize">{{ $Auth->usertype }}</h6>
                </div>

                <div class="absolute Profile_Container_Class_Disappear" id="Profile_Container_Class_Disappear">
                    <div
                        class="w-full h-full text-center py-2 px-3 bg-white rounded-xl hover:bg-gray-100 flex justify-start items-center gap-1">
                        <img src="{{ asset('vendor/blade-boxicons/regular/user-pin.svg') }}" alt=""
                            class="w-[23px] h-[23px] object-cover">
                        <h6 href="profile" class="font-semibold capitalize hover:font-bold">Profile</h6>
                    </div>
                    <div
                        class="w-full h-full text-center py-2 px-3 bg-white rounded-xl hover:bg-gray-100 flex justify-start items-center gap-1">
                        <img src="{{ asset('vendor/blade-boxicons/regular/log-out.svg') }}" alt=""
                            class="w-[23px] h-[23px] object-cover">
                        <h6 href="{{ route('logout') }}" class="font-semibold capitalize hover:font-bold">LogOut</h6>
                    </div>
                </div>
            </div>
        </div>

        @else

        <nav class="hidden md:flex w-[45%] md:w-[40%] lg:w-[35%] justify-between items-center">
            <li class="capitalize list-none font-bold">
                <a href="/">home</a>
            </li>
            <li class="capitalize list-none font-semibold">
                <a href="/">Class</a>
            </li>
            <li class="capitalize list-none font-semibold">
                <a href="/">Courses</a>
            </li>
            <li class="capitalize list-none font-semibold">
                <a href="/">About Us</a>
            </li>
        </nav>

        <div class="w-[40%] md:w-[30%] lg:w-[23%] h-full flex justify-center items-center gap-1 sm:gap-2 md:gap-3">
            <a href="{{ route('login') }}" class="w-[45%] h-[80%] rounded-3xl flex justify-center items-center
        text-white hover:border-2
        hover:text-main-brand-color bg-main-brand-color-hover hover:border-main-brand-color hover:bg-white font-semibold
        text-base">Log
                In</a>
            <a href="{{ route('register') }}"
                class="w-[45%] h-[80%] rounded-3xl flex justify-center items-center text-main-brand-color border-2 border-main-brand-color hover:text-white hover:border-main-brand-color-hover hover:bg-main-brand-color-hover font-semibold text-base">Sign
                Up</a>
        </div>

        @endif

</header>