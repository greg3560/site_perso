/*********************JAVASCRIPT*****************************/


/*************************************************************/
/*******************ANIMATION DES TITRES DANS PORTFOLIO*******/
/*************************************************************/


jQuery.noConflict();
function openUl(pId)
{
	if(pId != "divAdd")
	{
		jQuery(".galerieAcceuil").each(function(index, element)
		{
			if(jQuery(this).attr("id") != pId && jQuery(this).height() > 0)
			{
				jQuery(this).animate({height:0}, 800);
			}
		});

		
	}
	if(jQuery("#"+pId).height() == 0)
	{
		/*$("#"+pId).css("height", $("#"+pId).attr("data-height"))*/;
		jQuery("#"+pId).animate({height:jQuery("#"+pId).attr("data-height")},800);
	}
	else
	{
		jQuery("#"+pId).animate({height:0},800);
	}
}
	jQuery(document).ready(function(e)
	{
		function createOptions(pSelectId, pDebutBoucle, pFinBoucle)
		{
			var s="";
			for(var i=pDebutBoucle;i<=pFinBoucle;i++)
			{
				s+="<option value=\""+i+"\">"+i+"</option>";
			}
			jQuery("#"+pSelectId).html(s);
		}
		createOptions("jour", 1, 31);
		createOptions("mois", 1, 12);
		createOptions("annee", 1900, 2015);
		/*memorisation dans des attributs data-height de la hauteur des 
		divs contenant les tableaux de formulaire*/
		jQuery("#divAdd").attr("data-height", jQuery("#divAdd").height());
		jQuery("#divAdd").css("height", 0);
		jQuery("#divAdd").css("overflow", "hidden");
		for(var i=0; i<jQuery(".galerieAcceuil").length; i++)
		{
			jQuery("#galerieAcceuil"+i).attr("data-height", jQuery("#galerieAcceuil"+i).height());
			jQuery("#galerieAcceuil"+i).css("height", 0);
			jQuery("#galerieAcceuil"+i).css("overflow", "hidden");
		}
	});


/****************************************************************************/
/*******************ANIMATION DES PHOTOS ET PARAGRAPHES DANS PORTFOLIO*******/
/****************************************************************************/


jQuery(document).ready(function($){
		var doc = $(this)
	
	// debut galerie dans la page accueil
		// recuperation des objets sur lesquels on va travailler
	var galerieAcc = $("#galerieAcceuil0");
	var itemGalAcc = galerieAcc.find("a");
	var tabInfo = new Array();
	var nbItem = galerieAcc.children().length
	
	if (window.matchMedia("(min-width: 480px)").matches)
	{
	function zoomIn(pThis){
		pThis.children("img").stop().animate({
			"width":300,
			"margin-left":-20,
			"margin-top":-14,
			"opacity":1
		},500);
		pThis.children("p").stop().animate({
			"top":-130,
			"opacity":1
		},500)
	}
	function zoomOut(pThis){
		pThis.children("img").stop().animate({
			"width":280,
			"margin-left":0,
			"margin-top":0,
			"opacity":0.7
		},500)
		pThis.children("p").stop().animate({
			"top":0,
			"opacity":0
		},500)
	}
	
		// --> ecouteurs d'evenements
	itemGalAcc.hover(
		function(event){
			event.preventDefault();
			zoomIn($(this));
			
			//console.log($(this).children().get(0).nodeName)
		},
		function(event){
			event.preventDefault();
			zoomOut($(this));
			//console.log($(this).children().last().get(0).nodeName)
		}
			
	)
	}
	})

