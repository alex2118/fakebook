<div class="pull-left" style="margin-right: 10px;">
  <img class="img-circle" style="width: 40px;" src="{{ asset('images/') . '/' . Auth::user()->avatar }}" alt="">
</div>
<form class="reply-form pull-left" action="{{ route('reply.store', $comment->id) }}" method="post">
  {{ csrf_field() }}

  <div class="form-group">
    <input class="form-control" placeholder="Write a reply..." type="text" name="content" value="{{ old('content') }}">
  </div>

  <button style="display: none;" type="submit">Post Reply</button>
</form>
