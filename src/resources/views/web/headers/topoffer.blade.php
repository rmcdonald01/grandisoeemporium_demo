@if($result['commonContent']['top_offers'])
  @if($result['commonContent']['top_offers']->top_offers_text)
  <div class="alert alert-warning alert-dismissible fade show" role="alert" style="background-color:#111111;">
    <div class="container" style="background-color:#111111;">
        <div class="pro-description">
          <div class="pro-info" style="color:white !important;">
            @php echo stripslashes($result['commonContent']['top_offers']->top_offers_text); @endphp
          </div>
          <button style="color:white !important;" type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
        </div>

    </div>
  </div>
  @endif
@endif
