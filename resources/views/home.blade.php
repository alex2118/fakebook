@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3" style="padding: 0;">

            @include('partials.post-form')

            @include('partials.posts')
            
        </div>
    </div>
</div>
@endsection
