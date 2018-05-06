@extends('layouts.app')

@section('title')

    إضافة مستخد جديد

@stop

@section('content')
    <div class="container">
        <div class="ibox float-e-margins col-lg-7 col-md-9 col-sm-12">
            <div class="ibox-title">
                <h4> إضافة مستخدم جديد</h4>
            </div>
            <form class="form-horizontal">
                <div class="ibox-content">
                    <div class="form-group">
                        <div class="col-lg-3">
                            <label>الاسم :</label>
                        </div>
                        <div class="col-lg-9">
                            <input class="form-control" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-3">
                            <label>البريد الإلكترونى :</label>
                        </div>
                        <div class="col-lg-9">
                            <input class="form-control" type="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-3">
                            <label>كلمة المرور :</label>
                        </div>
                        <div class="col-lg-9">
                            <input class="form-control" type="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-3">
                            <label>تأكيد كلمة المرور :</label>
                        </div>
                        <div class="col-lg-9">
                            <input class="form-control" type="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-3">
                            <label>الوظيفة :</label>
                        </div>
                        <div class="col-lg-9">
                            <select class="form-control">
                                <option>طبيب</option>
                                <option>صيدلى</option>
                                <option>موظف إستقبال</option>
                                <option>مدير عام</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-3">
                            <label>العيادة التابع لها :</label>
                        </div>
                        <div class="col-lg-9">
                            <select class="form-control">
                                <option>المخدرات</option>
                                <option>العيون</option>
                                <option>العظام</option>
                                <option>الأنف والأذن</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="ibox-footer">
                    <button class="btn btn-primary" type="submit">إضافة</button>
                </div>
            </form>
        </div>
    </div>
@stop