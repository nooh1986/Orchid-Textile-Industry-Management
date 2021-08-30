<!-- BEGIN: Main Menu-->
<div class="horizontal-menu-wrapper">
    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-shadow menu-border container-xxl" role="navigation" data-menu="menu-wrapper" data-menu-type="floating-nav">
        
        <!-- Horizontal menu content-->
        <div class="navbar-container main-menu-content" data-menu="menu-container">
            
            <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-bs-toggle="dropdown"><i data-feather="home"></i><span data-i18n="Dashboards">لوحة التحكم</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item d-flex align-items-center" href="{{ route('dashboard') }}" data-bs-toggle="" data-i18n="eCommerce"><i data-feather="trending-up"></i><span data-i18n="eCommerce">الإحصائيات</span></a></li>
                    </ul>
                </li>

                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-bs-toggle="dropdown"><i data-feather="users"></i><span data-i18n="Apps">الزبائن</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item d-flex align-items-center" href="{{ route('customer.index') }}" data-i18n="Email"><i data-feather="eye"></i><span data-i18n="Email">عرض الزبائن</span></a></li>
                    </ul>    
                </li>

                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-bs-toggle="dropdown"><i data-feather="slack"></i><span data-i18n="User Interface">السدوات</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item d-flex align-items-center" href="{{ route('string.create') }}" data-i18n="Feather"><i data-feather="file-plus"></i><span data-i18n="Feather">إضافه سده</span></a></li>
                        <li><a class="dropdown-item d-flex align-items-center" href="{{ route('string.index') }}" data-i18n="Typography"><i data-feather="eye"></i><span data-i18n="Typography">عرض السدوات قيد الانتظار</span></a></li>
                        <li><a class="dropdown-item d-flex align-items-center" href="{{ route('work') }}" data-i18n="Typography"><i data-feather="eye"></i><span data-i18n="Typography">عرض السدوات في العمل</span></a></li>
                        <li><a class="dropdown-item d-flex align-items-center" href="{{ route('end') }}" data-i18n="Typography"><i data-feather="eye"></i><span data-i18n="Typography">عرض السدوات المنتهيه</span></a></li>
                        <li><a class="dropdown-item d-flex align-items-center" href="{{ route('info-string') }}" data-i18n="Typography"><i data-feather="search"></i><span data-i18n="Typography">معلومات السده</span></a></li>
                    </ul>
                </li>

                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-bs-toggle="dropdown"><i data-feather="edit"></i><span data-i18n="Forms &amp; Tables">الإنتاج</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item d-flex align-items-center" href="{{ route('output.index') }}" data-i18n="Form Layout"><i data-feather="eye"></i><span data-i18n="Form Layout">عرض الانتاج اليومي</span></a></li>
                        <li><a class="dropdown-item d-flex align-items-center" href="{{ route('output.create') }}" data-i18n="Form Wizard"><i data-feather="file-plus"></i><span data-i18n="Form Wizard">تسجيل الانتاج اليومي</span></a></li>
                    </ul>
                </li>
                
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-bs-toggle="dropdown"><i data-feather="shopping-bag"></i><span data-i18n="Misc">المصروفات</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item d-flex align-items-center" href="{{ route('expense.index') }}" data-i18n="Disabled Menu"><i data-feather="eye"></i><span data-i18n="Disabled Menu">عرض المصروفات</span></a></li>
                    </ul>
                </li>

                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-bs-toggle="dropdown"><i data-feather="file-text"></i><span data-i18n="Pages">الحسابات</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item d-flex align-items-center" href="{{ route('customer-account') }}" data-i18n="Account Settings"><i data-feather="users"></i><span data-i18n="Account Settings">حسابات الزبائن</span></a></li>
                        <li><a class="dropdown-item d-flex align-items-center" href="{{ route('machine-account') }}" data-i18n="Profile"><i data-feather="inbox"></i><span data-i18n="Profile">حسابات الماكينات</span></a></li>
                        <li><a class="dropdown-item d-flex align-items-center" href="{{ route('expense-account') }}" data-i18n="FAQ"><i data-feather="shopping-bag"></i><span data-i18n="FAQ">حسابات المصاريف</span></a></li>
                        <li><a class="dropdown-item d-flex align-items-center" href="{{ route('profit-account') }}" data-i18n="Knowledge Base"><i data-feather="dollar-sign"></i><span data-i18n="Knowledge Base">حساب الارباح</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- END: Main Menu-->