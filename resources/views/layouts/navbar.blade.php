<header>
<nav class="navbar navbar-expand-lg top-bar">
    <div class="container-fluid">
        <a href="{{ route('index') }}" class="col-xs-1 col-3 d-flex justify-content-center">
            <img src="{{asset('assets/header/images/logo-top-bar.png')}}" alt="" width="135" height="98" class="align-text-top">
        </a>
        <ul class="col-xs-10 col-7 navbar-nav mx-auto">
            <li class="nav-item"><a href="{{ route('dashboard') }}" class="nav-border-under index-font2" style="font-weight: normal;!important" >ภาพรวม</a></li>
            <li class="nav-item"><a href="{{ route('investment-list') }}" class="nav-border-under index-font2" style="font-weight: normal;!important">ข้อมูลกองทุน</a></li>
            <li class="nav-item"><a href="{{ route('investment-policy-list') }}" class="nav-border-under index-font2" style="font-weight: normal;!important">นโยบายการลงทุน</a></li>
            <li class="nav-item"><a href="{{ route('manage-permissions-list') }}" class="nav-border-under index-font2" style="font-weight: normal;!important">การจัดการ</a></li>
        </ul>
        <ul class="col-xs-1 col-2 navbar-nav">
            <div class="btn-group">
                <button type="button" class="btn dropdown-toggle btn-user" data-bs-toggle="dropdown" aria-expanded="false">
                    Super Admin
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
            </div>
        </ul>
    </div>
  </div>
</nav>
</header>
