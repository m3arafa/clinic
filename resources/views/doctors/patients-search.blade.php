@extends('layouts.doctor')

@section('title')
بحث بيانات المرضى
@stop

@section('content')


    <div class="col-sm-12">
        <div class="col-sm-12">
            <h3>بحث بيانات المرضى:</h3>
        </div>
        <div class="form-group float-e-margins">
            <div class="col-sm-6 p-h-xs">
                <div class="input-group">
                    <input type="text" placeholder="بحث برقم الملف أو الاسم" class="input-md form-control">
                    <span class="input-group-btn">
                    <button type="button" class="btn btn-md btn-primary"> بحث</button>
                </span>
                </div>
            </div>
        </div>
    </div>

    {{--نتائج البحث--}}
    <div class="row">

        <div class="col-lg-12">
            <div class="ibox float-e-margins">

                <div class="ibox-content" style="">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>

                                <th>رقم الملف</th>
                                <th>اسم المريض</th>
                                <th>رقم الجوال</th>
                                <th>الجنسية</th>
                                <th>جهة العمل</th>
                                <th>تاريخ الميلاد</th>
                                <th>تاريخ آخر زيارة</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1646</td>
                                <td><a href="{{url('patients/dshow')}}">أحمد عبدالسلام المتولى</a></td>
                                <td>0800 051213</td>
                                <td>مصرى</td>
                                <td>شركة بدر للبرمجيات</td>
                                <td>13/02/1983</td>
                                <td>07/04/2018</td>
                            </tr>
                            <tr>
                                <td>961</td>
                                <td><a href="{{url('patients/dshow')}}">محمد بن عيسى الجابر </a></td>
                                <td>0800 051213</td>
                                <td>السعودية</td>
                                <td>مجموعة ام بى آي السعودية</td>
                                <td>13/02/1983</td>
                                <td>07/04/2018</td>
                            </tr>
                            <tr>
                                <td>2481</td>
                                <td><a href="{{url('patients/dshow')}}">الوليد بن طلال بن عبدالعزيز </a></td>
                                <td>0800 051213</td>
                                <td>السعودية</td>
                                <td>مجموعة شركة المملكة القابضة</td>
                                <td>13/02/1983</td>
                                <td>07/04/2018</td>
                            </tr>
                            <tr>
                                <td>3691</td>
                                <td><a href="{{url('patients/dshow')}}">ماجد الفطيم </a></td>
                                <td>0800 051213</td>
                                <td>الإمارات</td>
                                <td> شركة مالك الفطيم القابضة</td>
                                <td>13/02/1983</td>
                                <td>07/04/2018</td>
                            </tr>


                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>
@stop