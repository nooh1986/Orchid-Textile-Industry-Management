<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-lg navbar navbar-fixed align-items-center navbar-shadow navbar-brand-center" data-nav="brand-center">
    <div class="navbar-header d-xl-block d-none">
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="navbar-brand" href="#">
                    <span class="brand-logo">
                        <img src="{{ URL::asset('app-assets//images/orchid.svg')}}">
                    </span>
                    
                    <h2 class="brand-text mb-0">ORCHID</h2>
                </a>
            </li>
        </ul>
    </div>

    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a></li>
            </ul>
            <ul class="nav navbar-nav bookmark-icons">
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{ route('output.create') }}" data-bs-toggle="tooltip" data-bs-placement="bottom" title="تسجيل إنتاج يومي"><i class="ficon" data-feather="edit"></i></a></li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{ route('expense.index') }}" data-bs-toggle="tooltip" data-bs-placement="bottom" title="المصروفات"><i class="ficon" data-feather="shopping-bag"></i></a></li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{ route('string.create') }}" data-bs-toggle="tooltip" data-bs-placement="bottom" title="إضافه سده"><i class="ficon" data-feather="slack"></i></a></li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{ route('info-string') }}" data-bs-toggle="tooltip" data-bs-placement="bottom" title="معلومات سده"><i class="ficon" data-feather="search"></i></a></li>
            </ul>
        </div>
        
        <ul class="nav navbar-nav align-items-center ms-auto">
            <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>
                
            <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">{{ Auth::user()->name }}</span></div><span class="avatar"><img class="round" src="{{ URL::asset('app-assets//images/portrait/small/avatar-s-11.jpg')}}" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                    <a href="{{ route('profile') }}" class="dropdown-item" href="page-profile.html"><i class="me-50" data-feather="user"></i> الملف الشخصي</a>

                    <div class="dropdown-divider"></div>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="dropdown-item" href="#" onclick="event.preventDefault();
                        this.closest('form').submit();"><i class="me-50" data-feather="power"></i> تسجيل الخروج</a>
                    </form>    
                </div>
            </li>
        </ul>
    </div>
</nav>

<!-- END: Header-->