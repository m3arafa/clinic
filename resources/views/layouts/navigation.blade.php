<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold">Example user</strong>
                            </span> <span class="text-muted text-xs block">Example menu <b class="caret"></b></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="#">Logout</a></li>
                    </ul>
                </div>
            </li>
            <li class="{{ isActiveRoute('main') }}">
                <a href="{{ url('/') }}"><i class="fa fa-th-large"></i> <span class="nav-label">الرئيسية</span></a>
            </li>

            <li class="">
                <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">التقارير</span><span
                            class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse" style="height: 0px;">
                    <li class="active"><a href="{{url('/reports/patients-visits')}}">تقرير زيارات المرضى</a></li>
                    <li><a href="{{url('/reports/patients-in-reception')}}">تقرير المرضى المسجلين
                            بالإستقبال</a></li>
                    <li><a href="{{url('/reports/patient-visit-state')}}">تقرير دخول وخروج مريض</a></li>
                    <li><a href="{{url('/reports/pharmacy-transactions')}}">تقرير الصرف من الصيدلية</a></li>
                    <li><a href="{{url('/reports/pharmacy-inventory')}}">تقرير جرد الصيدلية</a></li>


                </ul>
            </li>
        </ul>

    </div>
</nav>
