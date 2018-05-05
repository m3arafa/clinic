@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">

        <div class="col-lg-12">
            <div class="ibox float-e-margins">

                <div class="ibox-title">
                    <h4>تقرير زيارات المرضى الخاص بعيادة المخدرات فى الفترة من 1/3/2018 الى </h4>
                </div>

                <div class="ibox-content" style="">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>

                                <th>التاريخ</th>
                                <th>رقم الملف</th>
                                <th>اسم المريض</th>
                                <th>الطبيب المعالج</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>2/3/2018</td>
                                <td>3756</td>
                                <td>أحمد عبدالله أبوالعينين</td>
                                <td>د/ إبراهيم عطيه</td>
                            </tr>
                            <tr>
                                <td>4/3/2018</td>
                                <td>4546</td>
                                <td>محمد عبدالفتاح السيد</td>
                                <td>د/ خالد أبوالنجا</td>
                            </tr>
                            <tr>
                                <td>7/3/2018</td>
                                <td>8758</td>
                                <td>السيد محمد ناصف</td>
                                <td>د/ أحمد أبو زهرة</td>
                            </tr>
                            <tr>
                                <td>9/3/2018</td>
                                <td>9867</td>
                                <td>هند محمد عبدالوهاب</td>
                                <td>د/ إبراهيم عطيه</td>
                            </tr>


                            </tbody>
                        </table>
                    </div>

                </div>

                <div class="ibox-footer">
                    <button class="btn btn-primary">طباعة التقرير</button>
                </div>
            </div>
        </div>

    </div>
</div>
@stop