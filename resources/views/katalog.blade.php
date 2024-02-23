<x-app-layout>
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($barang as $brg)
                <x-katalog-card :brg="$brg" />
            @endforeach
        </div>
    </div>
</x-app-layout>