jQuery(document).ready(function($){
		var doc = $(this)
	
	// debut galerie dans la page accueil
		// recuperation des objets sur lesquels on va travailler
	var galerieAcc = $("#galerieAcceuil1");
	var itemGalAcc = galerieAcc.find("a");
	var tabInfo = new Array();
	var nbItem = galerieAcc.children().length
	
	if (window.matchMedia("(min-width: 480px)").matches)
	{
	function zoomIn(pThis){
		pThis.children("img").stop().animate({
			"width":300,
			"margin-left":-20,
			"margin-top":-14,
			"opacity":1
		},500);
		pThis.children("p").stop().animate({
			"top":-130,
			"opacity":1
		},500)
	}
	function zoomOut(pThis){
		pThis.children("img").stop().animate({
			"width":280,
			"margin-left":0,
			"margin-top":0,
			"opacity":0.7
		},500)
		pThis.children("p").stop().animate({
			"top":0,
			"opacity":0
		},500)
	}
	
		// --> ecouteurs d'evenements
	itemGalAcc.hover(
		function(event){
			event.preventDefault();
			zoomIn($(this));
			
			//console.log($(this).children().get(0).nodeName)
		},
		function(event){
			event.preventDefault();
			zoomOut($(this));
			//console.log($(this).children().last().get(0).nodeName)
		}
			
	)
	}
	})


jQuery(document).ready(function($){
		var doc = $(this)
	
	// debut galerie dans la page accueil
		// recuperation des objets sur lesquels on va travailler
	var galerieAcc = $("#galerieAcceuil2");
	var itemGalAcc = galerieAcc.find("a");
	var tabInfo = new Array();
	var nbItem = galerieAcc.children().length
	
	if (window.matchMedia("(min-width: 480px)").matches)
	{
	function zoomIn(pThis){
		pThis.children("img").stop().animate({
			"width":300,
			"margin-left":-20,
			"margin-top":-14,
			"opacity":1
		},500);
		pThis.children("p").stop().animate({
			"top":-130,
			"opacity":1
		},500)
	}
	function zoomOut(pThis){
		pThis.children("img").stop().animate({
			"width":280,
			"margin-left":0,
			"margin-top":0,
			"opacity":0.7
		},500)
		pThis.children("p").stop().animate({
			"top":0,
			"opacity":0
		},500)
	}
	
		// --> ecouteurs d'evenements
	itemGalAcc.hover(
		function(event){
			event.preventDefault();
			zoomIn($(this));
			
			//console.log($(this).children().get(0).nodeName)
		},
		function(event){
			event.preventDefault();
			zoomOut($(this));
			//console.log($(this).children().last().get(0).nodeName)
		}
			
	)
	}
	})


jQuery(document).ready(function($){
		var doc = $(this)
	
	// debut galerie dans la page accueil
		// recuperation des objets sur lesquels on va travailler
	var galerieAcc = $("#cv_ul1");
	var itemGalAcc = galerieAcc.find("a");
	var tabInfo = new Array();
	var nbItem = galerieAcc.children().length
	
	if (window.matchMedia("(min-width: 480px)").matches)
	{
	function zoomIn(pThis){
		pThis.children("img").stop().animate({
			"width":300,
			"margin-left":-20,
			"margin-top":-14,
			"opacity":1
		},500);
		pThis.children("p").stop().animate({
			"top":-130,
			"opacity":1
		},500)
	}
	function zoomOut(pThis){
		pThis.children("img").stop().animate({
			"width":280,
			"margin-left":0,
			"margin-top":0,
			"opacity":0.7
		},500)
		pThis.children("p").stop().animate({
			"top":0,
			"opacity":0
		},500)
	}
	
		// --> ecouteurs d'evenements
	
		itemGalAcc.hover(
			function(event){
				event.preventDefault();
				zoomIn($(this));
			
				//console.log($(this).children().get(0).nodeName)
			},
			function(event){
				event.preventDefault();
				zoomOut($(this));
				//console.log($(this).children().last().get(0).nodeName)
			}
			
	)
	}
	})


/****************************************************************************/
/*******************ANIMATION DES TITRES DANS CV*****************************/
/****************************************************************************/



