@extends('layouts.app')

@section('title')
    تقرير زيارات المرضى
@stop

@section('content')

    <div class="container">
        <div class="row">
            <div class="ibox float-e-margins col-lg-9 col-md-10 col-sm-12">
                <div class="ibox-title">
                    <h5>تقرير زيارات المرضى</h5>
                </div>


                <div class="ibox-content" style="">
                    <form class="form-horizontal" method="" action="patients-visits-show">
                        <div class="form-group row">
                            <label class="col-lg-2 control-label">عيادة : </label>
                            <div class="col-lg-4">
                                <div class="row-fluid">
                                    <select class="form-control">
                                        <option>المخدرات</option>
                                        <option>العظام</option>
                                        <option>النفسية</option>
                                        <option>العيون</option>
                                        <option>الصدر</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{--الفترة--}}
                        <div class="form-group">
                            <label class="col-lg-2 control-label">الفترة من : </label>
                            <div class="col-lg-4">
                                <input class="form-control" type="date">
                            </div>
                            <label class="col-lg-1 control-label">إلى : </label>
                            <div class="col-lg-4">
                                <input class="form-control" type="date">
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-md btn-primary" type="submit">تأكيد</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop