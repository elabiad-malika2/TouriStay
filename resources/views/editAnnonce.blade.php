
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier une Annonce</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Inter', sans-serif;
        }
        .sidebar {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            box-shadow: 0 10px 25px rgba(37, 117, 252, 0.2);
        }
        .content-card {
            background: white;
            border-radius: 1rem;
            box-shadow: 0 10px 35px rgba(0,0,0,0.1);
            border: 1px solid rgba(0,0,0,0.05);
        }
        .section-title {
            position: relative;
            padding-bottom: 0.5rem;
        }
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: linear-gradient(to right, #6a11cb, #2575fc);
        }
    </style>
</head>
<body class="min-h-screen bg-gray-100 flex">
    <!-- Sidebar Navigation -->
    <aside class="sidebar w-24 hover:w-72 transition-all duration-300 fixed left-0 top-0 bottom-0 z-50 overflow-hidden text-white">
        <div class="h-full flex flex-col">
            <div class="p-6 text-center">
                <img src="/api/placeholder/80/80" alt="Logo" class="rounded-full w-16 h-16 mx-auto mb-6">
            </div>
            <nav class="space-y-4 px-4">
                <a href="#" class="flex items-center p-3 hover:bg-white/10 rounded-lg transition group">
                    <i class="fas fa-home w-8 text-center text-xl"></i>
                    <span class="ml-4 opacity-0 group-hover:opacity-100 transition-opacity">Tableau de Bord</span>
                </a>
                <a href="#" class="flex items-center p-3 hover:bg-white/10 rounded-lg transition group">
                    <i class="fas fa-building w-8 text-center text-xl"></i>
                    <span class="ml-4 opacity-0 group-hover:opacity-100 transition-opacity">Mes Propriétés</span>
                </a>
                <a href="#" class="flex items-center p-3 hover:bg-white/10 rounded-lg transition group">
                    <i class="fas fa-cog w-8 text-center text-xl"></i>
                    <span class="ml-4 opacity-0 group-hover:opacity-100 transition-opacity">Paramètres</span>
                </a>
            </nav>
            <div class="mt-auto p-4">
                <a href="#" class="block w-full bg-red-500 hover:bg-red-600 text-white text-center p-3 rounded-full transition">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            </div>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="ml-24 flex-grow p-8">
        <div class="max-w-6xl mx-auto">
            <!-- Header -->
            <header class="flex justify-between items-center mb-8">
                <h1 class="text-3xl font-bold text-gray-800">Modifier l'Annonce</h1>
                <div class="flex items-center space-x-4">
                    <img src="/api/placeholder/40/40" alt="Profile" class="rounded-full w-10 h-10">
                    <span class="text-sm font-medium text-gray-600">John Doe</span>
                </div>
            </header>

            <!-- Edit Form -->
            <form class="content-card p-10 space-y-8" method="POST" enctype="multipart/form-data" action="{{ route('annonce.update', $annonce->id) }}">
                @csrf
                @method('PUT')
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Left Column -->
                    <div>
                        <h2 class="section-title text-xl font-semibold text-gray-800 mb-6">Informations de Base </h2>
                        
                        <div class="space-y-6">
                            <div>
                                <label class="block text-gray-700 font-medium mb-2" for="title">Titre de l'Annonce</label>
                                <input type="text" id="title" name="title" value="{{$annonce->title}}" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 transition">
                            </div>

                            <div>
                                <label class="block text-gray-700 font-medium mb-2" for="type">Type de Propriété</label>
                                <select id="type" name="type" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 transition appearance-none">
                                    <option value="villa" {{ $annonce->type == 'villa' ? 'selected' : '' }}>Villa</option>
                                    <option value="appartement" {{ $annonce->type == 'appartement' ? 'selected' : '' }}>Appartement</option>
                                    <option value="maison" {{ $annonce->type == 'maison' ? 'selected' : '' }}>Maison</option>
                                    <option value="studio" {{ $annonce->type == 'studio' ? 'selected' : '' }}>Studio</option>
                                </select>
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-gray-700 font-medium mb-2" for="salles_de_bain">Salles de Bain</label>
                                    <select id="salles_de_bain" name="salles_de_bain" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 transition appearance-none">
                                        <option value="1" {{ $annonce->salles_de_bain == 1 ? 'selected' : '' }}>1</option>
                                        <option value="2" {{ $annonce->salles_de_bain == 2 ? 'selected' : '' }}>2</option>
                                        <option value="3" {{ $annonce->salles_de_bain == 3 ? 'selected' : '' }}>3</option>
                                        <option value="4" {{ $annonce->salles_de_bain == 4 ? 'selected' : '' }}>4</option>
                                        <option value="5" {{ $annonce->salles_de_bain >= 5 ? 'selected' : '' }}>5+</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-medium mb-2" for="chambres">Chambres</label>
                                    <select id="chambres" name="chambres" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 transition appearance-none">
                                        <option value="1" {{ $annonce->chambres == 1 ? 'selected' : '' }}>1</option>
                                        <option value="2" {{ $annonce->chambres == 2 ? 'selected' : '' }}>2</option>
                                        <option value="3" {{ $annonce->chambres == 3 ? 'selected' : '' }}>3</option>
                                        <option value="4" {{ $annonce->chambres == 4 ? 'selected' : '' }}>4</option>
                                        <option value="5" {{ $annonce->chambres >= 5 ? 'selected' : '' }}>5+</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div>
                        <h2 class="section-title text-xl font-semibold text-gray-800 mb-6">Détails Financiers</h2>
                        
                        <div class="space-y-6">
                            <div>
                                <label class="block text-gray-700 font-medium mb-2" for="prix">Prix Mensuel (€)</label>
                                <input type="number" id="prix" name="prix" placeholder="0.00" min="0" step="0.01" value="{{$annonce->prix}}" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 transition">
                            </div>

                            <div>
                                <label class="block text-gray-700 font-medium mb-2" for="location">Adresse</label>
                                <input type="text" id="location" name="location" value="Luettgenside" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 transition">
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-gray-700 font-medium mb-2" for="disponible_du">Disponible Du</label>
                                    <input type="date" id="disponible_du" name="disponible_du" value="{{ $annonce->disponible_du}}" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 transition">
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-medium mb-2" for="disponible_jusquau">Disponible Jusqu'au</label>
                                    <input type="date" id="disponible_jusquau" name="disponible_jusquau" value="{{ $annonce->disponible_jusquau}}" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 transition">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Image Upload Section -->
                <div class="mt-8">
                    <h2 class="section-title text-xl font-semibold text-gray-800 mb-6">Image de la Propriété</h2>
                    <div class="flex items-center space-x-8">
                        <div class="w-1/3">
                            <div class="border-2 border-dashed border-gray-300 rounded-lg p-2">
                                <img src="https://via.placeholder.com/640x480.png/00ff55?text=real+estate+libero" alt="Property Image" class="w-full h-48 object-cover rounded-md">
                            </div>
                        </div>
                        <div class="flex-grow">
                            <div class="relative border-2 border-dashed border-gray-300 rounded-lg p-6 text-center">
                                <input type="file" id="image" name="image" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                                <div class="text-center">
                                    <i class="fas fa-cloud-upload-alt text-4xl text-gray-400 mb-4"></i>
                                    <p class="text-gray-600">Glissez et déposez ou <span class="text-blue-600 font-semibold">parcourir</span></p>
                                    <p class="text-xs text-gray-500 mt-2">PNG, JPG jusqu'à 5Mo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Description Section -->
                <div class="mt-8">
                    <h2 class="section-title text-xl font-semibold text-gray-800 mb-6">Description Détaillée</h2>
                    <textarea name="description" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 transition" rows="5">Sapiente eius dolor eos commodi. Corrupti non qui neque eum exercitationem vero. Ea nobis omnis quas impedit non.</textarea>
                </div>

                <!-- Action Buttons -->
                <div class="flex justify-end space-x-4 mt-8">
                    <button type="button" class="px-6 py-3 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300 transition">
                        Annuler
                    </button>
                    <button type="submit" class="px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-lg hover:from-blue-700 hover:to-purple-700 transition">
                        Enregistrer les Modifications
                    </button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>