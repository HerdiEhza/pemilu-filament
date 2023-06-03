<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">

            @foreach ($getEja as $gt)
            @foreach ($gt->result as $dat)
                {{-- {{ $dat->paslon_id }} --}}
                
            @endforeach
            @endforeach
            {{-- {{echo $data}} --}}
            {{dd($gt->result)}}

        </div>
    </div>
</div>