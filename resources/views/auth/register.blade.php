<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TouriStay 2030 - Inscription</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .bg-world-cup {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('storage/mondial.avif') }}');
            background-size: cover;
            background-position: center;
        }
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 1rem;
            border: 1px solid rgba(255, 255, 255, 0.18);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        }
        
        .gradient-button {
            background: linear-gradient(to right, #4776E6, #8E54E9);
            transition: all 0.3s ease;
        }
        
        .gradient-button:hover {
            background: linear-gradient(to right, #3A5FD9, #7540D8);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .country-flag {
            height: 25px;
            width: 40px;
            border-radius: 4px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .navbar-item {
            position: relative;
        }
        
        .navbar-item:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background: linear-gradient(to right, #4776E6, #8E54E9);
            transition: width 0.3s ease;
        }
        
        .navbar-item:hover:after {
            width: 100%;
        }

        .password-strength {
            height: 4px;
            transition: all 0.3s ease;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-50 to-purple-50 min-h-screen flex flex-col">
    <!-- Header -->
    <header class="bg-white shadow-md py-4 px-6 sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center space-x-2">
                <i class="fas fa-home text-2xl text-purple-600"></i>
                <span class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-purple-600">TouriStay 2030</span>
            </div>
            
            <!-- Navigation -->
            <nav class="hidden md:flex items-center space-x-8">
                <a href="#" class="navbar-item text-gray-700 hover:text-purple-600 transition-colors">Accueil</a>
                <a href="#" class="navbar-item text-gray-700 hover:text-purple-600 transition-colors">Logements</a>
                <a href="#" class="navbar-item text-gray-700 hover:text-purple-600 transition-colors">Destinations</a>
                <a href="#" class="navbar-item text-gray-700 hover:text-purple-600 transition-colors">À propos</a>
                <a href="#" class="navbar-item text-gray-700 hover:text-purple-600 transition-colors">Contact</a>
            </nav>
            
            <!-- Country flags -->
            <div class="flex items-center space-x-3">
                <div class="country-flag bg-red-600"></div>
                <div class="country-flag" style="background: red; background-image: linear-gradient(to bottom, red 33%, yellow 33%, yellow 66%, red 66%);"></div>
                <div class="country-flag" style="background: #006233; display: flex; justify-content: center; align-items: center;">
                    <div style="width: 20px; height: 20px; position: relative;">
                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: #c1272d;">
                            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: #006233; font-size: 14px;">★</div>
                        </div>
                    </div>
                </div>
                <button class="md:hidden text-gray-700">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow container mx-auto px-4 py-8 flex flex-col md:flex-row items-center">
        <!-- Left side - Image -->
        <div class="w-full md:w-1/2 bg-world-cup rounded-2xl overflow-hidden shadow-2xl mb-8 md:mb-0 order-2 md:order-1">
            <div class="h-full flex items-center justify-center p-8 md:p-12">
                <div class="text-center text-white">
                    <h2 class="text-4xl font-bold mb-6">Rejoignez-nous pour le Mondial 2030</h2>
                    <p class="text-xl mb-8 max-w-md mx-auto">Créez votre compte et assurez votre logement pour cet événement exceptionnel au Maroc, en Espagne et au Portugal</p>
                    
                    <div class="grid grid-cols-3 gap-6 mb-8">
                        <div class="bg-black/20 backdrop-blur-sm p-6 rounded-xl">
                            <i class="fas fa-shield-alt text-3xl mb-4"></i>
                            <h3 class="font-semibold mb-2">100%</h3>
                            <p>Sécurisé</p>
                        </div>
                        <div class="bg-black/20 backdrop-blur-sm p-6 rounded-xl">
                            <i class="fas fa-bolt text-3xl mb-4"></i>
                            <h3 class="font-semibold mb-2">Rapide</h3>
                            <p>Réservation express</p>
                        </div>
                        <div class="bg-black/20 backdrop-blur-sm p-6 rounded-xl">
                            <i class="fas fa-tag text-3xl mb-4"></i>
                            <h3 class="font-semibold mb-2">-20%</h3>
                            <p>Pour les premiers inscrits</p>
                        </div>
                    </div>
                    
                    <div class="flex justify-center space-x-2">
                        <span class="inline-block w-3 h-3 rounded-full bg-white"></span>
                        <span class="inline-block w-3 h-3 rounded-full bg-white opacity-50"></span>
                        <span class="inline-block w-3 h-3 rounded-full bg-white opacity-50"></span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Right side - Form -->
        <div class="w-full md:w-1/2 md:pl-8 flex justify-center items-center order-1 md:order-2">
            <div class="w-full max-w-md">
                <div class="glass-effect p-8">
                    <!-- Form Header -->
                    <div class="text-center mb-8">
                        <h2 class="text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-purple-600">Inscription</h2>
                        <p class="text-gray-600 mt-2">Créez votre compte pour profiter de tous nos services</p>
                    </div>
                    
                    <!-- Form -->
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!-- Name fields -->
                        <div class="flex space-x-4 mb-6">
                            <div class="w-1/2">
                                <label class="block text-gray-700 text-sm font-medium mb-2" for="name">
                                    Nom
                                </label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                        <i class="fas fa-user text-purple-400"></i>
                                    </span>
                                    <input class="appearance-none bg-gray-50 border border-gray-200 rounded-lg w-full py-3 pl-10 pr-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all" 
                                        id="lastname" 
                                        name="name"
                                        type="text" 
                                        placeholder="Dupont">
                                </div>
                            </div>
                        </div>
                        
                        <!-- Email field -->
                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-medium mb-2" for="email">
                                Adresse Email
                            </label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <i class="fas fa-envelope text-purple-400"></i>
                                </span>
                                <input class="appearance-none bg-gray-50 border border-gray-200 rounded-lg w-full py-3 pl-10 pr-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all" 
                                    id="email" 
                                    name="email" 
                                    type="email" 
                                    placeholder="exemple@email.com">
                            </div>
                        </div>

                        <!-- Password field -->
                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-medium mb-2" for="password">
                                Mot de passe
                            </label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <i class="fas fa-lock text-purple-400"></i>
                                </span>
                                <input class="appearance-none bg-gray-50 border border-gray-200 rounded-lg w-full py-3 pl-10 pr-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all" 
                                    id="password" 
                                    name="password" 
                                    type="password" 
                                    placeholder="••••••••">
                                <span class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer">
                                    <i class="fas fa-eye text-gray-400 hover:text-purple-500"></i>
                                </span>
                            </div>
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-medium mb-2" for="password_confirmation">
                                Confirmer le mot de passe
                            </label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <i class="fas fa-lock text-purple-400"></i>
                                </span>
                                <input class="appearance-none bg-gray-50 border border-gray-200 rounded-lg w-full py-3 pl-10 pr-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all" 
                                    id="password_confirmation" 
                                    name="password_confirmation" 
                                    type="password" 
                                    placeholder="••••••••">
                            </div>
                        </div>

                        <!-- Role selection -->
                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-medium mb-2" for="role">
                                Choisissez votre rôle
                            </label>
                            <div class="relative">
                                <select class="appearance-none bg-gray-50 border border-gray-200 rounded-lg w-full py-3 pl-10 pr-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all" 
                                        id="role" name="role_id">
                                        @foreach($roles as $role)
                                            @if($role->name !=='admin')
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                            @endif
                                        @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Terms and Conditions -->
                        <div class="mb-8">
                            <div class="flex items-start">
                                <input id="terms" type="checkbox" class="h-4 w-4 mt-1 text-purple-600 focus:ring-purple-500 border-gray-300 rounded">
                                <label for="terms" class="ml-2 block text-sm text-gray-700">
                                    J'accepte les <a href="#" class="text-purple-600 hover:text-purple-800 hover:underline">Conditions d'utilisation</a> et la <a href="#" class="text-purple-600 hover:text-purple-800 hover:underline">Politique de confidentialité</a>
                                </label>
                            </div>
                        </div>
                        
                        <!-- Submit button -->
                        <div class="mb-8">
                            <button class="w-full gradient-button text-white font-medium py-3 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition transform hover:-translate-y-1" type="submit">
                                Créer un compte
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-10 mt-8">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <i class="fas fa-home text-2xl text-purple-400"></i>
                        <span class="text-xl font-bold">TouriStay 2030</span>
                    </div>
                    <p class="text-gray-400 mb-4">Votre plateforme de réservation officielle pour le Mondial 2030.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Liens rapides</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Accueil</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Logements</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Destinations</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">À propos</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Villes hôtes</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Casablanca</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Madrid</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Lisbonne</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Rabat</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Barcelone</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold mb-4">Assistance</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Centre d'aide</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Conditions d'utilisation</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Politique de confidentialité</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">FAQ</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Nous contacter</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 mb-4 md:mb-0">© 2025 TouriStay 2030. Tous droits réservés.</p>
                <div class="flex space-x-6">
                    <img src="{{ asset('storage/payment/visa.png') }}" alt="Visa" class="h-8">
                    <img src="{{ asset('storage/payment/mastercard.png') }}" alt="Mastercard" class="h-8">
                    <img src="{{ asset('storage/payment/paypal.png') }}" alt="PayPal" class="h-8">
                    <img src="{{ asset('storage/payment/apple-pay.png') }}" alt="Apple Pay" class="h-8">
                </div>
            </div>
        </div>
    </footer>
    
    <script>
        // Toggle password visibility
        document.addEventListener('DOMContentLoaded', function() {
            const eyeIcon = document.querySelector('.fa-eye');
            const passwordInput = document.getElementById('password');
            
            eyeIcon.addEventListener('click', function() {
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    eyeIcon.classList.remove('fa-eye');
                    eyeIcon.classList.add('fa-eye-slash');
                } else {
                    passwordInput.type = 'password';
                    eyeIcon.classList.remove('fa-eye-slash');
                    eyeIcon.classList.add('fa-eye');
                }
            });
            
            // Password strength meter
            passwordInput.addEventListener('input', function() {
                const strength = calculatePasswordStrength(this.value);
                const strengthBar = document.getElementById('password-strength');
                
                // Update width and color based on strength
                strengthBar.style.width = strength + '%';
                
                if (strength < 33) {
                    strengthBar.classList.remove('bg-yellow-500', 'bg-green-500');
                    strengthBar.classList.add('bg-red-500');
                } else if (strength < 66) {
                    strengthBar.classList.remove('bg-red-500', 'bg-green-500');
                    strengthBar.classList.add('bg-yellow-500');
                } else {
                    strengthBar.classList.remove('bg-red-500', 'bg-yellow-500');
                    strengthBar.classList.add('bg-green-500');
                }
            });
            
            function calculatePasswordStrength(password) {
                let strength = 0;
                
                // If password is 8+ characters
                if (password.length >= 8) strength += 25;
                
                // If password contains lowercase and uppercase characters
                if (/[a-z]/.test(password) && /[A-Z]/.test(password)) strength += 25;
                
                // If password contains numbers
                if (/[0-9]/.test(password)) strength += 25;
                
                // If password contains special characters
                if (/[^a-zA-Z0-9]/.test(password)) strength += 25;
                
                return strength;
            }
        });
    </script>
</body>
</html>