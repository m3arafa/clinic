@extends('layouts.doctor')




@section('content')

    {{--قائمة الإنتظار--}}
    <div class="row">

        <div class="col-sm-12">
            <label class="control-label p-h-xs ">قائمة الإنتظار :</label>
        </div>

        <div class="col-lg-12">
            <div class="ibox float-e-margins">

                <div class="ibox-content" style="">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>

                                <th>رقم الملف</th>
                                <th>اسم المريض</th>
                                <th>العيادة</th>
                                <th>الجنسية</th>
                                <th>وقت الإنتظار</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>8698</td>
                                <td><a href="{{url('patients/dshow')}}">محمد عبدالرحمن غالب </a></td>
                                <td>المخدرات</td>
                                <td>مصرى</td>
                                <td>41 دقيقة</td>
                                <td><a href="#" class="btn btn-primary">السماح بالدخول</a></td>
                            </tr>
                            <tr>
                                <td>257</td>
                                <td><a href="{{url('patients/dshow')}}">أبونواف الدراجى </a></td>
                                <td>الجلدية</td>
                                <td>السعودية</td>
                                <td>23 دقيقة</td>
                                <td><a href="#" class="btn btn-primary">السماح بالدخول</a></td>
                            </tr>
                            <tr>
                                <td>836</td>
                                <td><a href="{{url('patients/dshow')}}">ماجدة السيد عبدالفتاح</a></td>
                                <td>الأعصاب</td>
                                <td>الكويت</td>
                                <td> 13 دقيقة + 1 ساعة</td>
                                <td><a href="#" class="btn btn-primary">السماح بالدخول</a></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>


    </div>

@stop