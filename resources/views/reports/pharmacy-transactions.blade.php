@extends('layouts.app')


@section('content')

<div class="container row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">

            <div class="ibox-title">
                <h3>تقرير الصرف من الصيدلية</h3>
            </div>

            <div class="ibox-content" style="">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>تاريخ الصرف</th>
                            <th>رقم الملف</th>
                            <th>اسم المريض</th>
                            <th>اسم الطبيب</th>
                            <th>الصنف</th>
                            <th>الكمية الموصوفة</th>
                            <th>الكمية المصروفة</th>

                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>23/3/2018</td>
                            <td>3453</td>
                            <td>أبونواف محمد الدراجى</td>
                            <td>د/ سامى أحمد</td>
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
                            <td>
                                <dt>2</dt>
                                <dt>1</dt>
                                <dt>1</dt>
                            </td>

                        </tr>
                        <tr>
                            <td>23/3/2018</td>
                            <td>3453</td>
                            <td>أبونواف محمد الدراجى</td>
                            <td>د/ سامى أحمد</td>
                            <td>
                                <dt>أوكسكاربازيبين</dt>
                                <dt>لورازيبام</dt>
                                <dt>أوكسيبام</dt>

                            </td>
                            <td>
                                <dt>2</dt>
                                <dt>1</dt>
                                <dt>2</dt>
                            </td>
                            <td>
                                <dt>2</dt>
                                <dt>1</dt>
                                <dt>2</dt>
                            </td>

                        </tr>
                        <tr>
                            <td>23/3/2018</td>
                            <td>3453</td>
                            <td>أبونواف محمد الدراجى</td>
                            <td>د/ سامى أحمد</td>
                            <td>
                                <dt>أوكسكاربازيبين</dt>
                                <dt>لورازيبام</dt>
                                <dt>أوكسيبام</dt>

                            </td>
                            <td>
                                <dt>2</dt>
                                <dt>3</dt>
                                <dt>1</dt>
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