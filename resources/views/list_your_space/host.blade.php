<!-- SR_REQUEST_added-11-02-2019 -->
<div id="js-manage-listing-content-container" class="manage-listing-content-container">
      <div class="manage-listing-content-wrapper">
        <div id="js-manage-listing-content" class="manage-listing-content col-lg-7 col-md-7 lang-chang-label">

        <div>
        <div>
        <div class="space-4">
        <h3>{{ trans('messages.lys.host_you') }}</h3>
        <p class="text-muted">{{ trans('messages.lys.host_desc') }}</p>
        
        </div>
        <hr>
        </div>
        <div>
        <div class="js-section">
        <div style="display:none;" class="js-saving-progress saving-progress">
        <h5>{{ trans('messages.lys.saving') }}...</h5>
        </div>

         <div>
          <label class="label-large">{{ trans('messages.service_host_rule.who_lives_house') }}</label>
          <textarea class="input-large textarea-resize-vertical host_lives_house_desc" name="lives_house_desc" rows="4" ng-model="lives_house_desc" placeholder="{{ trans('messages.service_host_rule.who_lives_house_desc') }}">{{ @$result->lives_house_desc }}</textarea>
        </div>

        <h4>{{ trans('messages.service_host_rule.who_lives_house') }}</h4>

        <ul class="list-unstyled amenity-list">

          @foreach($lives_house as $liveshouse)

        <li>
       
        <div class="come">
        <label class="label-large label-inline amenity-label pos-rel">
        <input type="checkbox" value="{{$liveshouse->id}}" name="lives_house" data-saving="{{ $liveshouse->id }}" {{ in_array($liveshouse->id,$prev_lives_house) ? 'checked' : '' }}>
        <span>{{ $liveshouse->name }}</span>
        
        </label>
       </div>
      
        </li>

        @endforeach

        </ul>

        <h4>{{ trans('messages.service_host_rule.speak_language') }}</h4>

        <ul class="list-unstyled amenity-list">

          @foreach($speak_language as $speaklanguage)

        <li>
       
        <div class="come">
        <label class="label-large label-inline amenity-label pos-rel">
        <input type="checkbox" value="{{$speaklanguage->id}}" name="speak_language" data-saving="{{ $speaklanguage->id }}" {{ in_array($speaklanguage->id,$prev_speak_language) ? 'checked' : '' }}>
        <span>{{ $speaklanguage->name }}</span>
        
        </label>
       </div>
      
        </li>

        @endforeach

        <li>
       
        <div class="come">
        <label class="label-large label-inline amenity-label pos-rel">
        <input type="checkbox" value="0" name="speak_language" data-saving="0" {{ in_array('0',$prev_speak_language) ? 'checked' : '' }}>
        <span>{{ trans('messages.service_host_rule.others') }}</span>
        
        </label>
       </div>
      
        </li>

        </ul>


        <h4>{{ trans('messages.service_host_rule.any_pets') }}</h4>

        <ul class="list-unstyled amenity-list " >

          @foreach($pets as $k=>$pets_value)

        <li>
       
        <div class="come">
        <label class="label-large label-inline amenity-label pos-rel">
        <input type="checkbox" value="{{$pets_value['id']}}" name="pets" class="pets" data-saving="{{ $pets_value['id'] }}" {{ in_array($pets_value['id'],$prev_pets) ? 'checked' : '' }} {{$rooms_pets == 'no' ? 'disabled' :''}} >
        <span>{{ $pets_value['name'] }}</span>
        
        </label>
       </div>
      
        </li>

        @endforeach

        <li>
       
        <div class="come">
        <label class="label-large label-inline amenity-label pos-rel">
        <input type="checkbox" value="0" name="pets" class="pets" data-saving="0" {{ in_array('0',$prev_pets) ? 'checked' : '' }} {{$rooms_pets == 'no' ? 'disabled' :''}}>
        <span>{{ trans('messages.service_host_rule.others') }}</span>
        
        </label>
       </div>
      
        </li>

         <li>
       
        <div class="come">
        <label class="label-large label-inline amenity-label pos-rel">
        <input type="checkbox" value="no" name="pets" class="no_pets" data-saving="no" {{ in_array('no',$prev_pets) ? 'checked' : '' }} {{($rooms_pets != 'no' && $rooms_pets != '') ? 'disabled' :''}}>
        <span>{{ trans('messages.service_host_rule.no_pets') }}</span>
        
        </label>
       </div>
      
        </li>

        </ul>


         <div>
          <label class="label-large">{{ trans('messages.service_host_rule.summary') }}</label>
          <textarea class="input-large textarea-resize-vertical host_summary" name="host_summary" rows="4" ng-model="host_summary" placeholder="{{ trans('messages.service_host_rule.summary_placeholder') }}">{{ @$result->host_summary }}</textarea>
        </div>


       
        </div>
        </div>
       

        <div class="not-post-listed row space-top-6 next_step">
        <div class="col-2 space-top-1 lang-chang-label">
        <a data-prevent-default="true" href="{{ url('manage-listing/'.$room_id.'/services') }}" class="back-section-button">{{ trans('messages.lys.back') }}</a>
        </div>
        <div class="col-10 text-right next_step">
        <a data-prevent-default="true" href="{{ url('manage-listing/'.$room_id.'/rules') }}" class="btn btn-large btn-primary next-section-button">{{ trans('messages.lys.next') }}</a>
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
  