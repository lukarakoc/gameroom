@extends('layouts.panel')

@section('content')
    <div class="page-content" style="width: 100%;">
        <!-- Page Header-->

        <section class="no-padding-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="block">
                            <div class="title"><strong>Izvje&scaron;taj</strong></div>
                            <div class="pull-right">
                               <a href="/report-download" class="btn btn-success btn-sm"><i class="fa fa-download "></i> Preuzmi</a>
                                <a href="/report-reset" class="btn btn-danger btn-sm">Resetuj</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Uredjaj</th>
                                        <th>Vrijeme</th>
                                        <th>Cijena</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($report as $item)
                                            <tr>
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->deviceName}}</td>
                                                <td>{{$item->time}} min</td>
                                                <td>{{$item->price}}</td>
                                            </tr>
                                            @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>



    @stop
