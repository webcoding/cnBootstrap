$(function(){
	
	$('div.scroll-pane').jScrollPane();
	
	
	var list = $("#tags-list").children();
	var parms = {};
	list.each(function(){
	parms[this.id] = null;
	$(this).find("a").click(function(){
		$(this).addClass("selected").siblings(".selected").removeClass("selected");
		parms[this.parentNode.id] = this.innerHTML;
		var items = $("li.bugs-item");
		items.hide();
		var selectedArr = [];
		for(var n in parms){
			if(parms[n] && parms[n]!="全部"){
				items = items.filter("[data-key*='"+parms[n]+"']");
				selectedArr.push('<dd class="'+ n +'"><a href="javascript:void(0)">'+parms[n]+'<span class="icon-close"></span></a></dd>');
				}
			}
			items.show();
			$("span.result-info i").html(items.length);
			scrollTo(0,$("#overview").next().offset().top-50);
			$("#your-choices").html('<dt>您已选择：</dt>'+selectedArr.join("")+'<dd class="tags-empty"><a href="javascript:void(0)" id="clearAll">清空全部</a></dd>');
			$("#clearAll").click(function(){
				$("#your-choices dd").remove();
				$("li.bugs-item").show();
				$("#tags-list").children().each(function(){
				   $(this).find("a").eq(0).addClass("selected").siblings(".selected").removeClass("selected");
				});
			});
			$("#your-choices dd").click(function(){
				if($(this).siblings().length==2){
					var elt = $(this).parent();setTimeout(function(){elt.html("");},10);
				}else{
					$(this).remove();
				}
				$('#'+$(this).attr('class')).children().eq(0).click();

			})
			return false;
		});
	});

	
	
});
