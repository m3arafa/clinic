@extends('layouts.reception')


@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>تسجيل مريض جديد</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">Config option 1</a>
                            </li>
                            <li><a href="#">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form method="get" class="form-horizontal">

                        {{--الاسم الاول & اسم الأب--}}
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="col-sm-3 control-label">الاسم الأول</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="col-sm-3 control-label">اسم الأب</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                        </div>
                        {{-- اسم الجد & اسم العائلة--}}
                        <div class="form-group">
                            <div class="col-md-6">
                                <label class="col-sm-3 control-label">اسم الجد</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="col-sm-3 control-label">العائلة</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                        </div>

                        <div class="hr-line-dashed"></div>

                        {{-- رقم الملف & رقم الهوية--}}
                        <div class="form-group">
                            <div class="col-md-6">
                                <label class="col-sm-3 control-label">رقم الملف</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="col-sm-3 control-label">رقم الهوية</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                        </div>

                        <div class="hr-line-dashed"></div>

                        {{--جهة التحويل & اضافة جهة جديدة--}}
                        <div class="form-group row">

                            <div class="col-sm-9 col-md-8 col-lg-6">
                                <label class="col-sm-3 control-label">جهة التحويل</label>

                                <div class="col-sm-9">

                                    <select class="form-control m-b" name="account">
                                        <option>مستشفى بدر</option>
                                        <option>مستشفى المنصورة</option>
                                        <option>مستشفى الجامعة</option>
                                        <option>مستشفى العسكرى</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-3 col-md-2 col-lg-2">

                                <div class="ibox float-e-margins">


                                    <div class="text-center">
                                        <a data-toggle="modal" class="btn btn-primary" href="#modal-form">اضافة جهة
                                            جديدة</a>
                                    </div>
                                    <div id="modal-form" class="modal fade" aria-hidden="true"
                                         style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <h3 class="m-t-none m-b">اضافة جهة جديدة</h3>

                                                            <form role="form" class="form-horizontal">
                                                                <div class="form-group">
                                                                    <label>اسم الجهة</label>
                                                                    <input type="text" class="form-control">
                                                                </div>

                                                                <button class="btn btn-sm btn-primary pull-right m-t-n-xs"
                                                                        type="submit"><strong>اضافة</strong>
                                                                </button>
                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="hr-line-dashed"></div>


                        {{--بلد الحنسية & تاريخ الميلاد--}}
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label class="col-sm-3 control-label">بلد الجنسية</label>

                                <div class="col-sm-9">

                                    <select class="form-control m-b" name="account">
                                        <option>مصر</option>
                                        <option>السعودية</option>
                                        <option>الامارات</option>
                                        <option>الكويت</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">

                                <label class="col-sm-3 control-label">تاريخ الميلاد</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control">
                                </div>
                            </div>


                        </div>

                        <div class="hr-line-dashed"></div>

                        {{-- المهنة--}}

                        <div class="form-group p-md col-sm-12">

                            <label class="col-sm-2 control-label">المهنة</label>

                            <div class="col-sm-10">
                                <div class="col-sm-4 col-md-3 col-lg-2">
                                    <input type="radio" checked="" value="option1" id="optionsRadios1"
                                           name="optionsRadios">
                                    <label>مدنى</label>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2">
                                    <input type="radio" checked="" value="option1" id="optionsRadios1"
                                           name="optionsRadios">
                                    <label>عسكرى</label>
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-2">
                                    <input type="radio" checked="" value="option1" id="optionsRadios1"
                                           name="optionsRadios">
                                    <label>قطاع خاص</label>
                                </div>

                            </div>
                        </div>


                        {{--جهة العمل & اضافة جهة جديدة--}}

                        <div class="form-group row">

                            <div class="col-lg-6 col-md-8 col-sm-9">
                                <label class="col-sm-3 control-label">جهة العمل</label>

                                <div class="col-sm-9">

                                    <select class="form-control m-b" name="account">
                                        <option>شركة الأسمدة</option>
                                        <option>شركة الكهرباء</option>
                                        <option>مديرية التربية والتعليم</option>
                                        <option>أعمال حرة</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-lg-2 col-md-2 col-sm-2">

                                <div class="ibox float-e-margins">


                                    <div class="text-center">
                                        <a data-toggle="modal" class="btn btn-primary" href="#modal-form">اضافة جهة
                                            جديدة</a>
                                    </div>
                                    <div id="modal-form" class="modal fade" aria-hidden="true"
                                         style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-sm-12 b-r">
                                                            <h3 class="m-t-none m-b">اضافة جهة جديدة</h3>

                                                            <form role="form">
                                                                <div class="form-group">
                                                                    <label>اسم الجهة</label>
                                                                    <input type="text" class="form-control">
                                                                </div>

                                                                <button class="btn btn-sm btn-primary pull-right m-t-n-xs"
                                                                        type="submit"><strong>اضافة</strong>
                                                                </button>
                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>

                        {{--العنوان--}}

                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label class="col-sm-3 control-label">العنوان</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">

                            </div>
                        </div>

                        {{--رقم الجوال & رقم اخر للتواصل --}}
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="col-sm-3 control-label">رقم الجوال</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="col-sm-3 control-label">رقم اخر للتواصل</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                        </div>

                        <div class="hr-line-dashed"></div>

                        {{--بيانات أقرب شخص للإتصال به--}}

                        <div class="form-group">
                            <h3>بيانات أقرب شخص للتواصل:</h3>
                        </div>
                        <div class="form-group row">

                            <div class="col-md-6">
                                <label class="col-sm-3 control-label">الاسم </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="col-sm-3 control-label">صلة القرابة</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="col-sm-3 control-label">رقم الجوال</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="col-sm-3 control-label">رقم آخر للتواصل</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                        </div>

                        <div class="hr-line-dashed"></div>

                        {{-- تاريخ المراجعة & تاريخ فتح الملف--}}
                        <div class="form-group row">

                            <div class="col-sm-6">
                                <label class="col-sm-3 control-label">تاريخ المراجعة</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-6">

                                <label class="col-sm-3 control-label">تاريخ فتح الملف</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                        </div>

                        {{--حضور برفقة & الوقت--}}
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label class="col-sm-3 control-label">حضور برفقة</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <input type="hidden" class="form-control" value="">
                            </div>

                        </div>

                        {{-- التسجيل بواسطة --}}
                        <input type="hidden" value="">

                        {{--العيادة & الغرض--}}
                        <div class="form-group row">
                            <div class="col-sm-6">

                                <label class="col-sm-3 control-label">العيادة</label>

                                <div class="col-sm-9">

                                    <select class="form-control m-b" name="account">
                                        <option>الباطنة</option>
                                        <option>العيون</option>
                                        <option>العظام</option>
                                        <option>الأنف والأذن</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col-sm-6">
                                <label class="col-sm-3 control-label">الغرض</label>

                                <div class="col-sm-9">

                                    <select class="form-control m-b" name="account">
                                        <option>زيارة فقط</option>
                                        <option>إقامة</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        {{--  submit button--}}
                        <div class="form-group row p-w-m ">
                            <button class="btn btn-primary  m-t-n-xs" type="submit"><strong>تسجيل</strong>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
