<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Coffee Lab - Premium Coffee Experience</title>
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
                    <a href="/" class="text-indigo-600 font-medium">Home</a>
                    <a href="#about" class="text-gray-600 hover:text-indigo-600 transition">About</a>
                    <a href="#menu" class="text-gray-600 hover:text-indigo-600 transition">Menu</a>
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
    <section class="relative bg-gradient-to-r from-amber-50 to-orange-50 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h1 class="text-5xl font-bold text-gray-900 mb-6">
                        Crafting the Perfect
                        <span class="text-indigo-600">Coffee Experience</span>
                    </h1>
                    <p class="text-xl text-gray-600 mb-8">
                        Discover our premium coffee blends, expertly roasted and brewed to perfection. 
                        From bean to cup, we bring you the finest coffee experience.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="/register" class="bg-indigo-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-indigo-700 transition text-center">
                            Join Coffee Lab
                        </a>
                        <a href="#menu" class="border-2 border-indigo-600 text-indigo-600 px-8 py-3 rounded-lg font-semibold hover:bg-indigo-600 hover:text-white transition text-center">
                            View Menu
                        </a>
                    </div>
                </div>
                <div class="relative">
                    <div class="bg-white rounded-2xl shadow-2xl p-8">
                        <div class="bg-gradient-to-br from-amber-100 to-orange-200 rounded-xl h-64 flex items-center justify-center">
                            <div class="text-center">
                                <div class="text-6xl mb-4">☕</div>
                                <p class="text-gray-600 font-medium">Premium Coffee</p>
                            </div>
                        </div>
                    </div>
                    <div class="absolute -top-4 -right-4 bg-indigo-100 rounded-full p-4">
                        <span class="text-2xl">🌱</span>
                    </div>
                    <div class="absolute -bottom-4 -left-4 bg-amber-100 rounded-full p-4">
                        <span class="text-2xl">🔥</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Why Choose Coffee Lab?</h2>
                <p class="text-xl text-gray-600">We're passionate about delivering the best coffee experience</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-6 rounded-lg hover:shadow-lg transition">
                    <div class="bg-indigo-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">🌿</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Premium Beans</h3>
                    <p class="text-gray-600">Sourced from the finest coffee regions around the world</p>
                </div>
                
                <div class="text-center p-6 rounded-lg hover:shadow-lg transition">
                    <div class="bg-amber-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">🔥</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Expert Roasting</h3>
                    <p class="text-gray-600">Carefully roasted to bring out the perfect flavor profile</p>
                </div>
                
                <div class="text-center p-6 rounded-lg hover:shadow-lg transition">
                    <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">☕</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Fresh Brewed</h3>
                    <p class="text-gray-600">Brewed fresh daily with precision and care</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section id="menu" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Coffee Menu</h2>
                <p class="text-xl text-gray-600">Discover our signature blends and seasonal specials</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">
                    <div class="h-48 bg-gradient-to-br from-amber-200 to-orange-300 flex items-center justify-center">
                        <span class="text-6xl">☕</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Espresso Classic</h3>
                        <p class="text-gray-600 mb-4">Rich, bold, and perfectly balanced</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-indigo-600">$3.50</span>
                            <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
                                Order Now
                            </button>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">
                    <div class="h-48 bg-gradient-to-br from-amber-100 to-yellow-200 flex items-center justify-center">
                        <span class="text-6xl">🥛</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Cappuccino</h3>
                        <p class="text-gray-600 mb-4">Creamy and smooth with perfect foam</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-indigo-600">$4.25</span>
                            <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
                                Order Now
                            </button>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition">
                    <div class="h-48 bg-gradient-to-br from-green-200 to-emerald-300 flex items-center justify-center">
                        <span class="text-6xl">🍃</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Cold Brew</h3>
                        <p class="text-gray-600 mb-4">Smooth and refreshing, perfect for any time</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-indigo-600">$4.00</span>
                            <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
                                Order Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl font-bold text-gray-900 mb-6">About Coffee Lab</h2>
                    <p class="text-lg text-gray-600 mb-6">
                        Founded with a passion for exceptional coffee, Coffee Lab has been serving 
                        the finest brews to coffee enthusiasts since our inception. We believe that 
                        great coffee starts with great beans and ends with great experience.
                    </p>
                    <p class="text-lg text-gray-600 mb-8">
                        Our team of expert baristas and coffee roasters work tirelessly to bring you 
                        the perfect cup every time. From sourcing the best beans to perfecting our 
                        brewing techniques, we're committed to excellence in every aspect.
                    </p>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-indigo-600 mb-2">500+</div>
                            <div class="text-gray-600">Happy Customers</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-indigo-600 mb-2">50+</div>
                            <div class="text-gray-600">Coffee Varieties</div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="bg-gradient-to-br from-amber-100 to-orange-200 rounded-2xl p-8">
                        <div class="text-center">
                            <div class="text-8xl mb-4">🏪</div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Visit Our Lab</h3>
                            <p class="text-gray-600">Experience our coffee in person</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Get In Touch</h2>
                <p class="text-xl text-gray-600">We'd love to hear from you</p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-6">Contact Information</h3>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <div class="bg-indigo-100 p-3 rounded-lg mr-4">
                                <span class="text-xl">📍</span>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">Address</div>
                                <div class="text-gray-600">123 Coffee Street, Brew City, BC 12345</div>
                            </div>
                        </div>
                        
                        <div class="flex items-center">
                            <div class="bg-indigo-100 p-3 rounded-lg mr-4">
                                <span class="text-xl">📞</span>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">Phone</div>
                                <div class="text-gray-600">(555) 123-4567</div>
                            </div>
                        </div>
                        
                        <div class="flex items-center">
                            <div class="bg-indigo-100 p-3 rounded-lg mr-4">
                                <span class="text-xl">✉️</span>
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">Email</div>
                                <div class="text-gray-600">hello@coffeelab.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-6">Send us a message</h3>
                    <form class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Name</label>
                            <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input type="email" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                            <textarea rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"></textarea>
                        </div>
                        <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700 transition">
                            Send Message
                        </button>
                    </form>
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
                        <li><a href="#about" class="text-gray-400 hover:text-white transition">About</a></li>
                        <li><a href="#menu" class="text-gray-400 hover:text-white transition">Menu</a></li>
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
</body>
</html>
