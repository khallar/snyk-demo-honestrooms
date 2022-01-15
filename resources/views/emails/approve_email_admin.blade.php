@extends('emails.template')

@section('emails.main')
<div style="margin:0;padding:0;font-family:&quot;Helvetica Neue&quot;,&quot;Helvetica&quot;,Helvetica,Arial,sans-serif;margin-top:1em">
<div style="margin:0;padding:0;font-family:&quot;Helvetica Neue&quot;,&quot;Helvetica&quot;,Helvetica,Arial,sans-serif;margin-top:1em">
  	<p style="margin:0;padding:0;font-family:&quot;Helvetica Neue&quot;,&quot;Helvetica&quot;,Helvetica,Arial,sans-serif">
     	{{trans('messages.new_rooms.awaiting_admin_approval',[], null, $locale)}} <strong>{{$result['name']}}</strong>. {{trans('messages.new_rooms.waiting_approval_for_listed',[], null, $locale)}}
		
	</p>
</div>

</div>
@stop