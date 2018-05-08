@extends('layouts.pharmacist')


@section('title')
    عرض التوريدات الخاصة بالمورد
@stop
@section('content')
    <div class="container row">
        <div class=" col-lg-8 col-lg-offset-2">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>التوريدات السابقة الخاصة بالمورد <span style="color: #0d6aad">أحمد محمد عبدالله</span></h5>
                </div>
                <div class="ibox-content">
                    <div class="panel-body">
                        <div class="panel-group" id="accordion">
                            {{-- panel 1--}}
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h5 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse-1"
                                           aria-expanded="false" class="collapsed">12/03/2018</a>
                                    </h5>
                                </div>
                                <div id="collapse-1" class="panel-collapse collapse" aria-expanded="false"
                                     style="height: 0px;">
                                    <div class="panel-body">
                                        <table class="table table-responsive table-striped">
                                            <thead>
                                            <tr>
                                                <th>الصنف</th>
                                                <th>الكمية</th>
                                            </tr>

                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>أوكساديول</td>
                                                <td>35</td>
                                            </tr>
                                            <tr>
                                                <td>أوبتيزال</td>
                                                <td>75</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            {{-- panel 2 --}}
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h5 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse-2"
                                           aria-expanded="false" class="collapsed">06/03/2018</a>
                                    </h5>
                                </div>
                                <div id="collapse-2" class="panel-collapse collapse" aria-expanded="false"
                                     style="height: 0px;">
                                    <div class="panel-body">
                                        <table class="table table-responsive table-striped">
                                            <thead>
                                            <tr>
                                                <th>الصنف</th>
                                                <th>الكمية</th>
                                            </tr>

                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>أوكساديول</td>
                                                <td>35</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop