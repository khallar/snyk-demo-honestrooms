<!DOCTYPE html>
<html  dir="<?php echo e((((Session::get('language')) ? Session::get('language') : $default_language[0]->value) == 'ar') ? 'rtl' : ''); ?>" lang="<?php echo e((Session::get('language')) ? Session::get('language') : $default_language[0]->value); ?>"  xmlns:fb="http://ogp.me/ns/fb#"><!--<![endif]--><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" >
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0' >
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<meta name = "viewport" content = "user-scalable=no, width=device-width">
<meta name="daterangepicker_format" content = "<?php echo e($daterangepicker_format); ?>">
<meta name="datepicker_format" content = "<?php echo e($datepicker_format); ?>"> 
<meta name="datedisplay_format" content = "<?php echo e(strtolower(DISPLAY_DATE_FORMAT)); ?>"> 
<meta name="php_date_format" content = "<?php echo e(PHP_DATE_FORMAT); ?>"> 

<link rel="dns-prefetch" href="https://maps.googleapis.com/">
<link rel="dns-prefetch" href="https://maps.gstatic.com/">
<link rel="dns-prefetch" href="https://mts0.googleapis.com/">
<link rel="dns-prefetch" href="https://mts1.googleapis.com/">
<link rel="shortcut icon" href="<?php echo e($favicon); ?>">

