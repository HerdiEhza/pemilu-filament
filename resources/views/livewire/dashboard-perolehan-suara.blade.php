<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">

            @foreach ($getEja as $gt)
            @foreach ($gt->result as $dat)
                Paslon ID : {{ $dat['paslon_id'] }}
                <br/>
                Nama Paslon : {{ $dat['nama_paslon'] }}
                <br/>
                Perolehan Suara : {{ $dat['perolehan_suara'] }}
                <br/>
                <br/>
            @endforeach
            @endforeach

            {{-- @foreach ($brr as $c)
                {{ $c['paslon_id'] }}
            @endforeach --}}
            {{-- {{echo $collect}} --}}
            {{-- {{dd($collect)}} --}}
            {{-- {{dd($value)}} --}}

        </div>
    </div>
</div>
