<div class="instoretxt">
          <div class="credit">{{__('Package ')}}: <strong>{{$package->package_title}} - Rp.{{$package->package_price}}</strong></div>
          <div class="credit">{{__('Durasi Package')}} : <strong>{{Auth::guard('company')->user()->package_start_date->format('d M, Y')}}</strong> - <strong>{{Auth::guard('company')->user()->package_end_date->format('d M, Y')}}</strong></div>

  
</div>
