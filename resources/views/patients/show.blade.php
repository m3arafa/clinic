@extends('layouts.reception')



@section('content')


    <div class="content">
        <div class="row m-b-lg m-t-lg">
            <div class="col-md-6">

                <div class="profile-image">
                    <img src="{{asset('public/img/a4.jpg')}}" class="img-circle circle-border m-b-md" alt="profile">
                </div>
                <div class="profile-info p-h-m">
                    <div class="">
                        <div>
                            <h2 class="no-margins">
                                أحمد عبد السلام المتولى
                            </h2>
                            <h4>عيادة المخدرات</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 row">
                {{--if patient state == inside => show button logout ; else show button new visit--}}
                <div class="col-sm-2">

                    <a data-toggle="modal" class="btn btn-warning" href="#modal-form">تسجيل خروج</a>

                    <div id="modal-form" class="modal fade" aria-hidden="true"
                         style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h2 class="m-t-none m-b">تسجيل خروج</h2>

                                            <form role="form" class="form-horizontal">
                                                <div class="form-group">
                                                    <h4>الحالة عند الخروج</h4>
                                                    <textarea class="form-control"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <h4>تحليل المخدر</h4>
                                                    <input type="text" class="form-control">
                                                </div>

                                                <button class="btn btn-md btn-primary"
                                                        type="submit"><strong>تأكيد</strong>
                                                </button>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">

                    <a data-toggle="modal" class="btn btn-success" href="#modal-form-reg">تسجيل زيارة جديدة</a>

                    <div id="modal-form-reg" class="modal fade" aria-hidden="true"
                         style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h2 class="m-t-none m-b">تسجيل زيارة جديدة:</h2>

                                            <form role="form" class="form-horizontal">
                                                <div class="form-group">
                                                    <h4>تحديد العيادة</h4>
                                                    <select class="form-control m-b" name="account">
                                                        <option>الباطنة</option>
                                                        <option>العيون</option>
                                                        <option>العظام</option>
                                                        <option>الأنف والأذن</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <h4>نوع الزيارة</h4>
                                                    <select class="form-control m-b" name="account">
                                                        <option>زيارة فقط</option>
                                                        <option>إقامة</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <h4>المرافق</h4>
                                                    <input type="text" class="form-control">
                                                </div>

                                                <button class="btn btn-md btn-primary"
                                                        type="submit"><strong>تأكيد</strong>
                                                </button>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <button class="btn btn-primary">طباعة بطاقة تعريف المريض</button>
                </div>
            </div>

        </div>



        {{--patient details--}}
        <div class="form-group row">
            <div class="col-sm-6">

                    <table class="table small m-b-xs">
                        <tbody>
                        <tr>
                            <td>
                                <h4>رقم الملف</h4>
                            </td>
                            <td>
                                <h5>1356</h5>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <h4>رقم الهوية</h4>
                            </td>
                            <td>
                                <h5>2-850252-130-5845</h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>بلد الجنسية</h4>
                            </td>
                            <td>
                                <h5>مصر</h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>تاريخ الميلاد</h4>
                            </td>
                            <td>
                                <h5>14/12/1984</h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>جهة التحويل</h4>
                            </td>
                            <td>
                                <h5>مستشفى بدر</h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>جهة العمل</h4>
                            </td>
                            <td>
                                <h5>شركة المحلة الكبرى</h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>نوع المهنة</h4>
                            </td>
                            <td>
                                <h5>قطاع خاص</h5>
                            </td>
                        </tr>
                        </tbody>
                    </table>

            </div>
            <div class="col-md-6">

                <table class="table small m-b-xs">
                    <tbody>
                    <tr>
                        <td>
                            <h4>آخر زيارة</h4>
                        </td>
                        <td>
                            <h5>22/4/2018</h5>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <h4>تاريخ فتح الملف</h4>
                        </td>
                        <td>
                            <h5>30/1/2010</h5>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <h4>تاريخ المراجعة</h4>
                        </td>
                        <td>
                            <h5>23/2/2018</h5>
                        </td>

                    </tr>

                    <tr>
                        <td>
                            <h4>العنوان</h4>
                        </td>
                        <td>
                            <h5>مركز سمنود - الغربية - مصر</h5>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <h4>رقم الجوال</h4>
                        </td>
                        <td>
                            <h5>20-1069-896425</h5>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <h4>رقم آخر للتواصل</h4>
                        </td>
                        <td>
                            <h5>20-1169-896458</h5>
                        </td>

                    </tr>

                    </tbody>


                </table>


            </div>
        </div>


    </div>


@stop