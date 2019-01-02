@extends('layouts.app')


@section('content')

<!-- Header start -->
@include('includes.header')
<!-- Header end --> 

<!-- Search start -->
@include('includes.search')
<!-- Search End --> 

<!-- Top Employers start -->
@include('includes.top_employers')
<!-- Top Employers ends --> 

<!-- How it Works start -->
@include('includes.how_it_works')
<!-- How it Works Ends --> 


@include('includes.footer')
@endsection
@push('scripts') 
<script>
    $(document).ready(function ($) {
        $("form").submit(function () {
            $(this).find(":input").filter(function () {
                return !this.value;
            }).attr("disabled", "disabled");
            return true;
        });
        $("form").find(":input").prop("disabled", false);
	});
</script>


@endpush
