$(document).ready(function(){

$('#feed-edit-btn').on('click', function () {
  				$(this).hide();
                $('#feed-edit-done').show();
                $('.feed-post-edit').show(500);
});

$('#feed-edit-done').on('click', function () {
  				$(this).hide();
                $('#feed-edit-btn').show();
                $('.feed-post-edit').hide(500);
});




$( ".feed-remove-btn" ).each(function() {
    $(this).on("click", function(){
      if (confirm("Are you sure you want to delete this post?")) {
         $(this).parent().parent().fadeOut(300, function() { $(this).remove(); });
    }
    });
});

 $('#navbar').affix({
    offset: {
      top: 100
    , bottom: function () {
        return (this.bottom = $('footer').outerHeight(true))
      }
    }
  })

});

