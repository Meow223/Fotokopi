<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-2">
                <div class="col-md-12">
                    <a href="<?php echo e(url('katalog')); ?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(url('home')); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Printing</li>
                    </ol>
                </nav>
            </div>
            <div class="container">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h2>Tambah Data Barang</h2>
                    </div>
                    <div class="card-body">
                        <form action="/insertbarang" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <div class="form-group">
                                <label for="Masukkan File">Gambar</label>
                                <input type="file" class="form-control" name="gambar_barang" id="gambar"
                                    placeholder="Masukkan Gambar">
                            </div>
                            <div class="form-group">
                                <label for="ket_barang">Keterangan Barang</label>
                                <input class="form-control" name="ket_barang" id="ket_barang" placeholder="Keterangan">
                            </div>
                            <div class="form-group">
                                <label for="stok">Masukkan Jumlah</label>
                                <input class="form-control" name="stok" id="stok" placeholder="Masukkan Stok">
                            </div>
                            <button class="btn btn-primary mt-2"><i>Masukkan Keranjang</i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\foto\resources\views/print.blade.php ENDPATH**/ ?>