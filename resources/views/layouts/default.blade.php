<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <title>PVD - กองทุนสำรองเลี้ยงชีพ</title>
    <!-- Bootstrap 5.0.1 CSS -->
    <link rel="stylesheet" href="{{asset('assets/bootstrap-5.0.1-dist/css/bootstrap.css')}}">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{asset('assets/bootstrap-table-master/dist/bootstrap-table.min.css')}}">
    {{-- Sweet Alert --}}
    <link rel="stylesheet" href="{{asset('assets/sweetalert2/dist/sweetalert2.min.css')}}">
    {{-- radius --}}
    <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/variable-pie.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
{{-- radius --}}
    <style>
       @font-face {
    font-family: kanit-extralight;
    src: url('{{ asset('assets/font/Kanit-ExtraLight.woff') }}');
       }
       @font-face {
    font-family: kanit-regular;
    src: url('{{ asset('assets/font/Kanit-Regular.woff') }}');
       }
       @font-face {
    font-family: kanit-light;
    src: url('{{ asset('assets/font/Kanit-Light.woff') }}');
       }
        .no-padding{
        padding: 0%; !important

        }
        /* BOX1 */
        .box1-img1{
        width: 158px;
        height: 152px;
        margin:52px 54px 52px 407px;
        position: absolute;
        }
        .box1-t1{
            width:100%; 
            height:60px;
            margin:86px 0px 0px 43px; 
            position: absolute;
            color:#1a3686; !important
        }
        .box1-t2{
            margin: 145px 0px 0px 43px; !important
            position: absolute;
            font-size:20px; !important
            width:100%; 
            height: 30px;
            
        }
        .box1-t3{
            position: absolute;
            margin:auto;
            width: 100%;
            height: 27px;
            left: 151px;;
           

        }
        /* BOX1 */
        /* BOX2 */
        .box2-img1{
            width:158px;
            height:130px;
            margin:63px 0px 0px 392px;
            position: absolute;
        }
        /* BOX2 */
        /* BOX3 */
.box3-img1{
    width:36px;
    height:36px;
    position: absolute;
    margin: 52px 0px 0px 43px;
}
.box3-t1{
    font-size: 40px;
    color: #1a3686;
    margin: 43px 0px 0px 93px;
}
.box3-t2{
font-size: 20px;
color: black;
margin-left: 93px;
}
        /* BOX 3*/
        /* BOX4 */
.box4-img1{
    width: 22px;
    height: 36px;
    position: absolute;
    margin: 53px 0px 0px 231px;
}
.box4-t1{
    margin: 43px 0px 0px 272px;
    font-size: 40px;
    color: #1a3686;
}
.box4-t2{
font-size: 20px;
color: black;
margin-left: 272px;
}
        /* BOX4 */
        /* FONT */
        .index-font1{
        object-fit: contain;
        font-family: kanit-extralight;!important
        font-weight: normal;
        font-stretch: normal;
        font-style: normal;
        line-height: normal;
        letter-spacing: normal;
        }
        .index-font2{
        object-fit: contain;
        font-family: kanit-regular; !important
        font-weight: normal;
        font-stretch: normal;
        font-style: normal;
        line-height: normal;
        letter-spacing: normal;
        font-weight: bolder;
        }
        
        .index-font3{
        object-fit: contain;
        font-family: kanit-light;!important
        font-weight: normal;
        font-stretch: normal;
        font-style: normal;
        line-height: normal;
        letter-spacing: normal;
        
        }
        /* FONT */
        /* radius box */
        #container {
	height: 342px;
    width: 619;
}

.highcharts-figure, .highcharts-data-table table {
  width: 619px;
  height: 342px;
  margin: auto;
}

.highcharts-data-table table {
	font-family: Verdana, sans-serif;
	border-collapse: collapse;
	border: 1px solid #EBEBEB;
	margin: 10px auto;
	text-align: center;
	width: 100%;
	max-width: 500px;
}
.highcharts-data-table caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}
.highcharts-data-table th {
	font-weight: 600;
  padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
  padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
  background: #f8f8f8;
}
.highcharts-data-table tr:hover {
  background: #f1f7ff;
}
  /* radius box */

