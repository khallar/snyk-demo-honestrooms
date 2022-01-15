@extends('template')

@section('main')
<main id="site-content" role="main" ng-controller="conversation">

@include('common.subheader')  

<div class="page-container page-container-responsive row-space-top-4">

    <h1 class="h2 row-space-4 conversation_head">
      {{ trans('messages.new_rooms.resubmit_msg') }} 
    </h1>



    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 lang-chang-label host_conver">

<ul class="list-unstyled host_ul">

  <li class="thread-list-item" id="message_friction_react"></li>

  
<div id="thread-list">
@for($i=0; $i < count($messages); $i++)


  <li id="question2_post_{{ $messages[$i]->id }}" class="thread-list-item">



<div class="row row-condensed">
     

      <div class="row row-condensed">
          <div class="col-sm-2 col-md-2 text-center">
           <img width="36" height="36" title="Admin" class ="media-photo media-round" src="{{ url('admin_assets/dist/img/avatar04.png') }}" alt="Admin">
            <p class="trans">{{ trans('messages.new_rooms.admin') }} </p>
          </div>

        <div class="col-sm-10 col-md-10">
          <div class="row-space-4">
    <div class="panel panel-quote panel-quote-flush ">
      <div class="panel-body">

          <div class="message-text">
              <p class="trans">{{ $messages[$i]->message}}</p>
          </div>
      </div>

    </div>

    <div class="time-container text-muted ">
      <small title="{{ $messages[$i]->created_at }}" class="time">
          {{ $messages[$i]->created_time }}

      </small>
      <small class="exact-time hide">
        {{ $messages[$i]->created_at }}
      </small>
    </div>
</div>

        </div>

      </div>
  </li>
  


@endfor
</div>
</ul>

      </div>
     
    </div>

</div>

</main>
@stop