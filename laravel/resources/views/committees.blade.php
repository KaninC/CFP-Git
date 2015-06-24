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
				<p>โครงการประชุมวิชาการระดับชาติ ภาษา วรรณคดีไทย และการสอนภาษาไทยในฐานะภาษาต่างประเทศ</p>
				<h1> การเรียนรู้และสร้างสรรค์จากสังคมไทยสู่สังคมโลก</h1>
			</div>
		</div>
	 </section>
</div>
@include('navbar')

<div class="container">
	<!-- Main component for a primary marketing message or call to action -->
	<section id="products">
		<h2 class="text-left">ประธานโครงการ</h2>
		@include('committee', [
			'committee' => [
				'01' => [
					'name' => 'ผู้ช่วยศาสตราจารย์ ดร.สุภัค มหาวรากร ประธาน',
					'img' => 'สุภัค.jpg'
				], 
				'02' => [
					'name' => 'อาจารย์ ดร.นิธิอร	พรอำไพสกุล กรรมการและเลขานุการ',
					'img' => 'นิธิอร.jpg'
				]
			]
		])
		<h2 class="text-left">ที่ปรึกษาโครงการ</h2>
		@include('committee', [
			'committee' => [
				'01' => [
					'name' => 'รองศาสตราจารย์สุภา   ปานเจริญ ที่ปรึกษาโครงการ',
					'img' => 'สุภา.jpg'
				], 
				'02' => [
					'name' => 'อาจารย์ ดร.วาณี   อรรจน์สาธิต ที่ปรึกษาโครงการ',
					'img' => 'วาณี.jpg'
				],
				'03' => [
					'name' => 'อาจารย์ ดร.วิชชุกร   ทองหล่อ  ที่ปรึกษาโครงการ',
					'img' => 'วิชชุกร.jpg'
				],
				'04' => [
					'name' => 'อาจารย์วิรุฬห์รัตน์   ไฉนงุ้น ที่ปรึกษาโครงการ',
					'img' => 'วิรุฬรัตน์.jpg'
				]
			]
		])

		@include('committee', [
			'committee' => [
				'01' => [
					'name' => 'ผู้ช่วยศาสตราจารย์ ดร.สุกัญญา   เรืองจรูญ  ที่ปรึกษาโครงการ',
					'img' => 'สุกัญญา.jpg'
				]
			]
		])

		<h2 class="text-left">คณะกรรมการบริหารโครงการ</h2>
		@include('committee', [
			'committee' => [
				'01' => [
					'name' => 'รองศาสตราจารย์ผกาศรี เย็นบุตร กรรมการ',
					'img' => 'ผกาศรี.jpg'
				], 
				'02' => [
					'name' => 'รองศาสตราจารย์ ดร.ศานติ ภักดีคำ กรรมการ',
					'img' => 'ศานติ.jpg'
				],
				'03' => [
					'name' => 'ผู้ช่วยศาสตราจารย์ ดร. ดวงเด่น บุญปก กรรมการ',
					'img' => 'ดวงเด่น.jpg'
				],
				'04' => [
					'name' => 'ผู้ช่วยศาสตราจารย์ ดร. พิมพาภรณ์ บุญประเสริฐ กรรมการ',
					'img' => 'พิมพาภรณ์.jpg'
				]
			]
		])
		@include('committee', [
			'committee' => [
				'01' => [
					'name' => ' ผู้ช่วยศาสตราจารย์ ดร.ภาณุพงศ์ อุดมศิลป์ กรรมการ',
					'img' => 'ภาณุพงศ์.jpg'
				], 
				'02' => [
					'name' => ' ผู้ช่วยศาสตราจารย์สมเกียรติ คู่ทวีกุล กรรมการ',
					'img' => 'สมเกียรติ.jpg'
				],
				'03' => [
					'name' => ' ผู้ช่วยศาสตราจารย์สิทธินี ธรรมชัย กรรมการ',
					'img' => 'สิทธินี.jpg'
				],
				'04' => [
					'name' => ' อาจารย์ ดร.ภูวกร ฉัตรบำรุงสุข กรรมการ',
					'img' => 'ภูวกร.jpg'
				]
			]
		])
		@include('committee', [
			'committee' => [
				'01' => [
					'name' => 'อาจารย์ ดร. รัชนีย์ญา กลิ่นน้ำหอม กรรมการ',
					'img' => 'รัชนีย์ญา.jpg'
				], 
				'02' => [
					'name' => 'อาจารย์ ดร.สุนทรี คันธรรมพันธ์ กรรมการ',
					'img' => 'สุนทรี.jpg'
				],
				'03' => [
					'name' => ' อาจารย์ ดร.Huynh Van Phuc กรรมการ',
					'img' => 'phuc.jpg'
				],
				'04' => [
					'name' => ' อาจารย์กนกกร ตัลยารักษ์ กรรมการ',
					'img' => 'กนกกร.jpg'
				]
			]
		])
		@include('committee', [
			'committee' => [
				'01' => [
					'name' => ' อาจารย์บรรพต ศิริชัย กรรมการ',
					'img' => 'บรรพต.jpg'
				], 
				'02' => [
					'name' => ' อาจารย์พัทธยา จิตต์เมตตา กรรมการ',
					'img' => 'พัธทยา.jpg'
				],
				'03' => [
					'name' => ' อาจารย์ภัทร์อร พิพัฒนกุล กรรมการ',
					'img' => 'ภัทร์อร.jpg'
				],
				'04' => [
					'name' => 'อาจารย์สยุมพร ฉันทสิทธิพร กรรมการ',
					'img' => 'สยุมพร.jpg'
				]
			]
		])
		@include('committee', [
			'committee' => [
				'01' => [
					'name' => 'อาจารย์อาทินันท์ กาญจนดุล กรรมการ',
					'img' => 'อาทินันท์.jpg'
				], 
				'02' => [
					'name' => ' อาจารย์อำไพ อำรุงทรัพย์ กรรมการ',
					'img' => 'อำไพ.jpg'
				],
				'03' => [
					'name' => ' อาจารย์ Nguyen Thi Trang  กรรมการ',
					'img' => 'Trang.jpg'
				],
				'04' => [
					'name' => ' อาจารย์ Takayuki  Fujimoto กรรมการ',
					'img' => 'ฟุจิโมโต้.jpg'
				]
			]
		])
		@include('committee', [
			'committee' => [
				'01' => [
					'name' => ' อาจารย์ Tsukasa  Takagi กรรมการ',
					'img' => 'takagi.jpg'
				]
			]
		])

		<h2 class="text-left">ฝ่ายประสานงานโครงการ</h2>
		@include('committee', [
			'committee' => [
				'01' => [
					'name' => 'นางสาวจรรยวรรณ จรัสจรูญฤทธิ์ กรรมการ',
					'img' => 'จรรยวรรณ.jpg'
				], 
				'02' => [
					'name' => ' นางสาวณัฐปภัสร์ ชาญนนทวัฒน์ กรรมการ',
					'img' => 'ณัฐปภัสร์.jpg'
				],
				'03' => [
					'name' => ' นายนรินทร์วัฒน์ รัตนมณี  กรรมการ',
					'img' => 'นรินทร์วัฒน์.jpg'
				],
				'04' => [
					'name' => ' นางสาวนนท์กมล  ลิ้มธนะกุล กรรมการ',
					'img' => 'นนท์กมล.jpg'
				]
			]
		])
		@include('committee', [
			'committee' => [
				'01' => [
					'name' => 'นางสาวเพ็ญศิริ รัศมี กรรมการ',
					'img' => 'เพ็ญศิริ.jpg'
				], 
				'02' => [
					'name' => 'นางสาวหนึ่งฤทัย ปานแก้ว กรรมการ',
					'img' => 'หนึ่งฤทัย.jpg'
				],
				'03' => [
					'name' => 'นางสาวอัชฌ์พร จันทร์เนตร์ กรรมการ',
					'img' => 'อัชฌ์พร.jpg'
				],
				'04' => [
					'name' => ' นางสาว Lei Shi กรรมการ',
					'img' => 'shilei.jpg'
				]
			]
		])
		@include('committee', [
			'committee' => [
				'01' => [
					'name' => 'นาย Liang YouFu กรรมการ',
					'img' => 'Liang Youfu.jpg'
				], 
				'02' => [
					'name' => ' นางสาว Rong HanLiu   กรรมการ',
					'img' => 'LiuRonghan.jpg'
				],
				'03' => [
					'name' => ' นางสาว Yuan Zheng กรรมการ',
					'img' => 'zengyuan.jpg'
				],
				'04' => [
					'name' => 'นาย Yuji  Furuhashi กรรมการ',
					'img' => 'Yuji.jpg'
				]
			]
		])
		@include('committee', [
			'committee' => [
				'01' => [
					'name' => ' นาย Daigo  Nakano กรรมการ',
					'img' => 'ไดโกะ.jpg'
				], 
				'02' => [
					'name' => 'นางสาวกรีกมล หนูเกื้อ กรรมการ',
					'img' => 'กรีกมล.jpg'
				],
				'03' => [
					'name' => 'นางสาวชญาตี เงารังษี กรรมการ',
					'img' => 'ชญาตี.jpg'
				],
				'04' => [
					'name' => 'นางสาวศิรประภา สันตะวงศ์ กรรมการ',
					'img' => 'ศิระประภา.jpg'
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
