@extends('layouts.pharmacist')

@section('title')
طلبات الصرف
@stop

@section('content')

    <div class="row">


        <div class="col-sm-12">
            <label class="control-label p-h-xs m-r-xl">طلبات الصرف السابقة:</label>
            <a href="#" class="btn btn-primary">تسجيل صرف جديد</a>
        </div>

        <div class="col-lg-12">
            <div class="ibox float-e-margins">

                <div class="ibox-content" style="">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>تاريخ الصرف</th>
                                <th>اسم المريض</th>
                                <th>اسم الطبيب</th>
                                <th>اسم الدواء</th>
                                <th>الكمية المصروفة</th>

                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td>23/3/2018</td>
                                <td>أبونواف محمد الدراجى</td>
                                <td>سامى أحمد</td>
                                <td>

                                        <dt>أوكسكاربازيبين</dt>
                                        <dt>لورازيبام</dt>
                                        <dt>أوكسيبام</dt>

                                </td>
                                <td>
                                    <dt>2</dt>
                                    <dt>1</dt>
                                    <dt>1</dt>
                                </td>

                            </tr>
                            <tr>
                                <td>23/3/2018</td>
                                <td>أبونواف محمد الدراجى</td>
                                <td>سامى أحمد</td>
                                <td>

                                    <dt>أوكسكاربازيبين</dt>


                                </td>
                                <td>
                                    <dt>2</dt>

                                </td>

                            </tr>
                            <tr>
                                <td>23/3/2018</td>
                                <td>أبونواف محمد الدراجى</td>
                                <td>سامى أحمد</td>
                                <td>

                                    <dt>أوكسكاربازيبين</dt>
                                    <dt>لورازيبام</dt>
                                    <dt>أوكسيبام</dt>

                                </td>
                                <td>
                                    <dt>2</dt>
                                    <dt>1</dt>
                                    <dt>1</dt>
                                </td>

                            </tr>
                            <tr>
                                <td>23/3/2018</td>
                                <td>أبونواف محمد الدراجى</td>
                                <td>سامى أحمد</td>
                                <td>

                                    <dt>أوكسكاربازيبين</dt>
                                    <dt>لورازيبام</dt>
                                    <dt>أوكسيبام</dt>

                                </td>
                                <td>
                                    <dt>2</dt>
                                    <dt>1</dt>
                                    <dt>1</dt>
                                </td>

                            </tr>


                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>

@stop