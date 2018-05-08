@extends('layouts.doctor')

@section('title')
    العيادة | بيانات المريض
@stop


@section('content')


    <div class="content">
        <div class="row">
            <div class="col-lg-6">

                <div class="profile-image">
                    <img src="{{asset('public/img/a4.jpg')}}" class="img-circle circle-border m-b-md" alt="profile">
                </div>
                <div class="profile-info p-h-m">

                    <div>
                        <h3 class="no-margins">
                            أحمد عبد السلام المتولى
                        </h3>
                        <h5>عيادة المخدرات</h5>
                    </div>
                </div>
            </div>

        </div>


        <div class="form-group row">
            {{--بيانات المريض & الزيارات السابقة--}}

            <div class="col-lg-10">
                <div class="tabs-container">
                    <div class="tabs-left">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true"> بيانات
                                    المريض</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false">الزيارات السابقة</a>
                            </li>
                            <li class=""><a data-toggle="tab" href="#tab-3" aria-expanded="false">تسجيل زيارة</a>
                            </li>
                        </ul>
                        <div class="tab-content ">
                            <div id="tab-1" class="tab-pane active">
                                <div class="panel-body">
                                    <table class="table table-responsive table-striped ">
                                        <tbody>

                                        <tr>
                                            <th>رقم الملف</th>
                                            <td>2324</td>
                                        </tr>
                                        <tr>
                                            <th>السن</th>
                                            <td>43</td>
                                        </tr>

                                        <tr>
                                            <th>المهنة</th>
                                            <td>مهندس مدنى</td>
                                        </tr>

                                        <tr>
                                            <th>الجنسية</th>
                                            <td>سعودى</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="tab-2" class="tab-pane">
                                <div class="panel-body">

                                    <select class="selectpicker" data-size="5" name="item[]"
                                            id="item">
                                        <option value="1">13/04/2018</option>
                                        <option value="2">01/04/2018</option>
                                        <option value="3">25/03/2018</option>
                                        <option value="4">02/02/2018</option>
                                        <option value="5">18/02/2018</option>
                                    </select>

                                    <h4 class="p-h-sm">الأدوية الموصوفة:</h4>

                                    <table class="table table-responsive table-striped">
                                        <thead>
                                        <tr>
                                            <th>الصنف</th>
                                            <th>الكمية</th>
                                        </tr>

                                        </thead>
                                        <tbody>

                                        <tr>
                                            <td>أوبتازول</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>أوكتاسيدول</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>لورازيبام</td>
                                            <td>1</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                    <h4>وصف الحالة:</h4>
                                    يعاني من اضطراب الاكتئاب والقلق والاضطراب ثنائي القطب، والأعراض تكون في صورة متزامنة
                                    مع الإدمان

                                    سوء خلل في تفسير المدركات من حول الشخص عن طريق الحواس الخمسة، النظر، اللمس، السمع،
                                    الشم، التذوق فمن الممكن ان يرى اشياء واشخاص غير موجودة وتكون الأمور أكثر تعقيداً.
                                </div>
                            </div>
                            <div id="tab-3" class="tab-pane">
                                <div class="panel-body">
                                    <form role="form">

                                        <h3>الأدوية الموصوفة:</h3>

                                        <div class="row form-group m-b-none m-t-md">

                                            <div class="col-lg-1">
                                                <label>الصنف</label>
                                            </div>
                                            <div class="col-lg-3">
                                                <select class="selectpicker" data-live-search="true" data-size="5"
                                                        name="item[]" id="item">
                                                    <option value="1" data-name=" أوكسكاربازيبين"> أوكسكاربازيبين
                                                    </option>
                                                    <option value="2" data-name="لورازيبام">لورازيبام</option>
                                                    <option value="3" data-name="أوكسايبام">أوكسايبام</option>
                                                    <option value="4" data-name="أوكسكاربازيبين">أوكسكاربازيبين</option>
                                                    <option value="5" data-name="لورازيبام">لورازيبام</option>
                                                    <option value="6" data-name="أوكسايبام">أوكسايبام</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="row form-group">

                                            <div class="col-lg-1">
                                                <label>الكمية</label>
                                            </div>
                                            <div class="col-lg-4">
                                                <input class="form-control" name="qty" id="qty" type="text">
                                            </div>

                                            <div class="col-lg-1">
                                                <label>الجرعة</label>
                                            </div>
                                            <div class="col-lg-4">
                                                <input class="form-control" name="gor3a" id="gor3a" type="text">
                                            </div>
                                            <a href="javascript:void(0)" id="add-item"
                                               class="btn btn-primary ">اضافة</a>

                                        </div>

                                        <div class="col-lg-11 m-t-md">
                                            <table class="table table-responsive table-hover table-bordered">
                                                <thead>
                                                <tr class="info">
                                                    <th> الصنف</th>
                                                    <th>الكمية</th>
                                                    <th>الجرعة</th>
                                                </tr>
                                                </thead>

                                                <tbody id="items-table">

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-lg-3">
                                                <label>ميعاد الزيارة القادمة</label>
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-lg-3">
                                                <label>وصف الحالة الحالية</label>
                                            </div>
                                            <div class="col-lg-6">
                                                <textarea class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="row form-group m-r-xl">
                                            <button class="btn btn-primary m-t-md" type="submit">تسجيل وطباعة</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>

@stop

@section('scripts')

    <script>
        $(document).ready(function () {

            $('#add-item').on('click', function () {

                var qty = $('#qty').val();
                var gor3a = $('#gor3a').val();
                var item = $('#item option:selected').data('name');
                var item_id = $('#item').val();

                $('#items-table').append('<tr><td>' + item + '</td><td>' + qty + '</td><td>' + gor3a + '</td></tr>');
                $('#hiddens').append('<input type="hidden" value="' + item_id + '-' + qty + '-' + gor3a + '" name="item-qty[]">');

            });

        });

    </script>


@stop