<!-- SR_REQUEST_added-12-02-2019 -->
<div id="js-manage-listing-content-container" class="manage-listing-content-container" ng-init="private_bathroom='{{$result->private_bathrooms}}';">
      <div class="manage-listing-content-wrapper">
        <div id="js-manage-listing-content" class="manage-listing-content col-lg-7 col-md-7 lang-chang-label">

        <div>
        <div>
        <div class="space-4">
        <h3>{{ trans('messages.service_host_rule.bathroom') }}</h3>
        <p class="text-muted">{{ trans('messages.lys.bathroom_desc') }}</p>
       
        </div>
        <hr>
        </div>


        

        <div>
        <div class="js-section">
        <div style="display:none;" class="js-saving-progress saving-progress">
        <h5>{{ trans('messages.lys.saving') }}...</h5>
        </div>

        <h4>{{ trans('messages.service_host_rule.rooms_private_house') }}</h4>

        <ul class="list-unstyled amenity-list">

        <li>
       
        <div class="come">
        <label class="label-large label-inline amenity-label pos-rel">
        <input type="radio" value="Yes" class="bathroom" name="private_bathrooms" data-saving="Yes" {{ $result->private_bathrooms == 'Yes' ? 'checked' : '' }}>
        <span>{{ trans('messages.service_host_rule.yes') }}</span>
        
        </label>
       </div>
      
        </li>

        <li>
       
        <div class="come">
        <label class="label-large label-inline amenity-label pos-rel">
         <input type="radio" value="No" class="bathroom" name="private_bathrooms" data-saving="No" {{ $result->private_bathrooms == 'No' ? 'checked' : '' }}>
        <span>{{ trans('messages.service_host_rule.no') }}</span>
        
        </label>
       </div>
      
        </li>
        </ul>

        <span class="shared_bathrooms" ng-show="private_bathroom == 'No'">

        <h4>{{ trans('messages.service_host_rule.rooms_shared_house') }}</h4>

        <ul class="list-unstyled amenity-list">
          @for($i=1;$i<=4;$i++)

        <li>
       
        <div class="come">
        <label class="label-large label-inline amenity-label pos-rel">
        <input type="radio" value="{{ $i }}" class="bathroom" name="bathrooms" data-saving="{{ $i }}" {{ $result->bathrooms == $i ? 'checked' : '' }}>
        <span> {{ ($i == '4') ? $i.'+' : $i }}</span>
        
        </label>
       </div>
      
        </li>
        @endfor

       
        </ul>
      </span>
       
        </div>
        </div>
       

        <div class="not-post-listed row space-top-6 next_step">
        <div class="col-2 space-top-1 lang-chang-label">
        <a data-prevent-default="true" href="{{ url('manage-listing/'.$room_id.'/rules') }}" class="back-section-button">{{ trans('messages.lys.back') }}</a>
        </div>
        <div class="col-10 text-right next_step">
        <a data-prevent-default="true" href="{{ url('manage-listing/'.$room_id.'/amenities') }}" class="btn btn-large btn-primary next-section-button">{{ trans('messages.lys.next') }}</a>
        </div>
        </div>
        </div>
        </div>
 
         <div class="lang-help manage-listing-help col-lg-4 col-md-4 hide-sm" id="js-manage-listing-help">
          <div class="manage-listing-help-panel-wrapper">
            <div class="panel manage-listing-help-panel">
              <div class="help-header-icon-container text-center va-container-h">
                {!! Html::image('images/lightbulb2x.png', '', ['class' => 'col-center', 'width' => '50', 'height' => '50']) !!}
              </div>
              <div class="panel-body">
                <h4 class="text-center">{{ trans('messages.lys.bathroom_help_title') }}</h4>
                <p>{{ trans('messages.lys.bathroom_help_desc') }}</p>
              </div>
            </div>
          </div>
        </div>
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