

<?php $__env->startSection('container'); ?>
<?php if(session()->has('success')): ?>
  <div class="alert alert-success cok-lg-8" role="alert">
    <?php echo e(session('success')); ?>

  </div>
<?php endif; ?>
<div class=" d-flex align-items-stretch">
    <div class="card w-100">
      <div class="card-body p-4">
        <h5 class="card-title fw-semibold mb-4">Barang</h5>
        <div class="table-responsive">
          <table class="table text-nowrap mb-0 align-middle">
            <thead class="text-dark fs-4">
              <tr>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">No</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Kode Barang</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Nama Barang</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Jumlah</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0"></h6>
                </th>
              </tr>
            </thead>
            <tbody>
               
                <?php $__currentLoopData = $barangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                <tr>
                    <td class="border-bottom-0"><h6 class="fw-semibold mb-0"><?php echo e($loop->iteration); ?></h6></td>
                <td class="border-bottom-0">
                    <p class="mb-0 fw-semibold"><?php echo e($barang->KodeBrg); ?></p>
                    
                </td>
                <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-1"><?php echo e($barang->NamaBrg); ?></h6>
                </td>
                <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-1"><?php echo e($barang->JumlahBrg); ?></h6>
                </td>
                <td class="border-bottom-0">
                  
               <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('pelanggan')): ?>
                   
               <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="openModal('<?php echo e($barang->NamaBrg); ?>', '<?php echo e($barang->KodeBrg); ?>')">
                Permintaan
              </button>
              
              <a href="barang/<?php echo e($barang->KodeBrg); ?>" class="btn btn-success m-1">Ambil</a>
              
              <?php endif; ?>
                </td>
                
            </tr> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalData">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form action="/req" method="post">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="kode" id="kode" value="">
        <label for="exampleInputEmail1" class="form-label">Jumlah</label>
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="jumlah" >

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Kirim</button>
      </div>
    </form>
    </div>
  </div>
</div>
<script>
  function openModal(nama, kode) {
    var data = "Permintaan " + nama;
    document.getElementById('modalData').innerText = data;
    document.getElementById('kode').value = kode;

    // Buka modal
    document.getElementById('myModal').style.display = 'block';
  }

  function closeModal() {
    // Tutup modal
    document.getElementById('myModal').style.display = 'none';
  }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UAS\resources\views/barangs/index.blade.php ENDPATH**/ ?>