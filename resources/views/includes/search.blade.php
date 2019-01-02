<div class="searchwrap">

  <div class="container">

    <h3>{{__('PKL GO')}} <span>{{__('Memberi Kemudahan dan Kenyamanan')}}</span></h3>

    

    @if(Auth::guard('company')->check())


    @else

    @endif

    

    <!-- button start 

    <div class="getstarted"><a href="{{url('/')}}"><i class="fa fa-user" aria-hidden="true"></i> {{__('Get Started Now')}}</a></div>

    button end --> 

    

  </div>

</div>