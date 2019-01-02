<div class="header">
  <div class="container">
    <div class="row">
      <div class="col-md-2 col-sm-3 col-xs-12"> <a href="{{url('/')}}" class="logo"><img src="{{asset('/')}}images/pklgo1.png" alt="" /></a>
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="col-md-10 col-sm-12 col-xs-12"> 
        
        <!-- Nav start -->
        
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-collapse collapse" id="nav-main">
            <ul class="nav navbar-nav">
              <li class="{{ Request::url() == route('index') ? 'active' : '' }}"><a href="{{url('/')}}">{{__('Home')}}</a> </li>
              <li class="{{ Request::url() == route('contact.us') ? 'active' : '' }}"><a href="{{ route('contact.us') }}">{{__('Contact us')}}</a> </li>
              @if(Auth::check())
              <li class="dropdown userbtn"><a href="">{{Auth::user()->printUserImage()}}</a>
                <ul class="dropdown-menu">
                  <li><a href="{{route('home')}}"><i class="fa fa-tachometer" aria-hidden="true"></i> {{__('Dashboard')}}</a> </li>
                  <li><a href="{{ route('my.profile') }}"><i class="fa fa-user" aria-hidden="true"></i> {{__('Profile')}}</a> </li>
                  <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form-header').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i> {{__('Logout')}}</a> </li>
                  <form id="logout-form-header" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </ul>
              </li>
              @endif @if(Auth::guard('company')->check())
              <li class="postjob"><a href="{{route('post.job')}}">{{__('Post')}}</a> </li>
              <li class="dropdown userbtn"><a href="">{{Auth::guard('company')->user()->printCompanyImage()}}</a>
                <ul class="dropdown-menu">
                  <li><a href="{{route('company.home')}}"><i class="fa fa-tachometer" aria-hidden="true"></i> {{__('Dashboard')}}</a> </li>
                  <li><a href="{{ route('company.profile') }}"><i class="fa fa-user" aria-hidden="true"></i> {{__('Profile Perusahaan')}}</a></li>
                  <li><a href="{{ route('post.job') }}"><i class="fa fa-desktop" aria-hidden="true"></i> {{__('Post')}}</a></li>
                  <li><a href="{{route('company.messages')}}"><i class="fa fa-envelope-o" aria-hidden="true"></i> {{__('Messages')}}</a></li>
                  <li><a href="{{ route('company.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form-header1').submit();">{{__('Logout')}}</a> </li>
                  <form id="logout-form-header1" action="{{ route('company.logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </ul>
              </li>
              @endif @if(!Auth::user() && !Auth::guard('company')->user())
              <li class="dropdown"><a href="{{route('login')}}">{{__('Sign in')}} <span class="caret"></span></a> 
                
                <!-- dropdown start -->
                
                <ul class="dropdown-menu">
                  <li><a href="{{route('login')}}">{{__('Sign in')}}</a> </li>
                  <li><a href="{{route('register')}}">{{__('Register')}}</a> </li>
                </ul>
                
                <!-- dropdown end --> 
                
              </li>
              @endif
            </ul>
            
            <!-- Nav collapes end --> 
            
          </div>
          <div class="clearfix"></div>
        </div>
        
        <!-- Nav end --> 
        
      </div>
    </div>
    
    <!-- row end --> 
    
  </div>
  
  <!-- Header container end --> 
  
</div>
