@extends('layouts.app')

@section('content')
    <!-- Navigation -->
    <nav class="fixed w-full bg-white/95 backdrop-blur-sm shadow-sm z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <span class="text-2xl font-bold text-cs-navy">C & S</span>
                    <span class="text-xl text-cs-gray ml-2">Renovations</span>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="#home" class="text-cs-gray hover:text-cs-navy transition">Home</a>
                    <a href="#services" class="text-cs-gray hover:text-cs-navy transition">Services</a>
                    <a href="#about" class="text-cs-gray hover:text-cs-navy transition">About</a>
                    <a href="#contact" class="text-cs-gray hover:text-cs-navy transition">Contact</a>
                </div>
                <div class="hidden md:flex items-center space-x-4">
                    <a href="tel:908-670-9559" class="text-cs-navy font-semibold hover:text-cs-gold transition">(908) 670-9559</a>
                    <a href="#contact" class="bg-cs-gold text-white px-6 py-2 rounded hover:bg-yellow-600 transition">
                        Get a Quote
                    </a>
                </div>
                <!-- Mobile menu button -->
                <button id="mobile-menu-btn" class="md:hidden text-cs-gray">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
            <!-- Mobile menu -->
            <div id="mobile-menu" class="hidden md:hidden pb-4">
                <a href="#home" class="block py-2 text-cs-gray hover:text-cs-navy">Home</a>
                <a href="#services" class="block py-2 text-cs-gray hover:text-cs-navy">Services</a>
                <a href="#about" class="block py-2 text-cs-gray hover:text-cs-navy">About</a>
                <a href="#contact" class="block py-2 text-cs-gray hover:text-cs-navy">Contact</a>
                <a href="tel:908-670-9559" class="block py-2 text-cs-gold font-semibold">(908) 670-9559</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="relative bg-gradient-to-br from-cs-navy to-slate-800 min-h-screen flex items-center">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                    Quality Craftsmanship,<br>
                    <span class="text-cs-gold">Trusted Results</span>
                </h1>
                <p class="text-xl text-gray-200 mb-8">
                    Professional remodeling and renovation services throughout Monmouth and Middlesex Counties.
                    From flooring to finish work, we bring your vision to life with 7 years of dedicated experience.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#contact" class="inline-block bg-cs-gold text-white px-8 py-4 rounded text-lg font-semibold hover:bg-yellow-600 transition text-center">
                        Request a Free Quote
                    </a>
                    <a href="#services" class="inline-block border-2 border-white text-white px-8 py-4 rounded text-lg font-semibold hover:bg-white hover:text-cs-navy transition text-center">
                        Our Services
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-cs-navy mb-4">Our Services</h2>
                <p class="text-lg text-cs-gray max-w-2xl mx-auto">
                    Comprehensive renovation and remodeling services for your home. No job is too big or too small.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Service Cards -->
                @php
                $services = [
                    ['icon' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6', 'title' => 'Remodeling', 'desc' => 'Complete home remodeling from kitchens to bathrooms'],
                    ['icon' => 'M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zm0 8a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6z', 'title' => 'Flooring', 'desc' => 'Hardwood, tile, laminate, and vinyl installation'],
                    ['icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4', 'title' => 'Finish Work', 'desc' => 'Trim, molding, and detailed carpentry'],
                    ['icon' => 'M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z', 'title' => 'Decks', 'desc' => 'Custom deck design and construction'],
                    ['icon' => 'M19 21l-7-5-7 5V5a2 2 0 012-2h10a2 2 0 012 2z', 'title' => 'Cement Work', 'desc' => 'Patios, walkways, and foundations'],
                    ['icon' => 'M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z', 'title' => 'Landscaping', 'desc' => 'Complete yard design and maintenance'],
                    ['icon' => 'M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z', 'title' => 'Snow Removal', 'desc' => 'Reliable residential and commercial clearing'],
                    ['icon' => 'M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z', 'title' => 'Doors & Windows', 'desc' => 'Installation and replacement services'],
                    ['icon' => 'M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zm0 8a1 1 0 011-1h14a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6z', 'title' => 'Sheet Rock', 'desc' => 'Installation, repair, and finishing'],
                    ['icon' => 'M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01', 'title' => 'Paint & Spackle', 'desc' => 'Interior and exterior painting'],
                    ['icon' => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z', 'title' => 'Plumbing', 'desc' => 'Repairs and fixture installation'],
                    ['icon' => 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z', 'title' => 'Lighting', 'desc' => 'Fixture installation and updates'],
                    ['icon' => 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4', 'title' => 'Cabinets', 'desc' => 'Custom installation and refacing'],
                    ['icon' => 'M13 10V3L4 14h7v7l9-11h-7z', 'title' => 'Stairs', 'desc' => 'New construction and refinishing'],
                ];
                @endphp

                @foreach($services as $service)
                <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition group">
                    <div class="w-12 h-12 bg-cs-navy/10 rounded-lg flex items-center justify-center mb-4 group-hover:bg-cs-gold/20 transition">
                        <svg class="w-6 h-6 text-cs-navy" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $service['icon'] }}"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-cs-navy mb-2">{{ $service['title'] }}</h3>
                    <p class="text-cs-gray text-sm">{{ $service['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-cs-navy mb-6">
                        Lifelong Friends,<br>Dedicated Craftsmen
                    </h2>
                    <p class="text-lg text-cs-gray mb-6">
                        C & S Renovations was founded by two lifelong friends with a shared passion for quality
                        craftsmanship and customer satisfaction. For <strong>7 years</strong>, we've been
                        transforming homes throughout <strong>Monmouth and Middlesex Counties</strong>.
                    </p>
                    <p class="text-lg text-cs-gray mb-6">
                        We believe every project deserves the same attention to detail, whether it's a
                        simple repair or a complete home renovation. Our commitment to excellence has
                        built us a reputation based on trust, quality, and lasting relationships with
                        our clients.
                    </p>
                    <div class="grid grid-cols-3 gap-6 mt-8">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-cs-gold">7+</div>
                            <div class="text-sm text-cs-gray">Years Experience</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-cs-gold">2</div>
                            <div class="text-sm text-cs-gray">Counties Served</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-cs-gold">100%</div>
                            <div class="text-sm text-cs-gray">Commitment</div>
                        </div>
                    </div>
                </div>
                <div class="bg-gradient-to-br from-cs-navy to-slate-700 rounded-lg p-8 text-white">
                    <h3 class="text-2xl font-bold mb-6">Why Choose C & S?</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-cs-gold mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Licensed and insured professionals</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-cs-gold mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Free, no-obligation estimates</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-cs-gold mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Quality materials and workmanship</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-cs-gold mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Clear communication throughout</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-cs-gold mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>On-time project completion</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-cs-gold mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Local contractors who care</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Area Section -->
    <section class="py-16 bg-cs-navy text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-2xl md:text-3xl font-bold mb-4">Proudly Serving</h2>
            <p class="text-xl text-gray-300 mb-6">
                Monmouth County & Middlesex County, New Jersey
            </p>
            <p class="text-gray-400">
                Including Freehold, Manalapan, Marlboro, Old Bridge, East Brunswick, South Brunswick, Monroe, and surrounding areas
            </p>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-cs-navy mb-6">Get Your Free Quote</h2>
                    <p class="text-lg text-cs-gray mb-8">
                        Ready to start your next project? Contact us today for a free, no-obligation estimate.
                        We'll discuss your vision and provide honest, upfront pricing.
                    </p>
                    <div class="space-y-6">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-cs-gold/20 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-cs-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div>
                                <div class="font-semibold text-cs-navy">Call Us</div>
                                <a href="tel:908-670-9559" class="text-cs-gold hover:text-yellow-600 font-semibold">(908) 670-9559</a>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-cs-gold/20 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-cs-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <div class="font-semibold text-cs-navy">Email</div>
                                <div class="text-cs-gray">info@csreno.com</div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-cs-gold/20 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-cs-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div>
                                <div class="font-semibold text-cs-navy">Service Area</div>
                                <div class="text-cs-gray">Monmouth & Middlesex Counties, NJ</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-sm">
                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="space-y-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-cs-gray mb-2">Name *</label>
                                <input type="text" id="name" name="name" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded focus:ring-2 focus:ring-cs-gold focus:border-transparent"
                                    placeholder="Your name">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-cs-gray mb-2">Email *</label>
                                <input type="email" id="email" name="email" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded focus:ring-2 focus:ring-cs-gold focus:border-transparent"
                                    placeholder="your@email.com">
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-medium text-cs-gray mb-2">Phone</label>
                                <input type="tel" id="phone" name="phone"
                                    class="w-full px-4 py-3 border border-gray-300 rounded focus:ring-2 focus:ring-cs-gold focus:border-transparent"
                                    placeholder="(555) 555-5555">
                            </div>
                            <div>
                                <label for="service" class="block text-sm font-medium text-cs-gray mb-2">Service Needed</label>
                                <select id="service" name="service"
                                    class="w-full px-4 py-3 border border-gray-300 rounded focus:ring-2 focus:ring-cs-gold focus:border-transparent">
                                    <option value="">Select a service...</option>
                                    <option value="remodeling">Remodeling</option>
                                    <option value="flooring">Flooring</option>
                                    <option value="finish_work">Finish Work / Trim</option>
                                    <option value="decks">Decks</option>
                                    <option value="cement">Cement Work</option>
                                    <option value="landscaping">Landscaping</option>
                                    <option value="snow_removal">Snow Removal</option>
                                    <option value="doors_windows">Doors & Windows</option>
                                    <option value="drywall">Sheet Rock / Drywall</option>
                                    <option value="painting">Paint & Spackle</option>
                                    <option value="plumbing">Plumbing</option>
                                    <option value="lighting">Lighting</option>
                                    <option value="cabinets">Cabinets</option>
                                    <option value="stairs">Stairs</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div>
                                <label for="message" class="block text-sm font-medium text-cs-gray mb-2">Project Details *</label>
                                <textarea id="message" name="message" rows="4" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded focus:ring-2 focus:ring-cs-gold focus:border-transparent"
                                    placeholder="Tell us about your project..."></textarea>
                            </div>
                            <button type="submit"
                                class="w-full bg-cs-gold text-white py-4 rounded font-semibold hover:bg-yellow-600 transition">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-cs-navy text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-8">
                <div>
                    <div class="flex items-center mb-4">
                        <span class="text-2xl font-bold">C & S</span>
                        <span class="text-xl text-gray-400 ml-2">Renovations</span>
                    </div>
                    <p class="text-gray-400">
                        Quality craftsmanship and trusted results for over 7 years.
                    </p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Services</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li>Remodeling</li>
                        <li>Flooring</li>
                        <li>Decks & Patios</li>
                        <li>Finish Work</li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Service Area</h4>
                    <p class="text-gray-400">
                        Monmouth County, NJ<br>
                        Middlesex County, NJ
                    </p>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} C & S Renovations. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu Script -->
    <script>
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
@endsection
