@extends('layouts.master')

{{-- This page specific stylesheets --}}
@section('stylesheets')

<link rel="stylesheet" type="text/css" media="screen" href="/css/home.css"/>

<style>
	body {
		/*Automatically stretching your background image to fit the browser window*/
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover; 
	}
</style>

@stop

{{-- This page specific content --}}
@section('body')

<div  style="background-image:url(../img/main_pic1.jpg); width:100%; background-repeat:no-repeat; blackground-size:cover; position:relative; min-height:480px;">
		<section id="hero">
			<br/><br/>
			<img src="/img/u_logo.png" class="img-responsive center-block" />
	    <div class="row">
			<div class="content">
				<p>โครงการประชุมวิชาการระดับชาติ</p>
				<h1>“การเรียนรู้และสร้างสรรค์จากสังคมไทยสู่สังคมโลก” </h1>
			</div>
		</div>
	 </section>
</div>
@include('navbar')


<div class="container">
	<img src="/img/POSTER-proof-4.jpg" class="img-responsive center-block" />
</div>

@include('footer')

@stop

{{-- This page specific scripts --}}
@section('scripts')

@stop
