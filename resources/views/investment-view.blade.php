@extends('layouts.default')
@section('content')
<div class="container-md mt-5">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item index-font2"><a href="#" style="text-decoration: none;color:gray; font-size:18px;">ข้อมูลกองทุน</a></li>
          <li class="breadcrumb-item active index-font2" aria-current="page" style="color: #1a3686; font-size:18px;">JASMIN</li>
        </ol>
      </nav>
</div>
<div class="container mt-2">
    <div class="row" >
    <div class="col-6">
        <div class="card-content " style="width: 650px; height: 569px">
            <div class="card-body no-padding">

                    <a class="" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
                    <a class="" data-bs-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
                    <a class="" data-bs-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
    
                  <div class="row">
                    <div class="col">
                      <div class="collapse multi-collapse" id="multiCollapseExample1">
                        <div class="card card-body">
                          Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                        </div>
                      </div>
                      <div class="collapse multi-collapse" id="multiCollapseExample2">
                        <div class="card card-body">
                          Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                        </div>
                      </div>
                      <div class="collapse multi-collapse" id="multiCollapseExample3">
                        <div class="card card-body">
                          Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                        </div>
                      </div>
                    </div>
                </div>

            </div>
        </div> 
    </div>
    <div class="col-3 mr-1">
        <div class="card-content " style="width: 650px; height: 319px">
            <div class="card-body no-padding">

            </div>
        </div> 
    </div>
</div>

    
</div>


@endsection