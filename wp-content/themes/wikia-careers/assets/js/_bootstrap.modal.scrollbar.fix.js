function getScrollBarWidth () {
	var inner = document.createElement('p');
	inner.style.width = "100%";
	inner.style.height = "200px";

	var outer = document.createElement('div');
	outer.style.position = "absolute";
	outer.style.top = "0px";
	outer.style.left = "0px";
	outer.style.visibility = "hidden";
	outer.style.width = "200px";
	outer.style.height = "150px";
	outer.style.overflow = "hidden";
	outer.appendChild (inner);

	document.body.appendChild (outer);
	var w1 = inner.offsetWidth;
	outer.style.overflow = 'scroll';
	var w2 = inner.offsetWidth;
	if (w1 === w2) {w2 = outer.clientWidth;}

	document.body.removeChild(outer);

	return (w1 - w2);
}

$(document.body)
	.on('show.bs.modal', function () {
		// Get scrollbar width
		var scrollbarWidth = getScrollBarWidth();
		if (scrollbarWidth) {
			$(document.body).css('padding-right', scrollbarWidth);
			$('.navigation').css('padding-right', scrollbarWidth);
		}
	})
	.on('hidden.bs.modal', function () {
		$(document.body).css('padding-right', 0);
		$('.navigation').css('padding-right', 0);
	});
