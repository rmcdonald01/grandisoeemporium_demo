<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> <?php echo e(trans('labels.Productsoutofstock')); ?> <small><?php echo e(trans('labels.Productsoutofstock')); ?>...</small> </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo e(URL::to('admin/dashboard/this_month')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(trans('labels.breadcrumb_dashboard')); ?></a></li>
      <li class="active"><?php echo e(trans('labels.Productsoutofstock')); ?></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Info boxes -->
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title"><?php echo e(trans('labels.Productsoutofstock')); ?> </h3>

            <div class="box-tools pull-right">
              <form action="<?php echo e(URL::to('admin/outofstockprint')); ?>" target="_blank">
                <input type="hidden" name="page" value="invioce">
                <button type='submit' class="btn btn-default pull-right"><i class="fa fa-print"></i> <?php echo e(trans('labels.Print')); ?></button>
              </form>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-xs-12">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th><?php echo e(trans('labels.ProductID')); ?></th>
                      <th><?php echo e(trans('labels.ProductName')); ?></th>
                      <th><?php echo e(trans('labels.Current Stock')); ?></th>
                      <th></th>
                    </tr>
                  </thead>
                   <tbody>
                    <?php $__currentLoopData = $result['reports']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                   
                      <tr>
                          <td><?php echo e($report->products_id); ?></td>  
                          <td><?php echo e($report->products_name); ?></td>    
                          <td>0</td>    
                          <td>
                          <a data-toggle="tooltip" target="_blank" data-placement="bottom" title="<?php echo e(trans('labels.View')); ?>" href="<?php echo e(url('admin/inventoryreport?type=all&products_id='.$report->products_id)); ?>" class="badge bg-light-blue"><i class="fa fa-eye" aria-hidden="true"></i></a>                                                                 
                          </td>                                                                     
                      </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
                <div class="col-xs-12" style="background: #eee;">

                  <?php
                    if($result['reports']->total()>0){
                      $fromrecord = ($result['reports']->currentpage()-1)*$result['reports']->perpage()+1;
                    }else{
                      $fromrecord = 0;
                    }
                    if($result['reports']->total() < $result['reports']->currentpage()*$result['reports']->perpage()){
                      $torecord = $result['reports']->total();
                    }else{
                      $torecord = $result['reports']->currentpage()*$result['reports']->perpage();
                    }

                  ?>
                  <div class="col-xs-12 col-md-6" style="padding:30px 15px; border-radius:5px;">
                    <div>Showing <?php echo e($fromrecord); ?> to <?php echo e($torecord); ?>

                        of  <?php echo e($result['reports']->total()); ?> entries
                    </div>
                  </div>
                <div class="col-xs-12 col-md-6 text-right">
                    <?php echo e($result['reports']->appends(\Request::except('type'))->render()); ?>

                </div>
              </div>

            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Main row -->

    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/admin/reports/outofstock.blade.php ENDPATH**/ ?>