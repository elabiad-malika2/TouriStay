<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Propriétaire</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --gradient-primary: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
        .luxury-glass-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        .nav-item {
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        .nav-item::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--gradient-primary);
            transition: width 0.3s ease;
        }
        .nav-item:hover::before {
            width: 100%;
        }
        .top-nav {
            background: linear-gradient(90deg, rgba(255,255,255,0.2) 0%, rgba(255,255,255,0.1) 100%);
            backdrop-filter: blur(15px);
        }
    </style>
</head>
<body class="min-h-screen flex">
    <div class="flex w-full">
        <!-- Modern Navigation -->
        <nav class="w-20 hover:w-64 transition-all duration-300 bg-white shadow-xl fixed left-0 top-0 bottom-0 z-50 overflow-hidden">
            <div class="h-full flex flex-col items-center">
                <div class="p-4 mt-4 mb-8">
                    <img src="/api/placeholder/80/80" alt="Logo" class="rounded-full w-12 h-12 mx-auto">
                </div>
                <div class="space-y-4 w-full px-2">
                    <a href="#" class="nav-item flex items-center p-3 text-gray-600 hover:text-purple-600 group">
                        <i class="fas fa-home w-12 text-center"></i>
                        <span class="ml-4 opacity-0 group-hover:opacity-100 transition-opacity">Tableau de Bord</span>
                    </a>
                    <a href="#" class="nav-item flex items-center p-3 text-gray-600 hover:text-purple-600 group">
                        <i class="fas fa-building w-12 text-center"></i>
                        <span class="ml-4 opacity-0 group-hover:opacity-100 transition-opacity">Mes Propriétés</span>
                    </a>
                    <a href="#" class="nav-item flex items-center p-3 text-gray-600 hover:text-purple-600 group">
                        <i class="fas fa-chart-line w-12 text-center"></i>
                        <span class="ml-4 opacity-0 group-hover:opacity-100 transition-opacity">Analytiques</span>
                    </a>
                    <a href="#" class="nav-item flex items-center p-3 text-gray-600 hover:text-purple-600 group">
                        <i class="fas fa-cog w-12 text-center"></i>
                        <span class="ml-4 opacity-0 group-hover:opacity-100 transition-opacity">Paramètres</span>
                    </a>
                </div>
                <div class="mt-auto p-4 w-full">
                    <a href="#" class="flex items-center justify-center p-3 bg-red-500 text-white rounded-full hover:bg-red-600 transition">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                </div>
            </div>
        </nav>

        <!-- Main Content Area -->
        <main class="ml-20 flex-grow p-8">
            <!-- Top Navigation -->
            <div class="top-nav fixed top-0 right-0 left-20 p-4 flex justify-between items-center z-40">
                <div class="flex items-center space-x-4">
                    <i class="fas fa-search text-gray-500"></i>
                    <input type="text" placeholder="Rechercher..." class="bg-transparent border-b border-gray-300 focus:outline-none focus:border-purple-600">
                </div>
                <div class="flex items-center space-x-4">
                    <button class="text-gray-600 hover:text-purple-600">
                        <i class="fas fa-bell"></i>
                    </button>
                    <div class="flex items-center space-x-2">
                        <img src="/api/placeholder/40/40" alt="Profile" class="rounded-full w-10 h-10">
                        <span class="text-sm font-medium">Jean Dupont</span>
                    </div>
                </div>
            </div>

            <!-- Dashboard Content -->
            <div class="pt-20 space-y-8">
                <!-- Profile Overview -->
                <div class="luxury-glass-card p-6 mt-4">
                    <div class="flex items-center">
                        <img src="/api/placeholder/100/100" alt="Profile" class="w-24 h-24 rounded-full border-4 border-white shadow-lg mr-6">
                        <div>
                            <h2 class="text-2xl font-semibold text-gray-800">Jean Dupont</h2>
                            <p class="text-gray-600">Propriétaire Premium • Membre depuis Janvier 2023</p>
                        </div>
                        <button class="ml-auto bg-gradient-to-r from-purple-600 to-indigo-600 text-white px-6 py-3 rounded-full hover:from-purple-700 hover:to-indigo-700 transition">
                            Modifier Profil
                        </button>
                    </div>
                </div>

                <!-- Property Cards -->
                <div class="luxury-glass-card p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-xl font-semibold text-gray-800">Mes Propriétés</h3>
                        <button class="bg-gradient-to-r from-green-500 to-teal-600 text-white px-6 py-3 rounded-full hover:from-green-600 hover:to-teal-700 transition">
                            Ajouter Propriété
                        </button>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Property Card Template -->
                        <div class="luxury-glass-card p-4 transform transition hover:scale-105">
                            <img src="/api/placeholder/300/200" alt="Propriété" class="w-full h-48 object-cover rounded-lg mb-4">
                            <h4 class="font-bold text-lg text-gray-800">Appartement Luxe Paris</h4>
                            <div class="flex justify-between text-gray-600 mt-2">
                                <span>3 chambres</span>
                                <span class="font-semibold text-green-600">2 500€/mois</span>
                            </div>
                            <div class="mt-4 flex justify-between items-center">
                                <span class="text-sm text-gray-500">Disponible</span>
                                <div class="space-x-3">
                                    <button class="text-blue-500 hover:text-blue-700">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="text-red-500 hover:text-red-700">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Repeat property card for more properties -->
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>