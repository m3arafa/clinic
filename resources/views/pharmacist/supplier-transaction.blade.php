@extends('layouts.pharmacist')
@section('title')
    تسجيل عملية توريد جديدة
@stop
@section('content')

    <div class="row col-lg-offset-1">
        <div class="col-sm-12 col-md-10 col-lg-10">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>تسجيل عملية توريد جديدة</h5>
                </div>
                <div class="ibox-content" style="">
                    <form class="form-horizontal">
                        <div class="form-group row">
                            <div class="col-lg-2">
                                <label class="ontrol-label">اسم المورد</label>
                            </div>

                            <div class="col-lg-4">
                                <select class="selectpicker" data-live-search="true" data-size="2">
                                    <option>أحمد عبدالله</option>
                                    <option>محمد عبدالسلام</option>
                                    <option>أبونواس محمد الغدادى</option>
                                    <option>مايكل حليم رمزى</option>
                                    <option>سامى أحمد عبدالرحمن</option>
                                </select>

                            </div>
                            <div class="col-lg-2">
                                <label class="control-label">الصنف</label>
                            </div>

                            <div class="col-lg-4">
                                <select class="selectpicker" data-live-search="true" data-size="2">
                                    <option>أوكسكاربازيبين</option>
                                    <option>لورازيبام</option>
                                    <option>أوكسايبام</option>
                                    <option>أوكسكاربازيبين</option>
                                    <option>لورازيبام</option>
                                    <option>أوكسايبام</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-2">
                                <label class="control-label ">الكمية</label>
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-lg-2">
                                <label class="control-label ">تاريخ التوريد</label>
                            </div>
                            <div class="input-group date col-lg-4">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="date" class="form-control">
                            </div>

                        </div>


                        <div>
                            <button class="btn  btn-primary col-lg-2 m-t-sm" type="submit">تسجيل</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

@stop
