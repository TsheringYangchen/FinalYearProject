
@extends('front.layouts.master1')
@section('content')
<br><br>

        <div class="container">
                <h3 class="text-center text-primary">BEST_R SYSTEM</h3>
                <p class="text-center">Department of Trade</p>
                <hr class="bg-warning">
                <br><br>
                
                <div class="container text-center">
                        <a href="{{url('/bin')}}" class="w-50">ISSUE BIN</a>
                        <a href="{{url('/ein')}}" class="w-50 mt-5">ISSUE EIN</a>
                </div>
        </div>   
        
        <style>
                a{
                        display: inline-block;
                        padding: 20px 0px;
                        text-align: center;
                        position: relative;
                        text-decoration: none;
                        border-radius: 30px 0 30px 0;
                        background:linear-gradient(90deg, #0162c8,#55effc);
                        font-size: 16px;
                        color: aliceblue;
                        font-weight: bold;
                }

                a:hover{
                        color: #ecf0f1;
                }
        </style>
  
@endsection