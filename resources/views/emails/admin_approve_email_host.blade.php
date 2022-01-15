@extends('emails.template')

@section('emails.main')
<div style="margin:0;padding:0;font-family:&quot;Helvetica Neue&quot;,&quot;Helvetica&quot;,Helvetica,Arial,sans-serif;margin-top:1em">
<div style="margin:0;padding:0;font-family:&quot;Helvetica Neue&quot;,&quot;Helvetica&quot;,Helvetica,Arial,sans-serif;margin-top:1em">
  
    {{ trans('messages.email.congratulations',[], null, $locale) }}! <a href="{{ $url.('rooms/'.$room_id) }}" style="margin:0;padding:0;font-family:&quot;Helvetica Neue&quot;,&quot;Helvetica&quot;,Helvetica,Arial,sans-serif;color:#ff5a5f;text-decoration:none" target="_blank"> {{ trans('messages.email.rooms_for',[], null, $locale) }} {{ $room_name }}</a> {{ trans('messages.email.was_listed_on',['site_name'=>$site_name],null, $locale) }} <span class="aBn" data-term="goog_778163106" tabindex="0"><span class="aQJ">{{ $created_time }}</span></span> {{ trans('messages.email.search_result_in',[], null, $locale) }}.

</div>
<div style="margin:0;padding:0;font-family:&quot;Helvetica Neue&quot;,&quot;Helvetica&quot;,Helvetica,Arial,sans-serif;margin-top:1em">
  
{{ trans('messages.email.please_unlist_it',[], null, $locale) }}
</div>
</div>
@stop