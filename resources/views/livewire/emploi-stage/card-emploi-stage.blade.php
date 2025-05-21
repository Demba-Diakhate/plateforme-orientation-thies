<div class="flex flex-col gap-6 h-[300px] p-5 rounded-lg shadow justify-between">
    <div class="flex flex-col gap-3">
        <div class="flex flex-row justify-between gap-20">
            <h3 class="font-semibold text-lg">{{$title}}</h3>
            <p class="text-black/60">{{$type_contrat}}</p>
        </div>
        <p class="text-black/40 text-base">{{$lieu}}</p>
        <p class="line-clamp-2">{{$description}}</p>
    </div>
    <button class="bg-vertClair/15 hover:bg-vertClair/25 duration-500 p-3 w-full">Voir les détails</button>
</div>
