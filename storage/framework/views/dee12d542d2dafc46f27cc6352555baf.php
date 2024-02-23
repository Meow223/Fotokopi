<div style="width: 280px" class="shadow rounded-3 p-4 ms-3">
    <img src="<?php echo e(asset('images/pulpen.jpg')); ?>" class="mx-auto d-block"onclick="beli()" width="200" height="200"/>
    <hr class="hr" />
    <p class="fw-medium">Pulpen Pilot</p>
    <p class="text-truncate mb-2">Pulpen berkualitas.</p>
    <div class="d-flex align-items-center justify-content-between">
        <div>Rp5.000</div>
        <button class="btn btn-primary" onclick="beli()">Beli</button>
    </div>
</div>

<div style="width: 280px" class="shadow rounded-3 p-4 ms-3">
    <img src="<?php echo e(asset('images/pens.jpg')); ?>" class="mx-auto d-block"onclick="beli()" width="200" height="200"/>
    <hr class="hr" />
    <p class="fw-medium">Pensil Baru</p>
    <p class="text-truncate mb-2">Pensil berkualitas.</p>
    <div class="d-flex align-items-center justify-content-between">
        <div>Rp7.000</div>
        <button class="btn btn-primary" onclick="beli()">Beli</button>
    </div>
</div>

<div style="width: 280px" class="shadow rounded-3 p-4 ms-3">
    <img src="<?php echo e(asset('images/spidol.jpg')); ?>" class="mx-auto d-block"onclick="beli()" width="200" height="200"/>
    <hr class="hr" />
    <p class="fw-medium">Spidol Snowman</p>
    <p class="text-truncate mb-2">Spidol berkualitas.</p>
    <div class="d-flex align-items-center justify-content-between">
        <div>Rp17.000</div>
        <button class="btn btn-primary" onclick="beli()">Beli</button>
    </div>
</div>

<div style="width: 280px" class="shadow rounded-3 p-4 ms-3">
    <img src="<?php echo e(asset('images/gunting.jpg')); ?>" class="mx-auto d-block"onclick="beli()" width="200" height="200"/>
    <hr class="hr" />
    <p class="fw-medium">Kater Tajam</p>
    <p class="text-truncate mb-2">Kater berkualitas.</p>
    <div class="d-flex align-items-center justify-content-between">
        <div>Rp17.000</div>
        <button class="btn btn-primary" onclick="beli()">Beli</button>
    </div>
</div>

<script>
    function beli() {
        window.location.href = '../katalog';
    }
</script><?php /**PATH C:\xampp\htdocs\foto\resources\views/components/trend.blade.php ENDPATH**/ ?>