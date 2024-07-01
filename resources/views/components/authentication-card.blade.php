<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 darken_img">

    <div class="w-full flex justify-center items-center gap-10">
        <div class="w-1/2 sm:max-w-md mt-6 px-6 py-4 bg-[#ffffffe0] shadow-md overflow-hidden sm:rounded-lg">
            <div class="w-full flex justify-center items-center">
                {{ $logo }}
            </div>
            <div class="w-full mt-6 py-4">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>