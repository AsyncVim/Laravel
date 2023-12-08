

<?php $__env->startSection('container'); ?>
<div class=" d-flex align-items-stretch">
    <div class="card w-100">
      <div class="card-body p-4">
        <h5 class="card-title fw-semibold mb-4">Pengeluaran</h5>
        <div class="table-responsive">
          <table class="table text-nowrap mb-0 align-middle">
            <thead class="text-dark fs-4">
              <tr>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Nomor Permintaan</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Total Minta</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Tanggal Minta</h6>
                </th>
                
               
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0"></h6>
                </th>
              </tr>
            </thead>
            <tbody>
               
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                <tr>
                    <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><?php echo e($d->NomorPermintaan); ?></h6></td>
                <td class="border-bottom-0">
                    <p class="mb-0 fw-semibold"><?php echo e($d->TotalMnt); ?></p>
                    
                </td>
                <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-1"><?php echo e($d->TanggalMnt); ?></h6>
                </td>
             
                <td class="border-bottom-0">
                  
                    <a href="permintaan/<?php echo e($d->NomorPermintaan); ?>" class="btn btn-info m-1">Detail</a>
                    
                </td>
                
            </tr> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UAS\resources\views/permintaan/index.blade.php ENDPATH**/ ?>