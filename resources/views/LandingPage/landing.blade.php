<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>
<body class="bg-gray-100 text-gray-900">
    <section class="flex flex-col items-center justify-center min-h-screen text-center">
        <h1 class="text-5xl font-bold mb-4">Coffee Lab 🍵</h1>
        <p class="text-lg text-gray-600 mb-6">Coffee makes you happy.</p>
        <a href="{{ route('register') }}" 
           class="px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
            Get Started
        </a>
    </section>
</body>
</html>