
<?php $__env->startSection('global','active'); ?>
<?php $__env->startSection('content'); ?>
<div class="section__content section__content--p30">
    <div class="container-fluid">

        <div class="row" style="margin-top: -20px;">
            <div class="col-md-12">
                <div class="overview-wrap">
                    <h3>Data Global Corona Virus Case</h3>
                </div>
            </div>
        </div>
        
        <div class="row mt-2">
            
            <!-- Card Data Global -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow py-1">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center mt-3 mb-3">
                        <div class="col-lg-10">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Kasus Virus Corona</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Data Global</div>
                        </div>
                        <div class="col-lg-2">
                            <img src="/assets/img/icons/global.png" width="100%">
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            <!-- Card Data Positif -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow py-1">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-lg-10 col-md-12">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Positif</div>
                        <div class="mb-0 font-weight-bold text-gray-800"><?php echo e($positif['value']); ?> Orang</div>
                        <a href="#" class="noblue mt-1">
                            <p class="card-text text-dark">
                                <small>Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></small>
                            </p>
                        </a>
                        </div>
                        <div class="col-lg-2 col-md-12">
                            <img src="/assets/img/icons/sad.png" width="100%">
                        </div>
                    </div>
                    </div>
                </div>
            </div>                        

            <!-- Card Data Negatif -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow py-1">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-lg-10">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Sembuh</div>
                        <div class="mb-0 font-weight-bold text-gray-800"><?php echo e($sembuh['value']); ?> Orang</div>
                        <a href="#" class="noblue mt-1">
                            <p class="card-text text-dark">
                                <small>Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></small>
                            </p>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <img src="/assets/img/icons/happy.png" width="100%">
                    </div>
                    </div>
                    </div>
                </div>
            </div>                        

            <!-- Card Data Meninggal -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow py-1">
                    <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-lg-10">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Meninggal</div>
                        <div class="mb-0 font-weight-bold text-gray-800"><?php echo e($meninggal['value']); ?> Orang</div>
                        <a href="#" class="noblue mt-1">
                            <p class="card-text text-dark">
                                <small>Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></small>
                            </p>
                        </a>
                    </div>
                    <div class="col-lg-2">
                        <img src="/assets/img/icons/cry.png" width="100%">
                    </div>
                    </div>
                    </div>
                </div>
            </div>                        

        </div>                        

        <div class="row" style="margin-top: -25px;">
            <div class="col-md-12">
                <div class="overview-wrap">
                    <h3>Chart</h3>
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-lg-6">
                <div class="au-card m-b-30">
                    <div class="au-card-inner">
                        <h3 class="title-2 m-b-40">Line Chart</h3>
                        <canvas id="lineChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="au-card m-b-30">
                    <div class="au-card-inner">
                        <h3 class="title-2 m-b-40">Single Bar Chart</h3>
                        <canvas id="singelBarChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="overview-wrap">
                    <h3>Table Data Kasus di Dunia</h3>
                </div>
            </div>
        </div>

        <!-- Data Global -->
        <div class="card shadow mb-4 mt-3">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr align="center">
                      <th><h5>No</h5></th>
                      <th><h5>Negara</h5></th>
                      <th><h5>Positif</h5></th>
                      <th><h5>Sembuh</h5></th>
                      <th><h5>Meninggal</h5></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $global; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dataGlobal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr align="center">
                            <td><h6><?php echo e($loop->iteration); ?></h6></td>
                            <td><h6><?php echo e($dataGlobal['attributes']['Country_Region']); ?></h6></td>
                            <td><h6><?php echo e($dataGlobal['attributes']['Confirmed']); ?></h6></td>
                            <td><h6><?php echo e($dataGlobal['attributes']['Recovered']); ?></h6></td>
                            <td><h6><?php echo e($dataGlobal['attributes']['Deaths']); ?></h6></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('components.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Diazs\Tugas\CovidProject\ProjectPWPBCorona\resources\views/dashboard/data-global.blade.php ENDPATH**/ ?>