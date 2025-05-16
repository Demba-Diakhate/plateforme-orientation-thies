<div class="max-w-md mx-auto border border-gray-300 overflow-hidden shadow-lg bg-white hover:brightness-95">
  <!-- Image -->
  <img src="{{ asset($image) }}" alt="image" class="w-full h-52" />

  <!-- Contenu -->
  <div class="p-6 space-y-4">

    <!-- Titre -->
    <h3 class="text-xl font-bold text-blue-900 line-clamp-1 ">
        {{ $name }}
    </h3>
    {{-- <h4 class="font-semibold text-black/80">Domaine : {{$type}}</h4> --}}

    <!-- Description -->
    <div class="text-sm text-gray-700 line-clamp-4 ">
        {{ $description }}
    </div>
    <p class="font-semibold text-sm">Date limite : {{$dateFin}}</p>
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



{{-- <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <img class="rounded-t-lg" src={{$image}} alt="" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$name}}</h5>
        </a>
        
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
           {{$description}}
        </p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 active:bg-blue-800 duration-300 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            En savoir plus
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
        </a>
    </div>
</div> --}}