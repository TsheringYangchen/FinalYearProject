
@extends('front.layouts.master2')
<br>
@section('content')
    <div class="container h-100">
        <div class="container h-100">
            <div class="d-flex justify-content-center h-100">
                
                <div class="form-area">
                    <div class="d-flex justify-content-center">
                        <img src="{{asset('images/HoI-logo.png')}}" alt="HoI-logo" style="width:90px;height:90px"></div><br>
                        <div class="d-flex justify-content-center">
                             <h4>VIEW LICENSE STATUS</h4>
                        </div>
                        @include('admin.layouts.message')
                        
                        <div class="d-flex justify-content-center form_container">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                            <form  method="post" action="front/licensee-login">
                                @csrf
                                <div class="input-group mb-3">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                                    </div>
                                        <input class="form-control input_user" name="no" placeholder="License Number" type="text">
                                    </div>
                                 <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="customControlInline" type="checkbox"> <label class="custom-control-label" for="customControlInline">Remember License No</label>
                                     </div>
                                 </div>
                            <div class="d-flex justify-content-center mt-3 login_container">
                                <button class="btn login_btn" name="button" type="submit">VIEW</button>
                            </div>
                            </form>
                        </div>
                </div>
        </div>
    </div><br><br>

  <style>
      body,
    html 
    {
        margin: 0;
        padding: 0;
        height: 100%;
    }
    .form-area 
    {
        height: 400px;
        width: 350px;
        margin-top: auto;
        margin-bottom: auto;
        /*background: linear-gradient(120deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);*/
        background-color: #bdd4e7;
        background-image: linear-gradient(315deg, #bdd4e7 0%, #8693ab 74%);
        position: relative;
        display: flex;
        justify-content: center;
        flex-direction: column;
        padding: 10px;
        box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
        border-radius: 30px;

    }
        a 
        {
        color: #acacac;
        }
        .form-area h4
        {
        color: #fff;
        font-family: lato;
        font-weight: bold;
        }

        .form_container 
        {
        margin-top: 35px;
        }
        .login_btn 
        {
        width: 100%;
        background: deeppink !important;
        color: #fff !important;
        font-weight: bold;
        }
        .login_btn:focus 
        {
            box-shadow: none !important;
            outline: 0px !important;
        }
        .login_container
        {
            padding: 0 2rem;
        }
        .input-group-text 
        {
            background: lightslategray !important;
            color: white !important;
            border: 0 !important;
            border-radius: 0.25rem 0 0 0.25rem !important;
        }
            .input_user,
            .input_pass:focus 
            {
                box-shadow: none !important;
                outline: 0px !important;
            }
            .custom-checkbox .custom-control-input:checked~.custom-control-label::before 
            {
                background-color: skyblue !important;
            }

  </style>
@endsection


