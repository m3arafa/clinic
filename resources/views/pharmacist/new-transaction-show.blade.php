@extends('layouts.pharmacist')


@section('title')
    تسجيل صرف جديد
@stop

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <table class="table">
                            <tr>
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
                                <td class="text-info">لم تصرف</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>الأصناف المنصرفة</h5>
                    </div>
                    <div class="ibox-content">
                        <form>
                            <table class="table table-responsive">
                                <tr>
                                    <th>اسم الصنف</th>
                                    <th>الكمية الموصوفة</th>
                                    <th>الكمية المنصرفة</th>
                                </tr>
                                <tbody>
                                <tr>
                                    <td>أوكسيدانول</td>
                                    <td>3</td>
                                    <td><input type="text" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>أوكسيبام</td>
                                    <td>1</td>
                                    <td><input type="text" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>لورازيبام</td>
                                    <td>2</td>
                                    <td><input type="text" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <button class="btn btn-primary" type="submit">صرف</button>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </form>

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