@extends('layouts.pharmacist')


@section('content')

    <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>تسجيل مورد جديد</h5>
                </div>
                <div class="ibox-content" style="">
                    <form class="form-horizontal">
                        <div class="form-group"><label class="col-lg-2 control-label">اسم المورد</label>
                            <div class="col-lg-10"><input type="text" class="form-control"></div>
                        </div>
                        <div class="form-group"><label class="col-lg-2 control-label">اسم الشركة</label>
                            <div class="col-lg-10"><input type="text" class="form-control"></div>
                        </div>
                        <div class="form-group"><label class="col-lg-2 control-label">الرقم الضريبى</label>
                            <div class="col-lg-10"><input type="text" class="form-control"></div>
                        </div>
                        <div class="form-group"><label class="col-lg-2 control-label">العنوان</label>
                            <div class="col-lg-10"><input type="text" class="form-control"></div>
                        </div>
                        <div class="form-group"><label class="col-lg-2 control-label">رقم الجوال</label>
                            <div class="col-lg-10"><input type="text" class="form-control"></div>
                        </div>


                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-md btn-primary" type="submit">تسجيل</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

@stop