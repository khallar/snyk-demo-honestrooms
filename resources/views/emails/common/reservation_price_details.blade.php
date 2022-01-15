
@if($to == 'guest')
 <div class="panel-body receipt_payment" style="margin-top: 30px;">
      <div class="col-md-12">
          <table style="width: 100%;table-layout: fixed;border-collapse: collapse;font-size: 14px;color: #565a5c">
            <tr>
              <td style="padding: 15px;border: 1px solid #ccc;">
                  <div class="payment_book">
                     <ul class="recepit_book_pay" style="padding: 0;">
                <li class="payment_book_head" style="list-style-type: none;padding: 10px;">
                  <label style="font-weight: 600;">
                 {{trans('messages.new_rooms.rent_per_month', [], null, $locale)}}: {{ $result['currency']['symbol'].$result['per_night']}}
                </label>
              </li>
            </ul>
              <p style="color: #ff5a5f;font-size: 16px;font-weight: 600;text-align: center;margin: 10px 0;">{{trans('messages.new_rooms.host_accept_booking_msg', [], null, $locale)}}:</p>

              <ul class="recepit_book_pay"  style="padding: 0;">
                <li class="payment_book_head"  style="list-style-type: none;padding: 10px;">
                  <label style="font-weight: 600;">
                 {{trans('messages.new_rooms.one_time_service_fee', [], null, $locale)}}: {{ $result['currency']['symbol'].$result['service']}}
                </label>
              </li>
               <li class="payment_book_head"  style="list-style-type: none;padding: 10px;">
                <label style="font-weight: 600;">
                 {{trans('messages.new_rooms.rental_prepayment', [], null, $locale)}}({{$result['rental_percentage']}}%): {{ $result['currency']['symbol'].$result['rental_prepayment']}}
                </label>
              </li>
               <li class="payment_book_head"  style="list-style-type: none;padding: 10px;">
                 <label style="font-weight: 600;">
                 {{ trans('messages.new_rooms.total_to_pay_for_booking', [], null, $locale) }}: {{ $result['currency']['symbol'].$result['total']}}
                </label>
                
                </li>
                
              </ul>
            </div>

              </td>
            </tr>
            <tr>
               <td style="padding: 15px;border: 1px solid #ccc; ">
                  <div class="payment_book">
              <p style="color: #ff5a5f;font-size: 16px;font-weight: 600;text-align: center;margin: 10px 0;">{{trans('messages.new_rooms.payments_collect_to_guest', [], null, $locale)}}</p>

              <ul style="padding: 0;">
                <li class="payment_book_head"  style="list-style-type: none;padding: 10px;border-bottom: 1px solid #ccc;">
                  <label style="font-weight: 600;">{{trans('messages.new_rooms.when_guest_arrive', [], null, $locale)}} (<span class="booking_checkin"> {{ $result['checkinformatted'] }}</span>)</label>
                  <p style="margin: 5px 0px;">{{trans('messages.new_rooms.monthly_rent', [], null, $locale)}}: <span class="lang-chang-label">{{$result['currency']['symbol']}}</span><span  class="month_price" value="">{{$result['per_night']}}</span></p>
                   @if($result['security'] > 0)
                   <p class="security_fees">{{trans('messages.new_rooms.security_deposit', [], null, $locale)}}: <span class="lang-chang-label">{{$result['currency']['symbol']}}</span><span  id="security_fees" value="">{{$result['security']}}</span></p>
                   @endif
                </li>
                <li class="payment_book_head"  style="list-style-type: none;padding: 10px;border-bottom: 1px solid #ccc;">
                  <label style="font-weight: 600;">{{trans('messages.new_rooms.during_your_stay', [], null, $locale)}}:</label>
                 <p style="margin: 5px 0px;">{{trans('messages.new_rooms.monthly_rent', [], null, $locale)}}: <span class="lang-chang-label">{{$result['currency']['symbol']}}</span><span  class="month_price" value="">{{$result['per_night']}}</span></p>
                </li>
                 <li class="payment_book_head"  style="list-style-type: none;padding: 10px;">
                  <label style="font-weight: 600;">{{trans('messages.new_rooms.when_guest_leave', [], null, $locale)}} (<span class="booking_checkout">{{ $result['checkoutformatted'] }}</span>)</label>
                <!--   <p style="margin: 5px 0px;">{{trans('messages.new_rooms.deposit_back_to_host', [], null, $locale)}}</p> -->
                </li>
                
              </ul>
            </div>

              </td>
            </tr>
          </table>
        </div>
        </div>
        @endif


        @if($to == 'admin')
 <div class="panel-body receipt_payment" style="margin-top: 30px;">
      <div class="col-md-12">
          <table style="width: 100%;table-layout: fixed;border-collapse: collapse;font-size: 14px;color: #565a5c">
            <tr>
              <td style="padding: 15px;border: 1px solid #ccc;">
                  <div class="payment_book">
                     <ul class="recepit_book_pay" style="padding: 0;">
                <li class="payment_book_head" style="list-style-type: none;padding: 10px;">
                  <label style="font-weight: 600;">
                 {{trans('messages.new_rooms.rent_per_month', [], null, $locale)}}: {{ $result['currency']['symbol'].$result['per_night']}}
                </label>
              </li>
            </ul>
              <p style="color: #ff5a5f;font-size: 16px;font-weight: 600;text-align: center;margin: 10px 0;">{{trans('messages.new_rooms.host_accept_booking_admin_msg', [], null, $locale)}}:</p>

              <ul class="recepit_book_pay"  style="padding: 0;">
                <li class="payment_book_head"  style="list-style-type: none;padding: 10px;">
                  <label style="font-weight: 600;">
                 {{trans('messages.new_rooms.one_time_service_fee', [], null, $locale)}}: {{ $result['currency']['symbol'].$result['service']}}
                </label>
              </li>
               <li class="payment_book_head"  style="list-style-type: none;padding: 10px;">
                <label style="font-weight: 600;">
                 {{trans('messages.new_rooms.rental_prepayment', [], null, $locale)}}({{$result['rental_percentage']}}%): {{ $result['currency']['symbol'].$result['rental_prepayment']}}
                </label>
              </li>
               <li class="payment_book_head"  style="list-style-type: none;padding: 10px;">
                 <label style="font-weight: 600;">
                 {{ trans('messages.new_rooms.total_to_pay_for_booking', [], null, $locale) }}: {{ $result['currency']['symbol'].$result['total']}}
                </label>
                
                </li>
                
              </ul>
            </div>

              </td>
            </tr>
            <tr>
               <td style="padding: 15px;border: 1px solid #ccc; ">
                  <div class="payment_book">
              <p style="color: #ff5a5f;font-size: 16px;font-weight: 600;text-align: center;margin: 10px 0;">{{trans('messages.new_rooms.payments_collect_to_admin_guest', [], null, $locale)}}</p>

              <ul style="padding: 0;">
                <li class="payment_book_head"  style="list-style-type: none;padding: 10px;border-bottom: 1px solid #ccc;">
                  <label style="font-weight: 600;">{{trans('messages.new_rooms.when_guest_arrive', [], null, $locale)}} (<span class="booking_checkin"> {{ $result['checkinformatted'] }}</span>)</label>
                  <p style="margin: 5px 0px;">{{trans('messages.new_rooms.monthly_rent', [], null, $locale)}}: <span class="lang-chang-label">{{$result['currency']['symbol']}}</span><span  class="month_price" value="">{{$result['per_night']}}</span></p>
                   @if($result['security'] > 0)
                   <p class="security_fees">{{trans('messages.new_rooms.security_deposit', [], null, $locale)}}: <span class="lang-chang-label">{{$result['currency']['symbol']}}</span><span  id="security_fees" value="">{{$result['security']}}</span></p>
                   @endif
                </li>
                <li class="payment_book_head"  style="list-style-type: none;padding: 10px;border-bottom: 1px solid #ccc;">
                  <label style="font-weight: 600;">{{trans('messages.new_rooms.during_guest_stay', [], null, $locale)}}:</label>
                 <p style="margin: 5px 0px;">{{trans('messages.new_rooms.monthly_rent', [], null, $locale)}}: <span class="lang-chang-label">{{$result['currency']['symbol']}}</span><span  class="month_price" value="">{{$result['per_night']}}</span></p>
                </li>
                 <li class="payment_book_head"  style="list-style-type: none;padding: 10px;">
                  <label style="font-weight: 600;">{{trans('messages.new_rooms.when_guest_leave', [], null, $locale)}} (<span class="booking_checkout">{{ $result['checkoutformatted'] }}</span>)</label>
                <!--   <p style="margin: 5px 0px;">{{trans('messages.new_rooms.deposit_back_to_host', [], null, $locale)}}</p> -->
                </li>
                
              </ul>
            </div>

              </td>
            </tr>
          </table>
        </div>
        </div>
        @endif



        @if($to == 'host')
 <div class="panel-body receipt_payment" style="margin-top: 30px;">
      <div class="col-md-12">
          <table style="width: 100%;table-layout: fixed;border-collapse: collapse;font-size: 14px;color: #565a5c">
            
            <tr>
               <td style="padding: 15px;border: 1px solid #ccc; ">
                  <div class="payment_book">
              <p style="color: #ff5a5f;font-size: 16px;font-weight: 600;text-align: center;margin: 10px 0;">{{trans('messages.new_rooms.payments_collect_to_guest', [], null, $locale)}}</p>

              <ul style="padding: 0;">
                <li class="payment_book_head"  style="list-style-type: none;padding: 10px;border-bottom: 1px solid #ccc;">
                  <label style="font-weight: 600;">{{trans('messages.new_rooms.when_guest_arrive', [], null, $locale)}} (<span class="booking_checkin"> {{ $result['checkinformatted'] }}</span>)</label>
                  <p style="margin: 5px 0px;">{{trans('messages.new_rooms.monthly_rent', [], null, $locale)}}: <span class="lang-chang-label">{{$result['currency']['symbol']}}</span><span  class="month_price" value="">{{$result['per_night']}}</span></p>
                   @if($result['security'] > 0)
                   <p class="security_fees">{{trans('messages.new_rooms.security_deposit', [], null, $locale)}}: <span class="lang-chang-label">{{$result['currency']['symbol']}}</span><span  id="security_fees" value="">{{$result['security']}}</span></p>
                   @endif
                </li>
                <li class="payment_book_head"  style="list-style-type: none;padding: 10px;border-bottom: 1px solid #ccc;">
                  <label style="font-weight: 600;">{{trans('messages.new_rooms.during_guest_stay', [], null, $locale)}}:</label>
                 <p style="margin: 5px 0px;">{{trans('messages.new_rooms.monthly_rent', [], null, $locale)}}: <span class="lang-chang-label">{{$result['currency']['symbol']}}</span><span  class="month_price" value="">{{$result['per_night']}}</span></p>
                </li>
                 <li class="payment_book_head"  style="list-style-type: none;padding: 10px;">
                  <label style="font-weight: 600;">{{trans('messages.new_rooms.when_guest_leave', [], null, $locale)}} (<span class="booking_checkout">{{ $result['checkinformatted'] }}</span>)</label>
                <!--   <p style="margin: 5px 0px;">{{trans('messages.new_rooms.deposit_back_to_host', [], null, $locale)}}</p> -->
                </li>
                
              </ul>
            </div>

              </td>
            </tr>
          </table>
        </div>
        </div>
        @endif