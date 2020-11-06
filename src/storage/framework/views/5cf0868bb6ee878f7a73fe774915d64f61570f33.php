<?php echo $__env->make('web.headers.fixedHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
<header id="headerFour" class="header-area header-four header-desktop d-none d-lg-block d-xl-block">
  <div class="header-mini bg-top-bar">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12">
          <nav id="navbar_0_4" class="navbar navbar-expand-md navbar-dark navbar-0">
            <div class="navbar-phone">
                <a href="#">
                    <i class="fas fa-phone"></i>
                    <span class="block">                   
                      <span class="items" dir="ltr"><?php echo e($result['commonContent']['setting'][11]->value); ?></span>
                    </span>                   
                </a>   
            </div>
            
            <div class="navbar-collapse">
              <ul class="navbar-nav">
                  <li class="nav-item">
                    <div class="nav-avatar nav-link">
                      <div class="avatar">
                      <?php
                          if(auth()->guard('customer')->check()){
                            echo substr(auth()->guard('customer')->user()->first_name, 0, 1);
                          }
                      ?> 
                      </div>
                      <span><?php if(auth()->guard('customer')->check()){ ?><?php echo app('translator')->get('website.Welcome'); ?> <?php echo e(auth()->guard('customer')->user()->first_name); ?>&nbsp;! <?php }?> </span>
                    </div>
                    </li>
                    <?php if(auth()->guard('customer')->check()){ ?>
                      <li class="nav-item"> <a class="nav-link" href="<?php echo e(url('profile')); ?>" ><?php echo app('translator')->get('website.Profile'); ?></a> </li>
                      <li class="nav-item"> <a class="nav-link" href="<?php echo e(url('wishlist')); ?>" ><?php echo app('translator')->get('website.Wishlist'); ?><span class="total_wishlist"> (<?php echo e($result['commonContent']['total_wishlist']); ?>)</span></a> </li>
                      <li class="nav-item"> <a class="nav-link" href="<?php echo e(url('compare')); ?>" ><?php echo app('translator')->get('website.Compare'); ?>&nbsp;(<span id="compare"><?php echo e($count); ?></span>)</a> </li>
                      <li class="nav-item"> <a class="nav-link" href="<?php echo e(url('orders')); ?>" ><?php echo app('translator')->get('website.Orders'); ?></a> </li>
                      <li class="nav-item"> <a class="nav-link" href="<?php echo e(url('shipping-address')); ?>" ><?php echo app('translator')->get('website.Shipping Address'); ?></a> </li>
                      <li class="nav-item"> <a class="nav-link" href="<?php echo e(url('logout')); ?>"><?php echo app('translator')->get('website.Logout'); ?></a> </li>
                      <?php }else{ ?>
                        <li class="nav-item"> <a href="<?php echo e(URL::to('/login')); ?>"><i class="fa fa-lock" aria-hidden="true"></i>&nbsp;<?php echo app('translator')->get('website.Login/Register'); ?></a> </li>
          
                      <?php } ?>

                      
              </ul> 
            </div>   
          </nav>
        </div>
      </div>
    </div> 
  </div>
  <div class="header-maxi bg-header-bar">
      <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-sm-12 col-lg-4">
              <?php if(count($languages) > 1): ?>
                <div class="country-flag">
                    <h4><span><?php echo app('translator')->get('website.Country'); ?>&nbsp;:&nbsp;</span>
                      
                        <ul>
                          <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a onclick="myFunction1(<?php echo e($language->languages_id); ?>)" href="#"><img class="img-fluid" src="<?php echo e(asset('').$language->image_path); ?>"></a></li>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </ul>
                      
                    </h4>  
                  </div>  
                <?php echo $__env->make('web.common.scripts.changeLanguage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              <?php endif; ?>      
              <?php if(count($currencies) > 1): ?>
                  <div class="currency">
                      <h4><span><?php echo app('translator')->get('website.Currency'); ?>&nbsp;:&nbsp;</span>                        
                        <ul>
                          <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="#" onclick="myFunction2(<?php echo e($currency->id); ?>)"> 
                              <?php echo e($currency->code); ?>

                            </a></li>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>                      
                    </h4>  
                  </div>  
              <?php endif; ?> 

              </div>
          <div class="col-12 col-sm-12 col-lg-4 text-center">
            <a href="<?php echo e(URL::to('/')); ?>" class="logo" data-toggle="tooltip" data-placement="bottom" title="<?php echo app('translator')->get('website.logo'); ?>">
              <?php if($result['commonContent']['settings']['sitename_logo']=='name'): ?>
              <?=stripslashes($result['commonContent']['settings']['website_name'])?>
              <?php endif; ?>
          
              <?php if($result['commonContent']['settings']['sitename_logo']=='logo'): ?>
              <img class="img-fluid" src="<?php echo e(asset('').$result['commonContent']['settings']['website_logo']); ?>" alt="<?=stripslashes($result['commonContent']['settings']['website_name'])?>">
              <?php endif; ?>
              </a>
           
          </div>
          
          <div class="col-12 col-sm-5 col-md-6 col-lg-4">
            <ul class="pro-header-right-options">
            
              <li class="dropdown head-cart-content">
                <?php echo $__env->make('web.headers.cartButtons.cartButton4', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>                 
              </li>
            </ul>
          </div>
        </div>
      </div>
  </div> 
  <div class="header-navbar bg-menu-bar">
    <div class="container">
      <nav id="navbar_header_9" class="navbar navbar-expand-lg  bg-nav-bar">
        
        <div class="navbar-collapse" >
          <ul class="navbar-nav">
            
            <?php echo $result['commonContent']["menusRecursive"]; ?>            
            
                <li class="nav-item">
                  
                  <form class="form-inline" action="<?php echo e(URL::to('/shop')); ?>" method="get">   
                    <div class="search-field-module">   
                        <input type="hidden" name="category" class="category-value" value="">
                        <?php echo $__env->make('web.common.HeaderCategories', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                      <button class="btn btn-secondary swipe-to-top dropdown-toggle header-selection" type="button" id="headerOneCartButton"  
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" 
                        data-toggle="tooltip" data-placement="bottom" title="<?php echo app('translator')->get("website.Choose Any Category"); ?>"> 
                        <?php echo app('translator')->get("website.Choose Any Category"); ?>
                      </button> 
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="headerOneCartButton">   
                          <?php    productCategories(); ?>                                                                 
                      </div>
                      <div class="search-field-wrap">
                          <input  type="search" name="search" placeholder="<?php echo app('translator')->get('website.Search entire store here'); ?>..." data-toggle="tooltip" data-placement="bottom" title="<?php echo app('translator')->get('website.Search Products'); ?>" value="<?php echo e(app('request')->input('search')); ?>">
                          <button class="btn btn-secondary swipe-to-top" data-toggle="tooltip" 
                          data-placement="bottom" title="<?php echo app('translator')->get('website.Search Products'); ?>">
                          <i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </form>
                </li>
          </ul>
        </div>
      </nav>
    </div>
</div>
</header><?php /**PATH /var/www/grandisoeemporium_demo/src/resources/views/web/headers/headerFour.blade.php ENDPATH**/ ?>