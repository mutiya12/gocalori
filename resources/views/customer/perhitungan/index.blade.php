@extends('customer.layouts.app')
@section('content')
@section('dashboard', 'active')
            <!-- vbsdkjbvsd -->

            <div class="right_col" role="main">
                <div class="">

                    <div class="page-title">
                        <div class="title_left">
                            <h3>Form Elements</h3>
                        </div>
                        
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Basic Tables <small>basic table subtitle</small></h2>
                                    
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Perhitungan</th>
                                                <th>Tanggal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($history as $key=> $historys)
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>{{ $historys->perhitungan }}</td>
                                                <td>{{ $historys->created_at }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
</table>
                                    @if(count($history) != 0 )
                                    <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <form action=" {{ route('perhitungan.delete') }}" method="POST">
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Perhitungan Kalori </h2>
                                    
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br />
                                    <form id="demo-form2" role="form" method="POST" action="{{ route('perhitungan.store') }}" data-parsley-validate class="form-horizontal form-label-left">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tinggi badan<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="tinggi" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Berat badan <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="berat" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Usia<span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="usia" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div id="gender" class="btn-group" data-toggle="buttons"> <span class="required">*</span>
                                                
                                                <p>
                                                    Male:
                                                    <input type="radio" class="flat" name="gender" id="genderM" value="M" checked="" required />
                                                    Female:
                                                    <input type="radio" class="flat" name="gender" id="genderF" value="F" />
                                                 </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis kegiatan <span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select class="form-control" name="kegiatan">
                                                    <option value="ringan">Ringan</option>
                                                    <option value="sedang">Sedang</option>
                                                    <option value="berat">Berat</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <!-- <button type="submit" class="btn btn-primary">Cancel</button> -->
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                  @endsection