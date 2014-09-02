$(document).ready(function() {
	var url = "";
	$(".rb_url_submit").click(function() {
		url = $(".rb_url_input").val();
		$(".rb_url").text(url);
	});
});