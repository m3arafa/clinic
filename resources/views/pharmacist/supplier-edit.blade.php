@extends('layouts.pharmacist')

@section('title')
    تعديل بيانات المورد
@stop

@section('content')

    <div class="row">


        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>تعديل بيانات مورد</h5>
                </div>
                <div class="ibox-content">
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
                                <button class="btn btn-md btn-primary " type="submit">تعديل</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>



    </div>

@stop