@extends("layout.app")
@section('title', 'SplashWash - تم بنجاح')
@section('content')
    <!-- Main Content -->
    <main class="flex-grow container mx-auto px-4 py-12 flex flex-col items-center justify-center text-center">
        <div class="success-container bg-white p-8 rounded-lg shadow-lg max-w-md mx-auto">
            <div class="mb-4 mx-auto rounded-full bg-green-100 p-6 inline-block">
                <div class="success-check"></div>
            </div>
            <h1 class="text-3xl font-bold text-green-600 mb-4">تمت العملية بنجاح!</h1>
            <p class="text-xl text-gray-700 mb-6" id="success-message">تم إنشاء الحجز بنجاح</p>
            <p class="text-gray-600 mb-6">سيتم إرسال تفاصيل الحجز إلى رقم الهاتف / واتساب.</p>
            {{-- <div class="p-4 bg-blue-50 rounded-md text-blue-800 mb-6">
                <p class="font-bold">رقم الحجز: <span>#12345</span></p>
                <p>يرجى الاحتفاظ بهذا الرقم للرجوع إليه لاحقًا</p>
            </div> --}}
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('index') }}"
                    class="bg-blue-600 text-white px-6 py-3 rounded-md font-medium hover:bg-blue-700 transition">
                    العودة للصفحة الرئيسية
                </a>
            </div>
        </div>
    </main>
@endsection

<style>
    .wave-shape {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 150px;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='%231d4ed8' fill-opacity='1' d='M0,224L48,213.3C96,203,192,181,288,181.3C384,181,480,203,576,218.7C672,235,768,245,864,234.7C960,224,1056,192,1152,181.3C1248,171,1344,181,1392,186.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z'%3E%3C/path%3E%3C/svg%3E");
        background-size: cover;
        background-repeat: no-repeat;
        z-index: -1;
    }

    .bubble {
        position: absolute;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.3);
        z-index: -1;
    }

    .success-check {
        display: inline-block;
        transform: rotate(45deg);
        height: 60px;
        width: 30px;
        border-bottom: 10px solid #10b981;
        border-right: 10px solid #10b981;
        margin-bottom: 20px;
    }

    .success-container {
        animation: fadeIn 0.5s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>