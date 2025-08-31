<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <!-- <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Styles / Scripts -->
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#3B82F6',
                        secondary: '#1F2937',
                        accent: '#10B981'
                    }
                }
            }
        }
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
        

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #1f2937;
        }

        ::-webkit-scrollbar-thumb {
            background: #3b82f6;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #2563eb;
        }

        /* Smooth transitions */
        * {
            transition: all 0.2s ease-in-out;
        }

        /* Custom animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.6s ease-out;
        }

        /* Glass morphism effect */
        .glass {
            background: rgba(31, 41, 55, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
    </style>

</head>

<body class="bg-gray-900 text-white min-h-screen">
    <!-- Navigation -->
    <nav class="glass fixed w-full z-50 border-b border-gray-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <h1 class="text-2xl font-bold text-primary">&lt;/&gt; John Doe</h1>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="index.html" class="text-primary px-3 py-2 rounded-md text-sm font-medium">Home</a>
                        <a href="#topics" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Topics</a>
                        <a href="#tutorials" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Tutorials</a>
                        <a href="blog.html" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Blog</a>
                        <a href="#resources" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Resources</a>
                        <a href="#contact" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Contact</a>
                    </div>
                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-300 hover:text-white p-2">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
            <!-- Mobile menu -->
            <div id="mobile-menu" class="md:hidden hidden">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <a href="index.html" class="text-primary block px-3 py-2 rounded-md text-base font-medium">Home</a>
                    <a href="#topics" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Topics</a>
                    <a href="#tutorials" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Tutorials</a>
                    <a href="blog.html" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Blog</a>
                    <a href="#resources" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Resources</a>
                    <a href="#contact" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-24 pb-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center animate-fade-in-up">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    Learn <span class="text-primary">Codingss</span> for Free
                </h1>
                <p class="text-xl text-gray-400 mb-8 max-w-3xl mx-auto">
                    Master Web Development, Blockchain, and Data Structures & Algorithms through free tutorials on YouTube, Instagram, and Twitter.
                    Join me on this exciting journey to become a better developer!
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#tutorials" class="bg-primary hover:bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105">
                        Start Learning
                    </a>
                    <a href="blog.html" class="border border-gray-600 hover:border-primary text-gray-300 hover:text-white px-8 py-3 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105">
                        Read Blog
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Media Stats Section -->
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-gray-800/30">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div class="glass p-8 rounded-lg">
                    <div class="w-16 h-16 bg-red-500/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fab fa-youtube text-2xl text-red-500"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-primary mb-2">Coming Soon</h3>
                    <p class="text-gray-300">YouTube Channel</p>
                </div>
                <div class="glass p-8 rounded-lg">
                    <div class="w-16 h-16 bg-pink-500/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fab fa-instagram text-2xl text-pink-500"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-primary mb-2">Coming Soon</h3>
                    <p class="text-gray-300">Instagram Content</p>
                </div>
                <div class="glass p-8 rounded-lg">
                    <div class="w-16 h-16 bg-blue-500/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fab fa-twitter text-2xl text-blue-500"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-primary mb-2">Coming Soon</h3>
                    <p class="text-gray-300">Twitter Updates</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Topics Section -->
    <section id="topics" class="py-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">What I'll Teach You</h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                    From beginner-friendly web development to advanced blockchain concepts and interview preparation with DSA.
                    All content will be completely free and accessible to everyone.
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="glass p-8 rounded-lg text-center hover:transform hover:scale-105 transition-all duration-300">
                    <div class="w-16 h-16 bg-primary/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-code text-2xl text-primary"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Web Development</h3>
                    <p class="text-gray-400 mb-4">
                        Learn HTML, CSS, JavaScript, React, Node.js, and modern web technologies to build amazing websites and applications.
                    </p>
                    <ul class="text-sm text-gray-300 space-y-1">
                        <li>• HTML5 & CSS3</li>
                        <li>• JavaScript (ES6+)</li>
                        <li>• React.js & Next.js</li>
                        <li>• Node.js & Express</li>
                        <li>• Database Design</li>
                    </ul>
                </div>
                <div class="glass p-8 rounded-lg text-center hover:transform hover:scale-105 transition-all duration-300">
                    <div class="w-16 h-16 bg-accent/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-link text-2xl text-accent"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Blockchain Development</h3>
                    <p class="text-gray-400 mb-4">
                        Master blockchain technology, smart contracts, and decentralized applications (DApps) development.
                    </p>
                    <ul class="text-sm text-gray-300 space-y-1">
                        <li>• Ethereum & Solidity</li>
                        <li>• Smart Contracts</li>
                        <li>• Web3.js & Ethers.js</li>
                        <li>• DeFi & NFTs</li>
                        <li>• Blockchain Architecture</li>
                    </ul>
                </div>
                <div class="glass p-8 rounded-lg text-center hover:transform hover:scale-105 transition-all duration-300">
                    <div class="w-16 h-16 bg-purple-500/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-brain text-2xl text-purple-400"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Data Structures & Algorithms</h3>
                    <p class="text-gray-400 mb-4">
                        Crack coding interviews at top tech companies with comprehensive DSA tutorials and practice problems.
                    </p>
                    <ul class="text-sm text-gray-300 space-y-1">
                        <li>• Arrays & Strings</li>
                        <li>• Linked Lists & Trees</li>
                        <li>• Dynamic Programming</li>
                        <li>• Graph Algorithms</li>
                        <li>• Interview Preparation</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Learn With Me Section -->
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-gray-800/30">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">Why Learn With Me?</h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                    I'm passionate about making coding education accessible to everyone. Here's what makes my approach different.
                </p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="glass p-6 rounded-lg text-center">
                    <div class="w-12 h-12 bg-green-500/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-gift text-xl text-green-400"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">100% Free</h3>
                    <p class="text-gray-400 text-sm">All tutorials and resources are completely free. No hidden costs, no premium content.</p>
                </div>
                <div class="glass p-6 rounded-lg text-center">
                    <div class="w-12 h-12 bg-blue-500/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-users text-xl text-blue-400"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Community Driven</h3>
                    <p class="text-gray-400 text-sm">Learn together with a community of developers. Ask questions, share projects, grow together.</p>
                </div>
                <div class="glass p-6 rounded-lg text-center">
                    <div class="w-12 h-12 bg-purple-500/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-rocket text-xl text-purple-400"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Project-Based</h3>
                    <p class="text-gray-400 text-sm">Learn by building real projects. From simple websites to complex blockchain applications.</p>
                </div>
                <div class="glass p-6 rounded-lg text-center">
                    <div class="w-12 h-12 bg-orange-500/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-clock text-xl text-orange-400"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Regular Updates</h3>
                    <p class="text-gray-400 text-sm">Fresh content every week. Stay updated with the latest technologies and industry trends.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tutorials Section -->
    <section id="tutorials" class="py-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12">Coming Soon: Tutorial Series</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="glass rounded-lg overflow-hidden hover:transform hover:scale-105 transition-all duration-300">
                    <div class="h-48 bg-gradient-to-br from-primary to-purple-600 flex items-center justify-center">
                        <i class="fas fa-play-circle text-6xl text-white"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Web Development Bootcamp</h3>
                        <p class="text-gray-400 mb-4">Complete beginner to advanced web development course. Build real projects from scratch.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-primary text-sm font-medium">Coming Soon</span>
                            <a href="#" class="text-primary hover:text-blue-400 font-medium">Learn More →</a>
                        </div>
                    </div>
                </div>
                <div class="glass rounded-lg overflow-hidden hover:transform hover:scale-105 transition-all duration-300">
                    <div class="h-48 bg-gradient-to-br from-accent to-green-600 flex items-center justify-center">
                        <i class="fas fa-play-circle text-6xl text-white"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Blockchain Masterclass</h3>
                        <p class="text-gray-400 mb-4">Learn blockchain development, smart contracts, and build your first DApp.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-primary text-sm font-medium">Coming Soon</span>
                            <a href="#" class="text-primary hover:text-blue-400 font-medium">Learn More →</a>
                        </div>
                    </div>
                </div>
                <div class="glass rounded-lg overflow-hidden hover:transform hover:scale-105 transition-all duration-300">
                    <div class="h-48 bg-gradient-to-br from-purple-500 to-pink-600 flex items-center justify-center">
                        <i class="fas fa-play-circle text-6xl text-white"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">DSA Interview Prep</h3>
                        <p class="text-gray-400 mb-4">Master data structures and algorithms to ace your technical interviews.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-primary text-sm font-medium">Coming Soon</span>
                            <a href="#" class="text-primary hover:text-blue-400 font-medium">Learn More →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Resources Section -->
    <section id="resources" class="py-16 px-4 sm:px-6 lg:px-8 bg-gray-800/30">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12">Free Learning Resources</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="glass p-6 rounded-lg text-center">
                    <div class="w-16 h-16 bg-blue-500/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-file-code text-2xl text-blue-400"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Code Snippets</h3>
                    <p class="text-gray-400 text-sm">Ready-to-use code snippets and templates for common programming tasks.</p>
                </div>
                <div class="glass p-6 rounded-lg text-center">
                    <div class="w-16 h-16 bg-green-500/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-book text-2xl text-green-400"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Study Notes</h3>
                    <p class="text-gray-400 text-sm">Comprehensive notes and cheat sheets for quick reference and revision.</p>
                </div>
                <div class="glass p-6 rounded-lg text-center">
                    <div class="w-16 h-16 bg-purple-500/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-project-diagram text-2xl text-purple-400"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Project Ideas</h3>
                    <p class="text-gray-400 text-sm">Curated list of project ideas to practice and build your portfolio.</p>
                </div>
                <div class="glass p-6 rounded-lg text-center">
                    <div class="w-16 h-16 bg-orange-500/20 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-tools text-2xl text-orange-400"></i>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Development Tools</h3>
                    <p class="text-gray-400 text-sm">Recommended tools, extensions, and software to enhance your development workflow.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6">Ready to Start Your Coding Journey?</h2>
            <p class="text-xl text-gray-400 mb-8">
                Join me on YouTube, Instagram, and Twitter for free coding tutorials, tips, and updates!
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#" class="bg-red-600 hover:bg-red-700 text-white px-8 py-3 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105">
                    <i class="fab fa-youtube mr-2"></i>Subscribe on YouTube
                </a>
                <a href="#" class="bg-pink-600 hover:bg-pink-700 text-white px-8 py-3 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105">
                    <i class="fab fa-instagram mr-2"></i>Follow on Instagram
                </a>
                <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105">
                    <i class="fab fa-twitter mr-2"></i>Follow on Twitter
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 px-4 sm:px-6 lg:px-8 bg-gray-800/30">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12">Get In Touch</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-xl font-semibold mb-4">Let's connect</h3>
                    <p class="text-gray-400 mb-6">
                        Have questions about coding, want to suggest topics, or just want to say hi?
                        Feel free to reach out! I love connecting with fellow developers and learners.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <i class="fas fa-envelope text-primary mr-3"></i>
                            <span>john.doe@example.com</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fab fa-youtube text-red-500 mr-3"></i>
                            <span>YouTube Channel</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fab fa-instagram text-pink-500 mr-3"></i>
                            <span>Instagram Profile</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fab fa-twitter text-blue-500 mr-3"></i>
                            <span>Twitter (X) Profile</span>
                        </div>
                    </div>
                </div>
                <form class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium mb-2">Name</label>
                        <input type="text" class="w-full glass border border-gray-700 rounded-lg px-4 py-2 focus:outline-none focus:border-primary transition-all duration-300">
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Email</label>
                        <input type="email" class="w-full glass border border-gray-700 rounded-lg px-4 py-2 focus:outline-none focus:border-primary transition-all duration-300">
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Message</label>
                        <textarea rows="4" class="w-full glass border border-gray-700 rounded-lg px-4 py-2 focus:outline-none focus:border-primary transition-all duration-300"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-primary hover:bg-blue-600 text-white py-3 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="glass py-8 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4">Main</h3>
                    <ul class="space-y-2">
                        <li><a href="index.html" class="text-gray-400 hover:text-white transition-all duration-300">Home</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white transition-all duration-300">Contact</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-all duration-300">About Me</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-all duration-300">My Journey</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Learn</h3>
                    <ul class="space-y-2">
                        <li><a href="#topics" class="text-gray-400 hover:text-white transition-all duration-300">Topics</a></li>
                        <li><a href="#tutorials" class="text-gray-400 hover:text-white transition-all duration-300">Tutorials</a></li>
                        <li><a href="#resources" class="text-gray-400 hover:text-white transition-all duration-300">Resources</a></li>
                        <li><a href="blog.html" class="text-gray-400 hover:text-white transition-all duration-300">Blog</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Legal</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-all duration-300">Terms</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-all duration-300">Privacy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-all duration-300">Disclaimer</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Follow Me</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-red-500 hover:text-red-400 transition-all duration-300 transform hover:scale-110">
                            <i class="fab fa-youtube text-xl"></i>
                        </a>
                        <a href="#" class="text-pink-500 hover:text-pink-400 transition-all duration-300 transform hover:scale-110">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="text-blue-500 hover:text-blue-400 transition-all duration-300 transform hover:scale-110">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-all duration-300 transform hover:scale-110">
                            <i class="fab fa-github text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="text-center border-t border-gray-700 pt-8">
                <p class="text-gray-400">Made with ❤️ and ☕ by John Doe</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in-up');
                }
            });
        }, observerOptions);

        // Observe sections for animation
        document.querySelectorAll('section').forEach(section => {
            observer.observe(section);
        });
    </script>
</body>

</html>