<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login SB Admin 2</title>
    <!-- Google Fonts: Inter untuk tipografi yang modern dan bersih -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Menggunakan font Inter secara global */
        body {
            font-family: 'Inter', sans-serif;
        }
        /* Custom background yang lebih netral, mirip dengan area konten dashboard */
        .neutral-bg {
            background-color: #f8f9fc; /* Warna abu-abu sangat muda */
        }
        /* Style untuk efek shimmer pada tombol saat loading (opsional, bisa diaktifkan dengan JS) */
        @keyframes shimmer {
            0% {
                background-position: -200% 0;
            }
            100% {
                background-position: 200% 0;
            }
        }
        .shimmer-effect {
            background: linear-gradient(90deg, #6d28d9 0%, #a78bfa 50%, #6d28d9 100%);
            background-size: 200% 100%;
            animation: shimmer 1.5s infinite linear;
        }
    </style>
</head>
<body class="neutral-bg flex items-center justify-center min-h-screen p-4">
    <div class="bg-white p-8 md:p-12 rounded-xl shadow-lg w-full max-w-md relative overflow-hidden border border-gray-100">
        <!-- Bentuk dekoratif di latar belakang kartu login dihilangkan agar lebih senada dengan tema dashboard -->

        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-gray-800 tracking-tight leading-tight">Selamat Datang!</h2>
            <p class="text-gray-500 mt-2 text-md">Silakan masuk ke akun Anda.</p>
        </div>
        
        <!-- Pesan error dari validasi -->
        @if ($errors->any())
            <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl relative mb-6 shadow-sm animate-fade-in" role="alert">
                <ul class="list-disc list-inside text-sm font-medium">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3 cursor-pointer">
                    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.03a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.15a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.03a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.15 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                </span>
            </div>
        @endif

        <form method="POST" action="{{ route('login.post') }}" class="space-y-6">
            @csrf
            
            <div>
                <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">Email</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <!-- Icon email dari Lucide Icons -->
                        <svg class="lucide lucide-mail h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                    </div>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus
                           class="w-full py-3 pl-10 pr-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200 placeholder-gray-400 focus:outline-none">
                </div>
            </div>
            
            <div>
                <label for="password" class="block text-gray-700 text-sm font-semibold mb-2">Password</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <!-- Icon kunci dari Lucide Icons -->
                        <svg class="lucide lucide-lock h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="11" x="3" y="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                    </div>
                    <input type="password" id="password" name="password" required
                           class="w-full py-3 pl-10 pr-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200 placeholder-gray-400 focus:outline-none">
                </div>
            </div>
            
            <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-lg transition-all duration-300 shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-400 transform active:scale-95">
                Masuk Sekarang
            </button>

            <div class="text-center text-sm text-gray-600 mt-6">
                Belum punya akun? <a href="#" class="text-blue-600 hover:text-blue-800 font-medium hover:underline transition-colors duration-200">Daftar di sini</a>
            </div>
        </form>
    </div>
</body>
</html>
