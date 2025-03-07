
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explorateur de Locations - Espace Touriste</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --gradient-primary: linear-gradient(135deg, #38bdf8 0%, #3b82f6 100%);
            --gradient-secondary: linear-gradient(135deg, #a8c0ff 0%, #3f5efb 100%);
        }
        body {
            background: linear-gradient(160deg, #f4f7ff 0%, #e9eef9 100%);
            font-family: 'Inter', sans-serif;
        }
        .luxury-glass-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(20px);
            border-radius: 1.5rem;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1), 0 5px 15px rgba(0,0,0,0.05);
            border: 1px solid rgba(255,255,255,0.3);
            transition: all 0.3s ease;
        }
        .action-btn {
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.5rem;
            border-radius: 9999px;
        }
        .action-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        .property-tag {
            display: inline-block;
            padding: 0.25rem 0.5rem;
            border-radius: 0.375rem;
            font-size: 0.75rem;
            font-weight: 600;
        }
        .search-box {
            backdrop-filter: blur(20px);
            border-radius: 1rem;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
        }
    </style>
</head>
<body class="min-h-screen flex">
    <div class="flex w-full">
        <!-- Navigation -->
        <nav class="w-20 hover:w-64 transition-all duration-300 bg-white shadow-xl fixed left-0 top-0 bottom-0 z-50 overflow-hidden">
            <div class="flex flex-col h-full">
                <div class="flex items-center justify-center h-20 border-b border-gray-100">
                    <img src="/api/placeholder/40/40" alt="Logo" class="h-10 w-10">
                    <span class="ml-3 font-bold text-gray-800 opacity-0 group-hover:opacity-100 transition-opacity duration-300">TravelStay</span>
                </div>
                
                <div class="flex-grow py-6 space-y-2 overflow-y-auto">
                    <!-- Navigation links -->
                    <a href="#" class="flex items-center px-4 py-3 text-blue-600 bg-blue-50 mx-2 rounded-xl">
                        <i class="fas fa-search text-xl w-8"></i>
                        <span class="ml-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">Explorer</span>
                    </a>
                    <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:text-blue-600 hover:bg-blue-50 mx-2 rounded-xl transition-all">
                        <i class="fas fa-heart text-xl w-8"></i>
                        <span class="ml-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">Favoris</span>
                    </a>
                    <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:text-blue-600 hover:bg-blue-50 mx-2 rounded-xl transition-all">
                        <i class="fas fa-calendar-check text-xl w-8"></i>
                        <span class="ml-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">Réservations</span>
                    </a>
                    <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:text-blue-600 hover:bg-blue-50 mx-2 rounded-xl transition-all">
                        <i class="fas fa-envelope text-xl w-8"></i>
                        <span class="ml-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">Messages</span>
                    </a>
                    <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:text-blue-600 hover:bg-blue-50 mx-2 rounded-xl transition-all">
                        <i class="fas fa-map-marker-alt text-xl w-8"></i>
                        <span class="ml-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">Destinations</span>
                    </a>
                </div>
                
                <div class="py-6 px-4 border-t border-gray-100">
                    <a href="#" class="flex items-center text-gray-600 hover:text-blue-600">
                        <i class="fas fa-cog text-xl w-8"></i>
                        <span class="ml-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">Paramètres</span>
                    </a>
                    <a href="#" class="flex items-center mt-4 text-gray-600 hover:text-blue-600">
                        <i class="fas fa-sign-out-alt text-xl w-8"></i>
                        <span class="ml-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">Déconnexion</span>
                    </a>
                </div>
            </div>
        </nav>

        <!-- Main Content Area -->
        <main class="ml-20 flex-grow p-8">
            <!-- Top Navigation -->
            <div class="fixed top-0 right-0 left-20 p-4 flex justify-between items-center z-40 bg-white/70 backdrop-blur-md">
                <div class="flex items-center space-x-4">
                    <i class="fas fa-globe text-blue-500"></i>
                    <span class="font-medium text-gray-700">Explorez des logements uniques</span>
                </div>
                <div class="flex items-center space-x-4">
                    <button class="text-gray-600 hover:text-blue-600 relative">
                        <i class="fas fa-bell"></i>
                        <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full h-4 w-4 flex items-center justify-center">3</span>
                    </button>
                    <div class="flex items-center space-x-2">
                        <img src="/api/placeholder/40/40" alt="Profile" class="rounded-full w-10 h-10">
                        <span class="text-sm font-medium"></span>
                    </div>
                </div>
            </div>

            <!-- Dashboard Content -->
            <div class="pt-20 space-y-8">
                <!-- Search Box -->
                <form action="{{ route('touriste.dashboard') }}" method="GET" class="flex items-center gap-4 p-4 bg-white rounded-lg shadow">
                    <div class="relative flex-grow">
                        <input type="text" value="{{ request('search') }}" name="search" placeholder="Rechercher des logements..." class="w-full p-2 pl-9 bg-white border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <i class="fas fa-search absolute left-3 top-2.5 text-gray-400"></i>
                    </div>
                    
                    <div class="flex items-center">
                        <select name="per_page" class="bg-white border border-gray-200 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="3" {{ request('per_page') == 3 || !request('per_page') ? 'selected' : '' }}>3 per page</option>
                    <option value="4" {{ request('per_page') == 4 ? 'selected' : '' }}>4 per page</option>
                    <option value="5" {{ request('per_page') == 5 ? 'selected' : '' }}>5 per page</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="bg-gradient-to-r from-blue-500 to-blue-600 text-white px-4 py-2 rounded-lg hover:from-blue-600 hover:to-blue-700 transition shadow">
                        <i class="fas fa-search mr-1"></i>
                        Rechercher
                    </button>
                </form>

                <!-- Property Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($annonce as $item)
                        <div class="luxury-glass-card transform transition hover:scale-105">
                            <div class="relative">
                                <img src="{{ $item->image }}" alt="{{ $item->title }}" class="w-full h-48 object-cover rounded-t-lg">
                                <button class="absolute top-3 right-3 text-gray-100 hover:text-red-500 p-1.5 rounded-full bg-black/20 backdrop-blur-sm hover:bg-white transition">
                                    <i class="fas fa-heart text-xl"></i>
                                </button>
                                <span class="absolute top-3 left-3 property-tag bg-blue-100 text-blue-800">
                                    {{ $item->type }}
                                </span>
                            </div>
                            
                            <div class="p-4">
                                <!-- Rating and Reviews -->
                                <div class="flex justify-between items-center mb-2">
                                    <div class="flex items-center">
                                        <i class="fas fa-star text-yellow-400"></i>
                                        <span class="ml-1 font-semibold">4.8</span>
                                        <span class="ml-1 text-gray-500 text-sm">(42 avis)</span>
                                    </div>
                                    <span class="text-blue-600 font-semibold text-lg">{{ $item->prix }}<span class="text-sm font-normal text-gray-500">/nuit</span></span>
                                </div>
                                
                                <!-- Property Title -->
                                <h4 class="font-bold text-lg text-gray-800 mb-2">{{ $item->title }}</h4>
                                
                                <!-- Property Specifications -->
                                <div class="flex justify-between text-gray-600 mb-2">
                                    <div class="flex items-center space-x-2">
                                        <i class="fas fa-bed text-gray-500"></i>
                                        <span>{{ $item->chambres }} chambres</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <i class="fas fa-bath text-gray-500"></i>
                                        <span>{{ $item->salles_de_bain }} salles de bain</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <i class="fas fa-user-friends text-gray-500"></i>
                                        <span>{{ $item->capacite }} personnes</span>
                                    </div>
                                </div>

                                <!-- Location -->
                                <p class="text-gray-500 mb-3 flex items-center text-sm">
                                    <i class="fas fa-map-marker-alt mr-2 text-gray-400"></i>
                                    {{ $item->location }}
                                </p>

                                <!-- Availability -->
                                <p class="text-green-600 text-sm mb-4">
                                    <i class="fas fa-calendar-check mr-2"></i>
                                    @if (\Carbon\Carbon::now()->between($item->disponible_du, $item->disponible_jusquau))
                                        Disponible pour vos dates
                                    @else
                                        Non disponible
                                    @endif
                                </p>

                                <!-- CTA Buttons -->
                                <div class="flex space-x-2">
                                    <button class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg flex-grow transition">
                                        Réserver
                                    </button>
                                    <button class="bg-gray-100 hover:bg-gray-200 text-gray-700 py-2 px-4 rounded-lg transition flex items-center justify-center">
                                        <i class="fas fa-info-circle"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


                <!-- Pagination -->
                <div class="flex justify-center mt-10 mb-4">
                    <nav class="luxury-glass-card inline-flex rounded-xl overflow-hidden shadow-md">
                        <button class="px-4 py-2 border-r border-gray-200 text-gray-500 hover:bg-blue-50 hover:text-blue-600 transition">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="px-4 py-2 border-r border-gray-200 bg-blue-500 text-white font-medium">
                            1
                        </button>
                        <button class="px-4 py-2 border-r border-gray-200 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition">
                            2
                        </button>
                        <button class="px-4 py-2 border-r border-gray-200 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition">
                            3
                        </button>
                        <button class="px-4 py-2 border-r border-gray-200 text-gray-500 hover:bg-blue-50 hover:text-blue-600 transition">
                            ...
                        </button>
                        <button class="px-4 py-2 border-r border-gray-200 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition">
                            8
                        </button>
                        <button class="px-4 py-2 text-gray-500 hover:bg-blue-50 hover:text-blue-600 transition">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </nav>
                </div>

                <!-- Results summary -->
                <div class="text-center text-gray-600 text-sm mb-8">
                    Affichage de 1-12 sur 42 logements
                </div>
                
                <!-- Newsletter Signup -->
                <div class="luxury-glass-card p-6 bg-gradient-to-r from-blue-50 to-indigo-50 mt-10">
                    <div class="flex flex-col md:flex-row items-center justify-between">
                        <div class="mb-4 md:mb-0">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Recevez nos meilleures offres</h3>
                            <p class="text-gray-600">Inscrivez-vous à notre newsletter pour découvrir nos offres exclusives</p>
                        </div>
                        <div class="flex w-full md:w-auto">
                            <input type="email" placeholder="Votre email" class="p-3 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-500 border-y border-l border-gray-200 w-full md:w-64">
                            <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-3 rounded-r-lg transition">S'inscrire</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Quick Action Button -->
    <button class="fixed bottom-6 right-6 w-14 h-14 rounded-full bg-gradient-to-r from-blue-500 to-blue-600 text-white shadow-lg hover:shadow-xl transform hover:scale-105 transition flex items-center justify-center">
        <i class="fas fa-plus text-xl"></i>
    </button>

    <script>
        // Sample JavaScript for future functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize dropdown toggles
            const filterDropdown = document.getElementById('sort-options');
            filterDropdown.addEventListener('change', function() {
                console.log('Sorting option changed to:', this.value);
                // Here you would implement the sorting functionality
            });
            
            // Future implementation for pagination clicks
            const paginationButtons = document.querySelectorAll('.pagination button');
            paginationButtons.forEach(button => {
                button.addEventListener('click', function() {
                    console.log('Page navigation clicked:', this.textContent.trim());
                });
            });
        });
    </script>
</body>
</html>