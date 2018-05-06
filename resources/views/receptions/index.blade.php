@extends('layouts.reception')

@section('title')
الإستقبال
@stop

@section('content')

    <div class="form-group float-e-margins">
        <div class="col-sm-6">

            <div class="input-group">
                <input type="text" placeholder="بحث برقم الملف أو الاسم" class="input-md form-control">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-md btn-primary"> بحث</button>
                </span>
            </div>
        </div>
        <div class="col-sm-6">
            <a href="/inspina/patients/insert"><button class="btn btn-primary btn-md">مريض جديد</button></a>
        </div>
    </div>


    {{--نتائج البحث--}}
    <div class="row">

        <div class="col-sm-12">
            <label class="control-label p-h-xs ">نتائج البحث :</label>
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
                                <td><a href="{{url('patients/show')}}">أحمد عبدالسلام المتولى</a></td>
                                <td>0800 051213</td>
                                <td>مصرى</td>
                                <td>شركة بدر للبرمجيات</td>
                                <td>13/02/1983</td>
                                <td>07/04/2018</td>
                            </tr>
                            <tr>
                                <td>961</td>
                                <td><a href="{{url('patients/show')}}">محمد بن عيسى الجابر </a></td>
                                <td>0800 051213</td>
                                <td>السعودية</td>
                                <td>مجموعة ام بى آي السعودية</td>
                                <td>13/02/1983</td>
                                <td>07/04/2018</td>
                            </tr>
                            <tr>
                                <td>2481</td>
                                <td><a href="{{url('patients/show')}}">الوليد بن طلال بن عبدالعزيز </a></td>
                                <td>0800 051213</td>
                                <td>السعودية</td>
                                <td>مجموعة شركة المملكة القابضة</td>
                                <td>13/02/1983</td>
                                <td>07/04/2018</td>
                            </tr>
                            <tr>
                                <td>3691</td>
                                <td><a href="{{url('patients/show')}}">ماجد الفطيم </a></td>
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
                                <td><a href="{{url('patients/show')}}">محمد عبدالرحمن غالب </a></td>
                                <td>المخدرات</td>
                                <td>مصرى</td>
                                <td>41 دقيقة</td>
                            </tr>
                            <tr>
                                <td>257</td>
                                <td><a href="{{url('patients/show')}}">أبونواف الدراجى </a></td>
                                <td>الجلدية</td>
                                <td>السعودية</td>
                                <td>23 دقيقة</td>
                            </tr>
                            <tr>
                                <td>836</td>
                                <td><a href="{{url('patients/show')}}">ماجدة السيد عبدالفتاح</a></td>
                                <td>الأعصاب</td>
                                <td>الكويت</td>
                                <td> 13 دقيقة  + 1 ساعة </td>
                                <td><span class="label label-success">السماح بالدخول</span></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>


@stop