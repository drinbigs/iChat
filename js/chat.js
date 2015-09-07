$(function(){

	$(document).on('submit','#chatForm',function()
	{
		var text = $.trim($("$text").val());
		var name = $.trim($("$name").val());

		if(text != "" && name != "")
		{
			$.post('model/chatPoster.php',{text: text, name: name}, function(data){
				$(".chatMessages").append(data);
			});
		}
		else
		{
				alert("Data Missing");
		}
	});

	function getMessages(){
		$.get('model/chat_model.php',function(data){
				$(".chatMessages").html(data);
			});
	}
	setInterval(function(){getMessages();},10);

	$(function(){
	var d = $('.chatMessages');
	d.animate({ scrollTop: d.prop('scrollHeight') }, 1000);
	});

});



