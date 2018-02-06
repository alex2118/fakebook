<div class="gallery">
  <h3>Photos</h3>
  <ul class="photos">
    @if ($user->photos)
      @foreach ($user->photos as $photo)

        <li class="photo col-md-4">
          <a href="#">
            <img class="img-responsive" src="{{ asset('images/default.png') }}">
          </a>
        </li>

      @endforeach
    @endif
  </ul>
</div>
