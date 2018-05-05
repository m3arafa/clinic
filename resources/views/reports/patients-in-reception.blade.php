@extends('layouts.app')

@section('title')
تقرير المرضى المسجلين فى الإستقبال
@stop

@section('content')

    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="ibox float-e-margins">

                    <div class="ibox-title">
                        <h4>تقريرى بجميع المرضى المسجلين بالإستقبال</h4>
                    </div>

                    <div class="ibox-content" style="">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>

                                    <th>التاريخ</th>
                                    <th>رقم الملف</th>
                                    <th>اسم المريض</th>
                                    <th>العيادة المحدد لها</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>2/3/2018</td>
                                    <td>3756</td>
                                    <td>أحمد عبدالله أبوالعينين</td>
                                    <td>المخدرات</td>
                                </tr>
                                <tr>
                                    <td>4/3/2018</td>
                                    <td>4546</td>
                                    <td>محمد عبدالفتاح السيد</td>
                                    <td>النفسية</td>
                                </tr>
                                <tr>
                                    <td>7/3/2018</td>
                                    <td>8758</td>
                                    <td>السيد محمد ناصف</td>
                                    <td>الأعصاب</td>
                                </tr>
                                <tr>
                                    <td>9/3/2018</td>
                                    <td>9867</td>
                                    <td>هند محمد عبدالوهاب</td>
                                    <td>العظام</td>
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