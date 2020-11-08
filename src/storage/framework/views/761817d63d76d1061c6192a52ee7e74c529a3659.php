<!DOCTYPE html>
<html>

<!-- meta contains meta taga, css and fontawesome icons etc -->
<?php echo $__env->make('admin.common.meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- ./end of meta -->

<body class=" hold-transition skin-blue sidebar-mini">
<!-- wrapper -->
<div class="wrapper">

    <div class="se-pre-con" id="loader" style="/* display: none; */">
        <div class="pre-loader">
          <div class="la-line-scale">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
          </div>
          <p><?php echo app('translator')->get('labels.Loading'); ?>..</p>
        </div>
     
      </div>

    <!-- header contains top navbar -->
<?php echo $__env->make('admin.common.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- ./end of header -->

    <!-- left sidebar -->
<?php echo $__env->make('admin.common.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- ./end of left sidebar -->

    <!-- dynamic content -->
<?php echo $__env->yieldContent('content'); ?>
<!-- ./end of dynamic content -->

    <!-- right sidebar -->
<?php echo $__env->make('admin.common.controlsidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- ./right sidebar -->
    <?php echo $__env->make('admin.common.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<!-- ./wrapper -->

<!-- all js scripts including custom js -->
<?php echo $__env->make('admin.common.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- ./end of js scripts -->

</body>
</html>
<?php /**PATH /var/www/html/resources/views/admin/layout.blade.php ENDPATH**/ ?>