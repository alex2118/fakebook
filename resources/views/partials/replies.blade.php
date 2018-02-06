<ul class="reply-list">

  @if ($comment->replies)

    @foreach ($comment->replies as $reply)

      <li id="reply-{{$reply->id}}" class="reply clearfix">
        <div class="commenter pull-left" style="margin-top: 6px;">
          <a href="{{ route('user.profile', $reply->user->id) }}">
            <img class="img-circle" style="width: 20px;" src="{{ asset('images/') . '/' . $reply->user->avatar }}" alt="">
          </a>
        </div>
        <div class="pull-left">
          <p class="pull-left">
            <span>
              <strong>
                <a style="text-transform: capitalize;" href="{{ route('user.profile', $reply->user->id) }}">{{ $reply->user->fname . ' ' . $reply->user->lname }}</a>
              </strong>
            </span>
            {{ $reply->content }}
          </p>

          <div class="action-buttons" style="clear: left; margin-left: 5px; padding-top: 0;">
            <span style="margin-right: 5px;"><a href="#">Like</a></span>
            <span style="margin-right: 5px;"><a class="reply-button" href="#">Reply</a></span>

            <span>{{ $reply->created_at->diffForHumans() }}</span>
          </div>
        </div>
      </li>

    @endforeach

  @endif

</ul>
