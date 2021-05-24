<x-app-layout>

    <div class="container bg-red-500">

        <div class="grid grid-cols-3 gap-6">

            @foreach ($menues as $menu)

                <article>
                    <img src="{{asset('/storage/'. $menu->image->url)}}" alt="">
                    {{-- Storage::url($menu->image->url) --}}
                </article>
                
                
            @endforeach

        </div>
        


    </div>

</x-app-layout>