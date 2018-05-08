@extends('layouts.app')

@section('title')
    تقرير دخول وخروج مريض
@stop


@section('content')

    <div class="container">
        <div class="row m-b-lg m-t-lg">
            <div class="col-md-6">

                <div class="profile-image">
                    <img src="{{asset('public/img/a1.jpg')}}" class="img-circle circle-border m-b-md" alt="profile">
                </div>
                <div class="profile-info p-h-m">

                    <div>
                        <h2 class="no-margins">
                            محمد بن عيسى الجابر
                        </h2>
                        <h4>عيادة المخدرات</h4>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-10">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>اسم المريض</th>
                        <th>رقم الملف</th>
                        <th>تاريخ الدخول</th>
                        <th>تاريخ الخروج</th>
                        <th>العيادة</th>
                        <th>الطبيب</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>محمد بن عيسى الجابر</td>
                        <td>1646</td>
                        <td>07/04/2018</td>
                        <td>07/04/2018</td>
                        <td>المخدرات</td>
                        <td>د/ أحمد الشيخ</td>
                    </tr>

                    </tbody>
                </table>
                <h4>وصف الزيارة</h4>
                <p>
                <p>المريض بحالة جيدة ولكنة مازال يعانى من اضطراب الاكتئاب والقلق ، والأعراض تكون في صورة متزامنة مع
                    الإدمان.</p></p>
                <p> وأيضا من الواضح أن لديه سوء خلل في تفسير المدركات من حوله عن طريق الحواس الخمسة، النظر، اللمس،
                    السمع، الشم، التذوق
                    فمن الممكن ان يرى اشياء واشخاص غير موجودة وتكون الأمور أكثر تعقيداً.</p>
            </div>
            <button class="btn btn-sm btn-primary m-t-md">طباعة التقرير</button>
        </div>
    </div>

@stop