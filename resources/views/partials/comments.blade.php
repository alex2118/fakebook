<ul class="comment-list">

  @if ($post->comments)

    @foreach ($post->comments as $comment)

      <li id="comment-{{ $comment->id }}" class="comment clearfix">
        <div class="clearfix">
          <div class="commenter pull-left">
            <a href="{{ route('user.profile', $comment->user->id) }}">
              <img class="img-circle" src="{{ asset('images/thumbnail.png') }}" alt="">
            </a>
          </div>
          <div class="pull-left" style="width: calc((100% - 55px) - 10px);">
            <p class="pull-left">
              <span><strong><a style="text-transform: capitalize;" href="#">{{ $comment->user->fname . ' ' . $comment->user->lname }}</a></strong></span>
              {{ $comment->content }}
            </p>
          </div>


          <div class="pull-left" style="margin-left: 55px;">
            <span style="margin-right: 5px;">
              <a href="#">Like</a>
            </span>
            <span style="margin-right: 5px;">
              <a class="reply-button" href="#">Reply</a>
            </span>

            <span>{{ $comment->created_at->diffForHumans() }}</span>
          </div>
        </div>


        @include('partials.replies')

        <div class="new-reply-section pull-left" style="{{ count($comment->replies) > 0 ?: 'display: none;' }}">
          @include('partials.reply-form')
        </div>

      </li>

    @endforeach

  @endif

</ul>
