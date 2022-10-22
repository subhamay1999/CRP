@extends('layouts.app')
@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <th scope="row">{{ $loop->index+1 }}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
    </tr>
     @endforeach
  </tbody>
</table>
@endsection