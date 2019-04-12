  {{-- flash messages --}}
  @if($errors->any())
  @foreach ($errors->all() as $error)
  <div class="alert alert-danger" role="alert">
  {{$error}}
      </div>
 @endforeach
@endif

@if(session()->has('message'))
<div class="alert alert-success" role="alert">
  <strong>Success ! </strong>{{session()->get('message')}}
</div>
@endif