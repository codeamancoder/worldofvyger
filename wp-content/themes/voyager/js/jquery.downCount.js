!function(e){e.fn.downCount=function(t,n){function r(){var e=new Date(o.date),t=i(),r=e-t;if(0>r)return clearInterval(a),void(n&&"function"==typeof n&&n());var d=1e3,s=60*d,u=60*s,l=24*u,h=Math.floor(r/l),c=Math.floor(r%l/u),g=Math.floor(r%u/s),v=Math.floor(r%s/d);h=String(h).length>=2?h:"0"+h,c=String(c).length>=2?c:"0"+c,g=String(g).length>=2?g:"0"+g,v=String(v).length>=2?v:"0"+v;var x=1===h?"day":"days",m=1===c?"hour":"hours",y=1===g?"minute":"minutes",D=1===v?"second":"seconds";f.find(".days").text(h),f.find(".hours").text(c),f.find(".minutes").text(g),f.find(".seconds").text(v),f.find(".days_ref").text(x),f.find(".hours_ref").text(m),f.find(".minutes_ref").text(y),f.find(".seconds_ref").text(D)}var o=e.extend({date:null,offset:null},t);o.date||e.error("Date is not defined."),Date.parse(o.date)||e.error("Incorrect date format, it should look like this, 12/24/2012 12:00:00.");var f=this,i=function(){var e=new Date,t=e.getTime()+6e4*e.getTimezoneOffset(),n=new Date(t+36e5*o.offset);return n},a=setInterval(r,1e3)}}(jQuery);

jQuery(document).ready(function() {
	//Coming Soon Page Height
	jQuery(window).load(function(){
		comingpageHeight();
	});

	jQuery(window).resize(function(){
		comingpageHeight();
	});

	function comingpageHeight() {
		var body_h = $(window).height();
		jQuery('body.page-template-page-comingsoon #page-wrap, .coming_soon_wrapper').css('min-height', body_h);
	}
	
});