<?php $__env->startSection('content'); ?>

<section class="content">

  <div class="block-header">

    <div class="row">

      <div class="col-lg-7 col-md-6 col-sm-12">

        <h2>All Patients <small class="text-muted">Listing</small> </h2>

      </div>

      <div class="col-lg-5 col-md-6 col-sm-12">

        <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10" type="button" data-toggle="modal" data-target="#formPacientModal" onclick="resetForm('patientForm')"> <i class="zmdi zmdi-plus"></i> </button>

        <ul class="breadcrumb float-md-right">

          <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>"><i class="zmdi zmdi-home"></i> Home</a></li>

          <li class="breadcrumb-item"><a href="javascript:void(0);">Patients</a></li>

          <li class="breadcrumb-item active">All</li>

        </ul>

      </div>

    </div>

  </div>

  <div class="container-fluid">

    <div class="row clearfix">

      <div class="col-md-12">

        <div class="card patients-list">

          <div class="body">

            <?php if(count($results) > 0): ?>

            <div class="table-responsive">

              <table class="table m-b-0 table-hover js-basic-example dataTable">

                <thead>

                  <tr>

                    <th>Img</th>

                    <th>Name</th>

                    <th>Age</th>

                    <th>Email</th>

                    <th class="text-center">Phone</th>

                    <th class="text-center">Since</th>

                    <th class="text-center">Status</th>

                    <th class="text-center">Actions</th>

                  </tr>

                </thead>

                <tbody>

                  <?php foreach($results as $result): ?>

                  <tr>

                    <td><span class="list-icon"><img class="patients-img" src="<?php echo e(url('/getImage/' . $result->image)); ?>" /></span></td>

                    <td><?php echo e($result->fullname); ?></td>

                    <td><?php echo e(\FormatTime::LongTimeFilter($result->birthdate)); ?></td>

                    <td><?php echo e($result->email); ?></td>

                    <td class="text-center"><?php echo e(\FormatTime::phoneFormat($result->phone)); ?></td>

                    <td class="text-center"><?php echo e(\FormatTime::LongTimeFilter($result->created_at)); ?></td>

                    <td class="text-center"><span class="badge badge-success"><?php echo e($result->status); ?></span></td>

                    <td class="text-center">

                      <button type="button" class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round" data-toggle="modal" data-target="#viewModal" onclick="viewPatientModal('<?php echo e($result->id); ?>')"><i class="zmdi zmdi-account-o"></i></button>

                      <button type="button" class="btn btn-default btn-icon btn-simple btn-icon-mini btn-round" data-toggle="modal" data-target="#formPacientModal" onclick="editPatientModal('<?php echo e($result->id); ?>')"><i class="zmdi zmdi-edit"></i></button>

                    </td>

                  </tr>

                  <?php endforeach; ?>

                </tbody>

              </table>

            </div>

            <?php else: ?> <div class="alert alert-info">Empty data</div> <?php endif; ?>

          </div>

        </div>

      </div>

    </div>

  </div>

</section>

<?php echo $__env->make('patient.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('patient.view', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>