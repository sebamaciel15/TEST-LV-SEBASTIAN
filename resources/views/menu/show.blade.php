<x-app-layout>
    <div class="container py-8">
        <h1 class="text-4xl font-bold text-gray-600">{{$menu->name}}</h1> 
        
        <div class="text-lg text-gray-500 mb-2">
            {{$menu->description}}
        </div>

        
        <div class="grid grid-cols-3">

            {{-- contenido principal --}}
            <div class="col-span-2">

                <figure>
                    <img class="w-full h-80 object-cover object-center" src="{{asset('/storage/'. $menu->image->url)}}" alt="">
                </figure>                

            </div>

            {{-- contenido relacionado --}}
            <aside>
                <h1>Más en {{$menu->category->menu_id}}</h1>
            </aside>

        </div>

        
    </div>
</x-app-layout>