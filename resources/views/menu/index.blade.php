<x-app-layout>

    <div class="container py-8">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            @foreach ($menus as $menu)
                
                <article class="bg-white shadow-lg rounded-lg overflow-hidden w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2 @endif" style="background-image: url({{asset('/storage/'. $menu->image->url)}})">
                    {{-- <img src="{{asset('/storage/'. $menu->image->url)}}" alt=""> --}}
                    {{-- no funciona de la siguiente manera y no entiendo por què, investigar. --}}
                    {{-- Storage::url($menu->image->url) --}}
                    <div class="w-full h-full px-8 flex flex-col justify-center">
                        <h1 class="text-4xl text-white leading-8 font-bold">
                            <a href="{{route('menu.show', $menu)}}">
                                {{$menu->name}}
                            </a>
                        </h1>
                    </div>
                </article>
                
                
            @endforeach

        </div>
        
        <div class="mt-4">
            {{$menus->links()}}
        </div>


    </div>

    

</x-app-layout>