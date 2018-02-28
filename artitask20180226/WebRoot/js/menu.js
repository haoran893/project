$("span.menu").click(function() {
	$(".top-menu ul").slideToggle("slow", function() {});
});

$(function() {
// 	$.ajax({
// 	type: "POST",
//    	url: "getdate.php",
//    	data: "date=20180228",
//    	success: function(msg){
//        var msg=JSON.parse(msg);
//        console.log(msg.content);
//    }
// })
// 		$.ajax({
// 	type: "GET",
//    	url: "getcontent.php",
//    	success: function(msg){
//        var msg=JSON.parse(msg);
//        console.log(msg.content);
//    }
// })
	
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