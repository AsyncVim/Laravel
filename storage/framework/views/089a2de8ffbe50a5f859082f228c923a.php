

<?php $__env->startSection('container'); ?>
<div class=" d-flex align-items-stretch">
    <div class="card w-100">
      <div class="card-body p-4">
        <h5 class="card-title fw-semibold mb-4">Penerimaan</h5>
        <div class="table-responsive">
          <table class="table text-nowrap mb-0 align-middle">
            <thead class="text-dark fs-4">
              <tr>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Kode Barang</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Kode</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Jumlah</h6>
                </th>
               
              </tr>
            </thead>
            <tbody>
               
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                <tr>
                    <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><?php echo e($d->KodeBrg); ?></h6></td>
                <td class="border-bottom-0">
                    <p class="mb-0 fw-semibold"><?php echo e($d->KodeTrm); ?></p>
                    
                </td>
                <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-1"><?php echo e($d->jumlah); ?></h6>
                </td>
                
                
            </tr> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script>
    window.print();
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UAS\resources\views/cetak/cetak.blade.php ENDPATH**/ ?>