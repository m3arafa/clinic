@extends('layouts.app')

@section('title')

    عرض المستخدمين

@stop

@section('content')
    <div class="container">
        <div class="ibox  col-lg-8 col-md-10 col-sm-12">
            <div class="ibox-title p-h-xl">
                <h4 class="col-lg-8"> المستخدمين : </h4>
                <div class="col-lg-3 pull-left">
                    <a href="{{url('/admin/add-new-user')}}">
                        <button class="btn btn-primary">إضافة مستخدم جديد</button>
                    </a>

                </div>

            </div>
            <div class="ibox-content">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>اسم المستخدم</th>
                        <th>البريد الإلكترونى</th>
                        <th>الوظيفة</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <td>إبراهيم محمد الشيخ</td>
                        <td>ibrahim@gmail.com</td>
                        <td>موظف استقبال</td>
                        <td>
                            <form action="{{url('/admin/edit-user-details')}}">
                                <button class="btn btn-primary form-group" type="submit">تعديل</button>
                            </form>
                        </td>
                        <td>
                            <form>
                                <button class="btn btn-warning" type="submit">حذف</button>
                            </form>

                        </td>
                    </tr>
                    <tr>
                        <td>محمود البسيونى</td>
                        <td>elbasyoni@gmail.com</td>
                        <td>دكتور</td>
                        <td>
                            <form action="{{url('/admin/edit-user-details')}}">
                                <button class="btn btn-primary form-group" type="submit">تعديل</button>
                            </form>
                        </td>
                        <td>
                            <form>
                                <button class="btn btn-warning" type="submit">حذف</button>
                            </form>

                        </td>
                    </tr>
                    <tr>
                        <td>وائل عبدالرحمن</td>
                        <td>wael99@gmail.com</td>
                        <td>صيدلى</td>
                        <td>
                            <form action="{{url('/admin/edit-user-details')}}">
                                <button class="btn btn-primary form-group" type="submit">تعديل</button>
                            </form>
                        </td>
                        <td>
                            <form>
                                <button class="btn btn-warning" type="submit">حذف</button>
                            </form>

                        </td>
                    </tr>
                    <tr>
                        <td>ندى السيد عرفات</td>
                        <td>ndadarafat@gmail.com</td>
                        <td>موظف استقبال</td>
                        <td>
                            <form action="{{url('/admin/edit-user-details')}}">
                                <button class="btn btn-primary form-group" type="submit">تعديل</button>
                            </form>
                        </td>
                        <td>
                            <form>
                                <button class="btn btn-warning" type="submit">حذف</button>
                            </form>

                        </td>
                    </tr>
                    <tr>
                        <td>أحمد الشيخ</td>
                        <td>elshekh@gmail.com</td>
                        <td>دكتور</td>
                        <td>
                            <form action="{{url('/admin/edit-user-details')}}">
                                <button class="btn btn-primary form-group" type="submit">تعديل</button>
                            </form>
                        </td>
                        <td>
                            <form>
                                <button class="btn btn-warning" type="submit">حذف</button>
                            </form>

                        </td>
                    </tr>
                    <tr>
                        <td>أبوعاصم عبدالرحمن</td>
                        <td>aboasem@gmail.com</td>
                        <td>مدير عام</td>
                        <td>
                            <form action="{{url('/admin/edit-user-details')}}">
                                <button class="btn btn-primary form-group" type="submit">تعديل</button>
                            </form>
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
@stop