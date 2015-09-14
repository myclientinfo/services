

$(function() {
  $('#profile_thumbs').on('click', 'img', function(){
    $('.full_image').removeClass('full_visible');
    var chosen = $(this).attr('id').replace('thumb_', '');
    $('#full_'+chosen).addClass('full_visible');
    console.log();
  });
});