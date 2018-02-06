@extends('layouts.app')

@section('content')

  <div class="col-md-6 col-md-offset-3">

    <div class="row">
      <div class="cover-photo">
        <img src="" alt="">
        <h3>{{ $user->fname . ' ' . $user->lname }}</h3>
      </div>

      <div class="user-profile-avatar">
        <img src="{{ asset('images/default.png') }}" alt="avatar">
      </div>

      <div class="user-profile-navbar">
        <ul class="clearfix">
          <li><a href="#">Timeline</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Friends</a></li>
          <li><a href="#">Photos</a></li>
          <li><a href="#">More</a></li>
        </ul>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4" style="padding: 0; background: #fff;">
        @include('partials.gallery')
      </div>

      <div class="col-md-8" style="padding-right: 0;">
        @if (Auth::id() === $user->id)
          @include('partials.post-form')
        @else
          @include('partials.post-to-user-form')
        @endif

        @include('partials.posts')
      </div>
    </div>
  </div>

@endsection
