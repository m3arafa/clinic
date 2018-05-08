@extends('layouts.app')

@section('title')
    تقرير دخول وخروج مريض
@stop

@section('content')

    <div class="container row">
        <div class="form-group float-e-margins col-lg-6 col-lg-offset-1">
            <div class="input-group">
                <input type="text" placeholder="بحث برقم الملف أو الاسم" class="input-md form-control">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-md btn-primary"> بحث</button>
                </span>
            </div>
        </div>

        <div class="col-lg-10">
            <div class="ibox float-e-margins col-lg-offset-1">

                <div class="ibox-title">
                    <h4>نتائج البحث</h4>
                </div>

                <div class="ibox-content" style="">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>

                                <th>رقم الملف</th>
                                <th>اسم المريض</th>
                                <th>تاريخ آخر زيارة</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1646</td>
                                <td>أحمد عبدالسلام أبوهشيمة</td>
                                <td>07/04/2018</td>
                                <td>
                                    <a href="{{url('reports/patient-visit-state-show')}}">
                                        <button class="btn btn-primary">تقرير الزيارة</button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>961</td>
                                <td>محمد بن عيسى الجابر</td>
                                <td>07/04/2018</td>
                                <td>
                                    <a href="{{url('reports/patient-visit-state-show')}}">
                                        <button class="btn btn-primary">تقرير الزيارة</button>
                                    </a>
                                </td>

                            </tr>
                            <tr>
                                <td>2481</td>
                                <td>الوليد بن طلال بن عبدالعزيز</td>
                                <td>07/04/2018</td>
                                <td>
                                    <a href="{{url('reports/patient-visit-state-show')}}">
                                        <button class="btn btn-primary">تقرير الزيارة</button>
                                    </a>
                                </td>

                            </tr>
                            <tr>
                                <td>3691</td>
                                <td>ماجد أحمد الفطيم</td>
                                <td>07/04/2018</td>
                                <td>
                                    <a href="{{url('reports/patient-visit-state-show')}}">
                                        <button class="btn btn-primary">تقرير الزيارة</button>
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