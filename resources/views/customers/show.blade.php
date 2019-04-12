@extends('layouts.app')
@section('content')
<div class="container bootstrap snippet">
    <a href="/customers"><button class="btn btn-primary">Go Back</button></a>
        <div class="row">
        <div class="col-sm-10"><h1>{{$customer->name}}</h1></div>
           
        </div>
        <div class="row">
              <div class="col-sm-3"><!--left col-->
                  
    
          <div class="text-center">
            <img src="{{asset('img/siteImage/profiledefault.png')}}" class="avatar img-circle img-thumbnail" alt="avatar">
            <hr>
           
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
             <ul class="list-group">
                 <li class="list-group-item"><div class="label">Name : </div>
                {{$customer->name}}
                </li>
                 <li class="list-group-item"><div class="label">Contact no : </div>
                {{$customer->phone}}
                </li>
                 <li class="list-group-item"><div class="label">Email : </div>
                {{$customer->email}}
                </li>
                 <li class="list-group-item"><div class="label">Address : </div>
                {{$customer->contact}}
                </li>
                 <li class="list-group-item"><div class="label">Company : </div>
                    {{$customer->company->name}}
                </li>
                <li class="list-group-item"><div class="label">Status : </div>
                    @if($customer->active == 1)
                    <button class="btn btn-success">Active</button>
                    @else
                    <button class="btn btn-danger">Inactive</button>
                    @endif 
                </li>
             </ul>
             <hr>
            <a href="/customers/{{$customer->id}}/edit"><button class="btn btn-primary btn-block">Edit</button></a>
                </div>
              </div>
            </div>
                

@endsection
