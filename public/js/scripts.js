$(document).ready(function() {

  $('.comment-button').click(function() {
    var $this = $(this);

    $this.parentsUntil('.post-list').find('.comment-section input').focus();

    return false;
  });

  $('.reply-button').click(function() {
    var $this = $(this);

    $this.parentsUntil('.comment-list').find('.new-reply-section').css({
      display: 'block'
    });

    $this.parentsUntil('.comment-list').find('.new-reply-section input').focus();

    return false;
  });

  // $('.reply-form').submit(function() {
  //
  //   var $this = $(this);
  //
  //   $.ajax({
  //     type: $this.attr('method'),
  //     url: $this.attr('action'),
  //     dataType: 'json',
  //     data: $this.serialize(),
  //     success: function(response) {
  //       console.log(response.id);
  //       var html = '<li id="reply-' + response.id + '" class="reply clearfix">';
  //           html += '<div class="commenter pull-left" style="margin-top: 6px;">';
  //           html += '<a href="{{ route() }}">';
  //           html += '<img src="http://fakebook.com/images/default.png" class="img-circle" style="width: 20px;"></a>';
  //           html += '</div>';
  //           html += '<div class="pull-left"><p class="pull-left"><span><strong><a href="http://fakebook.com/profile/2" style="text-transform: capitalize;">Ambot Lang</a></strong></span>';
  //           html += 'test</p> <div class="action-buttons" style="clear: left; margin-left: 5px; padding-top: 0px;"><span style="margin-right: 5px;"><a href="#">Like</a></span> <span><a href="#" class="reply-button">Reply</a></span></div></div></li>';
  //
  //
  //     },
  //     error: function(e) {
  //       console.log(e.responseText);
  //     }
  //   });
  //
  //   return false;
  // });

});
