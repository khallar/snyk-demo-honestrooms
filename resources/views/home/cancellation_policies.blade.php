@extends('template')
@section('main')
<main id="site-content" role="main">
  <div class="page-container page-container-responsive space-top-4 space-4">
    <div class="cancel_poly">
        <h1>{{trans('messages.cancellation_policy.cancellation_policies')}}</h1>

        <div class="calcel_view_poly">
          <ul>
            <li><i class="fa fa-snowflake-o" aria-hidden="true"></i><p>{{ trans('messages.cancellation_policy.our_cancellation_policy') }} </p></li>
            <li><i class="fa fa-snowflake-o" aria-hidden="true"></i><p>{{ trans('messages.cancellation_policy.in_case_of_cancellation') }}</p></li>
            <li><i class="fa fa-snowflake-o" aria-hidden="true"></i><p>{{ trans('messages.cancellation_policy.if_after_confirming_a_reservation') }} </p></li>
            <li><i class="fa fa-snowflake-o" aria-hidden="true"></i><p>{{ trans('messages.cancellation_policy.if_after_confirming_a_reservation_and_transferring_the_required') }} </p></li>
            <li><i class="fa fa-snowflake-o" aria-hidden="true"></i><p>{{ trans('messages.cancellation_policy.we_will_send_you_the_value') }} </p></li>
            <li><i class="fa fa-snowflake-o" aria-hidden="true"></i><p>{{ trans('messages.cancellation_policy.to_continue_you_need_to_accept') }}</p></li>
            <li><i class="fa fa-snowflake-o" aria-hidden="true"></i><p>{{ trans('messages.cancellation_policy.remember_that_if_you') }}</p></li>
           
          </ul>

        </div>
    </div>
  </div>
</main>
@endsection

