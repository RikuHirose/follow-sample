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
      <?php

      if($user->followers->isEmpty()) {
        $defaultFollowed = false;

      } else {

        foreach ($user->followers as $key => $follower) {
            if($authUser->id == $follower->id) {
                $defaultFollowed = true;
                break;
            }
        }

        }
      ?>
      <td>
          <follow
          :follow-user="{{json_encode($user)}}"
          :auth-user="{{json_encode($authUser)}}"
          :default-followed="{{json_encode($defaultFollowed)}}"
          ></follow>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
