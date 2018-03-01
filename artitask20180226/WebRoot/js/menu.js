$("span.menu").click(function() {
	$(".top-menu ul").slideToggle("slow", function() {});
});

$(function() {
	 function getClass(){
	   		  $.ajax({
		type: "GET",
	   	url: "getclass.php",
	   	success: function(msg){
	       var msg=JSON.parse(msg);
	       for (var i=0;i<msg.length;i++){
	       	$("<div class='added-event' data-date='"+msg[i].date+"'"+"data-time='"+msg[i].time +"'"+"data-nbsp='' 	data-class='"+msg[i].class+"'"+"data-teacher='"+msg[i].teacher+"'"+"data-title='"+msg[i].course+"'"+"></div>").appendTo($('#myId3'));
	       }
	       $(".prv-m").trigger("click");
	        $(".nxt-m").trigger("click");
	   		}
		})
	   };	
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
	
	
	  $.ajax({
		type: "GET",
	   	url: "getcontent.php",
	   	success: function(msg){
	       var msg=JSON.parse(msg);
	       $('.gradient-wood').html(msg.content);
	   }});
	   
  		getClass();
  
}); 