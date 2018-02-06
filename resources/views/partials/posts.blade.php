<ul class="post-list">

  @if ($posts || $user->posts)

    @foreach ($posts as $post)

      <li id="post-{{ $post->id }}" class="post">
        <div class="post-section">
          <div class="post-author">
            <img class="avatar img-circle" src="{{ asset('images/thumbnail.png') }}">
            <strong>
              <a class="post-author-name" href="{{ route('user.profile', $post->user->id) }}" style="text-transform: capitalize;">{{ $post->user->fname . ' ' . $post->user->lname }}</a>
            </strong>
          </div>

          <div class="post-info">
            <p class="post-date">{{ $post->created_at->diffForHumans() }}</p>
            <p class="post-content">{{ $post->content }}</p>
          </div>

          <div class="action-buttons clearfix">
            <div class="pull-left">
              <a href="#">Like</a>
            </div>
            <div class="pull-left">
              <a class="comment-button" href="#">Comment</a>
            </div>
            <div class="pull-left">
              <a href="#">Share</a>
            </div>
          </div>
        </div>

        <div class="comment-section clearfix">
          @include('partials.comments')

          @include('partials.comment-form')
        </div>
      </li>


      @if (Auth::check())

        @if (Auth::user()->id === $post->user->id)

          <a href="#">Delete</a>
          <a href="#">Edit</a>

        @endif

      @endif

    @endforeach

  @endif

</ul>
