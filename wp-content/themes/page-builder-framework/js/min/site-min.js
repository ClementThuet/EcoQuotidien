!function(i){if(i(".scrolltop").length){var t=i(".scrolltop").attr("data-scrolltop-value");i(window).scroll(function(){i(this).scrollTop()>t?i(".scrolltop").fadeIn():i(".scrolltop").fadeOut()}),i(".scrolltop").click(function(){i("body,html").animate({scrollTop:0},500)})}i(".wpbf-menu-item-search a").click(function(t){t.preventDefault(),t.stopPropagation(),i(".wpbf-menu-item-search a").addClass("active"),i(".wpbf-navigation .wpbf-menu > li").slice(-3).addClass("wpbf-menu-item");var n=0;if(i(".wpbf-menu-item").each(function(){n+=i(this).outerWidth()}),n<200)n=250;i(".wpbf-menu-search").stop().css({display:"block"}).animate({width:n,opacity:"1"},200),i(".wpbf-menu-search #s").focus()}),i(window).click(function(){i(".wpbf-menu-item-search a").hasClass("active")&&(i(".wpbf-menu-search").stop().animate({opacity:"0",width:"0px"},250,function(){i(this).css({display:"none"})}),setTimeout(function(){i(".wpbf-menu-item-search a").removeClass("active")},400))}),i(".wpcf7-form-control-wrap").hover(function(){i(".wpcf7-not-valid-tip",this).fadeOut()});var n=i(".wpbf-navigation").data("sub-menu-animation-duration");i(".wpbf-sub-menu-animation-fade > .menu-item-has-children").hover(function(){i(".sub-menu",this).first().stop().fadeIn(n)},function(){i(".sub-menu",this).first().stop().fadeOut(n)}),i(".wpbf-sub-menu > .menu-item-has-children:not(.wpbf-mega-menu) > .sub-menu > .menu-item-has-children").hover(function(){i(".sub-menu",this).first().stop().css({display:"block"}).animate({opacity:"1"},n)},function(){i(".sub-menu",this).first().stop().animate({opacity:"0"},n,function(){i(this).css({display:"none"})})}),i(window).load(function(){i(".opacity").delay(250).animate({opacity:"1"},250),i(".display-none").show(),i(window).trigger("resize"),i(window).trigger("scroll")});var e=i(".wpbf-page").css("margin-top");if(i(window).resize(function(){i(".wpbf-page").width()>=i(window).width()?i(".wpbf-page").css({"margin-top":"0","margin-bottom":"0"}):i(".wpbf-page").css({"margin-top":e,"margin-bottom":e})}),i(".wpbf-menu-centered").length){var a=i(".wpbf-navigation .wpbf-menu > li > a").length/2;a=(a=Math.floor(a))-1;i(".wpbf-menu-centered .logo-container").insertAfter(".wpbf-navigation .wpbf-menu >li:eq("+a+")").css({display:"block"})}}(jQuery);