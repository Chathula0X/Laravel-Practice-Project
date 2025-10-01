<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Coffee Menu - Coffee Lab</title>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="/" class="text-2xl font-bold text-indigo-600">Coffee Lab 🍵</a>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="text-gray-600 hover:text-indigo-600 transition">Home</a>
                    <a href="{{ route('menu') }}" class="text-indigo-600 font-medium">Menu</a>
                    <a href="#about" class="text-gray-600 hover:text-indigo-600 transition">About</a>
                    <a href="#contact" class="text-gray-600 hover:text-indigo-600 transition">Contact</a>
                    <a href="/login" class="text-gray-600 hover:text-indigo-600 px-3 py-2 rounded-md text-sm font-medium">
                        Sign In
                    </a>
                    <a href="/register" class="bg-indigo-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-indigo-700 transition">
                        Sign Up
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-amber-50 to-orange-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Our Coffee Menu
            </h1>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Discover our carefully crafted selection of premium coffees, each brewed to perfection
            </p>
        </div>
    </section>

    <!-- Menu Categories -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Category Tabs -->
            <div class="flex flex-wrap justify-center mb-12">
                <button class="menu-tab active bg-indigo-600 text-white px-6 py-3 rounded-lg mr-4 mb-4 font-semibold" data-category="hot-coffee">
                    Hot Coffee
                </button>
                <button class="menu-tab bg-gray-200 text-gray-700 px-6 py-3 rounded-lg mr-4 mb-4 font-semibold hover:bg-gray-300 transition" data-category="cold-coffee">
                    Cold Coffee
                </button>
                <button class="menu-tab bg-gray-200 text-gray-700 px-6 py-3 rounded-lg mr-4 mb-4 font-semibold hover:bg-gray-300 transition" data-category="espresso">
                    Espresso
                </button>
                <button class="menu-tab bg-gray-200 text-gray-700 px-6 py-3 rounded-lg mb-4 font-semibold hover:bg-gray-300 transition" data-category="specialty">
                    Specialty
                </button>
            </div>

            <!-- Hot Coffee Section -->
            <div id="hot-coffee" class="menu-category">
                <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Hot Coffee</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Espresso -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                        <div class="h-48 bg-gradient-to-br from-amber-200 to-orange-300 flex items-center justify-center">
                            <span class="text-6xl">☕</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Espresso</h3>
                            <p class="text-gray-600 mb-4">Rich, bold, and perfectly balanced single shot</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-indigo-600">$3.50</span>
                                <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Americano -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                        <div class="h-48 bg-gradient-to-br from-amber-100 to-yellow-200 flex items-center justify-center">
                            <span class="text-6xl">🇺🇸</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Americano</h3>
                            <p class="text-gray-600 mb-4">Espresso with hot water for a smooth, clean taste</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-indigo-600">$4.00</span>
                                <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Cappuccino -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                        <div class="h-48 bg-gradient-to-br from-amber-100 to-yellow-200 flex items-center justify-center">
                            <span class="text-6xl">🥛</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Cappuccino</h3>
                            <p class="text-gray-600 mb-4">Espresso with steamed milk and perfect foam</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-indigo-600">$4.25</span>
                                <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Latte -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                        <div class="h-48 bg-gradient-to-br from-amber-50 to-yellow-100 flex items-center justify-center">
                            <span class="text-6xl">🥤</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Latte</h3>
                            <p class="text-gray-600 mb-4">Espresso with lots of steamed milk and light foam</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-indigo-600">$4.75</span>
                                <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Mocha -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                        <div class="h-48 bg-gradient-to-br from-amber-300 to-orange-400 flex items-center justify-center">
                            <span class="text-6xl">🍫</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Mocha</h3>
                            <p class="text-gray-600 mb-4">Espresso with chocolate and steamed milk</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-indigo-600">$5.25</span>
                                <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Macchiato -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                        <div class="h-48 bg-gradient-to-br from-amber-200 to-orange-300 flex items-center justify-center">
                            <span class="text-6xl">🎯</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Macchiato</h3>
                            <p class="text-gray-600 mb-4">Espresso "marked" with a dollop of foam</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-indigo-600">$4.50</span>
                                <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cold Coffee Section -->
            <div id="cold-coffee" class="menu-category hidden">
                <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Cold Coffee</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Iced Coffee -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                        <div class="h-48 bg-gradient-to-br from-blue-200 to-cyan-300 flex items-center justify-center">
                            <span class="text-6xl">🧊</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Iced Coffee</h3>
                            <p class="text-gray-600 mb-4">Chilled coffee served over ice</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-indigo-600">$3.75</span>
                                <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Cold Brew -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                        <div class="h-48 bg-gradient-to-br from-green-200 to-emerald-300 flex items-center justify-center">
                            <span class="text-6xl">🍃</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Cold Brew</h3>
                            <p class="text-gray-600 mb-4">Smooth and refreshing, steeped for 12 hours</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-indigo-600">$4.00</span>
                                <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Iced Latte -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                        <div class="h-48 bg-gradient-to-br from-amber-100 to-yellow-200 flex items-center justify-center">
                            <span class="text-6xl">🥤</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Iced Latte</h3>
                            <p class="text-gray-600 mb-4">Espresso with cold milk over ice</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-indigo-600">$4.50</span>
                                <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Frappuccino -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                        <div class="h-48 bg-gradient-to-br from-purple-200 to-pink-300 flex items-center justify-center">
                            <span class="text-6xl">🥤</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Frappuccino</h3>
                            <p class="text-gray-600 mb-4">Blended coffee drink with ice and cream</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-indigo-600">$5.50</span>
                                <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Espresso Section -->
            <div id="espresso" class="menu-category hidden">
                <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Espresso Drinks</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Doppio -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                        <div class="h-48 bg-gradient-to-br from-amber-300 to-orange-400 flex items-center justify-center">
                            <span class="text-6xl">☕</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Doppio</h3>
                            <p class="text-gray-600 mb-4">Double shot of espresso for extra strength</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-indigo-600">$4.00</span>
                                <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Cortado -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                        <div class="h-48 bg-gradient-to-br from-amber-200 to-orange-300 flex items-center justify-center">
                            <span class="text-6xl">🥛</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Cortado</h3>
                            <p class="text-gray-600 mb-4">Espresso with equal parts warm milk</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-indigo-600">$4.25</span>
                                <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Flat White -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                        <div class="h-48 bg-gradient-to-br from-amber-100 to-yellow-200 flex items-center justify-center">
                            <span class="text-6xl">☁️</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Flat White</h3>
                            <p class="text-gray-600 mb-4">Espresso with microfoam milk, no foam</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-indigo-600">$4.50</span>
                                <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Specialty Section -->
            <div id="specialty" class="menu-category hidden">
                <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Specialty Drinks</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Affogato -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                        <div class="h-48 bg-gradient-to-br from-amber-100 to-yellow-200 flex items-center justify-center">
                            <span class="text-6xl">🍨</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Affogato</h3>
                            <p class="text-gray-600 mb-4">Espresso poured over vanilla ice cream</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-indigo-600">$5.75</span>
                                <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Irish Coffee -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                        <div class="h-48 bg-gradient-to-br from-amber-200 to-orange-300 flex items-center justify-center">
                            <span class="text-6xl">🍀</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Irish Coffee</h3>
                            <p class="text-gray-600 mb-4">Coffee with Irish whiskey and cream</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-indigo-600">$7.50</span>
                                <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Turkish Coffee -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                        <div class="h-48 bg-gradient-to-br from-amber-300 to-orange-400 flex items-center justify-center">
                            <span class="text-6xl">🇹🇷</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Turkish Coffee</h3>
                            <p class="text-gray-600 mb-4">Traditional method with fine grounds</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-indigo-600">$6.25</span>
                                <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="text-2xl font-bold text-indigo-400 mb-4">Coffee Lab 🍵</div>
                    <p class="text-gray-400">Crafting the perfect coffee experience, one cup at a time.</p>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="/" class="text-gray-400 hover:text-white transition">Home</a></li>
                        <li><a href="{{ route('menu') }}" class="text-gray-400 hover:text-white transition">Menu</a></li>
                        <li><a href="#about" class="text-gray-400 hover:text-white transition">About</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white transition">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Account</h3>
                    <ul class="space-y-2">
                        <li><a href="/login" class="text-gray-400 hover:text-white transition">Sign In</a></li>
                        <li><a href="/register" class="text-gray-400 hover:text-white transition">Sign Up</a></li>
                        <li><a href="/dashboard" class="text-gray-400 hover:text-white transition">Dashboard</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Follow Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition">📘</a>
                        <a href="#" class="text-gray-400 hover:text-white transition">📷</a>
                        <a href="#" class="text-gray-400 hover:text-white transition">🐦</a>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-8 pt-8 text-center">
                <p class="text-gray-400">&copy; 2024 Coffee Lab. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript for Menu Tabs -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('.menu-tab');
            const categories = document.querySelectorAll('.menu-category');

            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    const category = this.getAttribute('data-category');
                    
                    // Remove active class from all tabs
                    tabs.forEach(t => t.classList.remove('active', 'bg-indigo-600', 'text-white'));
                    tabs.forEach(t => t.classList.add('bg-gray-200', 'text-gray-700'));
                    
                    // Add active class to clicked tab
                    this.classList.add('active', 'bg-indigo-600', 'text-white');
                    this.classList.remove('bg-gray-200', 'text-gray-700');
                    
                    // Hide all categories
                    categories.forEach(cat => cat.classList.add('hidden'));
                    
                    // Show selected category
                    document.getElementById(category).classList.remove('hidden');
                });
            });
        });
    </script>
</body>
</html>
