<div class="section greybg">
  <div class="container"> 
    <!-- title start -->
    <div class="titleTop">
      <div class="subtitle">{{__('')}}</div>
      <h3>{{__('Instansi')}} <span>{{__('Terdaftar')}}</span></h3>
    </div>
    <!-- title end -->
    
    <ul class="employerList">
      <!--employer-->
      @if(isset($topCompanyIds) && count($topCompanyIds))
      @foreach($topCompanyIds as $company_id_num_jobs)
      <?php
      $company = App\Company::where('id','=',$company_id_num_jobs->company_id)->active()->first();
	  if(null !== $company){
	  ?>
      <li data-toggle="tooltip" data-placement="top" title="{{$company->name}}" data-original-title="{{$company->name}}"><a href="{{route('company.detail', $company->slug)}}" title="{{$company->name}}">{{$company->printCompanyImage()}}</a></li>
      <?php
	  }
	  ?>
      @endforeach
      @endif
    </ul>
    
  </div>

</div>