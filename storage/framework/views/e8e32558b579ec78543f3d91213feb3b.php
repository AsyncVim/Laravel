

<?php $__env->startSection('container'); ?>
<div class="col-md-4">
    <h5 class="card-title fw-semibold mb-4">Detail Permintaan</h5>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Kode Permintaan : <?php echo e($req->NomorPermintaan); ?></h5>
        <h6 class="card-subtitle mb-2 text-muted">Kode Barang : <?php echo e($barang->KodeBrg); ?></h6>
        <p class="card-text">Nama Barang : <?php echo e($barang->NamaBrg); ?></p>
        <p class="card-text">Stock : <?php echo e($barang->JumlahBrg); ?></p>
        <p class="card-text">Diminta : <?php echo e($req->JumlahBrg); ?></p>

      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UAS\resources\views/permintaan/show.blade.php ENDPATH**/ ?>