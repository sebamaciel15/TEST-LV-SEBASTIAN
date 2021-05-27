<x-app-layout>
    <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        <h1 class="uppercase text-center text-3xl font-bold">Categoría: {{$category->name}}</h1>

        @foreach ($menus as $menu)
            <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
                <img class="w-full h-72 object-cover object-center" src="{{asset('/storage/'. $menu->image->url)}}" alt="">

                <div class="px-6 py-4">
                    <h1 class="font-bold text-xl mb-2">
                        <a href="{{route('menu.show', $menu)}}">{{$menu->name}}</a>
                    </h1>
                </div>

                <div class="text-gray-700 text-base">
                    {{$menu->description}}
                </div>

            </article>
        @endforeach
    </div>
</x-app-layout>