/*  */
.flex-wrapper {
  display: flex;
  flex-flow: row nowrap;
}

.single-chart {
  width: 33%;
  justify-content: space-around ;
}

.circular-chart {
  display: block;
  margin: 10px auto;
  width: 130px;
  height: 130px;
  position: absolute;
  left:443px;
  top:10px ;
  
}

.circle-bg {
  fill: none;
  stroke: #eee;
  stroke-width: 3.8;
}

.circle {
  fill: none;
  stroke-width: 2.8;
  stroke-linecap: round;
  animation: progress 1s ease-out forwards;
}

@keyframes progress {
  0% {
    stroke-dasharray: 0 100;
  }
}

.circular-chart.orange .circle {
  stroke: #ff9f00;
}

.circular-chart.green .circle {
  stroke: #4CC790;
}

.circular-chart.blue .circle {
  stroke: #3c9ee5;
}

.percentage {
  fill: #666;
  font-family: sans-serif;
  font-size: 0.5em;
  text-anchor: middle;
}

/*  */

        .top-bar{
            background-image: url("assets/header/images/bg-top-bar.jpg");
            height: 120px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            -webkit-box-shadow: 0 2px 8px 0px gray;
        }
        .nav-border-under{
            display: block;
            padding: 46px 46px;
            color: #0d6efd;
            text-decoration: none;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;
            color: white;
            display: block;
            border-bottom: 3px solid rgba(0, 0, 0, 0);
            font-family: kanit-regula;
            font-size: 18px;
        }
        .nav-border-under:hover {
            color: white;
            padding: 46px 46px;
            border-bottom: 3px solid white;
        }
        .btn-user{
            color: white;
            border: 2px solid white;
            padding: 5px 20px;
        }
        .btn-user:hover {
            color: white;
        }
        .content-body{
            background-color:#f7f8fc;
        }
        .card-content {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            /* border: 1px solid rgba(0,0,0,.125); */
            border-radius: .25rem;
        }
        .help_outline {
            width: 17px;
            height: 17px;
            margin: 42px 551px 1px 4px;
            object-fit: contain;
            font-family: material;
            font-size: 16px;
            font-weight: normal;
            font-stretch: normal;
            font-style: normal;
            line-height: normal;
            letter-spacing: normal;
            color: #d4dcf0;
        }
        .footer-bar{
            background-color: #1a3686;
            width: 100%;
            padding-right: var(--bs-gutter-x,11.438rem);
            padding-left: var(--bs-gutter-x,11.438rem);
            margin-right: auto;
            margin-left: auto;
            color: white;
            font-size: 16px;
        }
        hr.h-w {
            border: 1px solid white;
        }
        .li-head{
            display: block;
            font-size: 18px;
            font-weight: normal;
            font-family: kanit-regula;
        }
        .li-none{
            display: block;
            padding-top:10px;
            font-size: 16px;
            font-family: kanit-light;
        }
        .li-detail{
            display: block;
            padding-top:2px;
            font-size: 16px;
            font-family: kanit-light;
        }
        .foot-nav{
            text-decoration: none; 
            color:white;
        }
    </style>
</head>
<body class="content-body">

    @include('layouts.navbar')

    @yield('content')
    
    @include('layouts.footer')

    <!-- Bootstrap 5.0.1 JS -->
    <script src="{{asset('assets/bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Jquery 3.6.0 -->
    <script src="{{asset('assets/jquery/jquery-3.6.0.min.js')}}"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="{{asset('assets/bootstrap-table-master/dist/bootstrap-table.js')}}"></script>
    {{-- Sweet Alert --}}
    <script src="{{asset('assets/sweetalert2/dist/sweetalert2.min.js')}}"></script>
    {{-- Canvas JS --}}
    <script src="{{asset('assets/charts/chart.min.js')}}"></script>
</body>
</html>
