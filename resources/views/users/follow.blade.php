@extends('layouts.app')

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
    </tr>
  </thead>
  <tbody>
    @foreach($follows as $follow)
    <tr>
      <th scope="row">{{ $follow->name }}</th>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
