
        <header id="stickyHeader" class="header-area header-sticky d-none">
          <div style="background-color:#111111;" class="header-sticky-inner  bg-sticky-bar">
            <div class="container">
    
                <div class="row align-items-center">
                    <div class="col-12 col-lg-2">
                        <div class="logo">
                          <a href="<?php echo e(URL::to('/')); ?>" class="logo" data-toggle="tooltip" data-placement="bottom" title="<?php echo app('translator')->get('website.logo'); ?>">
                            <?php if($result['commonContent']['settings']['sitename_logo']=='name'): ?>
                            <span style="color:#6f6e6e;"><?=stripslashes($result['commonContent']['settings']['website_name'])?></span>
                            <?php endif; ?>
                        
                            <?php if($result['commonContent']['settings']['sitename_logo']=='logo'): ?>
                            <img class="img-fluid" src="<?php echo e(asset('').$result['commonContent']['settings']['website_logo']); ?>" alt="<?=stripslashes($result['commonContent']['settings']['website_name'])?>">
                            <?php endif; ?>
                            </a>

                          </div>
                    </div>
                    <div  class="col-12 col-lg-7" style="position: static;">
                      <nav id="navbar_header_9" class="navbar navbar-expand-lg  bg-nav-bar">
                  
                        <div class="navbar-collapse">
                          <ul class="navbar-nav">
                            <!-- <?php echo e($result['commonContent']["menusRecursive"]); ?>    -->
                            <li class="nav-item dropdown " ><a class="nav-link " href="http://localhost/"  style="color:white;"> Home </a></li>
                            <li class="nav-item dropdown "><a class="nav-link " href="http://localhost/shop" style="color:white;"> SHOP </a></li>
                            <li class="nav-item dropdown "><a class="nav-link dropdown-toggle" href="#" style="color:white;"> INFO </a><div class="dropdown-menu" > <div class="dropdown-submenu submenu1"> <a class="dropdown-item" href="http://localhost/page?name=about-us"> About Us </a> </div> <div class="dropdown-submenu submenu1"> <a class="dropdown-item" href="http://localhost/page?name=privacy-policy"> Privacy Policy </a> </div></div></li>
                            <li class="nav-item dropdown "><a class="nav-link " href="http://localhost/contact" style="color:white;"> Contact Us </a></li>
                          </ul>
                        </div>
                      </nav>
                    </div>
                    <div class="col-12 col-lg-3">
                        <ul class="pro-header-right-options">
                          
                              <li class="dropdown search-field">
                                  <button class="btn btn-light dropdown-toggle" type="button" id="dropdownAccountButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="fas fa-search"></i>
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownAccountButton">
                                    <form class="form-inline" action="<?php echo e(URL::to('/shop')); ?>" method="get">
                                          <div class="search-field-module">
                                              <input type="text" class="form-control" id="inlineFormInputGroup0" name="search" placeholder="<?php echo app('translator')->get('website.Search entire store here'); ?>...">
                                              <button class="btn" type="submit">
                                                  <i class="fas fa-search"></i>
                                              </button>
                                          </div>
                                        </form>
                                    
                                  </div>
                                </li>
                            <li class="dropdown profile-tags">
                              <button class="btn btn-light dropdown-toggle" type="button" id="dropdownAccountButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="fas fa-user"></i>
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownAccountButton">
                                <?php if(auth()->guard('customer')->check()){ ?>
                                  <a class="dropdown-item" href="<?php echo e(url('profile')); ?>"><?php echo app('translator')->get('website.Profile'); ?></a>
                                  <a class="dropdown-item" href="<?php echo e(url('wishlist')); ?>"><?php echo app('translator')->get('website.Wishlist'); ?></a>
                                  <a class="dropdown-item" href="<?php echo e(url('compare')); ?>"><?php echo app('translator')->get('website.Compare'); ?>&nbsp;(<span id="compare">0</span>)</a>
                                  <a class="dropdown-item" href="<?php echo e(url('orders')); ?>"><?php echo app('translator')->get('website.Orders'); ?></a>
                                  <a class="dropdown-item" href="<?php echo e(url('logout')); ?>"><?php echo app('translator')->get('website.Logout'); ?></a>
                                <?php }else{ ?>
                                  <a class="dropdown-item" href="<?php echo e(url('login')); ?>"><?php echo app('translator')->get('website.Login/Register'); ?></a>                    
                                <?php } ?>
                                
                              </div>
                            </li>
                            <li>
                              <a href="<?php echo e(URL::to('/wishlist')); ?>" class="btn btn-light" >
                                  <i class="far fa-heart"></i>
                                  <span class="badge badge-secondary total_wishlist"><?php echo e($result['commonContent']['total_wishlist']); ?></span>
                              </a>
                            </li>
          
                            <li class="dropdown head-cart-content-fixed">
                              <?php echo $__env->make('web.headers.cartButtons.cartButtonFixed', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>    
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
          </div> 
        </header>
<?php /**PATH /var/www/grandisoeemporium_demo/src/resources/views/web/headers/fixedHeader.blade.php ENDPATH**/ ?>