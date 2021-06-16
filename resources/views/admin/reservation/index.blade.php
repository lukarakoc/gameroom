@extends('layouts.panel')

@section('content')


    <div class="page-content" style="width: 100%;">
        <!-- Page Header-->

        <section class="no-padding-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="block">
                            <div class="title"><strong>Rezervacije</strong></div>
                            <div class="pull-right">
                                <a href="/reservations-delete" class="btn btn-danger btn-sm">Resetuj</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Ime</th>
                                        <th>PC / PS4</th>
                                        <th>Broj PC / PS4</th>
                                        <th>Vrijeme Rezervacije</th>
                                        <th>Broj telefona</th>
                                        <th>Vrijeme zahtjeva</th>
                                        <th>Status</th>
                                        <th>Potvrdi</th>
                                        <th>Odbij</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($reservations as $reservation)
                                        <tr>
                                            <td>{{$reservation->id}}</td>
                                            <td>{{$reservation->name}}</td>
                                            <td>{{$reservation->type}}</td>
                                            <td>{{$reservation->num}}</td>
                                            <td>{{$reservation->time}}</td>
                                            <td>{{$reservation->phone}}</td>
                                            <td>{{$reservation->created_at}}</td>
                                            <td><span @if($reservation->status == 'Cekanje') style="color: orange" @elseif($reservation->status == 'Potvrdjen') style="color:forestgreen" @else style="color:red" @endif">{{$reservation->status}}</span></td>
                                            <td>
                                                @if($reservation->status == 'Cekanje' || $reservation->status == 'Odbijen')
                                                    <form action="{{route('reservations.update', $reservation->id)}}" method="POST">
                                                        @csrf
                                                        @method('PATCH')
                                                        <input type="hidden" value="Prihvati" name="status">
                                                <button class="btn btn-success btn-sm" type="submit">Prihvati</button>
                                                    </form>
                                                    @endif
                                            </td>
                                            <td>
                                                @if($reservation->status == 'Cekanje' || $reservation->status == 'Potvrdjen')
                                                    <form action="{{route('reservations.update', $reservation->id)}}" method="POST">
                                                        @csrf
                                                        @method('PATCH')
                                                        <input type="hidden" value="Odbij" name="status">
                                                        <button class="btn btn-danger btn-sm" type="submit">Odbij</button>
                                                    </form>
                                                    @endif
                                            </td>
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


