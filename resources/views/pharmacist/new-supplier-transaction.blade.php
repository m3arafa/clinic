@extends('layouts.pharmacist')
@section('title')
    تسجيل عملية توريد جديدة
@stop
@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>تسجيل عملية توريد جديدة</h5>
                </div>
                <form class="form-horizontal">
                    <div class="ibox-content" style="">


                        <div id="hiddens"></div>

                        <div class="form-group row">
                            <div class="col-lg-2">
                                <label class="ontrol-label">اسم المورد</label>
                            </div>

                            <div class="col-lg-3">
                                <select class="selectpicker" data-live-search="true" data-size="3">
                                    <option>أحمد عبدالله</option>
                                    <option>محمد عبدالسلام</option>
                                    <option>أبونواس محمد الغدادى</option>
                                    <option>مايكل حليم رمزى</option>
                                    <option>سامى أحمد عبدالرحمن</option>
                                </select>

                            </div>
                            <div class="col-lg-2">
                                <label class="control-label ">تاريخ التوريد</label>
                            </div>
                            <div class="input-group date col-lg-3">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="date" class="form-control">
                            </div>

                        </div>

                        <div class="form-group row">

                            <div class="col-lg-2">
                                <label class="control-label">الصنف</label>
                            </div>

                            <div class="col-lg-3">
                                <select class="selectpicker" data-live-search="true" data-size="3" name="item[]"
                                        id="item">
                                    <option value="1" data-name=" أوكسكاربازيبين"> أوكسكاربازيبين</option>
                                    <option value="2" data-name="لورازيبام">لورازيبام</option>
                                    <option value="3" data-name="أوكسايبام">أوكسايبام</option>
                                    <option value="4" data-name="أوكسكاربازيبين">أوكسكاربازيبين</option>
                                    <option value="5" data-name="لورازيبام">لورازيبام</option>
                                    <option value="6" data-name="أوكسايبام">أوكسايبام</option>
                                </select>
                            </div>


                            <div class="col-lg-1">
                                <label class="control-label ">الكمية</label>
                            </div>
                            <div class="col-lg-3">
                                <input type="text" name="qty" id="qty" class="form-control">
                            </div>
                            <a href="javascript:void(0)" id="add-item" class="btn btn-primary">اضافة</a>
                        </div>

                        <div class="col-lg-10 ">
                            <table class="table table-responsive table-hover table-bordered">
                                <thead>
                                <tr class="info">
                                    <th> الصنف</th>
                                    <th>الكمية</th>
                                </tr>
                                </thead>

                                <tbody id="items-table">

                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="ibox-footer">
                        <button class="btn  btn-primary " type="submit">تسجيل</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

@stop


@section('scripts')

    <script>
        $(document).ready(function () {

            $('#add-item').on('click', function (e) {

                // e.preventDefault();

                var qty = $('#qty').val();
                var item = $('#item option:selected').data('name');
                var item_id = $('#item').val();

                $('#items-table').append('<tr><td>' + item + '</td><td>' + qty + '</td></tr>');
                $('#hiddens').append('<input type="hidden" value="' + item_id + '-' + qty + '" name="item-qty[]">');

            });


            /*
                    $(document).on('click', '#add-item', function () {

                    });
              */
        });

    </script>


@stop