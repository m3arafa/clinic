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
            <div class="form-group col-sm-6">
                <h3>وصف الزيارة السابقة :</h3>
                <div class="form-group">
                    <p>المريض بحالة جيدة ولكنة مازال يعانى من اضطراب الاكتئاب والقلق ، والأعراض تكون في صورة متزامنة مع
                        الإدمان.</p>
                    <p> وأيضا من الواضح أن لديه سوء خلل في تفسير المدركات من حوله عن طريق الحواس الخمسة، النظر، اللمس، السمع، الشم، التذوق
                        فمن الممكن ان يرى اشياء واشخاص غير موجودة وتكون الأمور أكثر تعقيداً.</p>
                </div>
            </div>

        </div>

        <div class="col-sm-6">
            <table class="table small m-b-xs">
                <tbody>
                <tr>
                    <td>
                        <h4>رقم الملف</h4>
                    </td>
                    <td>
                        <h5>4567</h5>
                    </td>

                </tr>
                <tr>
                    <td>
                        <h4>تاريخ آخر زيارة</h4>
                    </td>
                    <td>
                        <h5>22/4/2018</h5>
                    </td>

                </tr>

                <tr>
                    <td>
                        <h4>تاريخ الخروج</h4>
                    </td>
                    <td>
                        <h5>22/4/2018</h5>
                    </td>

                </tr>


                <tr>
                    <td>
                        <h4>الطبيب</h4>
                    </td>
                    <td>
                        <h5>د/ وليد الشيخ</h5>
                    </td>

                </tr>

                <tr>
                    <td>
                        <button class="btn btn-primary">طباعة التقرير</button>
                    </td>

                </tr>

                </tbody>
            </table>
        </div>
    </div>

@stop