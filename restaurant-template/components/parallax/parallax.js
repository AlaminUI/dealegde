/**
 * @module       Parallax
 * @author       OXAYAZA
 * @license      MIT
 * @see          https://codepen.io/OXAYAZA/pen/RgNywY
 * @version      v1.1.0
 * @description  Creates a parallax effect on the background.
 */

function parallax( options ) {
	options = options || {};

	function existing( testable, alternate ) {
		if( typeof( testable ) !== 'undefined' ) return testable;
		else return alternate
	}

	options = {
		parallaxClass:  existing( options.parallaxClass,  '.parallax' ),
		layerClass:     existing( options.layerClass,     '.parallax-layer' ),
		coeff:          existing( options.coeff,          0.1 ),
		oninit:         existing( options.oninit,         function() {} ),
		onscroll:       existing( options.onscroll,       function() {} ),
		onresize:       existing( options.onresize,       function() {} ),
		heightProp:     existing( options.heightProp,     '--height'),
		dyProp:         existing( options.dyProp,         '--dy')
	};


	function Layer( node ) {
		this.node = node;
	}

	Layer.prototype.setHeight = function() {
		if( this.coeff >= 0 ) {
			this.height = ~~( this.sHeight + ( this.windowHeight + this.sHeight ) * this.coeff );
		} else if( this.coeff < 0 && this.coeff >= -1 ) {
			this.height = ~~( this.sHeight + ( this.windowHeight - this.sHeight ) * Math.abs( this.coeff ) );
		} else if( this.coeff < -1 ) {
			this.height = ~~( ( this.windowHeight + this.sHeight ) * Math.abs( this.coeff ) - this.sHeight );
		}

		this.node.style.setProperty( options.heightProp, this.height +'px' );
	};

	Layer.prototype.setDy = function() {
		this.dy = ~~( ( this.sRect.top - this.windowHeight/2 + this.sHeight/2 ) * this.coeff );
		this.node.style.setProperty( options.dyProp, this.dy +'px' );
	};

	Layer.prototype.init = function() {
		this.node.parallaxLayer = this;
		this.coeff        = Number( this.node.getAttribute( 'data-coeff' ) ) || options.coeff;
		this.windowHeight = window.innerHeight;
		this.sRect        = this.node.parentElement.getBoundingClientRect();
		this.sHeight      = this.node.parentElement.clientHeight;
		this.setDy();
		this.setHeight();
	};

	Layer.prototype.resize = function() {
		this.windowHeight = window.innerHeight;
		this.sRect        = this.node.parentElement.getBoundingClientRect();
		this.sHeight      = this.node.parentElement.clientHeight;
		this.setDy();
		this.setHeight();
	};

	Layer.prototype.scroll = function() {
		this.sRect = this.node.parentElement.getBoundingClientRect();

		if( ( this.sRect.top < this.windowHeight ) && ( this.sRect.bottom > 0 ) ) {
			this.setDy();
		}
	};

	const nodes = document.querySelectorAll( options.layerClass );
	let layers = [];

	for( let i = 0; i < nodes.length; i++ ) {
		let layer = new Layer( nodes[ i ] );
		layer.init();
		layers.push( layer );
		options.oninit( layer, i );
	}

	window.addEventListener( 'resize', () => {
		layers.forEach( function ( layer, index ) {
			layer.resize();
			options.onresize( layer, index );
		});
	});

	document.addEventListener( 'scroll', () => {
		layers.forEach( function ( layer, index ) {
			layer.scroll();
			options.onscroll( layer, index );
		});
	});
}
