@extends('layouts.app')

@section('title')

    تعريف جهات التحويل

@stop

@section('content')
    <div class="container">
        <div class="row">

            {{--إضافة جهة تحويل جديدة--}}
            <div class="ibox float-e-margins col-lg-10 col-md-12 col-sm-12">

                <div class="ibox-title">
                    <h4>إضافة جهة تحويل</h4>
                </div>
                <form role="form">
                    <div class="ibox-content" style="">

                        <div class="row">
                            <div class="col-lg-12 form-group">
                                <div class="col-lg-1">
                                    <label class="">الإسم :</label>
                                </div>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control">
                                </div>

                                <div class="col-lg-1">
                                    <label class="">الإيميل :</label>
                                </div>
                                <div class="col-lg-5">
                                    <input type="email" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-12 form-group">
                                <div class="col-lg-1">
                                    <label class="">العنوان :</label>
                                </div>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-lg-1 ">
                                    <label class="">رقم الجوال :</label>
                                </div>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="ibox-footer">
                        <button class="btn btn-primary" type="submit">إضافة</button>
                    </div>
                </form>
            </div>
            {{-- الجهات الحالية--}}
            <div class="ibox float-e-margins col-lg-10 col-md-12 col-sm-12">
                <div class="ibox-title ">
                    <h4> جهات التحويل الحالية : </h4>
                </div>
                <div class="ibox-content">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>الإسم</th>
                            <th>الإيميل</th>
                            <th>العنوان</th>
                            <th>رقم الجوال</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>شركة بدر للبرمجيات</td>
                            <td>info@badrsystems.com</td>
                            <td>جمهورية مصر العربية - محافظة الغربية - سمنود</td>
                            <td>0020402970833</td>
                            <td>
                                <div class="text-center">
                                    <a data-toggle="modal" class="btn btn-primary" href="#modal-form">تعديل</a>
                                </div>
                                <div id="modal-form" class="modal fade" aria-hidden="true"
                                     style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h3 class="m-t-none m-b">تعديل جهة التحويل :</h3>

                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label>الإسم :</label>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>الإيميل :</label>
                                                                <input type="email" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>العنوان :</label>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>رقم الجوال :</label>
                                                                <input type="text" class="form-control">
                                                            </div>


                                                            <button class="btn  btn-primary pull-right m-t-n-xs"
                                                                    type="submit">تعديل
                                                            </button>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <form>
                                    <button class="btn btn-warning" type="submit">حذف</button>
                                </form>

                            </td>

                        </tr>
                        <tr>
                            <td>مسستشفى الرياض العام</td>
                            <td>info@badrsystems.com</td>
                            <td>المملكة العربية السعودية - الرياض</td>
                            <td>0020402970833</td>
                            <td>
                                <div class="text-center">
                                    <a data-toggle="modal" class="btn btn-primary" href="#modal-form">تعديل</a>
                                </div>
                                <div id="modal-form" class="modal fade" aria-hidden="true"
                                     style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h3 class="m-t-none m-b">تعديل جهة التحويل :</h3>

                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label>الإسم :</label>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>الإيميل :</label>
                                                                <input type="email" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>العنوان :</label>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>رقم الجوال :</label>
                                                                <input type="text" class="form-control">
                                                            </div>


                                                            <button class="btn  btn-primary pull-right m-t-n-xs"
                                                                    type="submit">تعديل
                                                            </button>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <form>
                                    <button class="btn btn-warning" type="submit">حذف</button>
                                </form>

                            </td>

                        </tr>
                        <tr>
                            <td>مركز الصفوة الطبى </td>
                            <td>info@badrsystems.com</td>
                            <td>الإمارات العربية المتحدة - أبو ظبى </td>
                            <td>0020402970833</td>
                            <td>
                                <div class="text-center">
                                    <a data-toggle="modal" class="btn btn-primary" href="#modal-form">تعديل</a>
                                </div>
                                <div id="modal-form" class="modal fade" aria-hidden="true"
                                     style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h3 class="m-t-none m-b">تعديل جهة التحويل :</h3>

                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label>الإسم :</label>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>الإيميل :</label>
                                                                <input type="email" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>العنوان :</label>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>رقم الجوال :</label>
                                                                <input type="text" class="form-control">
                                                            </div>


                                                            <button class="btn  btn-primary pull-right m-t-n-xs"
                                                                    type="submit">تعديل
                                                            </button>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <form>
                                    <button class="btn btn-warning" type="submit">حذف</button>
                                </form>

                            </td>

                        </tr>


                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@stop