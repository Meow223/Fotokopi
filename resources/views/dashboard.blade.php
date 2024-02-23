<x-app-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <img class="w-100 rounded-5" src="{{ asset('/image/banner.jpg') }}" alt="Banner Image" />
                <h2 class="mt-4 text-decoration-underline mb-4">Produk Terlaris</h2>
            </div>
            @foreach ($barang as $brg)
                <div class="col-md-4 mb-4">
                    <x-product-card :brg="$brg" />
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
