@extends('layouts.app');
@section('content')
@include('customers.layouts.messages')
{{-- <form action="/customers" class="form-group" method="POST">
    @csrf
    
        <div class="row">
             
                <input type="text" name="name" class="col-lg-8 p-2 form-control" placeholder="Customer's Name" value="{{old('name')}}">
                <input type="number" name="phone" class="col-lg-4 p-2 form-control" placeholder="Phone Number" value="{{old('phone')}}">
        </div>
        <br>
        <div class="row">
                <input type="email" name="email" class="col-lg-6 p-2 form-control" placeholder="Email" value="{{old('email')}}">
                <input type="text" name="contact" class="col-lg-6 p-2 form-control" placeholder="Address" value="{{old('contact')}}">
        </div>
        <br>
        <div class="row">
            <div class="form-group col-lg-6">
                <label for="active">Status</label>
                <select name="active" id="active" class="form-control">
                    <option value="" disabled>Select Customer Status</option>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>

            <div class="form-group col-lg-6">
                <label for="company_id">Status</label>
                <select name="company_id" id="company_id" class="form-control">
                    <option value="" disabled>Select Customer Company</option>
                    @foreach($companies as $company)
                <option value="{{$company->id}}">{{$company->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
   
    
    <br>
    <button type="submit" class="btn btn-primary btn-block p-2">Add Customer</button>
</form> --}}

<div class="container bootstrap snippet">
        <a href="/customers"><button class="btn btn-primary">Go Back</button></a>
        <form action="/customers" class="form-group" method="POST">
            <div class="row">
                  <div class="col-sm-10"><h1>Customer</h1></div>
               
            </div>
            <div class="row">
                  <div class="col-sm-3"><!--left col-->
                      
        
              <div class="text-center">
                <img src="{{asset('img/siteImage/profiledefault.png')}}" class="avatar img-circle img-thumbnail" alt="avatar">
                <hr>
                <h6>Upload a different photo...</h6>
                <input type="file" class="text-center center-block file-upload">
              </div><br>
        
                       
                 
        
                  
                  <ul class="list-group">
                    <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>
                  </ul> 
                       
                  <div class="panel panel-default">
                    <div class="panel-heading">Social Media</div>
                    <div class="panel-body">
                        <i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
                    </div>
                  </div>
                  
                </div><!--/col-3-->
        
                <div class="col-lg-9">  
                  <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <hr>
                        
                        @csrf
                            
                        <div class="row">
                             
                                <input type="text" name="name" class="col-lg-8 p-2 form-control" placeholder="Customer's Name" value="{{old('name')}}">
                                <input type="number" name="phone" class="col-lg-4 p-2 form-control" placeholder="Phone Number" value="{{old('phone')}}">
                        </div>
                        <br>
                        <div class="row">
                                <input type="email" name="email" class="col-lg-6 p-2 form-control" placeholder="Email" value="{{old('email')}}">
                                <input type="text" name="contact" class="col-lg-6 p-2 form-control" placeholder="Address" value="{{old('contact')}}">
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="active">Status</label>
                                <select name="active" id="active" class="form-control">
                                    <option value="" disabled>Select Customer Status</option>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                
                            <div class="form-group col-lg-6">
                                <label for="company_id">Status</label>
                                <select name="company_id" id="company_id" class="form-control">
                                    <option value="" disabled>Select Customer Company</option>
                                    @foreach($companies as $company)
                                <option value="{{$company->id}}">{{$company->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                   
                    
                    <br>
                            <button type="submit" class="btn btn-primary btn-block p-2">Add Customer</button>
                        
                    </div>
                  </div>
                </form>
            </div>
                

@endsection