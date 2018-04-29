
$(document).ready(function() {
  $('li.active').removeClass('active');
  $('a[href="' + location.pathname + '"]').closest('li').addClass('active'); 
});


function restoreNavBar() {
	$(document).ready(function() {
  $('li.active').removeClass('d-none');
});


}