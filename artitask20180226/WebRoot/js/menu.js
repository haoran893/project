$("span.menu").click(function() {
	$(".top-menu ul").slideToggle("slow", function() {});
});

$(function() {
	$("#about").hover(function() {
		$("#about-info").show();
	}, function() {
		$("#about-info").hover(function() {
			$("#about-info").show();
		}, function() {
			$("#about-info").hide();
		});
	});

	$("#zhuanye").hover(function() {
		$("#zhuanye-info").show();
	}, function() {
		$("#zhuanye-info").hover(function() {
			$("#zhuanye-info").show();
		}, function() {
			$("#zhuanye-info").hide();
		});
	});
});