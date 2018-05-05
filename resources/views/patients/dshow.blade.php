@extends('layouts.doctor')



@section('content')


    <div class="content">
        <div class="row m-b-lg m-t-lg">
            <div class="col-md-6">

                <div class="profile-image">
                    <img src="{{asset('public/img/a4.jpg')}}" class="img-circle circle-border m-b-md" alt="profile">
                </div>
                <div class="profile-info p-h-m">

                    <div>
                        <h2 class="no-margins">
                            أحمد عبد السلام المتولى
                        </h2>
                        <h4>عيادة المخدرات</h4>
                    </div>
                </div>
            </div>
            <div class="form-group col-sm-6">
                <h3>وصف الحالة فى آخر زيارة :</h3>
                <div class="form-group">
                    <p> يعاني من اضطراب الاكتئاب والقلق والاضطراب ثنائي القطب، والأعراض تكون في صورة متزامنة مع
                        الإدمان</p>
                    <p> سوء خلل في تفسير المدركات من حول الشخص عن طريق الحواس الخمسة، النظر، اللمس، السمع، الشم، التذوق
                        فمن الممكن ان يرى اشياء واشخاص غير موجودة وتكون الأمور أكثر تعقيداً.</p>
                </div>
            </div>

        </div>


        <div class="form-group row">
            {{--بيانات المريض & الزيارات السابقة--}}
            <div class="col-sm-6">
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
                <div class="col-sm-9">
                    <h3>الزيارات السابقة:</h3>
                    <table class="table">
                        <thead>
                        <tr>
                            <td>التاريخ</td>
                            <td>الوقت</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>23/2/2018</td>
                            <td>05:32</td>
                        </tr>
                        <tr>
                            <td>15/1/2018</td>
                            <td>03:18</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>

            {{--الأدوية الموصوفة & ميعاد الزيارة القادمة --}}
            <div class="form-group col-sm-6">

                <div class="col-sm-12">
                    <form role="form" method="" action="">
                        <div class="col-sm-12">
                            <h3 class="col-sm-4">الأدوية الموصوفة:</h3>
                            <div class="col-sm-8">

                                    <select class="form-control m-b" name="account">
                                        <option>أوكسايبام</option>
                                        <option>كلوراديازيبوكسايد</option>
                                        <option> لورازيبام</option>
                                        <option>أوكسكاربازيبين</option>
                                    </select>
                            </div>

                        </div>
                        <div class="col-sm-12">

                            <table class="table table-responsive">
                                <thead>
                                <th>اسم الدواء</th>
                                <th>الحالة</th>
                                <th>الكمية</th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>أوكسكاربازيبين</td>
                                    <td class="text-success">متوفر</td>
                                    <td><input type="text" class="form-group"></td>
                                </tr>
                                <tr>
                                    <td>لورازيبام</td>
                                    <td class="text-danger">غير متوفر</td>
                                    <td><input type="text" class="form-group"></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>

                        <div class="col-sm-12">

                            <div class="col-sm-4 col-md-5 col-lg-4">
                                <h3>ميعاد الزيارة القادمة :</h3>
                            </div>
                            <div class="col-sm-8 col-md-7 col-lg-8">
                                <input class="form-control" type="date">
                            </div>
                        </div>

                        <div class="col-sm-12 m-t-md">
                            <div class="col-sm-4 col-md-5 col-lg-4">
                                <h3>وصف الحالة الحالية :</h3>
                            </div>
                            <div class="col-sm-8 col-md-7 col-lg-8">
                                <textarea class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="p-w-lg">
                            <button type="submit" class="btn btn-info m-t-lg pull-left">طباعة روشتة وتسجيل  بيانات الزيارة</button>
                        </div>
                    </form>
                </div>



            </div>


        </div>


@stop