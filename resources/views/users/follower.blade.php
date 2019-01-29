@extends('layouts.app')

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
    </tr>
  </thead>
  <tbody>
    @foreach($followers as $follower)
    <tr>
      <th scope="row">{{ $follower->name }}</th>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