<!--[if IE]><![endif]-->
<meta charset="utf-8">

    <!--[if IE 8]>
      <?php echo Html::style('css/common_ie8.css?v='.$version); ?>

      <![endif]-->
      <!--[if !(IE 8)]><!-->


      <?php if(Route::current()->uri() == '/' && $default_home ==''): ?>  

      <?php echo Html::style('css/jquery.selectBoxIt.css?v='.$version); ?>

      <?php echo Html::style('css/daterangepicker.css?v='.$version); ?> 
      <?php echo Html::style('css/owl.carousel.min.css?v='.$version); ?>

      <?php echo Html::style('css/themes.css?v='.$version); ?>        
      <?php echo Html::style('pcss?css=css/dynamic'); ?> 
      <?php echo Html::style('css/common.css?v='.$version); ?>

      <?php echo Html::style('css/home.css?v='.$version); ?>

      <?php echo Html::style('css/main.css?v='.$version); ?> 
      <?php echo Html::style('css/styles.css?v='.$version); ?>      

      <?php endif; ?>


      <?php if(@$default_home == 'two'): ?>

      <?php echo Html::style('css/common.css?v='.$version); ?>

      <?php echo Html::style('css/home.css?v='.$version); ?>

      <?php echo Html::style('css/owl.carousel.min.css?v='.$version); ?>

      <?php echo Html::style('css/themes.css?v='.$version); ?>   
      <?php echo Html::style('pcss?css=css/dynamic'); ?>

      <?php echo Html::style('css/jquery.selectBoxIt.css?v='.$version); ?>

      <?php echo Html::style('css/daterangepicker.css?v='.$version); ?>   
      <?php echo Html::style('css/home_two.css?v='.$version); ?> 
      <?php echo Html::style('css/main.css?v='.$version); ?>        
      <?php echo Html::style('css/common_two.css?v='.$version); ?>

      <?php echo Html::style('css/styles.css?v='.$version); ?> 
      <?php echo Html::style('css/jquery.bxslider.css?v='.$version); ?>

      <?php echo Html::style('css/header_two.css?v='.$version); ?>

      
      <?php endif; ?>

      <?php if(Route::current()->uri() != '/'): ?>

      <?php echo Html::style('css/lightgallery.min.css?v='.$version); ?>  
      <?php echo Html::style('css/lightslider.min.css?v='.$version); ?> 
      <?php echo Html::style('css/nouislider.min.css?v='.$version); ?>

      <?php echo Html::style('css/styles.css?v='.$version); ?> 
      <?php echo Html::style('css/jquery.mCustomScrollbar.css?v='.$version); ?>

      <?php echo Html::style('css/jquery.selectBoxIt.css?v='.$version); ?>

      <?php echo Html::style('css/daterangepicker.css?v='.$version); ?> 
      <?php echo Html::style('css/owl.carousel.min.css?v='.$version); ?>

      <?php echo Html::style('css/themes.css?v='.$version); ?>        
      <?php echo Html::style('pcss?css=css/dynamic'); ?> 
      <?php echo Html::style('css/common.css?v='.$version); ?>

      <?php echo Html::style('css/home.css?v='.$version); ?>

      <?php echo Html::style('css/main.css?v='.$version); ?> 
      <?php echo Html::style('css/jquery.selectBoxIt.css?v='.$version); ?>

      <?php echo Html::style('css/daterangepicker.css?v='.$version); ?>   
      <?php echo Html::style('css/jquery.bxslider.css?v='.$version); ?>

      <?php echo Html::style('css/common_two.css?v='.$version); ?>

      <?php echo Html::style('css/header_two.css?v='.$version); ?>

      <?php echo Html::style('css/home_two.css?v='.$version); ?>

      <?php endif; ?>

      <?php if(Request::segment(1) == 'host' || Request::segment(1) == 'experiences'): ?>
      <?php echo Html::style('css/host_experiences/owl.carousel.min.css?v='.$version); ?>

      <?php echo Html::style('css/host_experiences/host_experience.css?v='.$version); ?>

      <?php echo Html::style('css/host_experiences/fonts.css?v='.$version); ?>   
      <?php endif; ?>


      <?php if(isset($exception)): ?>
      <?php if($exception->getStatusCode()  == '404'): ?>
      <?php echo Html::style('css/error_pages_pretzel.css?v='.$version); ?>

      <?php endif; ?>
      <?php endif; ?>

      <?php if(!isset($exception)): ?>
      <?php if(Route::current()->uri() == 'signup_action'): ?>
      <?php echo Html::style('css/signinup.css?v='.$version); ?>

      <?php endif; ?>

      <?php if(Route::current()->uri() != 'host'): ?>
      <?php echo Html::style('css/header_two.css?v='.$version); ?> 
      <?php endif; ?>

      <?php if(Route::current()->uri() == 'dashboard'): ?>  
      <?php echo Html::style('css/host_dashboard.css?v='.$version); ?>

      <?php echo Html::style('css/dashboard.css?v='.$version); ?>

      <?php endif; ?>

      <?php if(Route::current()->uri() == 'trips/current'): ?>

      <?php endif; ?>

      <?php if(Route::current()->uri() == 'trips/previous'): ?>   

      <?php endif; ?>

      <?php if(Route::current()->uri() == 'users/transaction_history'): ?>   

      <?php endif; ?>

      <?php if(Route::current()->uri() == 'users/security'): ?>   

      <?php endif; ?>

      <?php if(Route::current()->uri() == 'rooms/new'): ?>
      <?php echo Html::style('css/new.css?v='.$version); ?>

      <?php endif; ?>

      <?php if(Route::current()->uri() == 'inbox' || Route::current()->uri() == 'disputes' || Route::current()->uri() == 'dispute_details/{id}'): ?>
      <?php echo Html::style('css/threads.css?v='.$version); ?>

      <?php endif; ?>

      <?php if(Route::current()->uri() == 'reservation/change'): ?>
      <?php echo Html::style('css/alterations.css?v='.$version); ?>

      <?php echo Html::style('css/policy_timeline_v2.css?v='.$version); ?>

      <?php endif; ?>

      <?php if(Route::current()->uri() == 'alterations/{code}'): ?>
      <?php echo Html::style('css/alterations.css?v='.$version); ?>

      <?php endif; ?>

      <?php if(Route::current()->uri() == 'z/q/{id}'): ?>
      <?php echo Html::style('css/messaging.css?v='.$version); ?>

      <?php echo Html::style('css/tooltip.css?v='.$version); ?>

      <?php endif; ?>

      <?php if(Route::current()->uri() == 'messaging/qt_with/{id}'): ?>
      <?php echo Html::style('css/messaging.css?v='.$version); ?>

      <?php echo Html::style('css/tooltip.css?v='.$version); ?>

      <?php echo Html::style('css/responsive_calendar.css?v='.$version); ?>

      <?php endif; ?>

      <?php if(Route::current()->uri() == 'manage-listing/{id}/{page}'): ?>
      <?php echo Html::style('css/manage_listing.css?v='.$version); ?>

      <?php endif; ?>

      <?php if(Route::current()->uri() == 'wishlists/picks' || Route::current()->uri() == 'wishlists/my' || Route::current()->uri() == 'wishlists/popular' || Route::current()->uri() == 'wishlists/{id}' || Route::current()->uri() == 'users/{id}/wishlists'): ?>
      <?php echo Html::style('css/wishlists.css?v='.$version); ?>

      <?php endif; ?>

      <?php if(Route::current()->uri() == 'rooms/{id}'): ?>
      <?php echo Html::style('css/rooms_detail.css?v='.$version); ?>

      <?php echo Html::style('css/slider/nivo-lightbox.css?v='.$version); ?>

      <?php echo Html::style('css/slider/default.css?v='.$version); ?>

      <?php echo Html::style('css/jquery.bxslider.css?v='.$version); ?>    
      <?php endif; ?>

      <?php if(Route::current()->uri() == 'dispute_details/{id}'): ?>
      <?php echo Html::style('css/slider/nivo-lightbox.css?v='.$version); ?>

      <?php echo Html::style('css/slider/default.css?v='.$version); ?>

      <?php endif; ?>

      <?php if(Route::current()->uri() == 'rooms/{id}' || Route::current()->uri() == 'experiences/{host_experience_id}'): ?>
      <?php echo Html::style('css/p3.css?v='.$version); ?>

      <?php endif; ?>    

      <?php if(Route::current()->uri() == 'rooms'): ?>
      <?php echo Html::style('css/index.css?v='.$version); ?>

      <?php echo Html::style('css/unlist_modal.css?v='.$version); ?>

      <?php echo Html::style('css/dashboard.css?v='.$version); ?>

      <?php endif; ?>

      <?php if(Route::current()->uri() == 'reservation/itinerary'): ?>

      <?php endif; ?>

      <?php if(Route::current()->uri() == 'reservation/receipt'): ?>
      <?php echo Html::style('css/receipt.css?v='.$version); ?>

      <?php echo Html::style('css/receipt-print.css?v='.$version,['media'=>'print']); ?>

      <?php endif; ?>

      <?php if(Route::current()->uri() == 's' || Route::current()->uri() == 'wishlists/popular'): ?>
      <?php echo Html::style('css/map_search.css?v='.$version); ?>

      <?php endif; ?>

      <?php if(Route::current()->uri() == 'payments/book/{id?}' || Route::current()->uri() == 'api_payments/book/{id?}'|| Route::current()->uri() == 'dispute_details/{id}'): ?>
      <?php echo Html::style('css/payments.css?v='.$version); ?>

      <?php echo Html::style('css/p4.css?v='.$version); ?>

      <?php echo Html::style('css/StyleSheet.css?v='.$version); ?>

      <?php endif; ?>

      <?php if(Route::current()->uri() == 'reservation/requested'): ?>
      <?php echo Html::style('css/page5.css?v='.$version); ?>

      <?php endif; ?>

      <?php if(Route::current()->uri() == 'users/edit'): ?>
      <?php echo Html::style('css/address_widget.css?v='.$version); ?>      
      <?php echo Html::style('css/phonenumbers.css?v='.$version); ?>

      <?php echo Html::style('css/edit_profile.css?v='.$version); ?>

      <?php endif; ?>

      <?php if(Route::current()->uri() == 'users/show/{id}'): ?>
      <?php echo Html::style('css/profile.css?v='.$version); ?>

      <?php endif; ?>

      <?php if(Route::current()->uri() == 'users/payout_preferences/{id}'): ?>
      <?php echo Html::style('css/payout_preferences.css?v='.$version); ?>

      <?php endif; ?>

      <?php if(Route::current()->uri() == 'home/cancellation_policies'): ?>
      <?php echo Html::style('css/policy_timeline_v2.css?v='.$version); ?>

      <?php endif; ?>

      <?php if(Route::current()->uri() == 'reviews/edit/{id}' || Route::current()->uri() == 'host_experience_reviews/edit/{id}'): ?>
      <?php echo Html::style('css/reviews.css?v='.$version); ?>

      <?php endif; ?>

      <?php if(Route::current()->uri() == 'invite' || Route::current()->uri() == 'c/{username}'): ?>
      <?php echo Html::style('css/referrals.css?v='.$version); ?>

      <?php endif; ?>

      <?php if(Route::current()->uri() == 'help' || Route::current()->uri() == 'help/topic/{id}/{category}' || Route::current()->uri() == 'help/article/{id}/{question}'): ?>
      <?php echo Html::style('css/help.css?v='.$version); ?>

      <?php echo Html::style('css/jquery-ui.css?v='.$version); ?>

      <?php endif; ?>

      <?php echo Html::style('css/common1.css?v='.$version); ?>


      <?php endif; ?>

      <?php if(Session::get('language')=='ar'): ?>

      <?php echo Html::style('css/common_arr.css?v='.$version); ?>


      <?php endif; ?>

      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">

      <style type="text/css">
        .ui-selecting { background: #FECA40; }
        .ui-selected { background: #F39814; color: white; }
      </style>


      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">



      <meta name="keywords" content="<?php echo e(Helpers::meta((!isset($exception)) ? Route::current()->uri() : '', 'keywords')); ?>">


      <meta name="twitter:widgets:csp" content="on">


      <?php if(!isset($exception)): ?>
      <?php if(Route::current()->uri() == 'rooms/{id}'): ?>
      <meta property="og:image" content="<?php echo e($result->photo_name); ?>">
      <meta itemprop="image" src="<?php echo e($result->photo_name); ?>">
      <link rel="image_src" href="#" src="<?php echo e($result->photo_name); ?>">
      <?php endif; ?>
      <?php if(Route::current()->uri() == 'experiences/{host_experience_id}'): ?>
      <title><?php echo e(@$result->title.' - '.$site_name); ?></title>
      <meta name="description" content="<?php echo e(@$result->city_details->name); ?> - <?php echo e(@$result->tagline); ?> - <?php echo e(@$result->about_you); ?>">
      <meta name="twitter:widgets:csp" content="on">
      <meta property="og:url"                content="<?php echo e($result->link); ?>">
      <meta property="og:type"               content="website" />
      <meta property="og:title"              content="<?php echo e(@$result->title); ?>">
      <meta property="og:description"        content="<?php echo e(@$result->city_details->name); ?> - <?php echo e(@$result->tagline); ?> - <?php echo e(@$result->about_you); ?>">
      <meta property="og:image" content="<?php echo e(@$result->host_experience_photos[0]->og_image); ?>">
      <meta property="og:image:height" content="1280">
      <meta property="og:image:width" content="853">

      <meta itemprop="image" src="<?php echo e(@$result->photo_name); ?>">
      <link rel="image_src" href="#" src="<?php echo e(@$result->photo_name); ?>">
      <meta name="twitter:title" content="<?php echo e(@$result->title); ?>">
      <meta name="twitter:site" content="<?php echo e(SITE_NAME); ?>">
      <meta name="twitter:url" content="<?php echo e($result->link); ?>">
      <?php endif; ?>

      <?php if(Route::current()->uri() == 'wishlists/{id}'): ?>
      <meta property="og:image" content="<?php echo e(@$result[0]->saved_wishlists[0]->photo_name); ?>">
      <meta itemprop="image" src="<?php echo e(@$result[0]->saved_wishlists[0]->photo_name); ?>">
      <link rel="image_src" href="#" src="<?php echo e(@$result[0]->saved_wishlists[0]->photo_name); ?>">
      <?php endif; ?>

      <?php endif; ?>
      <link rel="search" type="application/opensearchdescription+xml" href="#" title="">
      <title><?php echo e(isset($title) ? $title : Helpers::meta((!isset($exception)) ? Route::current()->uri() : '', 'title')); ?> <?php echo e(isset($additional_title) ? $additional_title : ''); ?></title>
      <meta name="description" content="<?php echo e(Helpers::meta((!isset($exception)) ? Route::current()->uri() : '', 'description')); ?>">
      <meta name="mobile-web-app-capable" content="yes">

      <meta name="theme-color" content="#f5f5f5">


    </head>

    <body class="<?php echo e((!isset($exception)) ? (Route::current()->uri() == '/' ? 'home_view v2 simple-header p1' : '') : ''); ?> <?php echo e((!isset($exception)) ? (@$default_home != 'two' ? 'home-one' : '') : ''); ?> <?php echo e((!isset($exception)) ? (@Route::current()->uri() == 's' ? 'search_page' : '') : ''); ?>" ng-app="App">