        <div class="bg-white p-4 rounded-lg shadow flex space-x-4 mentor-card">
            <img src="{{ asset($photo) }}" alt="{{ $prenom .' '. $nom }}" class="w-24 h-24 rounded-full object-cover">
            <div>
                <span class="text-xs text-jaune bg-yellow-100 px-2 py-1 rounded uppercase font-bold">Mentor</span>
                <h2 class="text-lg font-semibold mt-1">{{ $prenom .' '. $nom }}</h2>
                <p class="text-sm text-gray-500">{{ $specialite }}</p>
                <p class="text-sm text-gray-500 mt-1">{{ $telephone}}</p>
                <p class="text-sm text-gray-500">{{ $email }}</p>
                @if ($disponible)
                <div class="flex items-center mt-1 text-sm font-semibold bg-vertSombre/5 w-fit p-1 text-vertSombre">
                    <p>Disponible</p>
                </div>
                @else
                    <div class="flex items-center mt-1 text-sm font-semibold bg-red-500/5 w-fit p-1 text-red-500">
                        <p>Non disponible</p>
                    </div>
                @endif
            </div>
        </div>



