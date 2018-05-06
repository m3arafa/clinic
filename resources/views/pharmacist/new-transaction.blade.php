@extends('layouts.pharmacist')


@section('title')
    تسجيل صرف جديد
@stop

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-10 col-lg-10">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h4>تسجيل صرف جديد</h4>
                    </div>
                    <div class="ibox-content" style="">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="col-lg-3 control-label">رقم الملف للمريض </label>
                                <div class="col-lg-5"><input type="text" class="form-control"></div>
                                <div class="col-lg-4">
                                    <button class="btn btn-primary">إظهار أذونات الصرف</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>أذونات الصرف</h5>
                    </div>
                    <div class="ibox-content">
                        <table class="table table-striped">
                            <tr>
                                <th>رقم إذن الصرف</th>
                                <th>تاريخ إذن الصرف</th>
                                <th>اسم المريض</th>
                                <th>اسم الطبيب</th>
                                <th>حالة الصرف</th>
                                <th></th>
                            </tr>
                            <tbody>
                            <tr>
                                <td>654</td>
                                <td>28/4/2018</td>
                                <td>حمدى محمد عمادالدين</td>
                                <td>د/ أحمد الشيخ</td>
                                <td class="text-info">لم تصرف</td>
                                <td>
                                    <a href="{{url('pharmacist/new-transaction-show')}}">
                                        <button class="btn btn-primary">عرض</button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>245</td>
                                <td>12/4/2018</td>
                                <td>حمدى محمد عمادالدين</td>
                                <td>د/ السيد عوض الله</td>
                                <td class="text-warning">تم الصرف</td>
                                <td>
                                    <a href="{{url('pharmacist/transaction-show')}}">
                                        <button class="btn btn-primary">عرض</button>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td>123</td>
                                <td>02/2/2018</td>
                                <td>حمدى محمد عمادالدين</td>
                                <td>د/ أحمد الشيخ</td>
                                <td class="text-warning">تم الصرف</td>
                                <td>
                                    <a href="{{url('pharmacist/transaction-show')}}">
                                        <button class="btn btn-primary">عرض</button>
                                    </a>
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

@section('scripts')

    <script>

        $('.selectpicker').selectpicker();

    </script>


@stop