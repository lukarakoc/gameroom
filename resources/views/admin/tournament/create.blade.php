@extends('layouts.panel')

@section('content')


<!-- Sidebar Navigation end-->
<div class="page-content">
  <!-- Page Header-->

  <section class="no-padding-top">
    <div class="container-fluid">
      <div class="row">
        <!-- Form Elements -->
        <div class="col-lg-12">
          <div class="block">
            <div class="title"><strong>Dodaj Turnir</strong></div>
            <div class="block-body">
              <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{route('tournaments.store')}}">
                  @csrf
                <div class="form-group row">
                  <label class="col-sm-3 form-control-label">Naslov Turnira</label>
                  <div class="col-sm-9">
                    <input type="text" name="name" class="form-control">
                  </div>
                </div>
                <div class="line"></div>
                <div class="form-group row">
                  <label class="col-sm-3 form-control-label">Naslovna Slika</label>
                  <div class="col-sm-9">
                    <input type="file" name="photo" class="form-control">
                  </div>
                </div>
                <div class="line"></div>
                <div class="form-group row">
                  <label class="col-sm-3 form-control-label">Opis Turnira</label>
                  <div class="col-sm-9">
                    <textarea type="text" name="text" class="form-control"></textarea>
                  </div>
                </div>
                  <div class="line"></div>
                  <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Ulog po igra&ccaron;u / timu</label>
                      <div class="col-sm-9">
                          <input type="text" name="cost" class="form-control">
                      </div>
                  </div>
                  <div class="line"></div>
                  <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Nagrada po igra&ccaron;u / timu</label>
                      <div class="col-sm-9">
                          <input type="text" name="price" class="form-control">
                      </div>
                  </div>
                <div class="line"></div>
                <div class="form-group row">
                  <div class="col-sm-9 ml-auto">
                   
                    <button type="submit" class="btn btn-primary">Sačuvaj</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @stop
