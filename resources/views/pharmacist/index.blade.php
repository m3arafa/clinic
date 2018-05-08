@extends('layouts.pharmacist')

@section('title')
الصيدلية | الرئيسية
@stop

@section('content')

    <div class="form-group float-e-margins col-lg-offset-1">
        <div class="col-sm-6">

            <div class="input-group">
                <input type="text" placeholder="بحث بإسم الدواء" class="input-md form-control">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-md btn-primary"> بحث</button>
                </span>
            </div>
        </div>
        {{--اضافة دواء جديد--}}
        <div class="col-sm-6">
            <div class="ibox float-e-margins">


                <a data-toggle="modal" class="btn btn-primary" href="#modal-form">إضافة دواء جديد</a>

                <div id="modal-form" class="modal fade" aria-hidden="true"
                     style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h3 class="m-t-none m-b">اضافة دواء :</h3>

                                        <form role="form" class="form-horizontal">
                                            <div class="form-group">
                                                <label>اسم الدواء</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>الجرعة الشائعة</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>الكمية الحالية</label>
                                                <input type="text" class="form-control">
                                            </div>

                                            <button class="btn btn-sm btn-primary pull-right m-t-n-xs"
                                                    type="submit"><strong>اضافة</strong>
                                            </button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--بحث وتصفح   الأدوية الحالية --}}
    <div class="row">

        <div class="col-lg-10 col-lg-offset-1">
            <div class="ibox float-e-margins">

                <div class="ibox-title">
                    <h5>نتائج البحث :</h5>
                </div>

                <div class="ibox-content" style="">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>

                                <th>اسم الدواء</th>
                                <th>الجرعة الشائعة</th>
                                <th>الكمية الحالية</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>أوكسكاربازيبين</td>
                                <td>2 قرص يومياً</td>
                                <td>23</td>
                                <td><a href="#" class="btn btn-warning">تعديل</a></td>
                            </tr>
                            <tr>
                                <td>لورازيبام</td>
                                <td>3 قرص يومياً</td>
                                <td>0</td>
                                <td><a href="#" class="btn btn-warning">تعديل</a></td>
                            </tr>
                            <tr>
                                <td>أوكسايبام</td>
                                <td>6 جرام يوميا</td>
                                <td>12</td>
                                <td><a href="#" class="btn btn-warning">تعديل</a></td>
                            </tr>


                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>

@stop