function openCvUl(pId)
{
	if(pId != "divAdd")
	{
		jQuery(".cv_ul").each(function(index, element)
		{
			if(jQuery(this).attr("id") != pId && jQuery(this).height() > 0)
			{
				jQuery(this).animate({height:0}, 800);
			}
		});

		
	}
	if(jQuery("#"+pId).height() == 0)
	{
		/*$("#"+pId).css("height", $("#"+pId).attr("data-height"))*/;
		jQuery("#"+pId).animate({height:jQuery("#"+pId).attr("data-height")},800);
	}
	else
	{
		jQuery("#"+pId).animate({height:0},800);
	}
}
	jQuery(document).ready(function(e)
	{
		function createOptions(pSelectId, pDebutBoucle, pFinBoucle)
		{
			var s="";
			for(var i=pDebutBoucle;i<=pFinBoucle;i++)
			{
				s+="<option value=\""+i+"\">"+i+"</option>";
			}
			jQuery("#"+pSelectId).html(s);
		}
		createOptions("jour", 1, 31);
		createOptions("mois", 1, 12);
		createOptions("annee", 1900, 2015);
		/*memorisation dans des attributs data-height de la hauteur des 
		divs contenant les tableaux de formulaire*/
		jQuery("#divAdd").attr("data-height", jQuery("#divAdd").height());
		jQuery("#divAdd").css("height", 0);
		jQuery("#divAdd").css("overflow", "hidden");
		for(var i=0; i<jQuery(".cv_ul").length; i++)
		{
			jQuery("#cv_ul"+i).attr("data-height", jQuery("#cv_ul"+i).height());
			jQuery("#cv_ul"+i).css("height", 0);
			jQuery("#cv_ul"+i).css("overflow", "hidden");
		}
	});


/****************************************************************************/
/*******************ANIMATION DE LA SIDEBAR DANS MAIRIE NAUJAC***************/
/****************************************************************************/

jQuery(function() {

	var offset = jQuery("#naujac_sidebar").offset();
	var topPadding = 1540;
	var aze = 900;

if (window.matchMedia("(min-width: 800px)").matches)
	{
    jQuery(window).scroll(function() {
    
        if (jQuery(window).scrollTop() > offset.top && jQuery(window).scrollTop() + aze < jQuery('#naujac_footer').offset().top) {
        
            jQuery("#naujac_sidebar").stop().animate({
            
                marginTop: jQuery(window).scrollTop() - offset.top
            
            });
        
        } 
	else if(jQuery(window).scrollTop() + aze > jQuery('#naujac_footer').offset().top)
	{
		jQuery("#naujac_sidebar").stop().animate({
            
                marginTop: 1200
            
            });
	}	
	else {
        
            jQuery("#naujac_sidebar").stop().animate({
            
                marginTop: 0
            
            });
        
        }
        
            
    });
}
});



/****************************************************************************/
/*******************SLIDER DANS MAIRIE NAUJAC********************************/
/****************************************************************************/


jQuery(function() {
				jQuery(".rslides").responsiveSlides({
  auto: true,             // Boolean: Animate automatically, true or false
  speed: 900,            // Integer: Speed of the transition, in milliseconds
  timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
  pager: false,           // Boolean: Show pager, true or false
  nav: false,             // Boolean: Show navigation, true or false
  random: false,          // Boolean: Randomize the order of the slides, true or false
  pause: false,           // Boolean: Pause on hover, true or false
  pauseControls: true,    // Boolean: Pause when hovering controls, true or false
  prevText: "Previous",   // String: Text for the "previous" button
  nextText: "Next",       // String: Text for the "next" button
  maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
  navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
  manualControls: "",     // Selector: Declare custom pager navigation
  namespace: "rslides",   // String: Change the default namespace used
  before: function(){},   // Function: Before callback
  after: function(){}     // Function: After callback
});
			});



