<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold">دكتور</strong>
                            </span> <span class="text-muted text-xs block"><b class="caret"></b></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="#">تسجيل خروج</a></li>
                    </ul>
                </div>
            </li>

            <li>
                <a href="{{url('/doctors')}}">قائمة المرضى فى الإستقبال</a>
            </li>
            <li>
                <a href="{{url('/doctors/patients-search')}}">بحث بيانات المرضى</a>
            </li>
        </ul>

    </div>
</nav>
