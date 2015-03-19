var flareTop,
	flareLeft;

var emailPattern = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
var successMessage = 'SMS was sent successfully. Enjoy!';
var successEmail = 'E-Mail was sent successfully. Enjoy!';
var badMessage ='Please enter valid phone.';
var badEmail ='Please enter valid E-Mail.';
$.masksLoad = function(url) {
	var maskList;
	$.ajax({
		url: url,
		async: false,
		dataType: 'json',
		success: function (response) {
			maskList = response;
		}
	});
	return maskList;
}

$.masksSort = function(maskList, defs, match, key) {
	maskList.sort(function (a, b) {
		var ia = 0, ib = 0;
		for (; (ia<a[key].length && ib<b[key].length);) {
			var cha = a[key].charAt(ia);
			var chb = b[key].charAt(ib);
			if (!match.test(cha)) {
				ia++;
				continue;
			}
			if (!match.test(chb)) {
				ib++;
				continue;
			}
			if ($.inArray(cha, defs) != -1 && $.inArray(chb, defs) == -1) {
				return 1;
			}
			if ($.inArray(cha, defs) == -1 && $.inArray(chb, defs) != -1) {
				return -1;
			}
			if ($.inArray(cha, defs) == -1 && $.inArray(chb, defs) == -1) {
				if (cha != chb) {
					return cha < chb ? -1 : 1;
				}
			}
			ia++;
			ib++;
		}
		for (; (ia<a[key].length || ib<b[key].length);) {
			if (ia<a[key].length && !match.test(a[key].charAt(ia))) {
				ia++;
				continue;
			}
			if (ib<b[key].length && !match.test(b[key].charAt(ib))) {
				ib++;
				continue;
			}
			if (ia<a[key].length) {
				return 1;
			}
			if (ib<b[key].length) {
				return -1;
			}
		}
		return 0;
	});
	return maskList;
}

