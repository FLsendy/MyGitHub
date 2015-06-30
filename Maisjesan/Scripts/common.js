// JavaScript Document



	$(function(){
		
		
		function estr(kw) {
			if (!kw) {
				return ""
			}
			var c = "123456abcdefghijklmnopqrstuvwxyz";
			kw = u(kw).toLocaleLowerCase();
			var bstr = '';
			for (i = 0; i < kw.length; i++) {
				b8 = new String(kw.charCodeAt(i).toString(2));
				var x = b8.length;
				if (x < 8) {
					for (j = 0; j < 8 - x; j++) {
						b8 = '0' + b8
					}
				}
				bstr += b8
			}
			var l5 = 0;
			if (bstr.length % 5 == 0) {
				l5 = bstr.length / 5
			} else {
				l5 = parseInt(bstr.length / 5) + 1
			}
			var e = "";
			for (i = 0; i < l5; i++) {
				b5 = bstr.substring(i * 5, (i + 1) * 5);
				bit = '000' + b5;
				var y = bit.length;
				if (y < 8) {
					for (j = 0; j < 8 - y; j++) {
						for (j = 0; j < 8 - y; j++) {
							bit = bit + '0'
						}
					}
				}	
				var s = parseInt(parseInt(bit, 2).toString(10));
				e += c.substring(s, s + 1)
			}
			return e
		}

		
		
		
		//1.index banner
		//2.index common
		//3.nav
		//4.品牌页
		//5运动生活页
		//nav
		//防伪查询
		;(function(){
				var timer = null;
				var _index = null;
				var navBtn = $(".hasChild");
				var listsPop = $("#hideBlock");
				var listsPopes= listsPop.find('.subnav-section');
				
				navBtn.hover(function(){
					$(this).find('a').addClass("active");
					_index = $(this).attr('data-index');
					listsPop.show();
							listsPopes.eq(_index).show().siblings('').hide();
					showSub();
				},function(){
						hideSub();
					$(this).find('a').removeClass("active");
				
				})
				
				listsPop.hover(function(){
					showSub();
					navBtn.find('a').removeClass("active");
					navBtn.eq(_index).find('a').addClass("active")
				},function(){
					hideSub();
					navBtn.find('a').removeClass("active");
				})
				
				function showSub(){
					clearInterval( timer );
					hideBlock.style.display = 'block';
				}
				function hideSub(){
					timer = setTimeout(function(){
						hideBlock.style.display = 'none';
					}, 200);
				}
		})();	
	
		 //index banner
		  ;(function(){
				 
			 if(document.getElementById('banner')){
				var oIndexBanner = $('#banner');	
				var spBox = oIndexBanner.find('.sp_box'); 
				var spWin = oIndexBanner.find('.ban_win'); 
				var oBtmBox = oIndexBanner.find('.btm_btns');
				var aSpan = oBtmBox.find("span");
				var aBtmBtns = null;
				var oLeftBtn = oIndexBanner.find('.left_btn');
				var oRightBtn = oIndexBanner.find('.right_btn');
				var aCtrBtns = oIndexBanner.find('.ctr_btns'); 
				var aLi = spBox.find('li'); 
				var iBoxW = 0;
				var lth = aLi.length;
				var iNow = 0;
				var canBtn = true;
				var timer = null;
				
				if(lth>0){
					
					//尺寸
					function spResize(){
						iBoxW = oIndexBanner.get(0).offsetWidth;
						for(var i=0; i<lth; i++){
							aLi.width(iBoxW);	
						}
						spBox.width(lth*iBoxW);
						var des = -iNow*iBoxW;
						spBox.css({'marginLeft':des});
						oLeftBtn.hide();
						oRightBtn.hide();
					}
					spResize();
					
					$(window).bind('resize',function(){
						//模块重置尺寸
						
						spResize();	
					});
					
					oIndexBanner.hover(function(){
						clearInterval(timer);
						oLeftBtn.show();
						oRightBtn.show();
					}, function(){
						timer = setInterval(function(){
							autoPlay();
						}, 5000)
						oLeftBtn.hide();
						oRightBtn.hide();

					})
					timer = setInterval(function(){
						autoPlay();
						
					}, 5000)
					
					function autoPlay(){
					
						if( iNow <lth-1){
							iNow++;
						}else{
							iNow =0;
						}
						//spResize();
						sportFn()
					}
					
					//底部小按钮
					function markBtnBtns(){
						for(var i=0; i<lth; i++){
							var oSpan = document.createElement('span');
							if(i==iNow){
								oSpan.className = 'active';
							}
							oBtmBox.get(0).appendChild(oSpan);
						}
					}
					
					//oBtmBox
					if(aLi.length>1){
						//底部小按钮
						markBtnBtns();
						
						//两倍内容
						spBox.get(0).innerHTML+=spBox.get(0).innerHTML;
						aLi = spBox.find('li');
						lth = aLi.length;
						spResize();
						
						//oLeftBtn
						function oLeftBtnFn(){
							iNow--;
							if(iNow<0){
								iNow = (lth/2)-1;
								spBox.css({'marginLeft':-(lth/2)*iBoxW});		
							}
							sportFn();	
						}
						
						//oRightBtn
						function oRightBtnFn(){
							iNow++;
							sportFn();
						}
						
						oLeftBtn.bind('click',function(){
							if(canBtn){
								canBtn = false;
								oLeftBtnFn();
							}
						});
						
						oRightBtn.bind('click',function(){
							if(canBtn){
								canBtn = false;
								oRightBtnFn();	
							}
						});
						
						//aBtmBtns
						aBtmBtns = oBtmBox.find('span');
						aBtmBtns.bind('click',function(){
							if(canBtn){
								canBtn = false;
								var _tar = $(this);
								if(_tar.hasClass('acitve')){
									return false;	
								}else{
									iNow = _tar.index();	
									sportFn();	
								}	
							}
						});
						
						//sportFn
						function sportFn(){
							var dis = -iNow*iBoxW;
							spBox.stop(true,false).animate({'marginLeft':dis},500,function(){
								if(iNow==lth/2){
									iNow = 0;
									spBox.css({'marginLeft':'0'});	
								}
								aBtmBtns.eq(iNow).addClass('active').siblings().removeClass('active');
								canBtn = true;
							});	
						}
							
					}else{
						oLeftBtn.style.display =  oRightBtn.style.display = oBtmBox.style.display = 'none';	
					}
					
					
				}
			}
			  
		  })();
		  
	    //form search
		;(function(){
			
			if($('#tArticle form').length>0){
			
				var oF = $('#tArticle form');
				var oTxt = $('#tArticle input');
				oTxt.val('篮球');	
				
				oTxt.bind('focus',function(){
					oTxt.addClass('onF');
				});
				
				oTxt.bind('blur',function(){
					oTxt.removeClass('onF');
					if(oTxt.val()==''){
						oTxt.val('篮球');	
					}
				});
			}
				
		})();
		 
		//index common
		;(function(){
				/*注
				var $oBox = $(".sortElement dl");
				$oBox.slice(4).hide();
				var iBtn = true;
				$("#btnMore").click(function(){
					$oBox.slice(4).slideToggle(700);
					if(iBtn){
						$(this).html("收起 &nbsp;  -");
					}else{
						$(this).html("更多 &nbsp; +")
					}
					iBtn = !iBtn;
				})*/
				if(document.getElementById("listCon")){
					var oPrev = document.getElementById("prev");
					var oNext = document.getElementById("next");
					var oBox = document.getElementById("listCon");
					
					var aDiv = oBox.children;
					var iNow = 0;
					
					oNext.onclick = function(){
						if( iNow< aDiv.length-1){
							iNow ++;
						}else{
							iNow =0;
						}
						
						toRun()
					}
					
					oPrev.onclick = function(){
						if( iNow >0){
							iNow --;
						}else{
							iNow = aDiv.length -1
						}
						
						toRun();
					}
					
					function toRun(){
							for( var i=0; i<aDiv.length;i++){
								startMove(aDiv[i],{opacity:0},function(){
									this.style.display ="none";
								});
							}
						startMove(aDiv[iNow],{opacity:100},function(){
							aDiv[iNow].style.display = "block"
						});
					}
					
				}
		})();				
			
		;(function(){
				/*微信*/
				$(".weChatClick").click(function(ev){
						$(this).closest("dl").find(".btnWeChat").toggle();
						$(this).closest("dl").siblings().find(".btnWeChat").hide();
						ev.stopPropagation();
				})
				
				$(document).click(function(){
					$(".btnWeChat").hide();
				})
				
		})();		
		
		;(function(){
			//分类
				var $aDd =$(".productList dd");
				$aDd.first().addClass("showIt");
				var $aDt = $(".productList dt");
				$aDt.click(function(){
					var $dl = $(this).closest("dl");
					$aDd.removeClass("showIt");	
					$dl.find("dd").addClass("showIt");
					$aDt.find("i").removeClass("upDown");
					$dl.find("i").addClass("upDown");
					
				})
			
		})();		
		
		
		;(function(){
		/*video*/		

	/*			if(document.getElementById('cq')){
				swfBoxesId = document.getElementById('cq');
				swfBoxesId.videoStop_FN && swfBoxesId.videoStop_FN();	
				swfBoxesId.videoStart_FN && swfBoxesId.videoStart_FN();
			}
			
		var h5V = document.getElementById("videoPlayer");
				if(!h5V.paused){
					h5V.pause();
			}else{
				h5V.play();
			}
	
*/

		var $oBox = $(".videoBox");
		var $oMask = $("#mask");
	var h5V = null;
	var swfV = null;
	var aInput = document.getElementsByTagName('input');
	
/*	aInput[0].onclick = function(){
		if(document.getElementById('videosSreen')){
			h5V = document.getElementById('videosSreen');	
			h5V.play && h5V.play();
		}
		if( document.getElementById('cq')){
			swfV =  document.getElementById('cq');	
			swfV.videoStart_FN && swfV.videoStart_FN();
		}	
	}
	
	aInput[1].onclick = function(){
		if(document.getElementById('videosSreen')){
			h5V = document.getElementById('videosSreen');	
			h5V.pause && h5V.pause();
		}
		if( document.getElementById('cq')){
			swfV =  document.getElementById('cq');	
			swfV.videoStop_FN && swfV.videoStop_FN();	
		}	
	}
*/
		$('.videoSkill').click(function(){
			$oMask.css('height',$(window).height()+$(window).scrollTop());
			$oBox.css('left' , ($(window).width() - $oBox.outerWidth())/2 );
			$oBox.css('top' , ($(window).height() -  $oBox.outerHeight())/2 );
			$oBox.css({'zIndex':'99999'});
			$oMask.show();
			if(document.getElementById('videoPlayer')){
				h5V = document.getElementById('videoPlayer');	
				h5V.play && h5V.play();
			}
			if( document.getElementById('cq')){
				swfV =  document.getElementById('cq');	
				swfV.videoStart_FN && swfV.videoStart_FN();
			}	
		})
		$("#videoBtn").click(function(){
			$oMask.css('height',$(window).height()+$(window).scrollTop());
			$oBox.css('left' , ($(window).width() - $oBox.outerWidth())/2 );
			$oBox.css('top' , ($(window).height() -  $oBox.outerHeight())/2 );
			$oBox.css({'zIndex':'99999'});
			$oMask.show();
			if(document.getElementById('videoPlayer')){
				h5V = document.getElementById('videoPlayer');	
				h5V.play && h5V.play();
			}
			if( document.getElementById('cq')){
				swfV =  document.getElementById('cq');	
				swfV.videoStart_FN && swfV.videoStart_FN();
			}
			if($(this).hasClass('youkuVideoSkill') && !$(this).find('iframe').length){
				//$oBox
				var oF = document.createElement('iframe');
				oF.className = 'theYoukuFrame';
				oF.style.zIndex = 10;
				oF.setAttribute('frameborder',0);
				oF.setAttribute('width',712);
				oF.setAttribute('height',400);
				oF.setAttribute('allowfullscreen','');
				oF.setAttribute('src',$(this).attr('videoSrcL'));
				$oBox.get(0).appendChild(oF);
			}
				
		})
		
		$("#videoClose").click(function(){
			$oBox.css({'zIndex':'-99999'});
			$oBox.css('top','-9999px');
			$oMask.hide();
			if(document.getElementById('videoPlayer')){
				h5V = document.getElementById('videoPlayer');	
				h5V.pause && h5V.pause();
			}
			if( document.getElementById('cq')){
				swfV =  document.getElementById('cq');	
				swfV.videoStop_FN && swfV.videoStop_FN();	
			}	
			if(document.getElementById('cq')){
				swfBoxesId = document.getElementById('cq');
				swfBoxesId.videoStop_FN && swfBoxesId.videoStop_FN();	
			}else if(document.getElementById('videoPlayer')){
				var videoPlayer =document.getElementById('videoPlayer') ;
				videoPlayer.pause();	
			}
			//2015.2.11
			if($(this).siblings('.theYoukuFrame').length>0){
				var _tar = $(this).siblings('.theYoukuFrame').get(0);
				$oBox.get(0).removeChild(_tar);
			}
		})
		 
			$(window).on('resize scroll',function(){
				 //$oBox.css('top' , ($(window).height() -  $oBox.outerHeight())/2 + $(window).scrollTop() );
				 //$oBox.css('left' , ($(window).width() - $oBox.outerWidth())/2 );
				 $oMask.css('height',$(window).height()+$(window).scrollTop());
			});
		})();	
		
		//4.品牌页
		(function(){
			var oBtn = $("#btnAClick");
			var oCon = $("#summy p.con");
			var iBtn = true;
			oCon.slice(1).hide();
			oBtn.click(function(){
				oCon.slice(1).slideToggle(500);
				$(this).find("i").toggleClass("active");
					if(iBtn){
						$(this).html("收起阅读更多<i></i>");
							$(this).find("i").attr("class","");
					}else{
						$(this).html("展开阅读更多<i></i>");
							$(this).find("i").attr("class","active");
					}
					iBtn = !iBtn;
			})
			
		})();	
		
		//运动生活页
		(function(){
			$("#lncSearch").click(function(){
				$(".popBoxBd").toggleClass("popIsShow");
			})
		})();
		
		//赛事
		(function(){
			var $oBox = $(".saishiWrap");
			var $oPrev = $("#btnPrev");
			var $oNext = $("#btnNext");
			var $oUl = $(".saishiBox");
			var aLi = $(".saishiBox li");
			var len =  aLi.length;
			var iNow = 0;
			var timer = null;
			
			$oPrev.click(function(){
				iNow --;
				doMove()
			})
			
			$oNext.click(function(){
				iNow ++;
				doMove()
			})
			
			
			function doMove(){
				if(iNow > len-1){
					iNow =0;
				}
				if(iNow <0 ){
					iNow = len-1;
				}
				aLi.eq(iNow).attr("class","active").siblings().attr("class", "");
			}
			
		})();
		
		//表单提交
		function u(s) {
			return s.replace(/[^\u0000-\u00FF]/g, 
			function($0) {
				return escape($0).replace(/(%u)(\w{4})/gi, "\\u$2")
			})
		}
		function r(s) {
			s = s.replace(/(\\u)(\w{4})/gi, 
			function($0) {
				return (String.fromCharCode(parseInt((escape($0).replace(/(%5Cu)(\w{4})/g, "$2")), 16)))
			});
			return s
		}
		
		function estr(kw) {
			if (!kw) {
				return ""
			}
			var c = "123456abcdefghijklmnopqrstuvwxyz";
			kw = u(kw).toLocaleLowerCase();
			var bstr = '';
			for (i = 0; i < kw.length; i++) {
				b8 = new String(kw.charCodeAt(i).toString(2));
				var x = b8.length;
				if (x < 8) {
					for (j = 0; j < 8 - x; j++) {
						b8 = '0' + b8
					}
				}
				bstr += b8
			}
			var l5 = 0;
			if (bstr.length % 5 == 0) {
				l5 = bstr.length / 5
			} else {
				l5 = parseInt(bstr.length / 5) + 1
			}
			var e = "";
			for (i = 0; i < l5; i++) {
				b5 = bstr.substring(i * 5, (i + 1) * 5);
				bit = '000' + b5;
				var y = bit.length;
				if (y < 8) {
					for (j = 0; j < 8 - y; j++) {
						for (j = 0; j < 8 - y; j++) {
							bit = bit + '0'
						}
					}
				}	
				var s = parseInt(parseInt(bit, 2).toString(10));
				e += c.substring(s, s + 1)
			}
			return e
		}
		
		;(function(){
		
			var oF = $('#search_form');
			var oBtn = oF.find('.search_form_subBtn');
			var oTxt = oF.find('.search_form_subTxt');
			
			//doSearch
			function doSearch(){
				var _txt = oTxt.val();
				if(_txt!=''){
					_txt = estr(_txt);
					
					var url = 'http://www.e-lining.com/shop/goodsList-0-0-0-0-'+_txt+'.html';
					//var url = 'http://www.e-lining.com/shop/searchkey-'+_txt+'-0.html'
					oF.attr('action',url);
					oF.submit();
					//document.forms.search_form.submit();	
					
					//'http://www.e-lining.com/shop/searchkey-flunkt45a6ibehn3asuk-0.html'  官网
					//'http://www.e-lining.com/shop/goodsList-0-0-0-0-flunkt45a6ibehn3asuk.html'  404
				}		
			}
			
			oBtn.click(function(){
				doSearch();
			});
			
			oF.keydown(function(event){
				if ( event.which == 13 ) {
					doSearch();
				}
			});
		
		})();
		
		//防伪查询
		;(function(){
			
			$("#popClick").click(function(){
				$(".popBox").show();
			});	
			$("#closeBtn").click(function(){
				$(".popBox").hide();
			});
					
		})();
		
		
	})


