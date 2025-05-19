<div class="max-w-md mx-auto border border-gray-300 overflow-hidden shadow-lg bg-white hover:brightness-95">
  <!-- Image -->
  <img src="{{ asset($image) }}" alt="image" class="w-full h-52" />

  <!-- Contenu -->
  <div class="p-6 space-y-4">

    <!-- Titre -->
    <h3 class="text-xl font-bold text-vertSombre line-clamp-1 ">
        {{ $title }}
    </h3>

    <!-- Description -->
    <div class="text-sm text-gray-700 line-clamp-5 ">
        {{ $description }}
    </div>

    <!-- Lien -->
    <div class="flex justify-end">
      <a href="{{ $link }}" class="text-blue-900 text-lg hover:underline">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-7">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
        </svg>
      </a>
    </div>
  </div>
</div>

