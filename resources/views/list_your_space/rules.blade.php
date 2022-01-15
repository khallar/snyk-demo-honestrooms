<!-- SR_REQUEST_added-11-02-2019 -->
<div id="js-manage-listing-content-container" class="manage-listing-content-container">
      <div class="manage-listing-content-wrapper">
        <div id="js-manage-listing-content" class="manage-listing-content col-lg-7 col-md-7 lang-chang-label">

        <div>
        <div>
        <div class="space-4">
        <h3>{{ trans('messages.lys.rules_of_the_house') }}</h3>
        <p class="text-muted">{!! trans('messages.lys.rules_desc') !!}</p>
       
        </div>
        <hr>
        </div>


        

        <div>
        <div class="js-section">
        <div style="display:none;" class="js-saving-progress saving-progress">
        <h5>{{ trans('messages.lys.saving') }}...</h5>
        </div>

        <h4>{{ trans('messages.service_host_rule.allow_to_smoke_home') }}</h4>

        <ul class="list-unstyled amenity-list">

        <li>
       
        <div class="come">
        <label class="label-large label-inline amenity-label pos-rel">
        <input type="radio" value="Yes" class="rules" name="allow_smoke" data-saving="Yes" {{ $result->allow_smoke == 'Yes' ? 'checked' : '' }}>
        <span>{{ trans('messages.service_host_rule.yes') }}</span>
        
        </label>
       </div>
      
        </li>

        <li>
       
        <div class="come">
        <label class="label-large label-inline amenity-label pos-rel">
         <input type="radio" value="No" class="rules" name="allow_smoke" data-saving="No" {{ $result->allow_smoke == 'No' ? 'checked' : '' }}>
        <span>{{ trans('messages.service_host_rule.no') }}</span>
        
        </label>
       </div>
      
        </li>
        </ul>

        <h4>{{ trans('messages.service_host_rule.accept_pets_from_guest') }}</h4>

        <ul class="list-unstyled amenity-list">

        <li>
       
        <div class="come">
        <label class="label-large label-inline amenity-label pos-rel">
        <input type="radio" value="Yes" class="rules" name="accept_pets" data-saving="Yes" {{ $result->accept_pets == 'Yes' ? 'checked' : '' }}>
        <span>{{ trans('messages.service_host_rule.yes') }}</span>
        
        </label>
       </div>
      
        </li>

        <li>
       
        <div class="come">
        <label class="label-large label-inline amenity-label pos-rel">
         <input type="radio" value="No" class="rules" name="accept_pets" data-saving="No" {{ $result->accept_pets == 'No' ? 'checked' : '' }}>
        <span>{{ trans('messages.service_host_rule.no') }}</span>
        
        </label>
       </div>
      
        </li>
        </ul>

        <h4>{{ trans('messages.service_host_rule.guest_invite_visitors') }}</h4>

        <ul class="list-unstyled amenity-list">

        <li>
       
        <div class="come">
        <label class="label-large label-inline amenity-label pos-rel">
        <input type="radio" value="Yes" class="rules" name="invite_visitors" data-saving="Yes" {{ $result->invite_visitors == 'Yes' ? 'checked' : '' }}>
        <span>{{ trans('messages.service_host_rule.yes') }}</span>
        
        </label>
       </div>
      
        </li>

        <li>
       
        <div class="come">
        <label class="label-large label-inline amenity-label pos-rel">
         <input type="radio" value="No" class="rules" name="invite_visitors" data-saving="No" {{ $result->invite_visitors == 'No' ? 'checked' : '' }}>
        <span>{{ trans('messages.service_host_rule.no') }}</span>
        
        </label>
       </div>
      
        </li>
        </ul>

       
        </div>
        </div>
       

        <div class="not-post-listed row space-top-6 next_step">
        <div class="col-2 space-top-1 lang-chang-label">
        <a data-prevent-default="true" href="{{ url('manage-listing/'.$room_id.'/host') }}" class="back-section-button">{{ trans('messages.lys.back') }}</a>
        </div>
        <div class="col-10 text-right next_step">
        <a data-prevent-default="true" href="{{ url('manage-listing/'.$room_id.'/bathrooms') }}" class="btn btn-large btn-primary next-section-button">{{ trans('messages.lys.next') }}</a>
        </div>
        </div>
        </div>
        </div>
<!-- 
         <div class="lang-help manage-listing-help col-lg-4 col-md-4 hide-sm" id="js-manage-listing-help"><div class="manage-listing-help-panel-wrapper">
  <div class="panel manage-listing-help-panel">
    <div class="help-header-icon-container text-center va-container-h">
      {!! Html::image('images/lightbulb2x.png', '', ['class' => 'col-center', 'width' => '50', 'height' => '50']) !!}
    </div>
    <div class="panel-body">
      <h4 class="text-center">{{ trans('messages.lys.amenities') }}</h4>
      
  <p>{{ trans('messages.lys.edit_amenities_desc1') }}</p>
 <p>{{ trans('messages.lys.edit_amenities_desc2') }}</p>
    </div>
  </div>
</div>

</div> -->
      </div>
      <div class="manage-listing-content-background"></div>
    </div>

    <style type="text/css">
       html[lang="ar"] #js-manage-listing-nav{position: fixed !important;}
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