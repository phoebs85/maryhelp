
	$(document).ready(function(){
		
		
		$(".p_cont .img img").mouseover(function(){
		$(this).css('border-color','#F00')
			});
			$(".p_cont .img img").mouseout(function(){
				$(this).css('border-color','#ffffff')
		})
		$(".p_cont p a").mouseover(function(){
		$(this).parent().parent().find(".img img").css('border-color','#F00')
			});
			$(".p_cont  p a").mouseout(function(){
				$(this).parent().parent().find(".img img").css('border-color','#ffffff')
		})
	});
