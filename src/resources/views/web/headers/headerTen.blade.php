<!-- //header style Ten -->
@include('web.headers.fixedHeader') 
<header id="headerTen" class="header-area header-ten  header-desktop d-none d-lg-block d-xl-block">
  <div class="header-mini bg-top-bar" style="background-color:#252525;">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12">
          
          <nav id="navbar_0_6" class="navbar navbar-expand-md navbar-dark navbar-0">
            <div class="navbar-lang">
              @if(count($languages) > 0)

              <div class="country-flag">
                <h4>
                  <span>
                    <ul>
                      @foreach($languages as $language)
                      <!-- <li><a onclick="myFunction1({{$language->languages_id}})" href="#"><img class="img-fluid" src="{{asset('').$language->image_path}}"></a></li> -->
                      <li><a href="#"><img class="img-fluid" src="{{asset('').$language->image_path}}"></a></li>
                      @endforeach 
                      
                    </ul>
                  </span>
                </h4>  
              </div> 

              @include('web.common.scripts.changeLanguage')
              @endif
              @if(count($currencies) > 0)
                <div class="dropdown">
                  <button style="color:white !important;" class="btn dropdown-toggle" type="button" >
                    {{session('currency_code')}}
                  </button>
                  <!-- Not needed at the moment.. -->
                  <!-- <div class="dropdown-menu">
                    @foreach($currencies as $currency)
                    <a onclick="myFunction2({{$currency->id}})" class="dropdown-item" href="#">
                      <span>{{$currency->code}}</span>   
                    </a>
                    @endforeach
                  </div> -->
                </div>
                @include('web.common.scripts.changeCurrency')
              @endif
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
                      <span style="color:#ffffff !important;"><?php if(auth()->guard('customer')->check()){ ?>@lang('website.Welcome') {{auth()->guard('customer')->user()->first_name}}&nbsp;! <?php }?> </span>
                  </div>
                </li>
                <?php if(auth()->guard('customer')->check()){ ?>
                  <li class="nav-item"> <a href="{{url('profile')}}" class="nav-link">@lang('website.Profile')</a> </li>
                  <li class="nav-item"> <a href="{{url('wishlist')}}" class="nav-link">@lang('website.Wishlist')<span class="total_wishlist"> ({{$result['commonContent']['total_wishlist']}})</span></a> </li>
                  <li class="nav-item"> <a href="{{url('compare')}}" class="nav-link">@lang('website.Compare')&nbsp;(<span id="compare">{{$count}}</span>)</a> </li>
                  <li class="nav-item"> <a href="{{url('orders')}}" class="nav-link">@lang('website.Orders')</a> </li>
                  <li class="nav-item"> <a href="{{url('shipping-address')}}" class="nav-link">@lang('website.Shipping Address')</a> </li>
                  <li class="nav-item" > <a href="{{url('logout')}}" class="nav-link" style="color:white;">@lang('website.Logout')</a> </li>
                  <?php }else{ ?>
                    <li class="nav-item"><div style="color:#6f6e6e !important;" class="nav-link">@lang('website.Welcome')!</div></li>
                    <li class="nav-item"> <a style="color:#6f6e6e !important;" href="{{ URL::to('/login')}}" class="nav-link -before"><i class="fa fa-lock" aria-hidden="true"></i>&nbsp;@lang('website.Login/Register')</a> </li>                      
                  <?php } ?>
              </ul> 
            </div>   
          </nav>
        </div>
      </div>
    </div> 
  </div>
  <div class="header-maxi bg-header-bar" style="background-color:#111111 !important;">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-12 col-lg-3">
          <a style="color:#ffffff;" href="{{ URL::to('/')}}" class="logo" data-toggle="tooltip" data-placement="bottom" title="@lang('website.logo')">
            @if($result['commonContent']['settings']['sitename_logo']=='name')
            <?=stripslashes($result['commonContent']['settings']['website_name'])?>
            @endif
        
            @if($result['commonContent']['settings']['sitename_logo']=='logo')
            <img class="img-fluid" src="{{asset('').$result['commonContent']['settings']['website_logo']}}" alt="<?=stripslashes($result['commonContent']['settings']['website_name'])?>">
            @endif
            </a>
        </div>

                    
            <div class="col-12 col-sm-6">
            
              <form class="form-inline" action="{{ URL::to('/shop')}}" method="get">   
                <div class="search-field-module" style="border:1px solid #111111;">   
                    <input type="hidden" name="category" class="category-value" value="">
                    @include('web.common.HeaderCategories')
                  <button style="background-color:#d8cd2b; !important;border:0px !important;height:42px;" class="btn btn-secondary swipe-to-top dropdown-toggle header-selection" type="button" id="headerOneCartButton"  
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" 
                    data-toggle="tooltip" data-placement="bottom" title="@lang("website.Choose Any Category")"> 
                    @lang("website.Choose Any Category")
                  </button> 
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="headerOneCartButton">   
                      @php    productCategories(); @endphp                                                                 
                  </div>
                  <div class="search-field-wrap">
                      <input style="border:0px !important;  type="search" name="search" placeholder="@lang('website.Search entire store here')..." data-toggle="tooltip" data-placement="bottom" title="@lang('website.Search Products')" value="{{ app('request')->input('search') }}">
                      <button style="background-color:#262121;border:1px solid #1d1d1d;" class="btn btn-secondary swipe-to-top" data-toggle="tooltip" 
                      data-placement="bottom" title="@lang('website.Search Products')">
                      <i class="fa fa-search"></i></button>
                  </div>
                </div>
              </form>
            </div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-3">
           <ul class="pro-header-right-options">
            <li>
              <a href="{{ URL::to('/wishlist')}}" class="btn" data-toggle="tooltip" data-placement="bottom" title="@lang('website.Wishlist')">
                <i style="color:#ffffff;" class="far fa-heart"></i>
                <span style="background-color:#262121 !important;color:#d8cd2b;" class="badge badge-secondary total_wishlist">{{$result['commonContent']['total_wishlist']}}</span>
              </a>
            </li>
            <li class="dropdown head-cart-content">
              @include('web.headers.cartButtons.cartButton10')
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div> 
      <div class="header-navbar bg-menu-bar" style="background-color:#1d1d1d;">
          <div class="container">
            <nav id="navbar_header_9" class="navbar navbar-expand-lg  bg-nav-bar" style="background-color:#1d1d1d;">
        
              <div class="navbar-collapse" >
                <ul class="navbar-nav">
                  {!! $result['commonContent']["menusRecursive"] !!}
                  <li class="nav-item ">
                    <a class="nav-link">
                        <span style="color:white;">@lang('website.Call Us Now')</span>
                        <phone style="color:white;" dir="ltr">{{$result['commonContent']['setting'][11]->value}}</phone>
                    </a>
                  </li>     
                </ul>
              </div>
            </nav>
          </div>
      </div>
</header>