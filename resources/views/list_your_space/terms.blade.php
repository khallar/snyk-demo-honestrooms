 <style type="text/css">
        #js-manage-listing-nav{position: fixed !important;}
          @media (min-width: 767px){
   
  #ajax_container{margin-left:25%;}
 html[lang="ar"] #js-manage-listing-nav{position: fixed;}
  html[lang="ar"] #ajax_container{margin-right:25% !important;margin-left: 0px !important;}
}
  @media(min-width: 1100px){
  #ajax_container{margin-left: 16.66667%;}
  html[lang="ar"] #ajax_container{margin-right: 16.66667% !important; margin-left: 0px !important;}
}
    </style>
<style type="text/css">
  .manage-listing-content{height: 100%;}
</style>
<div class="manage-listing-content-container" id="js-manage-listing-content-container">
      <div class="manage-listing-content-wrapper">
        <div class="manage-listing-content col-lg-7 col-md-7" id="js-manage-listing-content"><div>

<div class="row-space-4">
  <div class="row">
    
    
      <h3 class="col-12">{{ trans('messages.lys.terms') }}</h3>
    
  </div>
  <p class="text-muted">{{ trans('messages.lys.terms_desc') }}</p>
</div>

  <hr>




<div class="js-section">
  <div class="js-saving-progress saving-progress" style="display: none;">
  <h5>{{ trans('messages.lys.saving') }}...</h5>
</div>


  {{--<div class="row row-space-2" id="min-max-nights">
    
  </div>



  <div class="row-space-2">
    <label class="label-large">{{ trans('messages.payments.cancellation_policy') }}</label>
    <div id="cancellation-policy-select" class="row-space-2"><div class="select
            select-large
            select-block">
  <select name="cancel_policy" id="select-cancel_policy" data-saving="saving-progress">
    
      <option value="Flexible" {{ ($result->cancel_policy == 'Flexible') ? 'selected' : '' }}>{{ trans('messages.lys.flexible_desc') }}</option>
    
      <option value="Moderate" {{ ($result->cancel_policy == 'Moderate') ? 'selected' : '' }}>{{ trans('messages.lys.moderate_desc') }}</option>
    
      <option value="Strict" {{ ($result->cancel_policy == 'Strict') ? 'selected' : '' }}>{{ trans('messages.lys.strict_desc') }}</option>
    
  </select>
</div>
</div>
  </div>--}}

</div>



  <div class="calcel_view_poly terms_page">
    <h1>{{ trans('messages.payments.cancellation_policy') }}</h1>
          <ul>
            <li><i class="fa fa-snowflake-o" aria-hidden="true"></i><p>{{ trans('messages.cancellation_policy.our_cancellation_policy') }} </p></li>
            <li><i class="fa fa-snowflake-o" aria-hidden="true"></i><p>{{ trans('messages.cancellation_policy.in_case_of_cancellation') }}</p></li>
            <li><i class="fa fa-snowflake-o" aria-hidden="true"></i><p>{{ trans('messages.cancellation_policy.if_after_confirming_a_reservation') }} </p></li>
            <li><i class="fa fa-snowflake-o" aria-hidden="true"></i><p>{{ trans('messages.cancellation_policy.if_after_confirming_a_reservation_and_transferring_the_required') }} </p></li>
            <li><i class="fa fa-snowflake-o" aria-hidden="true"></i><p>{{ trans('messages.cancellation_policy.we_will_send_you_the_value') }} </p></li>
            <li><i class="fa fa-snowflake-o" aria-hidden="true"></i><p>{{ trans('messages.cancellation_policy.to_continue_you_need_to_accept') }}</p></li>
            <li><i class="fa fa-snowflake-o" aria-hidden="true"></i><p>{{ trans('messages.cancellation_policy.remember_that_if_you') }}</p></li>
           
          </ul>

          <div class="accept_poly">

                <div class="select_poly_list">
                  <input type="radio" value="Yes"  id="basics-select-cancel_policy_accept" name="cancel_policy_accept" data-saving="Yes" {{ $result->cancel_policy_accept == 'Yes' ? 'checked' : '' }}>
                   <span>{{ trans('messages.cancellation_policy.i_accept_the_cancellation') }} </span>
               </div>
               <div class="select_poly_list">
                  <input type="radio" value="No"  id="basics-select-cancel_policy_accept1" name="cancel_policy_accept" data-saving="No" {{ $result->cancel_policy_accept == 'No' ? 'checked' : '' }}>
                   <span>{{ trans('messages.cancellation_policy.not_accept_the_cancellation') }} </span>
               </div>
            </div>

        </div>






















<div class="not-post-listed row row-space-top-6 progress-buttons">
  <div class="col-12">
    <div class="separator"></div>
  </div>
  <div class="col-2 row-space-top-1 next_step">

  <a data-prevent-default="" href="{{ url('manage-listing/'.$room_id.'/details') }}" class="back-section-button">{{ trans('messages.lys.back') }}</a>
    
  </div>
  <div class="col-10 text-right">
  </div>
</div>

</div></div>
        
      </div>
      <div class="manage-listing-content-background"></div>
    </div>