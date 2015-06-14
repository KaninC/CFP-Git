@extends('layouts.master')

{{-- This page specific stylesheets --}}
@section('stylesheets')

<link rel="stylesheet" type="text/css" media="screen" href="/css/home.css"/>
<style>
	html,
	body {
		height: 100%;
		background-color: rgba(230, 230, 230, 1);
	}
	
	section#footer > p {
		color: black;
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
	<!-- Main component for a primary marketing message or call to action -->
	<section id="products">
		<h2 class="text-left">คณะกรรมการดำเนินงานประชุมวิชาการ</h2>

		@include('committee', [
			'committee' => [
				'01' => [
					'name' => 'ผู้ช่วยศาสตราจารย์ ดร.สุภัค  มหาวรากร ประธานโครงการ',
					'img' => 'อ.สุภัค.JPG'
				], 
				'02' => [
					'name' => 'อาจารย์ ดร.นิธิอร  พรอำไพสกุล  กรรมการและเลขานุการ',
					'img' => 'อ.ดร.นิธิอร.JPG'
				],
				'03' => [
					'name' => 'รองศาสตราจารย์ ดร.ศานติ  ภักดีคำ  กรรมการ',
					'img' => 'รศ.ศานติ.jpg'
				],
				'04' => [
					'name' => 'รองศาสตราจารย์ผกาศรี  เย็นบุตร กรรมการ',
					'img' => ''
				]
			]
		])

		@include('committee', [
			'committee' => [
				'01' => [
					'name' => 'ผู้ช่วยศาสตราจารย์ ดร. ดวงเด่น  บุญปก กรรมการ',
					'img' => 'อ.ดวงเด่น.jpg'
				], 
				'02' => [
					'name' => 'ผู้ช่วยศาสตราจารย์ ดร. พิมพาภรณ์  บุญประเสริฐ  กรรมการ',
					'img' => 'อ.พิมพาภรณ์.jpg'
				],
				'03' => [
					'name' => 'ผู้ช่วยศาสตราจารย์ ดร.ภาณุพงศ์  อุดมศิลป์ กรรมการ',
					'img' => 'ผศ.ดร.ภาณุพงศ์.jpg'
				],
				'04' => [
					'name' => 'ผู้ช่วยศาสตราจารย์สมเกียรติ  คู่ทวีกุล กรรมการ',
					'img' => 'อ.สมเกียรติ.jpg'
				]
			]
		])

		@include('committee', [
			'committee' => [
				'01' => [
					'name' => 'ผู้ช่วยศาสตราจารย์สิทธินี  ธรรมชัย  กรรมการ',
					'img' => 'สิทธินี.jpg'
				], 
				'02' => [
					'name' => 'อาจารย์ ดร.ภูวกร  ฉัตรบำรุงสุข กรรมการ',
					'img' => 'ภูวกร.jpg'
				],
				'03' => [
					'name' => 'อาจารย์ ดร. รัชนีย์ญา  กลิ่นน้ำหอม กรรมการ',
					'img' => 'อ.รัชนีย์ญา.jpg'
				],
				'04' => [
					'name' => 'อาจารย์ ดร.สุนทรี  คันธรรมพันธ์ กรรมการ',
					'img' => 'อ.สุนทรี.JPG'
				]
			]
		])

		@include('committee', [
			'committee' => [
				'01' => [
					'name' => 'อาจารย์ ดร.Huynh Van Phuc กรรมการ',
					'img' => 'อ.Phuc.jpg'
				], 
				'02' => [
					'name' => 'อาจารย์กนกกร  ตัลยารักษ์ กรรมการ',
					'img' => ''
				],
				'03' => [
					'name' => 'อาจารย์บรรพต	  ศิริชัย กรรมการ',
					'img' => 'อ.บรรพต (2).JPG'
				],
				'04' => [
					'name' => 'อาจารย์พัทธยา  จิตต์เมตตา กรรมการ',
					'img' => 'อ.พัทธยา.JPG'
				]
			]
		])

		@include('committee', [
			'committee' => [
				'01' => [
					'name' => 'อาจารย์ภัทร์อร  พิพัฒนกุล กรรมการ',
					'img' => 'อ.ภัทร์อร 001.jpg'
				], 
				'02' => [
					'name' => 'อาจารย์สยุมพร  ฉันทสิทธิพร กรรมการ',
					'img' => 'อ.สยุมพร.jpg'
				],
				'03' => [
					'name' => 'อาจารย์อาทินันท์  กาญจนดุล กรรมการ',
					'img' => 'อ.อาทินันท์.jpg'
				],
				'04' => [
					'name' => 'อาจารย์อำไพ  อำรุงทรัพย์ กรรมการ',
					'img' => 'อำไพ.jpg'
				]
			]
		])

		@include('committee', [
			'committee' => [
				'01' => [
					'name' => 'อาจารย์ Nguyen Thi Trang กรรมการ',
					'img' => 'อ.Trang.jpg'
				], 
				'02' => [
					'name' => 'อาจารย์ Takayuki  Fujimoto กรรมการ',
					'img' => 'ฟุจิโมโต้.jpg'
				],
				'03' => [
					'name' => 'อาจารย์ Tsukasa  Takagi กรรมการ',
					'img' => 'takagi 001.jpg'
				],
				'04' => [
					'name' => 'นางสาวกรีกมล  หนูเกื้อ กรรมการ',
					'img' => 'กรีกมล.jpg'
				]
			]
		])

		@include('committee', [
			'committee' => [
				'01' => [
					'name' => 'นางสาวจรรยวรรณ  จรัสจรูญฤทธิ์ ผู้ประสานงานฝ่ายลงทะเบียนและต้อนรับ',
					'img' => 'จรรยวรรณ.jpg'
				], 
				'02' => [
					'name' => 'นางสาวชญาตี  เงารังษี กรรมการ',
					'img' => 'ชญาตี.jpg'
				],
				'03' => [
					'name' => 'นางสาวณัฐปภัสร์  ชาญนนทวัฒน์ ผู้ประสานงานฝ่ายเอกสาร',
					'img' => 'ณัฐปภัสร์.jpg'
				],
				'04' => [
					'name' => 'นายนรินทร์วัฒน์	  รัตนมณี กรรมการ',
					'img' => 'นรินทร์วัฒน์.JPG'
				]
			]
		])

		@include('committee', [
			'committee' => [
				'01' => [
					'name' => 'นางสาวนนท์กมล  ลิ้มธนะกุล ผู้ประสานงานฝ่ายสื่อโสตและทัศนูปกรณ์',
					'img' => 'นนท์กมล (2).jpg'
				], 
				'02' => [
					'name' => 'นางสาวเพ็ญศิริ  รัศมี ผู้ประสานงานฝ่ายพิธีการ',
					'img' => 'เพ็ญศิริ.jpg'
				],
				'03' => [
					'name' => 'นางสาวศิรประภา  สันตะวงศ์ กรรมการ',
					'img' => 'ศิระประภา.jpg'
				],
				'04' => [
					'name' => 'นางสาวหนึ่งฤทัย  ปานแก้ว ผู้ประสานงานฝ่ายประชาสัมพันธ์',
					'img' => 'หนึ่งฤทัย.jpg'
				]
			]
		])

		@include('committee', [
			'committee' => [
				'01' => [
					'name' => 'นางสาวอัชฌ์พร  จันทร์เนตร์ ผู้ประสานงานฝ่ายติดตามและประเมินผล',
					'img' => 'อัชฌ์พร.jpg'
				], 
				'02' => [
					'name' => 'นาย Daigo  Nakano กรรมการ',
					'img' => 'Daigo.JPG'
				],
				'03' => [
					'name' => 'นางสาว Lei Shi ผู้ประสานงานฝ่ายวิทยากรต่างประเทศ',
					'img' => 'shilei.jpg'
				],
				'04' => [
					'name' => 'นาย Liang YouFu กรรมการ',
					'img' => 'Liang Youfu.jpg'
				]
			]
		])

		@include('committee', [
			'committee' => [
				'01' => [
					'name' => 'นางสาว Rong HanLiu กรรมการ',
					'img' => 'LiuRonghan.jpg'
				], 
				'02' => [
					'name' => 'นางสาว Zeng Yuan กรรมการ',
					'img' => 'zengyuan.jpg'
				],
				'03' => [
					'name' => 'นาย Yuji  Furuhashi กรรมการ',
					'img' => 'Yuji.jpg'
				],
				'04' => [
					'name' => 'อาจารย์ ดร.วาณี  อรรจน์สาธิต ที่ปรึกษาโครงการ',
					'img' => 'อ.วาณี.jpg'
				]
			]
		])

		@include('committee', [
			'committee' => [
				'01' => [
					'name' => 'ผู้ช่วยศาสตราจารย์ ดร.สุกัญญา  เรืองจรูญ ที่ปรึกษาโครงการ',
					'img' => 'อ.สุกัญญา.jpg'
				], 
				'02' => [
					'name' => 'รองศาสตราจารย์สุภา  ปานเจริญ  ที่ปรึกษาโครงการ',
					'img' => 'อ.สุภา.jpg'
				],
				'03' => [
					'name' => 'อาจารย์วิรุฬห์รัตน์  ไฉนงุ้น ที่ปรึกษาโครงการ',
					'img' => ''
				],
				'04' => [
					'name' => 'อาจารย์ ดร.วิชชุกร  ทองหล่อ  ที่ปรึกษาโครงการ',
					'img' => 'อ.ดร.วิชชุกร.JPG'
				]
			]
		])




	</section>
</div>

@include('footer')

@stop

{{-- this page specific scripts --}}
@section('scripts')

@stop
