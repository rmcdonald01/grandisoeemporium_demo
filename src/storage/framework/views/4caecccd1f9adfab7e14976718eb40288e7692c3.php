<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1> <?php echo e(trans('labels.pushNotification')); ?> <small><?php echo e(trans('labels.pushNotification')); ?>...</small> </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo e(URL::to('admin/dashboard/this_month')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(trans('labels.breadcrumb_dashboard')); ?></a></li>
                <li class="active"><?php echo e(trans('labels.pushNotification')); ?></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Info boxes -->

            <!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title"><?php echo e(trans('labels.PushNotificationOnesignal')); ?> </h3>
                        </div>

                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="box box-info">
                                        <!--<div class="box-header with-border">
                                          <h3 class="box-title">Setting</h3>
                                        </div>-->
                                        <!-- /.box-header -->
                                        <!-- form start -->
                                        <div class="box-body">
                                            <?php if( count($errors) > 0): ?>
                                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="alert alert-success" role="alert">
                                                        <span class="icon fa fa-check" aria-hidden="true"></span>
                                                        <span class="sr-only"><?php echo e(trans('labels.Setting')); ?>:</span>
                                                        <?php echo e($error); ?>

                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>

                                            <?php echo Form::open(array('url' =>'admin/updateSetting', 'method'=>'post', 'class' => 'form-horizontal', 'enctype'=>'multipart/form-data')); ?>


                                            <div class="form-group" hidden>
                                                <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.defaultNotification')); ?></label>
                                                <div class="col-sm-10 col-md-4">
                                                    <select name="default_notification" id="default_notification" class="form-control">
                                                        <option <?php if($result['settings'][54]->value == 'fcm'): ?>
                                                                selected
                                                                <?php endif; ?>
                                                                value="fcm"> <?php echo e(trans('labels.fcm')); ?></option>
                                                        <option <?php if($result['settings'][54]->value == 'onesignal'): ?>
                                                                selected
                                                                <?php endif; ?>
                                                                value="onesignal" selected> <?php echo e(trans('labels.onesignal')); ?></option>
                                                    </select>
                                                    <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;"><?php echo e(trans('labels.defaultNotificationText')); ?></span>
                                                </div>
                                            </div>



                                            <div class="onesignal_content" >
                                            
                                                <div class="form-group">
                                                    <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.OnesignalAppid')); ?></label>
                                                    <div class="col-sm-10 col-md-4">
                                                        <?php echo Form::text($result['settings'][56]->name,  $result['settings'][56]->value, array('class'=>'form-control', 'id'=>$result['settings'][55]->name)); ?>

                                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;">
                                <?php echo e(trans('labels.OnesignalAppidText')); ?></span>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.OnesignalSenderid')); ?></label>
                                                    <div class="col-sm-10 col-md-4">
                                                        <?php echo Form::text($result['settings'][57]->name,  $result['settings'][57]->value, array('class'=>'form-control', 'id'=>$result['settings'][56]->name)); ?>

                                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;">
                                <?php echo e(trans('labels.OnesignalSenderidText')); ?></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="fcm_content" <?php if($result['settings'][54]->value == 'fcm'): ?>
                                            style="display: block;"
                                                 <?php endif; ?> style="display: none;">
                                                <hr>
                                                <h5><?php echo e(trans('labels.PushNotificationSetting')); ?> </h5>
                                                <hr>
                                                <div class="form-group">
                                                    <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.AppKey')); ?>


                                                    </label>
                                                    <div class="col-sm-10 col-md-4">
                                                        <?php echo Form::text($result['settings'][12]->name,  $result['settings'][12]->value, array('class'=>'form-control', 'id'=>$result['settings'][12]->name)); ?>

                                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;">
                                <?php echo e(trans('labels.AppKeyText')); ?></span>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.SenderId')); ?>


                                                    </label>
                                                    <div class="col-sm-10 col-md-4">
                                                        <?php echo Form::text($result['settings'][17]->name,  $result['settings'][17]->value, array('class'=>'form-control', 'id'=>$result['settings'][17]->name)); ?>

                                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;margin-top: 0;"><?php echo e(trans('labels.SenderIdText')); ?></span>
                                                    </div>
                                                </div>
                                            </div>



                                            <!-- /.box-body -->
                                            <div class="box-footer text-center">
                                                <button type="submit" class="btn btn-primary"><?php echo e(trans('labels.Submit')); ?> </button>
                                                <a href="<?php echo e(URL::to('admin/dashboard/this_month')); ?>" type="button" class="btn btn-default"><?php echo e(trans('labels.back')); ?></a>
                                            </div>

                                            <!-- /.box-footer -->
                                            <?php echo Form::close(); ?>

                                        </div>
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
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/grandisoeemporium_demo/src/resources/views/admin/settings/general/pushNotification.blade.php ENDPATH**/ ?>