function init(){
	new SmoothScroll(document,120,12)
}

function SmoothScroll(target, speed, smooth) {
	if (target === document)
		target = (document.scrollingElement 
              || document.documentElement 
              || document.body.parentNode 
              || document.body) // cross browser support for document scrolling
      
	var moving = false
	var pos = target.scrollTop
  	var frame = target === document.body 
              && document.documentElement 
              ? document.documentElement 
              : target // safari is the new IE
  
	target.addEventListener('mousewheel', scrolled, { passive: false })
	target.addEventListener('DOMMouseScroll', scrolled, { passive: false })

	function scrolled(e) {
		e.preventDefault(); // disable default scrolling

		var delta = normalizeWheelDelta(e)

		pos += -delta * speed
		pos = Math.max(0, Math.min(pos, target.scrollHeight - frame.clientHeight)) // limit scrolling

		if (!moving) update()
	}

	function normalizeWheelDelta(e){
		if(e.detail){
			if(e.wheelDelta)
				return e.wheelDelta/e.detail/40 * (e.detail>0 ? 1 : -1) // Opera
			else
				return -e.detail/3 // Firefox
		}else
			return e.wheelDelta/120 // IE,Safari,Chrome
	}

	function update() {
		moving = true
    
		var delta = (pos - target.scrollTop) / smooth
    
		target.scrollTop += delta
    
		if (Math.abs(delta) > 0.5)
			requestFrame(update)
		else
			moving = false
	}

	var requestFrame = function() { // requestAnimationFrame cross browser
		return (
			window.requestAnimationFrame ||
			window.webkitRequestAnimationFrame ||
			window.mozRequestAnimationFrame ||
			window.oRequestAnimationFrame ||
			window.msRequestAnimationFrame ||
			function(func) {
				window.setTimeout(func, 1000 / 50);
			}
		);
	}()
}

$(function () { $(".date").datepicker({ }) });

/* Page 2 Grey Circle show hide boxes starts here*/

$(".box2,.box3").hide();
$(".box1").show();

$(".img1").click(function(){
  $(".box1").show();
  $(".box2,.box3").hide();
});

$(".img2").click(function(){
  $(".box2").show();
  $(".box1,.box3").hide();
});

$(".img3").click(function(){
  $(".box3").show();
  $(".box1,.box2").hide();
});

/* Page 2 Grey Circle show hide boxes ends here*/

/* Index button css starts here */

$("#page1,#page2,#page3").hide();
$("#index").show();

$("#index-btn").click(function(){
  $("#page1").show();
  $("#page2,#page3,#index").hide();
  $("body").addClass("inner-bg");
  $("body").removeClass("bg-img");

  $(".navbar").addClass("inner-custom-navbar");
  $(".navbar").removeClass("custom-navbar");
});

/* Index button css ends here */

/* Page 1 button css starts here */

$("#page1Next-btn").click(function(){
  $("#page2").show();
  $("#index,#page1,#page3").hide();
});

$("#page1Prev-btn").click(function(){
  $("#index").show();
  $("#page1,#page2,#page3").hide();
  $("body").removeClass("inner-bg");
  $("body").addClass("bg-img");

  $(".navbar").removeClass("inner-custom-navbar");
  $(".navbar").addClass("custom-navbar");
});

/* Page 1 button css ends here */

/* Page 2 button css starts here */

$("#page2Next-btn").click(function(){
  $("#page3").show();
  $("#index,#page1,#page2").hide();
});

$("#page2Prev-btn").click(function(){
  $("#page1").show();
  $("#index,#page2,#page3").hide();
});

/* Page 2 button css starts here */

/* Page 3 button css starts here */

$("#page3Prev-btn").click(function(){
  $("#page2").show();
  $("#index,#page1,#page3").hide();
});

/* Page 3 button css ends here */