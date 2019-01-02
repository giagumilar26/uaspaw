<!--Footer-->
<div class="btad">{!! $siteSetting->above_footer_ad !!}</div>


<div class="footerWrap"> 

  <div class="container">

    <div class="row"> 

      

      <!--Quick Links-->
      <div class="col-md-1 col-sm-12"></div>
      <div class="col-md-3 col-sm-6">

        <h5>{{_('Quick Links')}}</h5>

        <!--Quick Links menu Start-->

        <ul class="quicklinks">

          <li><a href="{{ route('index') }}">{{__('Home')}}</a></li>

          <li><a href="{{ route('contact.us') }}">{{__('Contact Us')}}</a></li>

        </ul>

      </div>

      <!--Quick Links menu end-->
      
      <div class="col-md-3 col-sm-6"></div>

      <!--About Us-->

      <div class="col-md-3 col-sm-6">

        <h5>{{__('Contact Us')}}</h5>

        <div class="address">{{ $siteSetting->site_street_address }}</div>

        <div class="email"> <a href="mailto:{{ $siteSetting->mail_to_address }}">{{ $siteSetting->mail_to_address }}</a> </div>

        <div class="phone"> <a href="tel:{{ $siteSetting->site_phone_primary }}">{{ $siteSetting->site_phone_primary }}</a></div>

        <!-- Social Icons -->



        <!-- Social Icons end --> 
		
      </div>

      <!--About us End--> 

      

      

    </div>

  </div>

</div>

<!--Footer end--> 



<!--Copyright-->

<div class="copyright">

  <div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="bttxt">{{__('Copyright')}} &copy; {{date('Y')}} {{ $siteSetting->site_name }}. {{__('All Rights Reserved')}}. {{__('Design by')}}: <a href="{{url('/')}}http://graphicriver.net/user/ecreativesol" target="_blank">Kelompok11</a></div>
		</div>
	</div>
    

  </div>

</div>

