// JavaScript Document



	$(function(){
			//history js
			(function(){
				$aLi = $(".historyUl li");
				$aBox = $(".listElement");
				$aLi.click(function(){
					var _index = $(this).index();
					$(this).attr("class","active").siblings().attr("class","");
					$aBox.eq(_index).show().siblings().hide();
				})
			})();
			
			
	})


