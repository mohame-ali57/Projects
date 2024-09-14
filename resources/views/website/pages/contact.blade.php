@extends('website.layouts.master')

@section('title','Contact_Page')

@section('main-content')
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">{{__('website/home.Home')}}</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">{{__('website/home.Contact')}}</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">{{__('website/home.Get_In_Touch')}}</h2>
          </div>
          <div class="col-md-7">

            <form action="#" method="post">

              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">{{__('website/home.First_Name')}}<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="c_fname">
                  </div>
                  <div class="col-md-6">
                    <label for="c_lname" class="text-black">{{__('website/home.Last_Name')}} <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_lname" name="c_lname">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_email" class="text-black">{{__('website/home.Email')}} <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="c_email" name="c_email" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_subject" class="text-black">{{__('website/home.Subject')}} </label>
                    <input type="text" class="form-control" id="c_subject" name="c_subject">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_message" class="text-black">{{__('website/home.Message')}}</label>
                    <textarea name="c_message" id="c_message" cols="30" rows="7" class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="{{__('website/home.Send_Message')}}">
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-5 ml-auto">
            <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">{{__('website/home.New_York')}}</span>
              <p class="mb-0">{{__('website/home.NY_Address')}}</p>
            </div>
            <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">{{__('website/home.London')}}</span>
              <p class="mb-0">{{__('website/home.London_Address')}}</p>
            </div>
            <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">{{__('website/home.Canada')}}</span>
              <p class="mb-0">{{__('website/home.Canada_Address')}}</p>
            </div>

          </div>
        </div>
      </div>
    </div>
@endsection
