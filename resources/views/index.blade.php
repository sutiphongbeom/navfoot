@extends('layouts.default')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-6 d-flex justify-content-start index-font2" style="font-size: 18px; color:#1a3686">
            ภาพรวม <i class="fa fa-question-circle fa-lg"> </i><span class="help_outline"></span>
        </div>
        <div class="col-6 d-flex justify-content-end index-font3" style="font-size: 18px;color:#1a3686;">
            ข้อมูล ณ วันที่ 20 เม.ย. 2564
        </div>
    </div>
    <div class="row ">
        {{-- BOX1 --}}
        <div class="col-6 ">
            <div class="card-content " style="width: 619px; height: 256px">
                <div class="card-body no-padding">
                  <div class="box1-t1" style="display: flex;">
                    <h5 class="index-font2" style="font-size: 40px;">20,489&nbsp</h5>
                    <p class="index-font3 " style="font-weight:300;margin-top:25px;font-size:18px;color: #000000;!important">ราย</p>
                    </div>
                        <p class="index-font3 box1-t2">จำนวนนายจ้างทั้งหมด</p>
                 </div> <img src="{{asset('assets/icon/indexbox1.png')}} " class="box1-img1" >
        </div>
      </div>
        {{-- BOX1 --}}
        {{-- BOX2 --}}
        <div class="col-6">
            <div class="card-content" style="width: 619px; height: 256px">
                <div class="card-body no-padding">
                    <div class="box1-t1" style="display: flex;">
                    <h5 class="index-font2" style="font-size: 40px;">20,489&nbsp</h5>
                    <p class="index-font3 " style="margin-top:25px;font-size:18px;color: #000000;!important">ราย</p>
                    </div>
                    <p class="index-font2 box1-t2" >จำนวนสมาชิกทั้งหมด</p> 
                </div>
                <img src="{{asset('assets/icon/indexbox2.png')}} " class="box2-img1" >
            </div>
        </div>
    </div>
{{-- BOX2 --}}
    <div class="row mt-5">
        <div class="col-6">
            <div class="card-content" style="width: 619px; height: 358px">
                <div class="card-body no-padding">
{{-- radius pie chart --}}
                    <figure class="highcharts-figure">
                        
                        <div id="container"></div>
                        <p style="position: absolute;margin-left:225px;top:140px; font-size:25px;color: #1a3686;" class="index-font2">100,000.00</p>
                        <br>
                        <p style="position: absolute;margin-left:250px;top:180px; font-size:20px;" class="index-font2" style="font-weight: bold;">ล้านบาท</p>
                        <p class="highcharts-description">
                            
{{-- radius pie chart --}}
                    
                </div>
            </div>
        </div>
{{-- BOX2 --}}
{{-- BOX3 --}}
        <div class="col-6">
            <div class="card-content" style="width: 619px; height: 171px">
                <div class="card-body no-padding">
                    <p class="index-font2 box3-t1">5122 / 20,489</p>
                    <p class="index-font3 box3-t2">Member Risk Profile</p> 
                </div> 
               {{-- percent chart --}}
                    <div class="flex-wrapper">
                        <div class="single-chart">
                          <svg viewBox="0 0 36 36" class="circular-chart blue">
                            <path class="circle-bg"
                              d="M18 2.0845
                                a 15.9155 15.9155 0 0 1 0 31.831
                                a 15.9155 15.9155 0 0 1 0 -31.831"
                            />
                            <path class="circle"
                              stroke-dasharray="25, 100"
                              d="M18 2.0845
                                a 15.9155 15.9155 0 0 1 0 31.831
                                a 15.9155 15.9155 0 0 1 0 -31.831"
                            />
                            <text x="18" y="20.35" class="percentage">25%</text>
                          </svg>
                        </div>
                      </div>
                     {{-- percent chart --}}
                <img src="{{asset('assets/icon/indexbox4.png')}} " class="box3-img1" >
            </div>
{{-- BOX3 --}}
{{-- BOX4 --}}
            <div class="card-content mt-3" style="width: 619px; height: 171px">
                <div class="card-body no-padding">
                    <p class="index-font2 box4-t1 ">16,421</p>
                    <p class="index-font3 box4-t2">Mobile Device</p>
                </div>
                <img src="{{asset('assets/icon/indexbox5.png')}} " class="box4-img1">
            </div>
{{-- BOX4 --}}
        </div>
    </div>
</div>
{{-- radius pie chart --}}
<script>
    Highcharts.chart('container', {
  chart: {
    type: 'variablepie'
  },
  title: {
    text: ''
  },
  tooltip: {
    headerFormat: '',
    pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
      'Area (square km): <b>{point.y}</b><br/>' +
      'Population density (people per square km): <b>{point.z}</b><br/>'
  },
  series: [{
    minPointSize: 10,
    innerSize: '70%',
    zMin: 0,
    name: 'countries',
    data: [{
      name: 'SINGLE/ GROUP FUND ,65%',
      y: 505370,
      z: 100
    }, {
      name: 'POOLED FUND,35%',
      y: 551500,
      z: 100
    }]
  }]
});
</script>
{{-- radius pie chart --}}
@endsection
