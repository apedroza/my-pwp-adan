
$( document ).ready(function() {
	$("#mobile").click(function() {
		$("#img1").toggle(function() {
			if($("#img2").css('display') != 'none') {
				$("#img2").toggle("fast");
			}
		});
	})
	$("#desktop").click(function() {
		$("#img2").toggle(function() {
			if($("#img1").css('display') != 'none') {
				$("#img1").toggle("fast");
			}
		});
	})
});