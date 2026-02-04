<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kingfisher Africa | Authentic African Cuisine in Lagos</title>
    <meta name="description" content="Kingfisher Africa - Authentic Nigerian and African cuisine in Lagos. Best Jollof, Grilled Fish, and local soups. Dine-in, Takeaway, and Delivery available.">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Tailwind config (required inline for CDN) -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        king: {
                            clay: '#C05621',
                            green: '#2F5233',
                            gold: '#D4AF37',
                            cream: '#FFF8E1',
                            dark: '#1A202C',
                        }
                    },
                    fontFamily: {
                        serif: ['Playfair Display', 'serif'],
                        sans: ['Poppins', 'sans-serif'],
                    },
                    backgroundImage: {
                        'pattern': "url('https://www.transparenttextures.com/patterns/kente-cloth.png')",
                    }
                }
            }
        }
    </script>
</head>
<body class="font-sans text-king-dark bg-king-cream scroll-smooth">

    <!-- Navigation -->
    <nav class="bg-king-green text-white fixed w-full z-50 shadow-lg transition-all duration-300" id="navbar">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <!-- Logo -->
            <a href="#" class="flex items-center gap-2 group">
                <i class="fas fa-crown text-king-gold text-2xl"></i>
                <div class="flex flex-col">
                    <span class="font-serif text-xl font-bold tracking-wide uppercase leading-none">Kingfisher</span>
                    <span class="text-[10px] text-king-gold tracking-[0.2em] font-medium uppercase leading-none mt-1">Africa</span>
                </div>
            </a>

            <!-- Desktop Links -->
            <div class="hidden md:flex items-center space-x-8 text-sm uppercase tracking-wider font-medium">
                <a href="#home" class="hover:text-king-gold transition duration-300">Home</a>
                <a href="#about" class="hover:text-king-gold transition duration-300">Our Story</a>
                <a href="#menu" class="hover:text-king-gold transition duration-300">Menu</a>
                <a href="#services" class="hover:text-king-gold transition duration-300">Services</a>
                <a href="#location" class="hover:text-king-gold transition duration-300">Find Us</a>
                <a href="https://wa.me/2348000000000" target="_blank" class="bg-green-500 hover:bg-green-600 text-white px-5 py-2 rounded-full transition btn-hover flex items-center gap-2">
                    <i class="fab fa-whatsapp text-lg"></i> Chat
                </a>
            </div>

            <!-- Mobile Toggle -->
            <button id="mobile-toggle" class="md:hidden text-white text-2xl focus:outline-none">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-king-green border-t border-white/10 absolute w-full left-0 shadow-xl">
            <div class="flex flex-col p-6 space-y-4 font-medium text-center">
                <a href="#home" class="hover:text-king-gold">Home</a>
                <a href="#about" class="hover:text-king-gold">About Us</a>
                <a href="#menu" class="hover:text-king-gold">Menu</a>
                <a href="#location" class="hover:text-king-gold">Location</a>
                <a href="https://wa.me/2348000000000" class="text-green-400 font-bold flex justify-center items-center gap-2">
                    <i class="fab fa-whatsapp"></i> WhatsApp Order
                </a>
                <a href="tel:+2348000000000" class="text-king-gold font-bold">Call Now</a>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <header id="home" class="hero-bg h-screen flex items-center justify-center text-center px-4 pt-16 relative">
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>

        <div class="max-w-4xl mx-auto text-white relative z-10 fade-in-up">
            <div class="inline-flex items-center bg-king-clay/90 px-4 py-1 rounded-full text-xs font-bold uppercase tracking-widest mb-6 border border-king-gold/30">
                <span class="w-2 h-2 bg-green-400 rounded-full mr-2 animate-pulse"></span>
                Open Today: 11 AM - 10 PM
            </div>

            <h1 class="font-serif text-5xl md:text-7xl font-bold mb-6 leading-tight">
                Authentic African Flavors<br>
                <span class="text-king-gold italic">Heart of Lagos</span>
            </h1>

            <p class="text-lg md:text-xl font-light mb-10 max-w-2xl mx-auto text-gray-200">
                Experience the rich taste of home-cooked Nigerian meals. From smoky Jollof to fresh Grilled Fish, we bring the culture to your plate.
            </p>

            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#menu" class="bg-king-clay text-white px-8 py-4 rounded font-bold text-lg transition hover:bg-orange-700 shadow-lg btn-hover border-b-4 border-orange-900">
                    View Menu
                </a>
                <a href="#location" class="bg-transparent border-2 border-white hover:bg-white hover:text-king-green text-white px-8 py-4 rounded font-bold text-lg transition shadow-lg btn-hover">
                    Reserve Table
                </a>
            </div>

            <div class="mt-12 flex justify-center items-center gap-3 bg-black/40 backdrop-blur-sm p-3 rounded-xl inline-flex border border-white/10">
                <div class="flex text-king-gold text-lg">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                </div>
                <div class="text-left leading-tight">
                    <p class="font-bold text-white text-base">4.5 Stars</p>
                    <p class="text-[10px] text-gray-300 uppercase tracking-wider">Based on 200+ Reviews</p>
                </div>
            </div>
        </div>
    </header>

    <!-- About -->
    <section id="about" class="py-20 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-64 h-64 bg-king-gold/10 rounded-full blur-3xl -z-10"></div>

        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="lg:w-1/2 relative">
                    <div class="relative z-10 rounded-2xl overflow-hidden shadow-2xl border-4 border-white transform rotate-2">
                        <img src="https://images.unsplash.com/photo-1596797038530-2c107229654b?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Pounded Yam and Soup" class="w-full h-auto object-cover hover:scale-105 transition duration-700">
                    </div>
                    <div class="absolute -bottom-6 -left-6 bg-king-green text-white p-6 rounded-lg shadow-xl z-20 hidden md:block">
                        <p class="font-serif text-2xl font-bold">100%</p>
                        <p class="text-xs uppercase tracking-widest text-king-gold">Fresh Ingredients</p>
                    </div>
                </div>

                <div class="lg:w-1/2">
                    <h4 class="text-king-clay font-bold uppercase tracking-widest text-sm mb-2">Who We Are</h4>
                    <h2 class="font-serif text-4xl text-king-green font-bold mb-6">More Than Just Food, It's Culture.</h2>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Welcome to <strong>Kingfisher Africa</strong>. We started with a simple mission: to serve the most authentic, soul-warming Nigerian dishes in a modern, comfortable setting.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-8">
                        Whether you are craving the spicy kick of our signature Pepper Soup, the comfort of Pounded Yam & Egusi, or simply want to enjoy a cold drink with friends, our doors are open. We pride ourselves on using locally sourced ingredients to support our community and ensure every bite tastes like home.
                    </p>

                    <div class="grid grid-cols-3 gap-4 text-center">
                        <div class="p-4 bg-white rounded-lg shadow-sm border-t-2 border-king-clay">
                            <i class="fas fa-pepper-hot text-king-clay text-2xl mb-2"></i>
                            <p class="text-xs font-bold uppercase">Spicy</p>
                        </div>
                        <div class="p-4 bg-white rounded-lg shadow-sm border-t-2 border-king-green">
                            <i class="fas fa-leaf text-king-green text-2xl mb-2"></i>
                            <p class="text-xs font-bold uppercase">Fresh</p>
                        </div>
                        <div class="p-4 bg-white rounded-lg shadow-sm border-t-2 border-king-gold">
                            <i class="fas fa-heart text-king-gold text-2xl mb-2"></i>
                            <p class="text-xs font-bold uppercase">Local</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu -->
    <section id="menu" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <span class="text-king-clay font-serif italic text-xl">Taste the Tradition</span>
                <h2 class="font-serif text-4xl text-king-green font-bold mt-2">Our Signature Menu</h2>
                <div class="w-16 h-1 bg-king-gold mx-auto mt-4"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- Soups & Swallows -->
                <div class="bg-king-cream/50 p-6 rounded-xl border border-king-gold/20 hover:shadow-lg transition">
                    <div class="flex items-center gap-3 mb-6 border-b border-gray-200 pb-3">
                        <i class="fas fa-utensils text-king-clay text-2xl"></i>
                        <h3 class="font-serif text-2xl font-bold text-king-green">Soups & Swallows</h3>
                    </div>
                    <div class="space-y-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="font-bold text-king-dark">Pounded Yam & Egusi</h4>
                                <p class="text-xs text-gray-500 mt-1">Served with goat meat or assorted.</p>
                            </div>
                            <span class="font-bold text-king-clay">₦4,500</span>
                        </div>
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="font-bold text-king-dark">Amala & Ewedu</h4>
                                <p class="text-xs text-gray-500 mt-1">With Gbegiri and tender beef.</p>
                            </div>
                            <span class="font-bold text-king-clay">₦4,000</span>
                        </div>
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="font-bold text-king-dark">Seafood Okra</h4>
                                <p class="text-xs text-gray-500 mt-1">Rich okra soup with prawns, fish & crab.</p>
                            </div>
                            <span class="font-bold text-king-clay">₦6,500</span>
                        </div>
                    </div>
                </div>

                <!-- Rice & Specials -->
                <div class="bg-king-cream/50 p-6 rounded-xl border border-king-gold/20 hover:shadow-lg transition">
                    <div class="flex items-center gap-3 mb-6 border-b border-gray-200 pb-3">
                        <i class="fas fa-bowl-rice text-king-clay text-2xl"></i>
                        <h3 class="font-serif text-2xl font-bold text-king-green">Rice & Specials</h3>
                    </div>
                    <div class="space-y-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="font-bold text-king-dark">Smoky Party Jollof</h4>
                                <p class="text-xs text-gray-500 mt-1">Served with fried chicken & plantain.</p>
                            </div>
                            <span class="font-bold text-king-clay">₦3,500</span>
                        </div>
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="font-bold text-king-dark">Native Rice</h4>
                                <p class="text-xs text-gray-500 mt-1">Cooked with palm oil, smoked fish & scent leaf.</p>
                            </div>
                            <span class="font-bold text-king-clay">₦4,000</span>
                        </div>
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="font-bold text-king-dark">Ofada Rice Special</h4>
                                <p class="text-xs text-gray-500 mt-1">Served with spicy Ayamase sauce.</p>
                            </div>
                            <span class="font-bold text-king-clay">₦4,500</span>
                        </div>
                    </div>
                </div>

                <!-- Grills & Drinks -->
                <div class="bg-king-cream/50 p-6 rounded-xl border border-king-gold/20 hover:shadow-lg transition">
                    <div class="flex items-center gap-3 mb-6 border-b border-gray-200 pb-3">
                        <i class="fas fa-fire text-king-clay text-2xl"></i>
                        <h3 class="font-serif text-2xl font-bold text-king-green">Grills & Drinks</h3>
                    </div>
                    <div class="space-y-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="font-bold text-king-dark">Grilled Catfish (Whole)</h4>
                                <p class="text-xs text-gray-500 mt-1">Spicy, served with chips or plantain.</p>
                            </div>
                            <span class="font-bold text-king-clay">₦8,000</span>
                        </div>
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="font-bold text-king-dark">Beef Suya Platter</h4>
                                <p class="text-xs text-gray-500 mt-1">Spicy grilled beef with onions & cabbage.</p>
                            </div>
                            <span class="font-bold text-king-clay">₦2,500</span>
                        </div>
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="font-bold text-king-dark">Chapman</h4>
                                <p class="text-xs text-gray-500 mt-1">Signature fruity Nigerian cocktail.</p>
                            </div>
                            <span class="font-bold text-king-clay">₦2,000</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="https://wa.me/2348000000000" target="_blank" class="bg-king-green text-white px-8 py-3 rounded-full hover:bg-green-800 transition font-bold inline-flex items-center gap-2 shadow-lg">
                    <i class="fab fa-whatsapp"></i> Order on WhatsApp
                </a>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section id="services" class="py-16 bg-king-green text-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="p-4 hover:bg-white/5 rounded-lg transition">
                    <i class="fas fa-chair text-king-gold text-3xl mb-4"></i>
                    <h3 class="font-serif font-bold text-lg">Dine-In</h3>
                    <p class="text-xs text-gray-300 mt-2">Cozy & Vibrant</p>
                </div>
                <div class="p-4 hover:bg-white/5 rounded-lg transition">
                    <i class="fas fa-shopping-bag text-king-gold text-3xl mb-4"></i>
                    <h3 class="font-serif font-bold text-lg">Takeaway</h3>
                    <p class="text-xs text-gray-300 mt-2">Quick Pickup</p>
                </div>
                <div class="p-4 hover:bg-white/5 rounded-lg transition">
                    <i class="fas fa-glass-cheers text-king-gold text-3xl mb-4"></i>
                    <h3 class="font-serif font-bold text-lg">Events</h3>
                    <p class="text-xs text-gray-300 mt-2">Group Bookings</p>
                </div>
                <div class="p-4 hover:bg-white/5 rounded-lg transition">
                    <i class="fas fa-motorcycle text-king-gold text-3xl mb-4"></i>
                    <h3 class="font-serif font-bold text-lg">Delivery</h3>
                    <p class="text-xs text-gray-300 mt-2">Within Lagos</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews -->
    <section class="py-20 bg-king-cream">
        <div class="container mx-auto px-6 text-center">
            <h2 class="font-serif text-3xl text-king-dark font-bold mb-12">Loved by Lagos</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-md border-b-4 border-king-clay text-left">
                    <div class="flex text-king-gold mb-4 text-sm">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 italic text-sm mb-6">"Best Jollof rice I've had in Ikeja! The grilled fish was fresh and spicy. Definitely coming back with my colleagues."</p>
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center font-bold text-xs text-gray-500">AO</div>
                        <p class="font-bold text-king-dark text-sm">Adeola O.</p>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-md border-b-4 border-king-clay text-left">
                    <div class="flex text-king-gold mb-4 text-sm">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-600 italic text-sm mb-6">"Lovely ambience. It feels very authentic and the staff were so polite. The Pounded Yam was smooth and hot!"</p>
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center font-bold text-xs text-gray-500">CE</div>
                        <p class="font-bold text-king-dark text-sm">Chuka E.</p>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-md border-b-4 border-king-clay text-left">
                    <div class="flex text-king-gold mb-4 text-sm">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="text-gray-600 italic text-sm mb-6">"Great place for a family Sunday lunch. Affordable prices for the quality of food you get."</p>
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center font-bold text-xs text-gray-500">MJ</div>
                        <p class="font-bold text-king-dark text-sm">Mary J.</p>
                    </div>
                </div>
            </div>

            <a href="#" class="text-king-clay font-bold text-sm mt-8 inline-block hover:underline">Read all Google Reviews</a>
        </div>
    </section>

    <!-- Location -->
    <section id="location" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row bg-king-dark rounded-3xl overflow-hidden shadow-2xl">
                <div class="lg:w-1/3 p-10 text-white flex flex-col justify-center relative">
                    <div class="absolute top-0 right-0 w-20 h-20 bg-king-clay rounded-bl-full opacity-20"></div>

                    <h3 class="font-serif text-3xl font-bold mb-8 text-king-gold">Visit Us</h3>

                    <div class="space-y-8">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center shrink-0">
                                <i class="fas fa-map-marker-alt text-king-gold"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-lg mb-1">Address</h5>
                                <p class="text-gray-300 text-sm">Kingfisher Africa,<br>Ikeja, Lagos, Nigeria</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center shrink-0">
                                <i class="fas fa-clock text-king-gold"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-lg mb-1">Opening Hours</h5>
                                <p class="text-gray-300 text-sm">Monday - Sunday</p>
                                <p class="text-king-gold font-bold text-sm">11:00 AM - 10:00 PM</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center shrink-0">
                                <i class="fas fa-phone text-king-gold"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-lg mb-1">Contact</h5>
                                <a href="tel:+2348000000000" class="block text-gray-300 hover:text-white transition">+234 800 000 0000</a>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10 pt-8 border-t border-white/10 flex flex-col gap-3">
                        <a href="https://maps.google.com" target="_blank" class="w-full bg-white text-king-dark text-center py-3 rounded font-bold hover:bg-gray-200 transition">
                            Get Directions
                        </a>
                        <a href="https://wa.me/2348000000000" class="w-full bg-green-600 text-white text-center py-3 rounded font-bold hover:bg-green-700 transition flex justify-center items-center gap-2">
                            <i class="fab fa-whatsapp"></i> Chat on WhatsApp
                        </a>
                    </div>
                </div>

                <div class="lg:w-2/3 min-h-[400px] bg-gray-200 relative">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.4!2d3.35!3d6.60!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMzYnMDAuMCJOIDPCsDI3JzAwLjAiRQ!5e0!3m2!1sen!2sng!4v1600000000000!5m2!1sen!2sng" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" class="absolute inset-0 grayscale hover:grayscale-0 transition duration-700"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-king-green text-white py-12 border-t border-white/10">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center mb-8">
                <div class="mb-6 md:mb-0 text-center md:text-left">
                    <h2 class="font-serif text-2xl font-bold uppercase tracking-wide">Kingfisher <span class="text-king-gold">Africa</span></h2>
                    <p class="text-xs text-gray-300 mt-2">Authentic Flavors. Unforgettable Memories.</p>
                </div>
                <div class="flex space-x-6 text-xl">
                    <a href="#" class="hover:text-king-gold transition"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="hover:text-king-gold transition"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="hover:text-king-gold transition"><i class="fab fa-twitter"></i></a>
                </div>
            </div>

            <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center text-xs text-gray-400">
                <p>&copy; 2025 Kingfisher Africa. All rights reserved.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#home" class="hover:text-white">Home</a>
                    <a href="#menu" class="hover:text-white">Menu</a>
                    <a href="#location" class="hover:text-white">Location</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="assets/js/script.js"></script>
</body>
</html>