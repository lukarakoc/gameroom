@extends('layouts.panel')

@section('content')


<div class="page-content" style="width: 100%;">
  <!-- Page Header-->
  
  <section class="no-padding-top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="block">
            <div class="title"><strong>Turniri</strong></div>
            <div class="table-responsive">
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Naslov</th>
                    <th>Slika</th>
                    <th>Opis</th>
                    <th>Ulog</th>
                    <th>Nagrada</th>
                    <th>Link</th>
                    <th>Izbri&scaron;i</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($tournaments as $tournament)
                      <tr>
                          <td>{{$tournament->id}}</td>
                          <td>{{$tournament->name}}</td>
                          <td><img src="{{asset($tournament->photo)}}" width="100"></td>
                          <td>{{$tournament->description}}</td>
                          <td>{{$tournament->cost}}</td>
                          <td>{{$tournament->price}}</td>
                          <td><a href="/tournament/{{$tournament->id}}" class="btn btn-sm btn-primary">Link</a></td>
                          <td>
                              <form action="{{route('tournaments.destroy', $tournament->id)}}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" name="submit" class="btn btn-danger btn-sm">Izbri&scaron;i</button>
                              </form>
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
  @stop
