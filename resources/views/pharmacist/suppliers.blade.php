@extends('layouts.pharmacist')

@section('title')
    قائمة الموردين
@stop

@section('content')

    <div class="row">


        <div class="col-lg-12">
            <div class="ibox collapsed">
                <div class="ibox-title">
                    <h5>تسجيل مورد جديد</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>

                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content" style="display: none;">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-lg-2 control-label">اسم المورد</label>
                            <div class="col-lg-4"><input type="text" class="form-control"></div>
                            <label class="col-lg-2 control-label">اسم الشركة</label>
                            <div class="col-lg-4"><input type="text" class="form-control"></div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">الرقم الضريبى</label>
                            <div class="col-lg-4"><input type="text" class="form-control"></div>
                            <label class="col-lg-2 control-label">رقم الجوال</label>
                            <div class="col-lg-4"><input type="text" class="form-control"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">العنوان</label>
                            <div class="col-lg-4"><input type="text" class="form-control"></div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-md btn-primary " type="submit">تسجيل</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="col-sm-12">
            <label class="control-label p-h-xs ">قائمة الموردين :</label>
        </div>

        <div class="col-lg-12">
            <div class="ibox float-e-margins">

                <div class="ibox-content" style="">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>

                                <th>اسم المورد</th>
                                <th>اسم الشركة</th>
                                <th>الرقم الضريبى</th>
                                <th>العنوان</th>
                                <th>الجوال</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>إبراهيم محمد عبدالله</td>
                                <td>النصر للأدوية</td>
                                <td>035458</td>
                                <td>أبوقير - الإسكندرية - مصر</td>
                                <td>20-1063-869584</td>
                                <td>
                                    <form role="form" action="{{url('/pharmacist/supplier-transactions-show')}}">
                                        <button class="btn btn-primary btn-sm" type="submit"> عرض التوريدات</button>
                                    </form>
                                </td>
                                <td>

                                    <form action="{{url('/pharmacist/supplier-edit')}}">
                                        <button type="submit" class="btn btn-warning btn-sm">تعديل البيانات</button>
                                    </form>

                                </td>


                            </tr>
                            <tr>
                                <td>إبراهيم محمد عبدالله</td>
                                <td>النصر للأدوية</td>
                                <td>035458</td>
                                <td>أبوقير - الإسكندرية - مصر</td>
                                <td>20-1063-869584</td>
                                <td>
                                    <form role="form" action="{{url('/pharmacist/supplier-transactions-show')}}">
                                        <button class="btn btn-primary btn-sm" type="submit"> عرض التوريدات</button>
                                    </form>
                                </td>
                                <td>

                                    <form action="{{url('/pharmacist/supplier-edit')}}">
                                        <button type="submit" class="btn btn-warning btn-sm">تعديل البيانات</button>
                                    </form>

                                </td>

                            </tr>
                            <tr>
                                <td>إبراهيم محمد عبدالله</td>
                                <td>النصر للأدوية</td>
                                <td>035458</td>
                                <td>أبوقير - الإسكندرية - مصر</td>
                                <td>20-1063-869584</td>
                                <td>
                                    <form role="form" action="{{url('/pharmacist/supplier-transactions-show')}}">
                                        <button class="btn btn-primary btn-sm" type="submit"> عرض التوريدات</button>
                                    </form>
                                </td>
                                <td>

                                    <form action="{{url('/pharmacist/supplier-edit')}}">
                                        <button type="submit" class="btn btn-warning btn-sm">تعديل البيانات</button>
                                    </form>

                                </td>

                            </tr>
                            <tr>
                                <td>إبراهيم محمد عبدالله</td>
                                <td>النصر للأدوية</td>
                                <td>035458</td>
                                <td>أبوقير - الإسكندرية - مصر</td>
                                <td>20-1063-869584</td>
                                <td>
                                    <form role="form" action="{{url('/pharmacist/supplier-transactions-show')}}">
                                        <button class="btn btn-primary btn-sm" type="submit"> عرض التوريدات</button>
                                    </form>
                                </td>
                                <td>

                                    <form action="{{url('/pharmacist/supplier-edit')}}">
                                        <button type="submit" class="btn btn-warning btn-sm">تعديل البيانات</button>
                                    </form>

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