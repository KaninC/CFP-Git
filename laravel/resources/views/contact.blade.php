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
				<p>โครงการประชุมวิชาการระดับชาติ ภาษา วรรณคดีไทย และการสอนภาษาไทยในฐานะภาษาต่างประเทศ</p>
				<h1> การเรียนรู้และสร้างสรรค์จากสังคมไทยสู่สังคมโลก</h1>
			</div>
		</div>
	 </section>
</div>
@include('navbar')


<div class="container">

	<!-- Main component for a primary marketing message or call to action -->
	<section id="contact">
		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<div class="card" style="margin-left: 25%;">
					<h2>ติดต่อสอบถามรายละเอียดการประชุม</h2>
					<p><span>ประธานโครงการ</span><span class="indent">  ผู้ช่วยศาสตราจารย์ ดร.สุภัค  มหาวรากร</span></p>
					<p><span>เลขานุการโครงการ</span><span class="indent">  อาจารย์ ดร.นิธิอร  พรอำไพสกุล</span></p>
					<p>ภาควิชาภาษาไทยและภาษาตะวันออกคณะมนุษยศาสตร์  มหาวิทยาลัยศรีนครินทรวิโรฒ</p>
					<p><span>Facebook :</span><span class="indent">www.facebook.com/swuthai</span></p>
					<p><span>หมายเลขโทรศัพท์ :</span><span class="indent">02-261-1661 ต่อ 16239, 16269</span></p>
					<p><span>Email :</span><span class="indent"> thaiswu2015@gmail.com </span></p>
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
