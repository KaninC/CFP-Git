<!-- Static navbar -->
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{ URL::to('/') }}">ยืนดีต้อนรับ</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-left">
				<li><a href="{{ URL::to('/home') }}">หน้าหลัก</a></li>
				<li><a href="{{ URL::to('/status') }}">ขั้นตอนการดำเนินงานบทความ</a></li>
				<li><a href="{{ URL::to('/committees') }}">ผู้เกี่ยวข้อง</a></li>
				<li><a href="{{ URL::to('/document') }}">เอกสารของโครงการ</a></li>
				<li><a href="{{ URL::to('/poster') }}">โปสเตอร์</a></li>
				<li><a href="{{ URL::to('/contact') }}">ข้อมูลติดต่อ</a></li>
				<!--<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Lang::get('navbar.language') }} <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li>
							@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
							<a rel="alternate" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
								{{{ $properties['native'] }}}
							</a>
							@endforeach
						</li>
					</ul>
				</li>-->
			</ul>
		</div><!--/.nav-collapse -->
	</div><!--/.container-fluid -->
</nav>