(function ($, window, i) {
  $.fn.responsiveSlides = function (options) {

  

    return this.each(function () {

      // Index for namespacing
      i++;

      var $this = $(this),

        // Local variables
        vendor,
        selectTab,
        startCycle,
        restartCycle,
        rotate,
        $tabs,

        // Helpers
        index = 0,
        $slide = $this.children(),
        length = $slide.size(),
        fadeTime = parseFloat(settings.speed),
        waitTime = parseFloat(settings.timeout),
        maxw = parseFloat(settings.maxwidth),

        // Namespacing
        namespace = settings.namespace,
        namespaceIdx = namespace + i,

        // Classes
        navClass = namespace + "_nav " + namespaceIdx + "_nav",
        activeClass = namespace + "_here",
        visibleClass = namespaceIdx + "_on",
        slideClassPrefix = namespaceIdx + "_s",

        // Pager
        $pager = $("<ul class='" + namespace + "_tabs " + namespaceIdx + "_tabs' />"),

        // Styles for visible and hidden slides
        visible = {"float": "left", "position": "relative", "opacity": 1, "zIndex": 2},
        hidden = {"float": "none", "position": "absolute", "opacity": 0, "zIndex": 1},

        // Detect transition support
        supportsTransitions = (function () {
          var docBody = document.body || document.documentElement;
          var styles = docBody.style;
          var prop = "transition";
          if (typeof styles[prop] === "string") {
            return true;
          }
          // Tests for vendor specific prop
          vendor = ["Moz", "Webkit", "Khtml", "O", "ms"];
          prop = prop.charAt(0).toUpperCase() + prop.substr(1);
          var i;
          for (i = 0; i < vendor.length; i++) {
            if (typeof styles[vendor[i] + prop] === "string") {
              return true;
            }
          }
          return false;
        })(),

        // Fading animation
        slideTo = function (idx) {
          settings.before(idx);
          // If CSS3 transitions are supported
          if (supportsTransitions) {
            $slide
              .removeClass(visibleClass)
              .css(hidden)
              .eq(idx)
              .addClass(visibleClass)
              .css(visible);
            index = idx;
            setTimeout(function () {
              settings.after(idx);
            }, fadeTime);
          // If not, use jQuery fallback
          } else {
            $slide
              .stop()
              .fadeOut(fadeTime, function () {
                $(this)
                  .removeClass(visibleClass)
                  .css(hidden)
                  .css("opacity", 1);
              })
              .eq(idx)
              .fadeIn(fadeTime, function () {
                $(this)
                  .addClass(visibleClass)
                  .css(visible);
                settings.after(idx);
                index = idx;
              });
          }
        };

      // Random order
      if (settings.random) {
        $slide.sort(function () {
          return (Math.round(Math.random()) - 0.5);
        });
        $this
          .empty()
          .append($slide);
      }

      // Add ID's to each slide
      $slide.each(function (i) {
        this.id = slideClassPrefix + i;
      });

      // Add max-width and classes
      $this.addClass(namespace + " " + namespaceIdx);
      if (options && options.maxwidth) {
        $this.css("max-width", maxw);
      }

      // Hide all slides, then show first one
      $slide
        .hide()
        .css(hidden)
        .eq(0)
        .addClass(visibleClass)
        .css(visible)
        .show();

      // CSS transitions
      if (supportsTransitions) {
        $slide
          .show()
          .css({
            // -ms prefix isn't needed as IE10 uses prefix free version
            "-webkit-transition": "opacity " + fadeTime + "ms ease-in-out",
            "-moz-transition": "opacity " + fadeTime + "ms ease-in-out",
            "-o-transition": "opacity " + fadeTime + "ms ease-in-out",
            "transition": "opacity " + fadeTime + "ms ease-in-out"
          });
      }

      // Only run if there's more than one slide
      if ($slide.size() > 1) {

        // Make sure the timeout is at least 100ms longer than the fade
        if (waitTime < fadeTime + 100) {
          return;
        }

        // Pager
        if (settings.pager && !settings.manualControls) {
          var tabMarkup = [];
          $slide.each(function (i) {
            var n = i + 1;
            tabMarkup +=
              "<li>" +
              "<a href='#' class='" + slideClassPrefix + n + "'>" + n + "</a>" +
              "</li>";
          });
          $pager.append(tabMarkup);

          // Inject pager
          if (options.navContainer) {
            $(settings.navContainer).append($pager);
          } else {
            $this.after($pager);
          }
        }

        // Manual pager controls
        if (settings.manualControls) {
          $pager = $(settings.manualControls);
          $pager.addClass(namespace + "_tabs " + namespaceIdx + "_tabs");
        }

        // Add pager slide class prefixes
        if (settings.pager || settings.manualControls) {
          $pager.find('li').each(function (i) {
            $(this).addClass(slideClassPrefix + (i + 1));
          });
        }

        // If we have a pager, we need to set up the selectTab function
        if (settings.pager || settings.manualControls) {
          $tabs = $pager.find('a');

          // Select pager item
          selectTab = function (idx) {
            $tabs
              .closest("li")
              .removeClass(activeClass)
              .eq(idx)
              .addClass(activeClass);
          };
        }

        // Auto cycle
        if (settings.auto) {

          startCycle = function () {
            rotate = setInterval(function () {

              // Clear the event queue
              $slide.stop(true, true);

              var idx = index + 1 < length ? index + 1 : 0;

              // Remove active state and set new if pager is set
              if (settings.pager || settings.manualControls) {
                selectTab(idx);
              }

              slideTo(idx);
            }, waitTime);
          };

          // Init cycle
          startCycle();
        }

        // Restarting cycle
        restartCycle = function () {
          if (settings.auto) {
            // Stop
            clearInterval(rotate);
            // Restart
            startCycle();
          }
        };

        // Pause on hover
        if (settings.pause) {
          $this.hover(function () {
            clearInterval(rotate);
          }, function () {
            restartCycle();
          });
        }

        // Pager click event handler
        if (settings.pager || settings.manualControls) {
          $tabs.bind("click", function (e) {
            e.preventDefault();

            if (!settings.pauseControls) {
              restartCycle();
            }

            // Get index of clicked tab
            var idx = $tabs.index(this);

            // Break if element is already active or currently animated
            if (index === idx || $("." + visibleClass).queue('fx').length) {
              return;
            }

            // Remove active state from old tab and set new one
            selectTab(idx);

            // Do the animation
            slideTo(idx);
          })
            .eq(0)
            .closest("li")
            .addClass(activeClass);

          // Pause when hovering pager
          if (settings.pauseControls) {
            $tabs.hover(function () {
              clearInterval(rotate);
            }, function () {
              restartCycle();
            });
          }
        }

        // Navigation
        if (settings.nav) {
          var navMarkup =
            "<a href='#' class='" + navClass + " prev'>" + settings.prevText + "</a>" +
            "<a href='#' class='" + navClass + " next'>" + settings.nextText + "</a>";

          // Inject navigation
          if (options.navContainer) {
            $(settings.navContainer).append(navMarkup);
          } else {
            $this.after(navMarkup);
          }

          var $trigger = $("." + namespaceIdx + "_nav"),
            $prev = $trigger.filter(".prev");

          // Click event handler
          $trigger.bind("click", function (e) {
            e.preventDefault();

            var $visibleClass = $("." + visibleClass);

            // Prevent clicking if currently animated
            if ($visibleClass.queue('fx').length) {
              return;
            }

            //  Adds active class during slide animation
            //  $(this)
            //    .addClass(namespace + "_active")
            //    .delay(fadeTime)
            //    .queue(function (next) {
            //      $(this).removeClass(namespace + "_active");
            //      next();
            //  });

            // Determine where to slide
            var idx = $slide.index($visibleClass),
              prevIdx = idx - 1,
              nextIdx = idx + 1 < length ? index + 1 : 0;

            // Go to slide
            slideTo($(this)[0] === $prev[0] ? prevIdx : nextIdx);
            if (settings.pager || settings.manualControls) {
              selectTab($(this)[0] === $prev[0] ? prevIdx : nextIdx);
            }

            if (!settings.pauseControls) {
              restartCycle();
            }
          });

          // Pause when hovering navigation
          if (settings.pauseControls) {
            $trigger.hover(function () {
              clearInterval(rotate);
            }, function () {
              restartCycle();
            });
          }
        }

      }

      // Max-width fallback
      if (typeof document.body.style.maxWidth === "undefined" && options.maxwidth) {
        var widthSupport = function () {
          $this.css("width", "100%");
          if ($this.width() > maxw) {
            $this.css("width", maxw);
          }
        };

        // Init fallback
        widthSupport();
        $(window).bind("resize", function () {
          widthSupport();
        });
      }

    });

  };
})(jQuery, this, 0);


