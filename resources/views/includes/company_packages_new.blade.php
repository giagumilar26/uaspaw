<div class="paypackages"> 

  <!---four-paln-->

  <div class="four-plan">

    <h3>{{__('Our Packages')}}</h3>

    <div class="row"> @foreach($packages as $package)

      <div class="col-md-4 col-sm-6 col-xs-12">

        <ul class="boxes">

          <li class="icon"><i class="fa fa-paper-plane" aria-hidden="true"></i></li>

          <li class="plan-name">{{$package->package_title}}</li>

          <li>

            <div class="main-plan">

              <div class="plan-price1-1">Rp.</div>

              <div class="plan-price1-2">{{$package->package_price}}</div>

              <div class="clearfix"></div>

            </div>

          </li>

          <li class="plan-pages">{{__('Durasi Package')}} : {{$package->package_num_days}} {{__('Hari')}}</li>

          @if((bool)$siteSetting->is_paypal_active)

          <li class="order paypal"><a href="{{route('order.package', $package->id)}}"><i class="fa fa-cc-paypal" aria-hidden="true"></i> {{__('pay with paypal')}}</a></li>

          @endif

        </ul>

      </div>

      @endforeach </div>

  </div>

  <!---end four-paln--> 

</div>

