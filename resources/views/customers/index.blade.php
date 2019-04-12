@extends('layouts.app')
@section('content')

<a href="customers/create"><button class="btn btn-primary btn-block"> Add Customers </button></a>
<hr>
   <div class="table-responsive">
        <table class="table table-hover  col-lg-12">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Addres</th>
                        <th>Company</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <tbody>
                            @foreach($customers as $customer)
                        <tr>
                        <td><a href="/customers/{{$customer->id}}">
                            {{$customer->name}}</a>
                        </td>
                                <td>{{$customer->phone}}</td>
                                <td>{{$customer->email}}</td>
                                <td>{{$customer->contact}}</td>
                                <td>
                                    {{$customer->company->name}}
                                </td>
                            <td>
                                 @if($customer->active == 1)
                                <button class="btn btn-success">Active</button>
                                @else
                                <button class="btn btn-danger">Inactive</button>
                                @endif 

                                {{-- method from accessors and mutator from Model Customers use in future projects --}}
                                {{-- <button class="btn btn-success">{{$customer->active}}</button> --}}
                            </td>
                            <td class="d-flex justify-content-around">
                                <span><a href="/customers/{{$customer->id}}/edit"><button class="btn btn-primary">Edit</button></a></span>
                            

                            <span>
                                    <form action="/customers/{{$customer->id}}" method="POST">
                                       
                                        @method('DELETE')
                                        @csrf
                                <button class="btn btn-danger">Delete</button>
                                    
                                        </form>

                            </span>

                            
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </thead>
            </table>
   </div>
            
@endsection