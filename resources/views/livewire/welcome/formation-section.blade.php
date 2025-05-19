@php
$articles = [
    [
        'title' => "Téchnicien agricole",
        'description' => "L’accompagnement à l’orientation professionnelle évolue avec une approche novatrice alliant l’EPCR et une médiation pédagogique structurée. Comment pédagogie et numérique transforment les pratiques ?",
        'image' => "assets/images/gallery/09.png",
        'date' => "12/02/2025",
        'tags' => ['Innovation', 'Actualités'],
        'link' => "#"
    ],
    [
        'title' => "Developpement mobile",
        'description' => "Au quotidien, les professionnels de l'accompagnement peuvent parfois se sentir isolés et en manque d'outils adaptés. La Communauté de l'inclusion répond à ce problème en créant un espace d’entraide précieux.",
        'image' => "assets/images/gallery/23.png",
        'date' => "12/02/2025",
        'tags' => ['Innovation', 'Actualités'],
        'link' => "#"
    ],
    [
        'title' => "Comminity Manager",
        'description' => "ID6-Diagoriente renforce son engagement dans la formation de qualité avec l'obtention de la certification Qualiopi. Ce label ouvre également de nouvelles possibilités de financement pour les apprenants, facilitant ainsi l'accès à des outils et méthodes innovants au service de l'accompagnement personnalisé.",
        'image' => "assets/images/gallery/27.png",
        'date' => "12/02/2025",
        'tags' => ['Innovation', 'Actualités'],
        'link' => "#"
    ],
    [
        'title' => "Génie électrique",
        'description' => "ID6-Diagoriente renforce son engagement dans la formation de qualité avec l'obtention de la certification Qualiopi. Ce label ouvre également de nouvelles possibilités de financement pour les apprenants, facilitant ainsi l'accès à des outils et méthodes innovants au service de l'accompagnement personnalisé.",
        'image' => "assets/images/gallery/05.png",
        'date' => "28/01/2025",
        'tags' => ['Pédagogie', 'Numérique'],
        'link' => "#"
    ]
];
@endphp
<div class="bg-gray-100/50">
    <div class="max-w-6xl mx-auto px-5 md:px-0 py-12 space-y-10">
        <h1 class="text-3xl text-center md:text-start md:text-4xl font-bold md:px-16 leading-10">
            Découvrer les <span class="text-transparent bg-clip-text bg-gradient-to-r from-vertSombre to-vertClair">formations </span>disponibles </h1>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 ">
            @foreach ($articles as $article)
                <livewire:CardFormation 
                    :title="$article['title']"
                    :description="$article['description']"
                    :image="$article['image']"
                    :date="$article['date']"
                    :tags="$article['tags']"
                    :link="$article['link']"
                />
            @endforeach
        </div>
    </div>  
</div>


