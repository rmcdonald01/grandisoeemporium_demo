<!-- //banner three -->
<div class="banner-three">
          
  <div class="container">
      <div class="group-banners">
          <div class="row">
              <div class="col-12 col-md-4">
                <?php if(count($result['commonContent']['homeBanners'])>0): ?>
                  <?php $__currentLoopData = ($result['commonContent']['homeBanners']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $homeBanners): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($homeBanners->type==7): ?>
                  <figure class="banner-image ">
                    <a href="<?php echo e($homeBanners->banners_url); ?>"><img class="img-fluid" src="<?php echo e(asset('').$homeBanners->path); ?>" alt="Banner Image"></a>
                  </figure>
                  <?php endif; ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                </div>
            <div class="col-12 col-md-8">
            
              <div class="row">
                <div class="col-12 col-md-6">
                  <?php if(count($result['commonContent']['homeBanners'])>0): ?>
                      <?php $__currentLoopData = ($result['commonContent']['homeBanners']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $homeBanners): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($homeBanners->type==8): ?>
                    <figure class="banner-image ">
                      <a href="<?php echo e($homeBanners->banners_url); ?>"><img class="img-fluid" src="<?php echo e(asset('').$homeBanners->path); ?>" alt="Banner Image"></a>
                    </figure>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php endif; ?>
                </div>
                <div class="col-12 col-md-6">

                  <?php if(count($result['commonContent']['homeBanners'])>0): ?>
                  <?php $__currentLoopData = ($result['commonContent']['homeBanners']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $homeBanners): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <?php if($homeBanners->type==9): ?>
                 <figure class="banner-image ">
                   <a href="<?php echo e($homeBanners->banners_url); ?>"><img class="img-fluid" src="<?php echo e(asset('').$homeBanners->path); ?>" alt="Banner Image"></a>
                 </figure>
                 <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <?php endif; ?>
                </div>
              </div>
              <?php if(count($result['commonContent']['homeBanners'])>0): ?>
                   <?php $__currentLoopData = ($result['commonContent']['homeBanners']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $homeBanners): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <?php if($homeBanners->type==6): ?>
                    <figure class="banner-image " style="margin-top: 30px;">
                      <a href="<?php echo e($homeBanners->banners_url); ?>"><img class="img-fluid" src="<?php echo e(asset('').$homeBanners->path); ?>" alt="Banner Image"></a>
                    </figure>
                    <?php endif; ?>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php endif; ?>
            </div>
            
                                          
          </div>
        </div>
  </div>

</div> 
<?php /**PATH /var/www/grandisoeemporium_demo/src/resources/views/web/banners/banner3.blade.php ENDPATH**/ ?>