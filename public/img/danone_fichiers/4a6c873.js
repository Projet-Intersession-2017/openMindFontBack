/*!
 * strength.js
 * Original author: @aaronlumsden
 * Further changes, comments: @aaronlumsden
 * Licensed under the MIT license
 */
;(function ( $, window, document, undefined ) {

    var pluginName = "strength",
        defaults = {
            strengthClass: 'strength',
            strengthMeterClass: 'strength_meter',
            strengthButtonClass: 'button_strength',
            strengthButtonText: 'Show Password',
            strengthButtonTextToggle: 'Hide Password'
        };

    // $('<style>body { background-color: red; color: white; }</style>').appendTo('head');

    function Plugin( element, options ) {
        this.element = element;
        this.$elem = $(this.element);
        this.options = $.extend( {}, defaults, options );
        this._defaults = defaults;
        this._name = pluginName;
        this.init();
    }

    Plugin.prototype = {

        init: function() {


            var characters = 0;
            var capitalletters = 0;
            var loweletters = 0;
            var number = 0;
            var special = 0;

            var upperCase= new RegExp('[A-Z]');
            var lowerCase= new RegExp('[a-z]');
            var numbers = new RegExp('[0-9]');
            var specialchars = new RegExp('([!,%,&,@,#,$,^,*,?,_,~])');

            function GetPercentage(a, b) {
                return ((b / a) * 100);
            }

            function check_strength(thisval,thisid){
                if (thisval.length > 8) { characters = 1; } else { characters = 0; };
                if (thisval.match(upperCase)) { capitalletters = 1} else { capitalletters = 0; };
                if (thisval.match(lowerCase)) { loweletters = 1}  else { loweletters = 0; };
                if (thisval.match(numbers)) { number = 1}  else { number = 0; };

                var total = characters + capitalletters + loweletters + number + special;
                var totalpercent = GetPercentage(7, total).toFixed(0);



                get_total(total,thisid);
            }

            function get_total(total,thisid){

                var thismeter = $('div[data-meter="'+thisid+'"]');
                if(total == 0){
                    thismeter.removeClass().html('');
                }else if (total <= 1) {
                    thismeter.removeClass();
                    thismeter.addClass('veryweak').html('<p>Strength: very weak</p>');
                } else if (total == 2){
                    thismeter.removeClass();
                    thismeter.addClass('weak').html('<p>Strength: weak</p>');
                } else if(total == 3){
                    thismeter.removeClass();
                    thismeter.addClass('medium').html('<p>Strength: medium</p>');

                } else {
                    thismeter.removeClass();
                    thismeter.addClass('strong').html('<p>Strength: strong</p>');
                }
                console.log(total);
            }





            var isShown = false;
            var strengthButtonText = this.options.strengthButtonText;
            var strengthButtonTextToggle = this.options.strengthButtonTextToggle;


            thisid = this.$elem.attr('id');

            this.$elem.addClass(this.options.strengthClass).attr('data-password',thisid).after('<input style="display:none" class="'+this.options.strengthClass+'" data-password="'+thisid+'" type="text" name="" value=""><a data-password-button="'+thisid+'" href="" class="'+this.options.strengthButtonClass+'">'+this.options.strengthButtonText+'</a><div class="'+this.options.strengthMeterClass+'"><div data-meter="'+thisid+'"><p></p></div></div>');

            this.$elem.bind('keyup keydown', function(event) {
                thisval = $('#'+thisid).val();
                $('input[type="text"][data-password="'+thisid+'"]').val(thisval);
                check_strength(thisval,thisid);

            });

            $('input[type="text"][data-password="'+thisid+'"]').bind('keyup keydown', function(event) {
                thisval = $('input[type="text"][data-password="'+thisid+'"]').val();
                console.log(thisval);
                $('input[type="password"][data-password="'+thisid+'"]').val(thisval);
                check_strength(thisval,thisid);

            });



            $(document.body).on('click', '.'+this.options.strengthButtonClass, function(e) {
                e.preventDefault();

                thisclass = 'hide_'+$(this).attr('class');




                if (isShown) {
                    $('input[type="text"][data-password="'+thisid+'"]').hide();
                    $('input[type="password"][data-password="'+thisid+'"]').show().focus();
                    $('a[data-password-button="'+thisid+'"]').removeClass(thisclass).html(strengthButtonText);
                    isShown = false;

                } else {
                    $('input[type="text"][data-password="'+thisid+'"]').show().focus();
                    $('input[type="password"][data-password="'+thisid+'"]').hide();
                    $('a[data-password-button="'+thisid+'"]').addClass(thisclass).html(strengthButtonTextToggle);
                    isShown = true;

                }



            });




        },

        yourOtherFunction: function(el, options) {
            // some logic
        }
    };

    // A really lightweight plugin wrapper around the constructor,
    // preventing against multiple instantiations
    $.fn[pluginName] = function ( options ) {
        return this.each(function () {
            if (!$.data(this, "plugin_" + pluginName)) {
                $.data(this, "plugin_" + pluginName, new Plugin( this, options ));
            }
        });
    };

})( jQuery, window, document );
// Make it snow in your site
// See https://github.com/Canop/snow
window.snow = (function(){

	var	ctx,
		canvas,
		W,
		H,
		heights = [],
		n = 0,
		timer,
		fall;

	function resetScreen(){
		if (!canvas) {
			window.addEventListener("resize", resetScreen);
			canvas = document.createElement("canvas");
			document.body.appendChild(canvas);
		}
		W = window.innerWidth;
		H = window.innerHeight;
		canvas.id = "snow-canvas";
		canvas.style.pointerEvents = "none";
		canvas.style.position = "fixed";
		canvas.style.zIndex = 5000; // todo make it modifiable
		canvas.style.left = 0;
		canvas.style.right = 0;
		canvas.style.top = 0;
		canvas.style.bottom = 0;
		canvas.width = W;
		canvas.height = H;
		ctx = canvas.getContext("2d");
		if (heights.length<W) {
			var	i = 0,
				nh = new Array(W);
			for (;i<heights.length; i++) nh[i] = heights[i];
			for (;i<W; i++) nh[i] = 0;
			heights = nh;
		}
	}

	function rnd(min, max){
		if (max === undefined) {
			max = min;
			min = 0;
		}
		return min + Math.random()*(max-min);
	}

	function Fall(options){
		this.flakes = new Array(Math.ceil(options.flakeCount) || 400);
		this.maxRadius = options.maxRadius || 1.7;
		this.wind = options.wind || 0;
		this.color = options.color || "#fff";
		this.minSpeed = options.minSpeed || 1;
		this.maxSpeed = options.maxSpeed || 4.2;
		this.stickingRatio = options.stickingRatio || .4;
		this.maxHeightRatio = options.maxHeightRatio || .25;
		this.dying = false;
		for (var i=0; i<this.flakes.length; i++) this.flakes[i] = new Flake(this);
	}
	Fall.prototype.draw = function(){
		ctx.fillStyle = this.color;
		ctx.strokeStyle = this.color;
		for (var i=0; i<this.flakes.length; i++) {
			this.flakes[i].draw();
		}
	}
	Fall.prototype.update = function(){
		for (var i=0; i<this.flakes.length; i++) {
			if (this.flakes[i].update(this)) {
				this.flakes[i] = null;
			}
		}
		if (this.dying) {
			this.flakes = this.flakes.filter(function(v){
				return v;
			});
			if (!this.flakes.length) fall = null;
		}
		if (n%2) {
			for (var i=1; i<W; i++) {
				var d = heights[i]-heights[i-1];
				if (d>1) {
					heights[i] -=.7*d;
					heights[i-1] +=.3*d;
					if (i>1) heights[i-2] +=.2*d;
					if (i>2) heights[i-3] +=.1*d;
				}
			}
		} else {
			for (var i=0; i<W-1; i++) {
				var d = heights[i]-heights[i+1];
				if (d>1) {
					heights[i] -=.7*d;
					heights[i+1] +=.3*d;
					if (i<W-2) heights[i+2] +=.2*d;
					if (i<W-3) heights[i+3] +=.1*d;
				}
			}
		}
		n++;
	}
	Fall.prototype.rndX = function(){
		var windRange = this.wind*H/this.minSpeed;
		return rnd(Math.min(0, -windRange)-10, Math.max(W, W-windRange)+10);
	}

	function Flake(fall){
		this.y = rnd(-H, 0);
		this.x = fall.rndX();
		this.radius = rnd(1, fall.maxRadius);
		this.speed = rnd(fall.minSpeed, fall.maxSpeed);
		this.omega = rnd(.02, .13);
	}
	Flake.prototype.draw = function(){
		ctx.beginPath();
		ctx.arc(this.x, this.y, this.radius, 0, 2*Math.PI, false);
		ctx.fill();
	}
	Flake.prototype.update = function(fall){
		this.y += this.speed;
		var	i = Math.round(this.x),
			h;
		if (i<0) h = heights[0];
		else if (i>=W) h = heights[W-1];
		else h = heights[i];
		if (this.y >= H-h) {
			if (i>=0 && i<W) {
				if (h<H*fall.maxHeightRatio) {
					heights[i] += this.radius * fall.stickingRatio;
				}
			}
			if (fall.dying && Math.random()<.7) {
				return true; // flake disapears
			}
			this.y = rnd(-30, 1);
			this.x = fall.rndX();
			return;
		}
		this.x += fall.wind;
		this.x += Math.cos(this.y*this.omega/this.speed);
	}

	function drawGround(){
		ctx.beginPath();
		ctx.moveTo(0, H);
		for (var i=0; i<heights.length; i++) {
			ctx.lineTo(i, H-heights[i]);
		}
		ctx.lineTo(W+1, H-heights[heights.length-1]);
		ctx.lineTo(W+1, H);
		ctx.lineTo(0, H);
		ctx.fill();
	}

	function draw(){
		ctx.clearRect(0, 0, W, H);
		drawGround();
		if (fall) {
			fall.draw();
			fall.update();
			clearTimeout(timer);
			timer = setTimeout(draw, 25);
		}
	}

	return {
		start: function(options){
			if (!ctx) resetScreen();
			fall = new Fall(options||{});
			running = true;
			draw();
		},
		stop: function(){
			if (fall) fall.dying = true;
		}
	}

})();
