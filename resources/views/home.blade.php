@extends('layouts.app')

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">follow</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <th scope="row">{{ $user->name }}</th>
      <td>
          <follow
          :user="{{json_encode($user)}}"
          ></follow>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
