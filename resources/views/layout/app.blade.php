<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SplashWash - Premium Car Wash Booking')</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body class="bg-gray-50 font-sans">

    <!-- Header -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <div class="text-blue-600 text-2xl font-bold water-drop">
                        <i class="fas fa-car-wash mr-2"></i>مساج الراحة
                    </div>
                </div>

                <nav class="hidden md:flex space-x-8 text-gray-700">
                    <a href="{{ route('index') }}" class="hover:text-blue-600 transition duration-300">الصفحة
                        الرئيسية</a>
                    <a href="#services" class="hover:text-blue-600 transition duration-300">الخدمات</a>
                    <a href="#order-steps-section" class="hover:text-blue-600 transition duration-300">خطوات طلب</a>
                    <a href="#faq" class="hover:text-blue-600 transition duration-300">الاسئلة الشائعة</a>
                    <a href="#contact" class="hover:text-blue-600 transition duration-300">تواصل معنا</a>
                </nav>

                <div class="hidden md:flex items-center space-x-4">
                    <a href="#" class="text-gray-600 hover:text-blue-600 transition duration-300">

                    </a>
                    <a href="#"
                        class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                        جرب مساج الراحة
                    </a>
                </div>

                <button class="md:hidden text-gray-500 focus:outline-none">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Menu (hidden by default) -->
    <div class="hidden bg-white shadow-lg py-2 px-4 md:hidden">
        <nav class="flex flex-col space-y-3 text-gray-700">
            <a href="#" class="hover:text-blue-600 transition duration-300 py-2 border-b border-gray-100">الصفحة
                الرئيسية</a>
            <a href="#" class="hover:text-blue-600 transition duration-300 py-2 border-b border-gray-100">الخدمات</a>
            <a href="#" class="hover:text-blue-600 transition duration-300 py-2 border-b border-gray-100">التسعير</a>
            <a href="#" class="hover:text-blue-600 transition duration-300 py-2 border-b border-gray-100">الاسئلة
                الشائعة</a>
            <a href="#" class="hover:text-blue-600 transition duration-300 py-2">تواصل معنا</a>
            <a href="#"
                class="bg-blue-600 text-white px-4 py-2 mt-2 rounded-lg text-center hover:bg-blue-700 transition duration-300">
                جرب مساج الراحة
            </a>
        </nav>
    </div>

    {{-- message --}}
    <div>
        @if ($errors->any())
            <div class="bg-red-500 text-white p-4 mb-6">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('error'))
            <div class="bg-red-500 text-white p-4 mb-6">
                {{ session('error') }}
            </div>
        @endif

        @if (session('success'))
            <div class="bg-green-500 text-white p-4 mb-6">
                {{ session('success') }}
            </div>
        @endif
    </div>

    @yield('content')

    {{-- Footer section --}}
    <footer class="bg-white rounded-lg shadow-sm m-4 dark:bg-gray-800">
        <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/"
                    class="hover:underline">Flowbite™</a>. جميع الحقوق محفوظة.
            </span>
            <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
                <li>
                    <a href="#home" class="hover:underline me-4 md:me-6"> الصفحة الرئيسية</a>
                </li>
                <li>
                    <a href="#services" class="hover:underline me-4 md:me-6">الخدمات</a>
                </li>
                <li>
                    <a href="#order-steps-section" class="hover:underline me-4 md:me-6">خطوات طلب</a>
                </li>
                <li>
                    <a href="#faq" class="hover:underline me-4">الاسئلة الشائعة</a>
                </li>
                <li>
                    <a href="#contact" class="hover:underline">تواصل معنا</a>
                </li>
            </ul>
        </div>
    </footer>

    {{-- script js --}}
    <script src="{{ asset("script.js") }}"></script>

</body>

</html>