(function(c,I,B){c.fn.responsiveSlides=function(l){var a=c.extend({auto:!0,speed:500,timeout:4E3,pager:!1,nav:!1,random:!1,pause:!1,pauseControls:!0,prevText:"Previous",nextText:"Next",maxwidth:"",navContainer:"",manualControls:"",namespace:"rslides",before:c.noop,after:c.noop},l);return this.each(function(){B++;var f=c(this),s,r,t,m,p,q,n=0,e=f.children(),C=e.size(),h=parseFloat(a.speed),D=parseFloat(a.timeout),u=parseFloat(a.maxwidth),g=a.namespace,d=g+B,E=g+"_nav "+d+"_nav",v=g+"_here",j=d+"_on",
w=d+"_s",k=c("<ul class='"+g+"_tabs "+d+"_tabs' />"),x={"float":"left",position:"relative",opacity:1,zIndex:2},y={"float":"none",position:"absolute",opacity:0,zIndex:1},F=function(){var b=(document.body||document.documentElement).style,a="transition";if("string"===typeof b[a])return!0;s=["Moz","Webkit","Khtml","O","ms"];var a=a.charAt(0).toUpperCase()+a.substr(1),c;for(c=0;c<s.length;c++)if("string"===typeof b[s[c]+a])return!0;return!1}(),z=function(b){a.before(b);F?(e.removeClass(j).css(y).eq(b).addClass(j).css(x),
n=b,setTimeout(function(){a.after(b)},h)):e.stop().fadeOut(h,function(){c(this).removeClass(j).css(y).css("opacity",1)}).eq(b).fadeIn(h,function(){c(this).addClass(j).css(x);a.after(b);n=b})};a.random&&(e.sort(function(){return Math.round(Math.random())-0.5}),f.empty().append(e));e.each(function(a){this.id=w+a});f.addClass(g+" "+d);l&&l.maxwidth&&f.css("max-width",u);e.hide().css(y).eq(0).addClass(j).css(x).show();F&&e.show().css({"-webkit-transition":"opacity "+h+"ms ease-in-out","-moz-transition":"opacity "+
h+"ms ease-in-out","-o-transition":"opacity "+h+"ms ease-in-out",transition:"opacity "+h+"ms ease-in-out"});if(1<e.size()){if(D<h+100)return;if(a.pager&&!a.manualControls){var A=[];e.each(function(a){a+=1;A+="<li><a href='#' class='"+w+a+"'>"+a+"</a></li>"});k.append(A);l.navContainer?c(a.navContainer).append(k):f.after(k)}a.manualControls&&(k=c(a.manualControls),k.addClass(g+"_tabs "+d+"_tabs"));(a.pager||a.manualControls)&&k.find("li").each(function(a){c(this).addClass(w+(a+1))});if(a.pager||a.manualControls)q=
k.find("a"),r=function(a){q.closest("li").removeClass(v).eq(a).addClass(v)};a.auto&&(t=function(){p=setInterval(function(){e.stop(!0,!0);var b=n+1<C?n+1:0;(a.pager||a.manualControls)&&r(b);z(b)},D)},t());m=function(){a.auto&&(clearInterval(p),t())};a.pause&&f.hover(function(){clearInterval(p)},function(){m()});if(a.pager||a.manualControls)q.bind("click",function(b){b.preventDefault();a.pauseControls||m();b=q.index(this);n===b||c("."+j).queue("fx").length||(r(b),z(b))}).eq(0).closest("li").addClass(v),
a.pauseControls&&q.hover(function(){clearInterval(p)},function(){m()});if(a.nav){g="<a href='#' class='"+E+" prev'>"+a.prevText+"</a><a href='#' class='"+E+" next'>"+a.nextText+"</a>";l.navContainer?c(a.navContainer).append(g):f.after(g);var d=c("."+d+"_nav"),G=d.filter(".prev");d.bind("click",function(b){b.preventDefault();b=c("."+j);if(!b.queue("fx").length){var d=e.index(b);b=d-1;d=d+1<C?n+1:0;z(c(this)[0]===G[0]?b:d);if(a.pager||a.manualControls)r(c(this)[0]===G[0]?b:d);a.pauseControls||m()}});
a.pauseControls&&d.hover(function(){clearInterval(p)},function(){m()})}}if("undefined"===typeof document.body.style.maxWidth&&l.maxwidth){var H=function(){f.css("width","100%");f.width()>u&&f.css("width",u)};H();c(I).bind("resize",function(){H()})}})}})(jQuery,this,0);


