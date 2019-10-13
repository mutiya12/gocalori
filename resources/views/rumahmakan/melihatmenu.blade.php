@extends('rumahmakan.layoutrm')
@section('content')
@section('dashboard', 'active')

            <!-- page content -->
            <div class="right_col" role="main">

                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>LIst Menu Makanan</h3>
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
                        <div class="col-md-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Menu Makanan</h2>
                                    
                                    <div class="clearfix">
                                   
                                    <form action="{{route('rumahMakan.create')}}">
                                        <button id="send" type="submit" class="btn btn-success" style="width:70px; margin-left:90%;">Submit</button>
                                    </form>
                                    </div>
                                </div>
                                <div class="x_content">

                                    
                                    <!-- start project list -->
                                    
                                    <table class="table table-striped projects">
                                       
                                        <thead>
                                            <tr>
                                                <th style="width: 1%">#</th>
                                                <th style="width: 20%">Menu</th>
                                                <th style="width: 20%">Harga (Rp)</th>
                                                <th>total kalori</th>
                                                <th>Keterangan</th>
                                                <th style="width: 20%">#Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($menu as $key=> $menuu)
                                            
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>{{ $menuu->name }}</td>
                                                <td>{{ $menuu->harga }}</td>
                                                <td>{{ $menuu->tot_kalori }}</td>
                                                <td>{{ $menuu->keterangan }}</td>
                                                <td><img style="width:45%" src="{{asset('assets/images/'.$menuu->foto)}}" alt="image"></td>
                                                <td>
                                                   
                                                      
                                                    <form method="POST" action="{{route('rumahMakan.delete', $menuu->id)}}">

                                                    {{csrf_field()}}
                                                    <a href="{{route('rumahMakan.edit', $menuu->id)}}" class="btn btn-info btn-xs" style="width:50px;"><i class="fa fa-pencil"></i> Edit </a>
                                                <button  class="btn btn-danger btn-xs" style="width:50px;"> Delete </button>
                                                </form>
                                                </td>
                                            </tr>
                                                
                                                
                                                
                                                
                                             @endforeach
                                    </tbody>
                                </table>

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
                            

@endsection