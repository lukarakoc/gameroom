@extends('layouts.panel')

@section('content')


<!-- Sidebar Navigation end-->
<div class="page-content" style="width: 100%;">
  <!-- Page Header-->
 
  <!-- Breadcrumb-->

  <section class="no-padding-top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="block">
            <div class="title"><strong>Blogovi</strong></div>
            <div class="table-responsive">
              <table class="table table-striped table-hover">
                <thead>
                  <tr class="text-center">
                    <th>#</th>
                    <th>Naslov</th>
                    <th>Slika</th>
                    <th>Tekst</th>
                    <th>Link</th>
                    <th>Izbri&scaron;i</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($blogs as $blog)
                  <tr class="text-center">
                    <td>{{$blog->id}}</td>
                      <td>{{$blog->name}}</td> 
                      <td><img src="{{asset($blog->photo)}}" width="100"></td>
                      <td>{{str_limit($blog->body,50)}}</td>
                    <td><a href="/blog/{{$blog->id}}" target="_blank" class="btn btn-info btn-sm">Link</a></td>
                    <td>
                        <form action="{{route('blog.destroy', $blog->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                      <button class="btn btn-danger btn-sm" type="submit">Izbri&scaron;i</button>
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
