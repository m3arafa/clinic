<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold">صيدلى</strong>
                            </span> <span class="text-muted text-xs block"><b class="caret"></b></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="#">تسجيل خروج</a></li>
                    </ul>
                </div>
            </li>

            <li>
                <a href="{{url('/pharmacist')}}">الرئيسية</a>
            </li>
            <li>
                <a href="{{url('/pharmacist/transactions')}}"> طلبات الصرف</a>
            </li>
            <li>
                <a href="{{url('/pharmacist/new-transaction')}}"> تسجيل صرف جديد</a>
            </li>

            <li class="">
                <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">الموردين</span><span
                            class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse" style="height: 0px;">
                    <li><a href="{{url('/pharmacist/suppliers')}}">قائمة الموردين</a></li>
                    <li><a href="{{url('/pharmacist/supplier-transaction')}}">تسجيل عملية توريد</a></li>
                </ul>
            </li>
        </ul>

    </div>
</nav>
