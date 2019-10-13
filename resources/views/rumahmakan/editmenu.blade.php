@extends('rumahmakan.layoutrm')
@section('content')
@section('dashboard', 'active')

<!-- page content -->
<div class="right_col" role="main">

<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>
    Tambah Menu
</h3>
        </div>

        <div class="title_right">
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
            <button class="btn btn-default" type="button">Go!</button>
        </span>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Tambah Menu Makanan </h2>
                    
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                @foreach ($menu as $key=> $menuu)
                    <form class="form-horizontal form-label-left" method="POST" action="{{ route('rumahMakan.update', $menuu->id) }}">
                    {{ csrf_field() }}
                        
                        <!-- <span class="section">Personal Info</span> -->

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Menu <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-words="2" name="name" required="required" type="text" value="{{$menuu->name}}">
                            </div>
                        </div>
                        
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Harga <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="number" id="number" name="harga" required="required" data-validate-minmax="10000,150000" class="form-control col-md-7 col-xs-12" value="{{$menuu->harga}}">
                            </div>
                        </div>
                        
                        <div class="item form-group">
                            <label for="password" class="control-label col-md-3">jumlah kalori</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="number" type="number" name="tot_kalori" data-validate-minmax="200,2000" class="form-control col-md-7 col-xs-12" required="required" value="{{$menuu->tot_kalori}}">
                            </div>
                        </div>
                        
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Keterangan
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea id="textarea" required="required" name="keterangan" class="form-control col-md-7 col-xs-12">{{ $menuu->keterangan }}</textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label  class="control-label col-md-3">Foto</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="file" name="foto" class="form-control col-md-7 col-xs-12" >
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <button type="submit" class="btn btn-primary">Cancel</button>
                                <button id="send" type="submit" class="btn btn-success">Edt</button>
                            </div>
                        </div>
                    </form>
                    @endforeach
                    </div>
                    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- chart js -->
    <script src="{{ asset('js/chartjs/chart.min.js') }}"></script>
    <!-- bootstrap progress js -->
    <script src="{{ asset('js/progressbar/bootstrap-progressbar.min.js') }}"></script>
    <script src="{{ asset('js/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <!-- icheck -->
    <script src="{{ asset('js/icheck/icheck.min.js') }}"></script>

    <script src="{{ asset('js/custom.js') }}"></script>
    <!-- form validation -->
    <script src="{{ asset('js/validator/validator.js') }}"></script>
    <script>
        // initialize the validator function
        validator.message['date'] = 'not a real date';

        // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
        $('form')
            .on('blur', 'input[required], input.optional, select.required', validator.checkField)
            .on('change', 'select.required', validator.checkField)
            .on('keypress', 'input[required][pattern]', validator.keypress);

        $('.multi.required')
            .on('keyup blur', 'input', function () {
                validator.checkField.apply($(this).siblings().last()[0]);
            });

        // bind the validation to the form submit event
        //$('#send').click('submit');//.prop('disabled', true);

        $('form').submit(function (e) {
            e.preventDefault();
            var submit = true;
            // evaluate the form using generic validaing
            if (!validator.checkAll($(this))) {
                submit = false;
            }

            if (submit)
                this.submit();
            return false;
        });

        /* FOR DEMO ONLY */
        $('#vfields').change(function () {
            $('form').toggleClass('mode2');
        }).prop('checked', false);

        $('#alerts').change(function () {
            validator.defaults.alerts = (this.checked) ? false : true;
            if (this.checked)
                $('form .alert').remove();
        }).prop('checked', false);
    </script>
@endsection