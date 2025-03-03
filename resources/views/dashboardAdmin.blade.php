<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - TouriStay 2030</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .bg-dashboard {
            background: linear-gradient(to right, #4776E6, #8E54E9);
        }
        .glass-effect {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            border-radius: 1rem;
            border: 1px solid rgba(255, 255, 255, 0.18);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-50 to-purple-50 min-h-screen flex">
    
    <!-- Sidebar -->
    <aside class="w-64 bg-dashboard text-white p-6 min-h-screen flex flex-col">
        <h1 class="text-2xl font-bold text-center mb-6">Admin Panel</h1>
        <nav>
            <ul class="space-y-4">
                <li><a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-white hover:text-purple-600 transition">
                    <i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
                <li><a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-white hover:text-purple-600 transition">
                    <i class="fas fa-users"></i> <span>Utilisateurs</span></a></li>
                <li><a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-white hover:text-purple-600 transition">
                    <i class="fas fa-hotel"></i> <span>Hébergements</span></a></li>
                <li><a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-white hover:text-purple-600 transition">
                    <i class="fas fa-map-marker-alt"></i> <span>Destinations</span></a></li>
                <li><a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-white hover:text-purple-600 transition">
                    <i class="fas fa-cog"></i> <span>Paramètres</span></a></li>
            </ul>
        </nav>
        <div class="mt-auto">
            <a href="#" class="flex items-center space-x-3 p-3 rounded-lg bg-red-600 text-white hover:bg-red-700 transition">
                <i class="fas fa-sign-out-alt"></i> <span>Déconnexion</span>
            </a>
        </div>
    </aside>
    
    <!-- Main Content -->
    <main class="flex-grow p-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-6">Tableau de bord</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="glass-effect p-6 flex items-center space-x-4">
                <i class="fas fa-users text-4xl text-purple-600"></i>
                <div>
                    <h3 class="text-xl font-semibold">Utilisateurs</h3>
                    <p class="text-gray-600">1,234 inscrits</p>
                </div>
            </div>
            <div class="glass-effect p-6 flex items-center space-x-4">
                <i class="fas fa-hotel text-4xl text-purple-600"></i>
                <div>
                    <h3 class="text-xl font-semibold">Hébergements</h3>
                    <p class="text-gray-600">567 propriétés</p>
                </div>
            </div>
            <div class="glass-effect p-6 flex items-center space-x-4">
                <i class="fas fa-map-marker-alt text-4xl text-purple-600"></i>
                <div>
                    <h3 class="text-xl font-semibold">Destinations</h3>
                    <p class="text-gray-600">89 lieux</p>
                </div>
            </div>
        </div>
    </main>
    
</body>
</html>