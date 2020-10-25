<?php if($result['commonContent']['top_offers']): ?>
  <?php if($result['commonContent']['top_offers']->top_offers_text): ?>
  <div class="alert alert-warning alert-dismissible fade show" role="alert" style="background-color:#111111;">
    <div class="container" style="background-color:#111111;">
        <div class="pro-description">
          <div class="pro-info" style="color:white !important;">
            <?php echo stripslashes($result['commonContent']['top_offers']->top_offers_text); ?>
          </div>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
        </div>

    </div>
  </div>
  <?php endif; ?>
<?php endif; ?>
<?php /**PATH /var/www/grandisoeemporium_demo/src/resources/views/web/headers/topoffer.blade.php ENDPATH**/ ?>