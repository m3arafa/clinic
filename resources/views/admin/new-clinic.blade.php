@extends('layouts.app')

@section('title')

    إضافة عيادة

@stop

@section('content')
    <div class="container">
        <div class="row">

            {{--إضافة عيادة--}}
            <div class="ibox float-e-margins col-lg-8 col-lg-offset-1">

                <div class="ibox-title">
                    <h4>إضافة عيادة جديدة</h4>
                </div>
                <form class="form-group">
                    <div class="ibox-content" style="">


                        <div class="col-lg-2">
                            <label class="">اسم العيادة :</label>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" class="form-control">
                        </div>

                    </div>
                    <div class="ibox-footer">
                        <button class="btn btn-primary" type="submit">إضافة</button>
                    </div>
                </form>
            </div>
            {{-- العيادات الحالية--}}
            <div class="ibox float-e-margins col-lg-8 col-lg-offset-1">
                <div class="ibox-title ">
                    <h4> العيادات الحالية : </h4>
                </div>
                <div class="ibox-content">
                    <table class="table table-striped col-lg-10 col-md-12 col-sm-12">
                        <thead>
                        <tr>
                            <th>اسم العيادة</th>
                            <th>عدد الأطباء</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>المخدرات</td>
                            <td>6</td>
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
                                                        <h3 class="m-t-none m-b">تعديل بيانات العيادة :</h3>

                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label>اسم العيادة</label>
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
                            <td>النفسية الوعصبية</td>
                            <td>3</td>
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
                                                        <h3 class="m-t-none m-b">تعديل بيانات العيادة :</h3>

                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label>اسم العيادة</label>
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
                            <td>العظام</td>
                            <td>2</td>
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
                                                        <h3 class="m-t-none m-b">تعديل بيانات العيادة :</h3>

                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label>اسم العيادة</label>
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
                            <td>الباطنة</td>
                            <td>10</td>
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
                                                        <h3 class="m-t-none m-b">تعديل بيانات العيادة :</h3>

                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label>اسم العيادة</label>
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
                            <td>العيون</td>
                            <td>5</td>
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
                                                        <h3 class="m-t-none m-b">تعديل بيانات العيادة :</h3>

                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label>اسم العيادة</label>
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