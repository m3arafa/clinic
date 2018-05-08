@extends('layouts.pharmacist')


@section('title')
    بيانات الصرف
@stop

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-1">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <table class="table">
                            <tr class="success">
                                <th>رقم إذن الصرف</th>
                                <th>تاريخ إذن الصرف</th>
                                <th>اسم المريض</th>
                                <th>اسم الطبيب</th>
                                <th>حالة الصرف</th>
                            </tr>
                            <tbody>
                            <tr>
                                <td>654</td>
                                <td>28/4/2018</td>
                                <td>حمدى محمد عمادالدين</td>
                                <td>د/ أحمد الشيخ</td>
                                <td class="text-info">تم الصرف</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-lg-offset-1">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>الأصناف المنصرفة</h5>
                    </div>
                    <div class="ibox-content">
                        <table class="table table-responsive">
                            <tr class="success">
                                <th>اسم الصنف</th>
                                <th>الكمية الموصوفة</th>
                                <th>الكمية المنصرفة</th>
                            </tr>
                            <tbody>
                            <tr>
                                <td>أوكسيدانول</td>
                                <td>3</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>أوكسيبام</td>
                                <td>1</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>لورازيبام</td>
                                <td>2</td>
                                <td>2</td>
                            </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

        </div>
    </div>
@stop
