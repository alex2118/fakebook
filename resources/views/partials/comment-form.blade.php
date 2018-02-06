<div class="commenter pull-left">
  <img class="img-circle" src="{{ asset('images/thumbnail.png') }}">
</div>
<form class="comment-form pull-left" action="{{ route('comment.store', $post->id) }}" method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <input class="form-control" placeholder="Write a comment..." type="text" name="content" value="{{ old('content') }}">
  </div>
  <button type="submit">Post Comment</button>
</form>
