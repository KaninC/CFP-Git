@extends('layouts.master')

{{-- This page specific stylesheets --}}
@section('stylesheets')

<link rel="stylesheet" href="/components/animate.css/animate.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="/css/main.css"/>

@stop

{{-- This page specific content --}}
@section('body')

<div class="site-wrapper">
  <div class="site-wrapper-inner">
  <div class="cover-container">
      <div class="inner cover">
        <h2 class="animated fadeInUp">โครงการประชุมวิชาการระดับชาติ</h2>
        <h1 class="company animated fadeInUp">ภาษา วรรณคดีไทย และการสอนภาษาไทยในฐานะภาษาต่างประเทศ:การเรียนรู้และสร้างสรรค์จากสังคมไทยสู่สังคมโลก ครั้งที่ 2</h1>
        <p class="title animated fadeInUp">วันพฤหัสบดีที่ 25 และวันศุกร์ที่ 26 มิถุนายน 2558</p>
        <p class="lead-enter-site">
          <a href="{{ URL::to('/home') }}" class="btn btn-lg btn-default animated fadeInUp">เข้าสู่เวปไซต์</a>
        </p>
      </div>

      <div class="mastfoot">
        <div class="inner">
          <p>ณ โรงแรม SwissÔtel le Concorde กรุงเทพมหานคร  </p>
        </div>
      </div>
    </div>
  </div>
</div>

@stop

{{-- This page specific scripts --}}
@section('scripts')

@stop
