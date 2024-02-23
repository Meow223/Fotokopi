<style>
    .image-container {
        width: 100%;
        height: 0;
        padding-bottom: 100%;
        /* Set the desired aspect ratio (e.g., 1:1 for a square image) */
        overflow: hidden;
    }

    .image-container img {
        object-fit: cover;
    }

    .card {
        border-radius: 10px;
        transition: box-shadow 0.3s, transform 0.3s;
    }

    .card:hover {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        transform: translateY(-2px);
    }
</style>

<div class="col-md-4 mt-2">
    <div class="card" style="width: 18rem;">
        <div class="image-container">
            <img class="card-img-top" src="<?php echo e(asset('image/' . $brg->gambar_barang)); ?>" alt="Card image cap">
        </div>
        <div class="card-body">
            <h5 class="card-title"><?php echo e($brg->nama_barang); ?></h5>
            <p class="card-text">
                Harga: Rp. <?php echo e($brg->harga_satuan); ?> <br>
                Stok: <?php echo e($brg->stok); ?>

            </p>
            <hr>
            <p class="card-text">Keterangan:</p>
            <p class="card-text"><?php echo e($brg->ket_barang); ?></p>
            <a href="/pesanan/<?php echo e($brg->id); ?>" class="btn btn-primary">Beli</a>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\foto\resources\views/components/katalog-card.blade.php ENDPATH**/ ?>