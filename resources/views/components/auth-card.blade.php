<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100" style="background: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.6)),url({{asset('npls/images/login1.jpg')}})!important;">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg" style="background: linear-gradient(40deg,black,transparent)!important;">
        {{ $slot }}
    </div>
</div>
