<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Utilisateur</title>
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
        <h1 class="text-2xl font-bold text-center mb-6">Profil</h1>
        <nav>
            <ul class="space-y-4">
                <li><a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-white hover:text-purple-600 transition">
                    <i class="fas fa-user"></i> <span>Mon Profil</span></a></li>
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
    
    <!-- Profil Section -->
    <main class="flex-grow p-8 flex justify-center items-center">
        <div class="glass-effect p-6 w-full max-w-lg text-center">
            <img src="https://via.placeholder.com/150" alt="Photo de profil" class="rounded-full mx-auto w-32 h-32 border-4 border-white shadow-lg">
            <h2 class="text-2xl font-semibold text-gray-800 mt-4">Nom de l'utilisateur</h2>
            <p class="text-gray-600">@username</p>
            
            <form class="mt-6 text-left">
                <label class="block text-gray-700">Nom complet</label>
                <input type="text" class="w-full p-2 border rounded-lg" placeholder="Votre nom">
                
                <label class="block text-gray-700 mt-4">Email</label>
                <input type="email" class="w-full p-2 border rounded-lg" placeholder="Votre email">
                
                <label class="block text-gray-700 mt-4">Bio</label>
                <textarea class="w-full p-2 border rounded-lg" placeholder="Décrivez-vous..."></textarea>
                
                <button class="mt-6 w-full bg-purple-600 text-white p-3 rounded-lg hover:bg-purple-700 transition">Mettre à jour</button>
            </form>
        </div>
    </main>
    
</body>
</html>
