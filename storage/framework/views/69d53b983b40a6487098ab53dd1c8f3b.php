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
            <div class="col-md-12">
                <a href="<?php echo e(url('history')); ?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="col-md-12 mt-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(url('dasboard')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(url('history')); ?>">Riwayat Pemesanan</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detail Pemesanan</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Sukses Check Out</h3>
                        <h5>Pesanan anda sudah sukses dilkaukan selanjutnya untuk pembayaran silahkan transfer di
                            rekening <strong>Bank BRI Nomer Rekening : 32113-821312-123</strong> dengan nominal :
                            <strong>Rp. <?php echo e(number_format($pesanan->jumlah_harga)); ?></strong></h5>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <h3><i class="fa fa-shopping-cart"></i> Detail Pemesanan</h3>
                        <?php if(!empty($pesanan)): ?>
                            <p align="right">Tanggal Pesan : <?php echo e($pesanan->tanggal_pesanan); ?></p>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Nama Barang</th>
                                        <th>Jumlah</th>
                                        <th>Harga</th>
                                        <th>Total Harga</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php $__currentLoopData = $pesanan_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pesanan_detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($no++); ?></td>
                                            <td>
                                                <img src="<?php echo e(url('image')); ?>/<?php echo e($pesanan_detail->barang->gambar_barang); ?>"
                                                    width="100" alt="...">
                                            </td>
                                            <td><?php echo e($pesanan_detail->barang->nama_barang); ?></td>
                                            <td><?php echo e($pesanan_detail->jumlah); ?> buah </td>
                                            <td align="right">Rp. <?php echo e(number_format($pesanan_detail->barang->harga_satuan)); ?>

                                            </td>
                                            <td align="right">Rp. <?php echo e(number_format($pesanan_detail->jumlah_harga)); ?>

                                            </td>

                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    <tr>
                                        <td colspan="5" align="right"><strong>Total Harga :</strong></td>
                                        <td align="right"><strong>Rp.
                                                <?php echo e(number_format($pesanan->jumlah_harga)); ?></strong></td>

                                    </tr>
                                    <tr>
                                        <td colspan="5" align="right"><strong>Kode Unik :</strong></td>
                                        <td align="right"><strong><?php echo e(number_format($pesanan->kode)); ?></strong>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td colspan="5" align="right"><strong>Total yang harus ditransfer :</strong>
                                        </td>
                                        <td align="right"><strong>Rp.
                                                <?php echo e(number_format($pesanan->jumlah_harga)); ?></strong>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        <?php endif; ?>

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
<?php /**PATH C:\xampp\htdocs\foto\resources\views/detail.blade.php ENDPATH**/ ?>