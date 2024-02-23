<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>FOTHAM - Fotokopi Ilham</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h2>Tambah Data Barang</h2>
                </div>
                <div class="card-body">
                    <form action="/insertbarang" method="POST"  enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        
                          <div class="form-group">
                            <label for="nama_barang">Nama Barang</label>
                            <input class="form-control" name="nama_barang" id="nama_barang"  placeholder="Masukkan Nama">
                          </div>
                          <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" class="form-control" name="gambar_barang" id="gambar" placeholder="Masukkan Gambar">
                          </div>
                          <div class="form-group">
                            <label for="ket_barang">Keterangan Barang</label>
                            <input class="form-control" name="ket_barang" id="ket_barang"  placeholder="Keterangan">
                          </div>
                          <div class="form-group">
                            <label for="harga">Harga Satuan</label>
                            <input class="form-control" name="harga_satuan" id="harga"  placeholder="Masukkan Harga">
                          </div>
                          <div class="form-group">
                            <label for="stok">Stok</label>
                            <input class="form-control" name="stok" id="stok"  placeholder="Masukkan Stok">
                          </div>
                          <button type="submit" class="btn btn-primary">Tambah</button>
                        </form> 
                </div>
            </div>
        </div>
    </body>
   <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\foto\resources\views/tambahbarang.blade.php ENDPATH**/ ?>