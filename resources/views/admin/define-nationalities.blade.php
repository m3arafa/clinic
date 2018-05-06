@extends('layouts.app')

@section('title')

تعريف الجنسيات

@stop

@section('content')
    <div class="container">
        <div class="row">

            {{--إضافة جنسية--}}
            <div class="ibox float-e-margins col-lg-7 col-md-10 col-sm-12">

                <div class="ibox-title">
                    <h4>إضافة جنسية</h4>
                </div>
                <form class="form-group">
                    <div class="ibox-content" style="">


                        <div class="col-lg-2">
                            <label class="">الإسم :</label>
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
            {{-- الجنسيات الحالية--}}
            <div class="ibox float-e-margins col-lg-7 col-md-10 col-sm-12">
                <div class="ibox-title ">
                    <h4> الجنسيات الحالية : </h4>
                </div>
                <div class="ibox-content">
                    <table class="table table-striped col-lg-10 col-md-12 col-sm-12">
                        <thead>
                        <tr>
                            <th>الإسم</th>
                            <th>عدد المرضى</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>المصرية</td>
                            <td>231</td>
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
                                                        <h3 class="m-t-none m-b">تعديل بيانات الجنسية :</h3>

                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label>الإسم :</label>
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
                            <td>السعودية</td>
                            <td>1586</td>
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
                                                        <h3 class="m-t-none m-b">تعديل بيانات الجنسية :</h3>

                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label>الإسم :</label>
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
                            <td>الكويتية</td>
                            <td>52</td>
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
                                                        <h3 class="m-t-none m-b">تعديل بيانات الجنسية :</h3>

                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label>الإسم :</label>
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
                            <td>القطرية</td>
                            <td>15</td>
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
                                                        <h3 class="m-t-none m-b">تعديل بيانات الجنسية :</h3>

                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label>الإسم :</label>
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
                            <td>الأردنية</td>
                            <td>32</td>
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
                                                        <h3 class="m-t-none m-b">تعديل بيانات الجنسية :</h3>

                                                        <form role="form">
                                                            <div class="form-group">
                                                                <label>الإسم :</label>
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