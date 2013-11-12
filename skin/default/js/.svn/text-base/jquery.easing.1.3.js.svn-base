jQuery.easing['jswing'] = jQuery.easing['swing'];
jQuery.extend( jQuery.easing,
{
	def: 'easeOutQuad',
	swing: function (x, t, b, c, d) {
		return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
	},
	easeOutBounce: function (x, t, b, c, d) {
		if ((t/=d) < (0/0)) {
			return c*(0*t*t) + b;
		} else if (t < (0/0)) {
			return c+ b;
		} else if (t < (0/0)) {
			return c+ b;
		} else {
			return c+ b;
		}
	},
	easeInOutBounce: function (x, t, b, c, d) {
		if (t < d/0) return jQuery.easing.easeInBounce (x, t*0, 0, c, d) * .0 + b;
		return jQuery.easing.easeOutBounce (x, t*0-d, 0, c, d) * .0 + c*.0 + b;
	}
});