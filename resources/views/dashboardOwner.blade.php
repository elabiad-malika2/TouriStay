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
        .action-btn {
            transition: all 0.3s ease;
            display: inline-flex;
            align-items-center;
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
    </style>
</head>
<body class="min-h-screen flex">
    <div class="flex w-full">
        <!-- Navigation (from previous design) -->
        <nav class="w-20 hover:w-64 transition-all duration-300 bg-white shadow-xl fixed left-0 top-0 bottom-0 z-50 overflow-hidden">
            <!-- ... (previous navigation code remains the same) ... -->
        </nav>

        <!-- Main Content Area -->
        <main class="ml-20 flex-grow p-8">
            <!-- Top Navigation -->
            <div class="fixed top-0 right-0 left-20 p-4 flex justify-between items-center z-40 bg-white/70 backdrop-blur-md">
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
                        <span class="text-sm font-medium">{{ $user->name }}</span>
                    </div>
                </div>
            </div>

            <!-- Dashboard Content -->
            <div class="pt-20 space-y-8">
                <!-- Profile Overview -->
                <div class="luxury-glass-card p-6 mt-4">
                    <div class="flex items-center">
                        <img src="{{ $user->profile_image ?? '/api/placeholder/100/100' }}" alt="Profile" class="w-24 h-24 rounded-full border-4 border-white shadow-lg mr-6">
                        <div>
                            <h2 class="text-2xl font-semibold text-gray-800">{{ $user->name }}</h2>
                            <p class="text-gray-600">Propriétaire Premium • Membre depuis {{ \Carbon\Carbon::parse($user->created_at)->format('d M Y') }}</p>
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
                        @foreach($user->annonces as $annonce)
                        <div class="luxury-glass-card p-4 transform transition hover:scale-105">
                            <!-- Property Image -->
                            <div class="relative">
                                <img src="{{ $annonce->image }}" alt="{{ $annonce->title }}" class="w-full h-48 object-cover rounded-lg mb-4">
                                <span class="absolute top-3 right-3 property-tag bg-green-100 text-green-800">
                                    {{ $annonce->type }}
                                </span>
                            </div>

                            <!-- Property Details -->
                            <h4 class="font-bold text-lg text-gray-800 mb-2">{{ $annonce->title }}</h4>
                            
                            <!-- Property Specifications -->
                            <div class="flex justify-between text-gray-600 mb-2">
                                <div class="flex items-center space-x-2">
                                    <i class="fas fa-bed text-gray-500"></i>
                                    <span>{{ $annonce->chambres }} chambres</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <i class="fas fa-bath text-gray-500"></i>
                                    <span>{{ $annonce->salles_de_bain }} salle(s)</span>
                                </div>
                            </div>

                            <!-- Location -->
                            <p class="text-gray-500 mb-2 flex items-center">
                                <i class="fas fa-map-marker-alt mr-2 text-gray-400"></i>
                                {{ $annonce->location }}
                            </p>

                            <!-- Price and Availability -->
                            <div class="flex justify-between items-center mt-4">
                                <span class="text-green-600 font-semibold text-lg">
                                    {{ number_format($annonce->prix, 2) }}€/mois
                                </span>
                                <div class="flex space-x-2">
                                    <!-- Edit Button -->
                                    <a href="{{ route('annonce.show', $annonce->id) }}" class="action-btn bg-blue-100 text-blue-600 hover:bg-blue-200">
                                        <i class="fas fa-edit">{{ $annonce->id }}</i>
                                    </a>
                                    
                                    <!-- Delete Button with Confirmation Modal Trigger -->
                                    <button 
                                        onclick="openDeleteModal({{ $annonce->id }})" 
                                        class="action-btn bg-red-100 text-red-600 hover:bg-red-200"
                                    >
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Availability Period -->
                            <div class="mt-2 text-sm text-gray-500 flex items-center">
                                <i class="fas fa-calendar-alt mr-2"></i>
                                Disponible du {{ \Carbon\Carbon::parse($annonce->disponible_du)->format('d/m/Y') }} 
                                au {{ \Carbon\Carbon::parse($annonce->disponible_jusquau)->format('d/m/Y') }}
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="delete-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex justify-center items-center">
        <div class="bg-white rounded-lg p-8 max-w-md w-full">
            <div class="text-center">
                <i class="fas fa-exclamation-triangle text-5xl text-red-500 mb-4"></i>
                <h2 class="text-2xl font-bold mb-4">Confirmer la suppression</h2>
                <p class="text-gray-600 mb-6">Êtes-vous sûr de vouloir supprimer cette propriété ? Cette action est irréversible.</p>
                
                <div class="flex justify-center space-x-4">
                    <button id="cancel-delete" class="px-6 py-2 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300 transition">
                        Annuler
                    </button>
                    <button id="confirm-delete" class="px-6 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition">
                        Supprimer
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openDeleteModal(annoncesId) {
            const deleteModal = document.getElementById('delete-modal');
            deleteModal.classList.remove('hidden');

            const cancelBtn = document.getElementById('cancel-delete');
            const confirmBtn = document.getElementById('confirm-delete');

            cancelBtn.onclick = () => deleteModal.classList.add('hidden');
            
            confirmBtn.onclick = () => {
                // Logique de suppression à implémenter
                fetch(`/annonces/${annoncesId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(response => {
                    if (response.ok) {
                        // Supprimer l'élément du DOM ou recharger la page
                        location.reload();
                    }
                })
                .catch(error => {
                    console.error('Erreur:', error);
                });
                
                deleteModal.classList.add('hidden');
            };
        }
    </script>
</body>
</html>