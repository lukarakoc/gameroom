@extends('layouts.panel')

@section('content')
      <!-- Sidebar Navigation end-->
      

        <div class="computers">
          <div class="container">
            <div class="row text-center">
                <div class="computer">
                  <form action="/device-status-change/1" method="POST">
                      @csrf
                  <input type="hidden" value="1">
                  <button type="submit"><i class="fa fa-laptop" @if($PC1->status == true) style="color:darkred;" @else style="color:forestgreen;" @endif></i></button>
                  <h3>PC 1</h3>
                  </form>
                </div>
                <div class="computer">
                  <form action="/device-status-change/2" method="POST">
                      @csrf
                  <input type="hidden" value="2">
                  <button type="submit"><i class="fa fa-laptop" @if($PC2->status == true) style="color:darkred;" @else style="color:forestgreen;" @endif></i></button>
                  <h3>PC 2</h3>
                  </form>
                </div>
                <div class="computer">
                  <form action="/device-status-change/3" method="POST">
                      @csrf
                  <input type="hidden" value="3">
                  <button type="submit"><i class="fa fa-laptop" @if($PC3->status == true) style="color:darkred;" @else style="color:forestgreen;" @endif></i></button>
                  <h3>PC 3</h3>
                  </form>
                </div>
                <div class="computer">
                  <form action="/device-status-change/4" method="POST">
                      @csrf
                  <input type="hidden" value="4">
                  <button type="submit"><i class="fa fa-laptop" @if($PC4->status == true) style="color:darkred;" @else style="color:forestgreen;" @endif></i></button>
                  <h3>PC 4</h3>
                  </form>
                </div>
                <div class="computer">
                  <form action="/device-status-change/5" method="POST">
                      @csrf
                  <input type="hidden" value="5">
                  <button type="submit"><i class="fa fa-laptop" @if($PC5->status == true) style="color:darkred;" @else style="color:forestgreen;" @endif></i></button>
                  <h3>PC 5</h3>
                  </form>
                </div>
                <div class="computer">
                  <form action="/device-status-change/6" method="POST">
                      @csrf
                  <input type="hidden" value="6">
                  <button type="submit"><i class="fa fa-laptop" @if($PC6->status == true) style="color:darkred;" @else style="color:forestgreen;" @endif></i></button>
                  <h3>PC 6</h3>
                  </form>
                </div>
                <div class="computer">
                  <form action="/device-status-change/7" method="POST">
                      @csrf
                  <input type="hidden" value="7">
                  <button type="submit"><i class="fa fa-laptop" @if($PC7->status == true) style="color:darkred;" @else style="color:forestgreen;" @endif></i></button>
                  <h3>PC 7</h3>
                  </form>
                </div>
                <div class="computer">
                  <form action="/device-status-change/8" method="POST">
                      @csrf
                  <input type="hidden" value="8">
                  <button type="submit"><i class="fa fa-laptop" @if($PC8->status == true) style="color:darkred;" @else style="color:forestgreen;" @endif></i></button>
                  <h3>PC 8</h3>
                  </form>
                </div>
                <div class="computer">
                  <form action="/device-status-change/9" method="POST">
                      @csrf
                  <input type="hidden" value="9">
                  <button type="submit"><i class="fa fa-laptop" @if($PC9->status == true) style="color:darkred;" @else style="color:forestgreen;" @endif></i></button>
                  <h3>PC 9</h3>
                  </form>
                </div>
                <div class="computer">
                  <form action="/device-status-change/10" method="POST">
                      @csrf
                  <input type="hidden" value="10">
                  <button type="submit"><i class="fa fa-laptop" @if($PC10->status == true) style="color:darkred;" @else style="color:forestgreen;" @endif></i></button>
                  <h3>PC 10</h3>
                  </form>
                </div>
                <div class="computer">
                  <form action="/device-status-change/11" method="POST">
                      @csrf
                  <input type="hidden" value="11">
                  <button type="submit"><i class="fa fa-laptop" @if($PC11->status == true) style="color:darkred;" @else style="color:forestgreen;" @endif></i></button>
                  <h3>PC 11</h3>
                  </form>
                </div>
                <div class="computer">
                  <form action="/device-status-change/12" method="POST">
                      @csrf
                  <input type="hidden" value="12">
                  <button type="submit"><i class="fa fa-laptop" @if($PC12->status == true) style="color:darkred;" @else style="color:forestgreen;" @endif></i></button>
                  <h3>PC 12</h3>
                  </form>
                </div>
                <div class="computer">
                  <form action="/device-status-change/13" method="POST">
                      @csrf
                  <input type="hidden" value="13">
                  <button type="submit"><i class="fa fa-laptop" @if($PC13->status == true) style="color:darkred;" @else style="color:forestgreen;" @endif></i></button>
                  <h3>PC 13</h3>
                  </form>
                </div>
                <div class="computer">
                  <form action="/device-status-change/14" method="POST">
                      @csrf
                  <input type="hidden" value="14">
                  <button type="submit"><i class="fa fa-laptop" @if($PC14->status == true) style="color:darkred;" @else style="color:forestgreen;" @endif></i></button>
                  <h3>PC 14</h3>
                  </form>
                </div>
                <div class="computer">
                  <form action="/device-status-change/15" method="POST">
                      @csrf
                  <input type="hidden" value="15">
                  <button type="submit"><i class="fa fa-laptop" @if($PC15->status == true) style="color:darkred;" @else style="color:forestgreen;" @endif></i></button>
                  <h3>PC 15</h3>
                  </form>
                </div>
                </div>
            </div>
        </div>
      
      
      <div class="sony-cons">
        <div class="container">
          <div class="row text-center">
              <div class="sony">
                  <form action="/device-status-change/16" method="post">
                      @csrf
                  <button type="submit"><i class="fa fa-gamepad" @if($SONY1->status == true) style="color:darkred;" @else style="color:forestgreen;" @endif></i></button>
                  <h3>PS4 1</h3>
                  </form>
                </div>
                <div class="sony">
                    <form action="/device-status-change/17" method="post">
                        @csrf
                  <button type="submit"><i class="fa fa-gamepad" @if($SONY2->status == true) style="color:darkred;" @else style="color:forestgreen;" @endif></i></button>
                  <h3>PS4 2</h3>
                    </form>
                </div>
                <div class="sony">
                    <form action="/device-status-change/18" method="post">
                        @csrf
                  <button type="submit"><i class="fa fa-gamepad" @if($SONY3->status == true) style="color:darkred;" @else style="color:forestgreen;" @endif></i></button>
                  <h3>PS4 3</h3>
                    </form>
                </div>
          </div>
        </div>
      </div>
      
     @stop
