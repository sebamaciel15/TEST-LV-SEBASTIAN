<x-app-layout>
    <div class="container py-8">
        <h1 class="text-4xl font-bold text-gray-600">{{$menu->name}}</h1> 
        
        <div class="text-lg text-gray-500 mb-2">
            {{$menu->description}}
        </div>

        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            {{-- contenido principal --}}
            <div class="lg:col-span-2">

                <figure class="shadow-lg rounded-lg overflow-hidden">
                    <img class="w-full h-80 object-cover object-center" src="{{asset('/storage/'. $menu->image->url)}}" alt="">
                </figure>                

            </div>

            {{-- contenido relacionado --}}
            <aside>
                <h1 class="text-2xl font-bold text-gray-600 mb-4">Más en {{$menu->category->name}}</h1>

                <ul>
                    @foreach ($similares as $similar)
                        <li class="mb-4">
                            <a class="flex" href="{{route('menu.show', $similar)}}">
                                <img class="shadow-lg rounded-lg overflow-hidden w-36 h-20 object-cover object-center" src="{{asset('/storage/'. $similar->image->url )}}" alt="">
                                <span class="ml-2 text-gray-600">{{$similar->name}}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </aside>

        </div>

        
    </div>
</x-app-layout>