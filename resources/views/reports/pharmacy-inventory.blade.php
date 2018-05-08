@extends('layouts.app')

@section('title')
تقرير جرد الصيدلية
@stop

@section('content')

    <div class="container row ">
        <div class="col-lg-8 col-lg-offset-1">
            <div class="ibox float-e-margins">

                <div class="ibox-title">
                    <h3>تقرير جرد الصيدلية</h3>
                </div>

                <div class="ibox-content" style="">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>اسم الصنف</th>
                                <th>الكمية الموجودة حاليا</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td>أوكسكاربازيبين</td>
                                <td>23</td>
                            </tr>
                            <tr>
                                <td>لورازيبام</td>
                                <td>15</td>
                            </tr>
                            <tr>
                                <td>أوكسيبام</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>أوكسكاربازيبين</td>
                                <td>23</td>
                            </tr>
                            <tr>
                                <td>لورازيبام</td>
                                <td>15</td>
                            </tr>
                            <tr>
                                <td>أوكسيبام</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>أوكسكاربازيبين</td>
                                <td>23</td>
                            </tr>
                            <tr>
                                <td>لورازيبام</td>
                                <td>15</td>
                            </tr>
                            <tr>
                                <td>أوكسيبام</td>
                                <td>12</td>
                            </tr>


                            </tbody>
                        </table>
                    </div>
                    <div class="ibox-footer">
                        <button class="btn btn-primary">طباعة التقرير</button>
                    </div>

                </div>
            </div>
        </div>
    </div>

@stop