/****************************************************************************/
/*******************ANIMATION DES TITRES DE L AGENDA DANS MAIRIE NAUJAC******/
/****************************************************************************/

function openDiv(pId)
{
	if(pId != "divAdd")
	{
		jQuery(".modif").each(function(index, element)
		{
			if(jQuery(this).attr("id") != pId && jQuery(this).height() > 0)
			{
				jQuery(this).animate({height:0}, 800);
			}
		});

		jQuery(".az").each(function(index, element)
		{
			if(jQuery(this).attr("id") != pId && jQuery(this).height() > 0)
			{
				jQuery(this).animate({height:0}, 800);
			}
		});
	}
	if(jQuery("#"+pId).height() == 0)
	{
		/*$("#"+pId).css("height", $("#"+pId).attr("data-height"))*/;
		jQuery("#"+pId).animate({height:jQuery("#"+pId).attr("data-height")},800);
	}
	else
	{
		jQuery("#"+pId).animate({height:0},800);
	}
}
	jQuery(document).ready(function(e)
	{
		function createOptions(pSelectId, pDebutBoucle, pFinBoucle)
		{
			var s="";
			for(var i=pDebutBoucle;i<=pFinBoucle;i++)
			{
				s+="<option value=\""+i+"\">"+i+"</option>";
			}
			jQuery("#"+pSelectId).html(s);
		}
		createOptions("jour", 1, 31);
		createOptions("mois", 1, 12);
		createOptions("annee", 1900, 2015);
		/*memorisation dans des attributs data-height de la hauteur des 
		divs contenant les tableaux de formulaire*/
		jQuery("#divAdd").attr("data-height", jQuery("#divAdd").height());
		jQuery("#divAdd").css("height", 0);
		jQuery("#divAdd").css("overflow", "hidden");
		for(var i=0; i<jQuery(".modif").length; i++)
		{
			jQuery("#modif"+i).attr("data-height", jQuery("#modif"+i).height());
			jQuery("#modif"+i).css("height", 0);
			jQuery("#modif"+i).css("overflow", "hidden");
		}
	});



/****************************************************************************/
/********************************CALCULATRICE********************************/
/****************************************************************************/



jQuery(document).ready(function(e)
		{
			var t=[0,7,8,9,"","CE",4,5,6,"+","-",1,2,3,"*","/","",".","%",""];
			for(var i=0;i<20;i++)
			{
				jQuery("#c"+i).html(t[i]);
				t.splice(i,0);
				jQuery("#c"+i).bind("click", function(event)
				{
					jQuery("#number").val(jQuery("#number").val()+jQuery(this).html());
				});
				
			}
			jQuery("#egal").bind("click", function(event)
				{
					jQuery(this).attr("href", "../../wp-content/themes/dataG_portfolio/sites_web/calculatrice/engine/services.php?operation="+jQuery("#number").val());
				});
		});


