<div class="">
  <form class="post-form" action="{{ route('post.store') }}" method="post">
    {{ csrf_field() }}

    <div class="form-group{{ $errors->has('post') ? ' has-error' : '' }}">
      <input class="form-control" placeholder="What's on your mind?" type="text" name="content" value="{{ old('post') }}">

      @if ($errors->has('post'))
          <span class="help-block">
              <strong>{{ $errors->first('post') }}</strong>
          </span>
      @endif

      <button type="submit">Post Status</button>
    </div>
  </form>
</div>
