@extends('layouts.master')

{{-- This page specific stylesheets --}}
@section('stylesheets')

<link rel="stylesheet" type="text/css" media="screen" href="/css/home.css"/>

@stop

{{-- This page specific content --}}
@section('body')


	<!-- Main component for a primary marketing message or call to action -->

<div  style="background-image:url(../img/main_pic1.jpg); width:100%; background-repeat:no-repeat; blackground-size:cover; position:relative; min-height:480px;">
		<section id="hero">
			<br/><br/>
			<img src="/img/u_logo.png" class="img-responsive center-block" />
	    <div class="row">
			<div class="content">
				<p>โครงการประชุมวิชาการระดับชาติ ภาษา วรรณคดีไทย และการสอนภาษาไทยในฐานะภาษาต่างประเทศ</p>
				<h1>“การเรียนรู้และสร้างสรรค์จากสังคมไทยสู่สังคมโลก” </h1>
			</div>
		</div>
	 </section>
</div>
@include('navbar')


	<div class="container">
		&emsp;&emsp;&emsp;ภาควิชาภาษาไทยและภาษาตะวันออก คณะมนุษยศาสตร์ ร่วมกับ Guangdong University of Foreign Studies  สาธารณรัฐประชาชนจีนและ University of Social Sciences and Humanities, Vietnam National University  Ho Chi Minh City  สาธารณรัฐสังคมนิยมเวียดนาม  จัดโครงการประชุมวิชาการระดับชาติเรื่อง “ภาษา วรรณคดีไทย และการสอนภาษาไทยในฐานะภาษาต่างประเทศ: การเรียนรู้และสร้างสรรค์จากสังคมไทยสู่สังคมโลก ครั้งที่ 2” ระหว่างวันที่ 25-26 มิถุนายน  2558 ณ โรงแรม SwissÔtel le Concorde กรุงเทพมหานคร  เพื่อให้อาจารย์ นักวิจัย นักวิชาการ นิสิตนักศึกษา ได้รับข่าวสาร ข้อมูล ทิศทางในการพัฒนาการเรียนการสอนและการศึกษาวิจัยด้านภาษา วรรณคดี และการสอนภาษาไทยในฐานะภาษาต่างประเทศ  และเป็นเวทีสำหรับอาจารย์ นักวิจัย นักวิชาการ นิสิต/นักศึกษาระดับบัณฑิตศึกษาทุกสถาบันได้เผยแพร่ผลงานทางวิชาการ รวมถึงการแลกเปลี่ยนเรียนรู้ประสบการณ์การค้นคว้าวิจัยด้านภาษา วรรณคดี และการสอนภาษาไทยในฐานะภาษาต่างประเทศ
	</div>


<br/><br/>

<section id="contact">
		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<div class="card"  style="margin-left: 25%;">
					<h2>วิธีการสมัครเข้าร่วมโครงการ</h2>
					<p>ดาวน์โหลดใบสมัครเข้าร่วมโครงการได้ที่ www……. และ www.facebook.com/swuthai  และส่งใบสมัครและหลักฐานการชำระเงินได้ที่ thaiswu2015@gmail.com หรือ โทรสารหมายเลข 02- 02-260-1914</p>
				</div>
			</div>
			<div class="col-xs-12 visible-xs top-buffer"></div>
			<div class="col-xs-12 col-sm-6">
				<div class="card" style="margin-right: 25%;">
					<h2>วิธีการส่งบทความ</h2>
					<p>สามารถส่งบทความเป็นไฟล์ word ผ่านทาง thaiswu2015@gmail.com </p>
				</div>
			</div>
		</div>

		<div class="row top-buffer"></div>

		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<div class="card"  style="margin-left: 25%;">
					<h2>ติดต่อสอบถามรายละเอียดการประชุม</h2>
					<p><span>Facebook :</span><span class="indent">www.facebook.com/swuthai</span></p>
					<p><span>หมายเลขโทรศัพท์ :</span><span class="indent">02-261-1661 ต่อ 16239, 16269</span></p>
					<p><span>Email :</span><span class="indent"> thaiswu2015@gmail.com </span></p>
				</div>
			</div>
			<div class="col-xs-12 visible-xs top-buffer"></div>
			<div class="col-xs-12 col-sm-6">
				<div class="card" style="margin-right: 25%;">
					<h2>การเดินทางไปสถานที่จัดการประชุมวิชาการระดับชาติ</h2>
					<p>การประชุมวิชาการระดับชาติ ครั้งที่ 2 จัดที่โรงแรม SwissÔtel le Concorde ถนนรัชดาภิเษก แขวงห้วยขวาง เขตห้วยขวาง กรุงเทพฯ สามารถเดินทางได้ด้วยรถไฟฟ้าใต้ดิน (MRT) สถานีห้วยขวาง ทางออกที่ 2 รถโดยสารประจำทาง สาย 54, 73, 73ก, 136, 137, 179, 185, 206, 514, 517, 36ก, 122, 528, 529 </p>
				</div>
			</div>
		</div>

		<div class="row top-buffer"></div>

		<div class="row">
			<div class="col-xs-12">
				<div class="card" style="margin-left: 12%;margin-right: 12%;">
					<h2>แผนที่</h2>
					<div class="google-maps"> 
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15500.157239847927!2d100.574209!3d13.776503!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x99d6f1a839254d5a!2sSwiss%C3%B4tel+Le+Concorde!5e0!3m2!1sen!2sth!4v1433606819346"  width="400" height="300" frameborder="0" style="border:0"></iframe>
					</div>
				</div>
			</div>
		</div>


</section>




<div class="container quotes">
	<div class="wrapper">
		<div class="content">
			<h2>“การเรียนรู้และสร้างสรรค์จากสังคมไทยสู่สังคมโลก”</h2>
		</div>
	</div>
</div>


@include('footer')

@stop

{{-- This page specific scripts --}}
@section('scripts')

@stop