$(function(){

	var
		$broot = $( ".b-root" ),
		$navigation = $( "#navigation" ),
		$viewport = $( "#viewport" ),
		$phoneapp = $( "#phoneapp" ),
		$content = $( "#content" ),
		$main = $( "#main" ),
		$scroll = $( ".category-scroll" ),
		$watchVisible = $( "[data-visible]" );

	$watchVisible.filter( "[data-visible='']" ).hide();
	$watchVisible.not( "[data-visible='']" ).show();

	if ( /^http:\/\/cfc.io\/$/.test( self.location.href.replace("#","") ) ) {
		//$phoneapp.attr( "data-visible", "visible" );
	} else {
		//$phoneapp.attr( "data-visible", "" );
	}

	$navigation.on( "menuleft" , function() {
		//$phoneapp.animate( { left:"45%" } , "fast" );
		//$phoneapp.animate( { right:"60px" } , "fast" );
	});

	$navigation.on( "menucenter" , function() {
		//$phoneapp.animate( { left:"61%" } , "fast" );
		//$phoneapp.animate( { right:"60px" } , "fast" );
	});

	$navigation.on( "menuright" , function() {
		//$phoneapp.animate( { left:"37%" } , "fast" );
		//$phoneapp.animate( { right:"60px" } , "fast" );
	});

	$navigation.children( "li" ).on( "click" , function() {
		//hide other dropdowns
		$navigation.children( "li" ).not( this ).each(function(){
			$(this).removeClass( "active" ).find( "ol" ).attr( "data-visible", "" ).slideUp( 100 );
		});
		//variables
		var
			action = $(this).data( "action" ),
			$dropdown = $(this).find( "ol" );
		//
		( !$dropdown.attr( "data-visible" ) ) ?
			$(this).find( "ol" ).animate( { height: "show", opacity: "1" } , "fast" )
			&& $navigation.trigger( action )
			&& $(this).addClass( "active" )
			/*&& $phoneapp.show()*/
			&& $content.animate({ top: $(window).height() }, 250).parent().removeClass( "__opened" )
			&& $dropdown.attr( "data-visible" , "visible" )
			&& showSmileys()
		:
			$(this).find( "ol" ).animate( { height: "hide", opacity: "0" } , "fast" )
			&& $dropdown.attr( "data-visible" , "" )
			&& $(this).removeClass( "active" )
			&& $content.animate({ top: 8 }, 250).parent().addClass( "__opened" )
			&& hideSmileys() ;
			//&& $phoneapp.animate( { right:"41%" } , "fast" )
			/*&& ( !/^http:\/\/cfc.io\/$/.test( self.location.href.replace("#","") ) )?$phoneapp.hide()
				:"";*/
	});

	$navigation.children( "li" ).children(  "a" ).on( "click" , function(e) {
		if ($(this).attr('href') == '#') e.preventDefault();
	});
	$navigation.find( "ol" ).on( "click" , function(e) { e.stopPropagation(); })

	try{
		/*if (!window.matchMedia("(max-width:1280px)").matches) {*/
        /*TODO BACGROUND~*/
			var siteBackground = new Image()
			siteBackground.src = "http://presta.com/wp-content/themes/cfc/images/background1.png";
			$(siteBackground).load( function() {
				$broot.before(
					$( "<div />" , {
						class: "site-background",
						css: {
							"position" : "fixed",
							"top" : "0",
							"left" : "0",
							"zIndex" : "1",
							"display" : "block",
							"width" : "100%",
							"height" : "100%",
                            "background-image":siteBackground.src,
                            "background-attachment": "fixed",

                            "background-position": "50% 0%",
                            "background-repeat": "no-repeat",

							"opacity" : "0"
						}
					}).animate( { "opacity":1 } , "slow" )
				)
			})
		/*}*/
	}
	catch(e) { console.log(e) }

	//fixing height of two-row submenu's
	$navigation.children( "li" ).find( "li" ).find( "a" ).each(function(){
		try{
			if (window.matchMedia("(max-width:1280px)").matches) {
				if ( $(this).text().length > 11 )
					$(this).addClass( "two-rows" );
			}
			else {
				if ( $(this).text().length > 15 )
					$(this).addClass( "two-rows" );
			}
		}
		catch(e) { console.log(e) }
	});

	var centeringPhone = function() {
        /*
		$phoneapp.css( "top" , ($viewport.innerHeight()/2|0)-($phoneapp.outerHeight()/2|0)+ "px" );
		*/
	};

	$(window).on('resize', function() {

        var phone= $("#phoneapp");
        if($(window).width()<$(window).height()){
            phone.hide();
            $("#span-cfc-front")
                .css('width','100%')
                .css('padding-bottom','5px')
                .css('padding-top','5px');
            $(".front-middle-blue-line").css('font-size','3.5vmax');
            $(".news-hheader-div").css('font-size','2vmax');
            $("#top-menu").css('padding-top','1%');
            $(".lang-div").css('font-size','30px');
            $(".social-box").css('width','97%');
            $(".share-container").css('width','100%');
            $(".about-header-div").css('font-size','2.5vmax');
            $("#top-menu").css('margin-left','0');
            $("#gnom-blueline-sharebuttons").css('vertical-align','bottom');
        }else{
            phone.show();
            $("#span-cfc-front")
                .css('width','100%')
                .css('padding-bottom','20px')
                .css('padding-top','20px');
            $(".front-middle-blue-line").css('font-size','1.5vmax');
            $("#span-cfc-front")
                .css('width',$(window).width() - phone.width() * 0.89);
            $(".news-hheader-div").css('font-size','1.5vw');
            $("#top-menu").css('padding-top','0%');
            $(".social-box").css('width','30%');
            $(".lang-div").css('font-size','1.5vmax');
            $(".about-header-div").css('font-size','1.5vmax');
            $("#top-menu").css('margin-left','5%');
            $("#gnom-blueline-sharebuttons").css('vertical-align','middle');
        }




		/*if ($(window).width() > 540)
		{
			$viewport.height(function() {
				return $(window).height() - 140;
			});
		}
		else
		{
			$viewport.height(function() {
				return $(window).height() - 102;
			});
		}*/


		var innerHeight = $('#viewport').innerHeight() - 10,
			innerLeft = ($(window).width() - $content.width()) / 2;

		$content.height(innerHeight).css({ left: innerLeft });

		$('.content-left, .content-right').height(innerHeight - 34);

        var topheight =  ($("#main-menu").offset().top+$("#main-menu").height()+$("#submenu-about-us").height());
        $("#content").css('top',topheight);


		if ($('#homeContent').length > 0 || $('#getAppContent').length > 0)
		{
			//$('.b-content').height(innerHeight ).width('100%');
            $("#content").css('height',$(window).height()-topheight-$("#colophon").height()).width('100%');
		}
		else
		{
			if ($(window).width() > 540)
			{
				//$('.b-content').height(innerHeight ).width($content.width() - 80);
                $('.b-content').css('height',$(window).height()-topheight-$("#colophon").height()).width($content.width() - 80);

			}
			else
			{
                $('.b-content').css('height',$(window).height()-topheight-$("#colophon").height()).width($content.width() - 58);
				//$('.b-content').height(innerHeight).width($content.width() - 58);

			}
		}



		if ($(window).width() > 540)
		{
			$('.content-top, .content-bottom').width($content.width() - 80);
		}
		else
		{
			$('.content-top, .content-bottom').width($content.width() - 58);
		}

		if ($(window).width() > 540)
		{
			var menuMainBgWidth = $('#menuLeft').offset().left - 36;
			$('.top-menu-main-bg.left, .top-menu-main-bg.right').width(menuMainBgWidth);

			var footerBgWidth = $(window).width() - 72;
			$('.footer-main-bg').width(footerBgWidth);
		}
		else
		{
			var menuMainBgWidth = $('#menuLeft').offset().left - 27;
			$('.top-menu-main-bg.left, .top-menu-main-bg.right').width(menuMainBgWidth);

			var footerBgWidth = $(window).width() - 54;
			$('.footer-main-bg').width(footerBgWidth);
		}

		if ($(window).width() > 640)
		{
			$('.header-image-bottom-gradient .center').width($('.b-content').width() - 46);
		}
		else
		{
			$('.header-image-bottom-gradient .center').width($('.b-content').width() - 28);
		}

		$scroll.animate(
			{
				height: $('.b-content').height() - $('.category-banner-wrapper').outerHeight(true) - 19
			},
			function() {
				if ($(window).width() > 540)
				{
					//$('.category-scroll-inner').height($scroll.outerHeight(true) - 125);
				}
				else
				{
					//$('.category-scroll-inner').height($scroll.outerHeight(true) - 125);
				}

				if ($('#contentSlider').length)
				{
					$('.slider-wrapper').height($('.category-scroll-inner').height())
				}
			}
		);


		if ($(window).width() > 640)
		{
			//var middleLogo = ($('.b-content').height() - $('#logoWords').height()) / 2;
			//$('#logoWords').css('margin-top', middleLogo);
		}
		else
		{
			//console.log($(window).width());
			//$('#logoWords').css('margin-top', 0);
		}

		centeringPhone.call();

        if($(window).height()<550){
            //hide blue line
            $(".front-middle-blue-line").hide();
            $(".social-box").css('margin-top','-0.3em');
        }else{
            $(".front-middle-blue-line").show();
            $(".social-box").css('margin-top','3em');
        }
        if(($(window).height()<500)){
            $("#logoImg").hide();
        }else{
            $("#logoImg").show();
        }

        if($("#phoneapp").css('display')=='none'){
            $("#span-cfc-front").css('margin-left','0px');
            $(".front-middle-blue-line").css('width',$(window).width()+'px');
            $("#logoWords").css('width','100%');


        }else{
            $("#span-cfc-front").css('margin-left','5%');
            $(".front-middle-blue-line").css('width','100%');
            $("#logoWords").css('width','82%');
           // alert(1);
            $(".phoneapp")
                .css('width',$(window).height()*0.60)
                .css('height',$(window).height()*0.66);


            var w = $(window).width()-(parseFloat($("#phoneapp").css('height'))*0.68) + 20;

           // $("#logoWords").css('width',w);
        //    alert(w+","+$(window).width());
        }
        /*var margTopImage = ($("#main").height() - 355)/2;
        if(margTopImage>0){
            $("#logoWords").css('margin-bottom',margTopImage+"px");
        }else{
            $("#logoWords").css('margin-bottom',"0px");
        }*/




		if ($('#logoImg img').length)
		{
            //alert('image');
			if ($(window).width() <= 1190 && $(window).width() > 800)
			{
				//$('#logoWords').width($(window).width() - 350);
			}
			else
			{
				//$('#logoWords').css('width', 'auto');
			}
		}

		$('.staff img.photo').each(function(index, element) {
			$(this).css('margin-left', 0 - $(this).width() / 2);

			$(this).parents('.staff').css('padding-top', $(this).height());
		});

		$('.staff .mailto').css('top', function() {
			return $(this).siblings('.fnBW').height() - 27;
		});

		$('.staff:nth-child(4)').after('<div class="clear" />');

		if ($('.contact-img').length)
		{
			var innerWidth = $('.category-scroll-inner').outerWidth(true),
				innerHeight = $('.category-scroll-inner').height(),
				pageWidth = $('#contactPage').width(),
				socialWidth = pageWidth - innerWidth - 15;

			$('.social-links').width(socialWidth);

			if (socialWidth > 340)
			{
				var marginItem = (socialWidth - 320) / 10;
			}
			else
			{
				var marginItem = 0;
			}

			$('.social-item').css('margin', '0 '+marginItem+'px');

			$('.contact-img').height(innerHeight - $('.social-links .items').height());
		}

		if ($('#homeContent #main').length)
		{
			var timer = setTimeout(updateCable(), 500);
		}

	});

	$("window").add( "body" ).on( "viewport", centeringPhone );

	$(window).trigger('resize');

	var repeater = 0;

	$(window).on('mousemove', function(e) {
		if ($('.category-banner-wrapper').length > 0)
		{
			var moveX,
				moveY,
				x,
				y,
				sign;

			moveX = Math.floor(Math.random() * (10 - 1 + 10)) + 1;
			moveY = Math.floor(Math.random() * (10 - 1 + 10)) + 1;

			sign = Math.floor(Math.random() * (1 - 0 + 1)) + 0;
			if (sign == 0)
			{
				x = $('.category-banner-flare img').offset().left - moveX;
				y = $('.category-banner-flare img').offset().top - moveY;
			}
			else
			{
				x = $('.category-banner-flare img').offset().left + moveX;
				if (x > flareLeft) x = flareLeft;
				y = $('.category-banner-flare img').offset().top + moveY;
				if (y > flareTop) y = flareTop;
			}

        	$('.category-banner-flare img').animate({
				top: x,
				left: y
			}, 'slow');
		}
	});

	$(window).on('mousestop', function() {
		$('.category-banner-flare img').stop(true, false);
	});

	$('#smile_hey_left, #smile_hey_right').on('click', function() {
		console.log(window.location.protocol + "//" + window.location.host + "/");
		window.location.href = window.location.protocol + "//" + window.location.host + "/";
	});

	/* LIVE DEMO */
	$('#begin_div').click(function() {
		var rememberMeCookie = $.cookie('remember_me');

		$(this).hide();

		if(rememberMeCookie === undefined) {
			$('#phoneslider').fadeOut();
			$('#glare').hide();
			$('#login_div').fadeIn();
		} else {
			var userEmail = $.cookie('userEmail');
			var userPassword = $.cookie('userPassword');
			showIframe(userEmail, userPassword);
		}

	});

	$('#login_div').submit(function() {
		var email = $('#userEmail').val();
		var pass = $('#userPassword').val();
		var valid = true;
		if(email.length < 4) {
			valid = false;
		}
		if(pass.length < 2) {
			valid = false;
		}
		if(valid == true) {
			var remember_me = $('#remember_me').prop('checked');
			if(remember_me) {
				rememberMe(email, pass);
			}
		}
		showIframe(email, pass);
		return false;
	});

	var maskList = $.masksSort($.masksLoad("/phone-codes.json"), ['#'], /[0-9]|#/, "mask");

	var maskOpts = {
        inputmask: {
            definitions: {
                '#': {
                    validator: "[0-9]",
                    cardinality: 1
                }
            },
            //clearIncomplete: true,
            showMaskOnHover: false,
            autoUnmask: true
        },
        match: /[0-9]/,
        replace: '#',
        list: maskList,
        listKey: "mask",
		onMaskChange: function(maskObj, completed) {
            $(this).attr("placeholder", $(this).inputmask("getemptymask"));
        }
    };

	$('#sms, #phone_code').inputmasks(maskOpts);

	$('#emailSend').on('click', function() {
		var email = $('#email').val();

		if (validateValueByPattern(email, emailPattern))
		{
			$.ajax({
				type: 'POST',
				async: true,
				url: '/wp-admin/admin-ajax.php',
				dataType: 'html',
				data: {
					action: 'get_app_email',
					email: email
				},
				success: function(html){
					swal(successEmail,"","success");
				}
			});
		}
		else
		{
			swal(badEmail,"","error");
		}
	});

	$('#smsSend').on('click', function() {
		var phone = $('#sms').val();

		if (phone.length)
		{
			$.ajax({
				type: 'POST',
				async: true,
				url: '/wp-admin/admin-ajax.php',
				dataType: 'html',
				data: {
					action: 'get_app_sms',
					number: phone
				},
				success: function(response){
					if (response == 1)
					{
						swal(successMessage,"","success");
					}
					esle
					{
						swal('Error occured.',"","error");
					}
				},
				error: function() {
					alert('Error.');
				}
			});
		}
		else
		{
			swal(badMessage,"","error");
		}
	});

	var opts = {
		lines: 7, // The number of lines to draw
		length: 0, // The length of each line
		width: 8, // The line thickness
		radius: 8, // The radius of the inner circle
		corners: 1, // Corner roundness (0..1)
		rotate: 0, // The rotation offset
		direction: 1, // 1: clockwise, -1: counterclockwise
		color: '#fff', // #rgb or #rrggbb or array of colors
		speed: 1, // Rounds per second
		trail: 48, // Afterglow percentage
		shadow: true, // Whether to render a shadow
		hwaccel: false, // Whether to use hardware acceleration
		className: 'spinner', // The CSS class to assign to the spinner
		zIndex: 2e9, // The z-index (defaults to 2000000000)
		top: '50%', // Top position relative to parent
		left: '50%' // Left position relative to parent
	};

	$('#phone_code').keypress(function(e) {
		if(e.which == 13) {
			$('#getTarrifs').trigger('click');
		}
	});

	$('#getTarrifs').on('click', function() {
		var phone_code = $('#phone_code').val();

		if (phone_code.length > 6)
		{
			$('.tarrifs-result-wrapper').fadeOut();
			var target = document.getElementById('ajaxLoader');
			var spinner = new Spinner(opts).spin(target);
			$.ajax({
				type: 'POST',
				async: true,
				url: '/wp-admin/admin-ajax.php',
				dataType: 'html',
				data: {
					action: 'get_tarrifs_by_phone_code',
					phone_code: phone_code
				},
				success: function(response){
					if (isJSON(response))
					{
						var resp = $.parseJSON(response);
						if (isEmptyObject(resp.tarrifs) != true)
						{
							$('.tarrifs-result-wrapper table tbody').remove();
							$('.tarrifs-result-wrapper table').append('<tbody><tr><td>'+
								resp.country+'</td><td>'+
								resp.tarrifs.usdPerMinute.toFixed(2)+'</td><td>'+
								resp.tarrifs.bonusesPerMinute.toFixed(2)+'</td></tr></tbody>');
							$('.tarrifs-result-wrapper').fadeIn();
						}
						else
						{
							alert('Sorry. Nothing was found.');
						}
						console.log(resp);
					}
				},
				complete: function() {
					spinner.stop();
				}
			});
		}
		else
		{
			//alert('Enter at least seven digits of phone.');
		}
	});

	$('.fnBW').on('mouseenter', function() {
		$('.fnColor').hide();
		$(this).hide();
		$(this).siblings('.fnColor').show();
	});

	$('.fnColor').on('mouseleave', function() {
		$('.fnColor').hide();
		$('.fnBW').show();
	});

	$('.staff .mailto a').on('click', function() {
		$(window).off('beforeunload');
	});

	$('.social-links a').on('click', function() {
		$.ajax({
			type: 'POST',
			async: true,
			url: '/wp-admin/admin-ajax.php',
			dataType: 'html',
			data: {
				action: 'social_links_redirect',
				provider: $(this).attr('data-provider')
			}
		});
	});

	$('.contact-img').on('click', function() {
		$(this).toggleClass('on');
	});

})//d-r

$(window).load(function() {

	$("[data-animate]").animate( { height: "show", opacity: "1" } , "500" );

	$('#content').css({ top: $(window).height() }).show().animate({ top: ($("#main-menu").offset().top+$("#main-menu").height()+$("#submenu-about-us").height()) }, 500);

	if ($('.category-banner-wrapper').length > 0)
	{
		flareTop = -($('.category-banner-flare img').height() - 132) / 2;
		flareLeft = ($('.category-banner-flare').width() - $(this).width()) / 2;
		$('.category-banner-flare img').css({
			top: flareTop,
			left: flareLeft
		});
	}

	$('.entry-summary-splitter:last').hide();

	if ($(window).width() > 640)
	{
		//var middleLogo = ($('.b-content').height() - $('#logoWords').height()) / 2;
		//$('#logoWords').css('margin-top', middleLogo);
	}
	else
	{
		//console.log($(window).width());
		//$('#logoWords').css('margin-top', 0);
	}

	$('#homeContent #main').animate( { "opacity":1 } , "slow" , function() {
		if ($(window).width() <= 1190 && $(window).width() > 800)
		{
			//$('#logoWords').width($(window).width() - 350);
		}
		else
		{
			//$('#logoWords').css('width', 'auto');
		}
	});

	$('.staff img.photo').each(function(index, element) {
		$(this).css('margin-left', 0 - $(this).width() / 2);

		$(this).parents('.staff').css('padding-top', $(this).height());
	});

	$('.staff .mailto').css('top', function() {
		return $(this).siblings('.fnBW').height() - 27;
	});

	$('#getAppContent #main').animate( { "opacity":1 } , "slow");

	if ($('.contact-img').length)
	{
		var innerWidth = $('.category-scroll-inner').outerWidth(true),
			innerHeight = $('.category-scroll-inner').height(),
			pageWidth = $('#contactPage').width(),
			socialWidth = pageWidth - innerWidth - 15;

		$('.social-links').width(socialWidth);

		if (socialWidth > 320)
		{
			var marginItem = (socialWidth - 320) / 10;
		}
		else
		{
			var marginItem = 0;
		}

		$('.social-item').css('margin', '0 '+marginItem+'px');

		$('.contact-img').height(innerHeight - $('.social-links .items').height());
	}

	if ($('#contentSlider').length)
	{
		//$('.slider-wrapper').height($('.category-scroll-inner').height());

		$("#contentSlider").bxSlider({
			auto: true,
			pause: 5000,
			controls: false
		});
	}

	if ($('#homeContent #main').length)
	{
		var timer = setTimeout(updateCable(), 500);
	}
    $('.news-divs').each(function(i, obj) {
        var header = $(this).find('.entry-header');
        var marg = ($(this).height()-header.height())/2;
        header.css('margin-top',marg);
        $(this).find('.entry-summary').css('margin-top',marg);



    });
});

$(window).on('beforeunload', function () {
	$('#content').animate({ top: $(window).height() }, 500);
});

function updateCable()
{
	/*var cableTop =  ($('#logoImg img').offset().top + $('#logoImg img').height());
	$('#cableMain, #cableLeft').css('top', cableTop - 140);

	var cableWidth =  $('#phoneapp').offset().left - ($('#logoImg img').offset().left + $('#logoImg img').outerWidth()) + 30;
	var cableWidth2 =  $('#cableMain').offset().left - $('#logoImg img').offset().left - 50;
	if (cableWidth > 295)
	{
		$('#cableLeft').width(cableWidth2);
	}
	else
	{
		$('#cableLeft').width(0);
	}
	console.log('dfsdf');*/
}

function showSmileys() {
	$('#smile_hey_left').animate(
		{
			left: -50,
			borderSpacing: 55,
		},
		{
		step: function(now,fx) {
		  $(this).css('-webkit-transform','rotate('+now+'deg)');
		  $(this).css('-moz-transform','rotate('+now+'deg)');
		  $(this).css('transform','rotate('+now+'deg)');
		},
		duration:'fast'
	},'linear');
	$('#smile_hey_right').animate({
		right: -30
	}, 'fast');
}

function hideSmileys() {
	$('#smile_hey_left').animate(
		{
			left: -200,
			borderSpacing: 0,
		},
		{
		step: function(now,fx) {
		  $(this).css('-webkit-transform','rotate('+now+'deg)');
		  $(this).css('-moz-transform','rotate('+now+'deg)');
		  $(this).css('transform','rotate('+now+'deg)');
		},
		duration:'fast'
	},'linear');
	$('#smile_hey_right').animate({
		right: -300
	}, 'fast');
}

function showIframe(userEmail, userPassword) {

	var login_obj = {
		userEmail: userEmail,
		userPassword: userPassword
	};
	var encoded = $.toJSON( login_obj );
	$('#app_iframe').attr('src', 'https://app.io/cCYBQm?autoplay=true&amp;chrome=true&amp;device=iphone5s&amp;orientation=portrait&amp;params=' + encoded);

	$('#app_iframe').bind('load', function() {
		$('#login_div').fadeOut(700);
		$('#phoneapp').fadeOut(1000);
		$('#iframe_div').css( "top" , ($('#viewport').innerHeight()/2|0)-($('#iframe_div').outerHeight()/2|0)+ "px" );
		$('#iframe_div').slideDown(1000);
	});

}

function rememberMe(userEmail, userPassword) {
	$.cookie('remember_me', '1', { expires: 7, path: '/' });
	$.cookie('userEmail', userEmail, { expires: 7, path: '/' });
	$.cookie('userPassword', userPassword, { expires: 7, path: '/' });
	return true;
}

function validateValueByPattern(value, needPattern) {
	if (value) {
		var pattern = new RegExp(needPattern);
		if (pattern.test(value)) {
			return true;
		}
	}
	return false;
}

function isJSON(str) {
    try {
        JSON.parse(str);
    } catch (e) {
        return false;
    }
    return true;
}

function isEmptyObject(obj) {
    for(var prop in obj) {
        if(obj.hasOwnProperty(prop))
            return false;
    }
    return true;
}