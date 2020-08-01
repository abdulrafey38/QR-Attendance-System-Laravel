
		(function($){
			$(window).on("load",function(){
				
				$(".content").mCustomScrollbar();
				
				$(".disable-destroy a").click(function(e){
					e.preventDefault();
					var $this=$(this),
						rel=$this.attr("rel"),
						el=$(".content"),
						output=$("#info > p code");
					switch(rel){
						case "toggle-disable":
						case "toggle-disable-no-reset":
							if(el.hasClass("mCS_disabled")){
								el.mCustomScrollbar("update");
								output.text("$(\".content\").mCustomScrollbar(\"update\");");
							}else{
								var reset=rel==="toggle-disable-no-reset" ? false : true;
								el.mCustomScrollbar("disable",reset);
								if(reset){
									output.text("$(\".content\").mCustomScrollbar(\"disable\",true);");
								}else{
									output.text("$(\".content\").mCustomScrollbar(\"disable\");");
								}
							}
							break;
						case "toggle-destroy":
							if(el.hasClass("mCS_destroyed")){
								el.mCustomScrollbar();
								output.text("$(\".content\").mCustomScrollbar();");
							}else{
								el.mCustomScrollbar("destroy");
								output.text("$(\".content\").mCustomScrollbar(\"destroy\");");
							}
							break;
					}
				});
				
			});
		})(jQuery);