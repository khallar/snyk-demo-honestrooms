  <div id="footer" class="pull-left container-brand-dark footer-surround footer-container" style="width:100%; background-image:url(<?php echo e($footer_cover_image); ?>)">
 <footer class="page-container-responsive" ng-controller="footer">
  <div class="row row-condensed" style="     padding-bottom: 40px;border-bottom: 1px solid rgb(220, 224, 224) ! important;">

    <div class="col-md-3 th_foot ">
      <div class="language-curr-picker clearfix">
        <div class="select select-large select-block row-space-2">
  <label id="language-selector-label" class="screen-reader-only">
    <?php echo e(trans('messages.footer.choose_language')); ?>

  </label>
 <?php echo Form::select('language',$language, (Session::get('language')) ? Session::get('language') : $default_language[0]->value, ['class' => 'language-selector footer-select', 'aria-labelledby' => 'language-selector-label', 'id' => 'language_footer']); ?>

</div>

<div class="select select-large select-block row-space-2">
  <label id="currency-selector-label" class="screen-reader-only"><?php echo e(trans('messages.footer.choose_currency')); ?></label>
  <?php echo Form::select('currency',$currency, (Session::get('currency')) ? Session::get('currency') : $default_currency[0]->code, ['class' => 'currency-selector footer-select', 'aria-labelledby' => 'currency-selector-label', 'id' => 'currency_footer']); ?>

</div>

        <div class="cx-number"></div>
      </div>
    </div>

    <div class="col-md-3 hide-sm">
    <div class="foot-column">
      <h2 class="h5 font_strong"><?php echo e(trans('messages.footer.company')); ?></h2>
      <ul class="list-layout">
      <?php $__currentLoopData = $company_pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company_page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><a href="<?php echo e(url($company_page->url)); ?>" class="link-contrast"><?php echo e($company_page->name); ?></a></li>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       <li> <a href="<?php echo e(url('contact')); ?>" class="link-contrast"><?php echo e(trans('messages.contactus.contactus')); ?></a></li>
      </ul>
      </div>
    </div>

    <div class="col-md-3 hide-sm">
     <div class="foot-column">
      <h2 class="h5 font_strong"><?php echo e(trans('messages.footer.discover')); ?></h2>
      <ul class="list-layout">
       <!--  <li><a href="<?php echo e(url('invite')); ?>" class="link-contrast"><?php echo e(trans('messages.referrals.travel_credit')); ?></a></li> -->
      <?php $__currentLoopData = $discover_pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $discover_page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><a href="<?php echo e(url($discover_page->url)); ?>" class="link-contrast"><?php echo e($discover_page->name); ?></a></li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
      </div>
    </div>

    <div class="col-md-3 hide-sm">
     <div class="foot-column">
      <h2 class="h5 font_strong"><?php echo e(trans('messages.footer.hosting')); ?></h2>
      <ul class="list-layout">
      <?php $__currentLoopData = $hosting_pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hosting_page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><a href="<?php echo e(url($hosting_page->url)); ?>" class="link-contrast"><?php echo e($hosting_page->name); ?></a></li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
      </div>
    </div>
     <div class="col-sm-12 space-4 space-top-4 show-sm footadde">
    <ul class="list-layout list-inline text-center h5">
      <?php $__currentLoopData = $company_pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company_page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><a href="<?php echo e(url($company_page->url)); ?>" class="link-contrast"><?php echo e($company_page->name); ?></a></li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <li> <a href="<?php echo e(url('contact')); ?>" class="link-contrast"><?php echo e(trans('messages.contactus.contactus')); ?></a></li>
    </ul>
  </div>
  </div>

  <!-- <div class="col-sm-12 space-4 space-top-4 show-sm footrem">
    <ul class="list-layout list-inline text-center h5">
      <?php $__currentLoopData = $company_pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company_page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><a href="<?php echo e(url($company_page->url)); ?>" class="link-contrast"><?php echo e($company_page->name); ?></a></li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  </div> -->

 <!-- <hr class="footer-divider space-top-8 space-4 hide-sm"> -->

  <div class="" style="margin-top:20px;">
  <!--  <h2 class="h5 space-4 hide-sm"><?php echo e(trans('messages.footer.join_us_on')); ?></h2> -->
    <ul class="list-layout list-inline pull-right float-none-sm">
      <link itemprop="url" href="">
      <meta itemprop="logo" content="">
      <?php for($i=0; $i<count($join_us); $i++): ?>
      <?php if($join_us[$i]->value): ?>
        <li>
          <a href="<?php echo e($join_us[$i]->value); ?>" class="link-contrast footer-icon-container" target="_blank">
            <span class="screen-reader-only"><?php echo e(ucfirst($join_us[$i]->name)); ?></span>
            <i class="icon footer-icon icon-<?php echo e(str_replace('_','-',$join_us[$i]->name)); ?>"></i> 
          </a>        
        </li>
      <?php endif; ?>
      <?php endfor; ?>
    </ul>
    <div class="space-top-2 text-muted pull-left float-none-sm">
      © <?php echo e($site_name); ?>, Inc.
    </div>
  </div>
</footer>
</div>