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
	<section id="contact">
		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<div class="row card" style="margin-left: 25%;">
					<h2>เอกสารการประชุม</h2>
					<a href="/files/1.ใบสมัครเข้าร่วมโครงการประชุมระดับชาติ.pdf">1. ใบสมัครเข้าร่วมโครงการประชุมระดับชาติ</a> <br/>
					<a href="/files/2.รายละเอียดบทความ.pdf">2. รายละเอียดบทความ</a><br/>
					<a href="/files/3.แบบฟอร์มการจัดรูปแบบบทความ.pdf">3. แบบฟอร์มการจัดรูปแบบบทความวิชาการ</a><br/>
					<a href="/files/4.ตัวอย่างบบทความ.pdf">4. ตัวอย่างบทความวิชาการ</a><br/>
					<a href="/files/ใบสมัครเข้าร่วมโครงการประชุมระดับชาติ.doc">5. ใบสมัครเข้าร่วมโครงการประชุมระดับชาติ (Word)</a><br/>
					<a href="/files/ใบสมัครเข้าร่วมโครงการประชุมระดับชาติ.pdf">6. ใบสมัครเข้าร่วมโครงการประชุมระดับชาติ (pdf)</a><br/>
					<a href="/files/Program-ระดับชาติ 2015_PR2.pdf">7. กำหนดการประชุม</a><br/>
				</div>
			</div>	
		</div>
	</section>
</div>

@include('footer')

@stop

{{-- This page specific scripts --}}
@section('scripts')

@stop
