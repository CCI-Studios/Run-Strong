var Slideshow = new Class({
	container: null,
	images: null,
	selectors: null,
	index: null,
	
	delay: 5000,
	duration: 500,
	
	image1: null,
	image2: null,
	
	timer: null,
	running: null,
	
	initialize: function(container) {
		this.container = container
		
		this.images = this.container.getElements('.images img');
		this.selectors = this.container.getElements('.selector > div > div > div');
		this.index = 0;
		
		this.image1 = this.container.getElement('.bg-image1');
		this.image2 = this.container.getElement('.bg-image2');
		
		this.selectors.addEvent('click', function(event) {
			var i = this.selectors.indexOf(event.target);
			
			if (i != -1)
				this.selectImage(i);
		}.bind(this));
		
		this.setImage(this.index);
		this.start();
	},
	
	start: function() {
		this.running = true;
		this.timer = this.next.delay(this.delay, this);
	},
	
	stop: function() {
		
	},
	
	next: function() {
		if (this.index < this.images.length -1) {
			this.index++;
		} else {
			this.index = 0;
		}
			
		this.selectImage(this.index);
	},
	
	selectImage: function(index) {
		if (this.running) {
			clearTimeout(this.timer);
		}
		
		this.image2.setStyles({
			background: 'transparent url(' + this.images[index].src + ') center no-repeat',
			opacity: 0
		});
		
		var fx = new Fx.Tween(this.image2, {
			property: 'opacity',
			duration: this.duration,
			transition: 'sine:in:out',
			
			onComplete: function() {
				this.setImage(this.index);
				
				if (this.running) {
					this.timer = this.next.delay(this.delay, this);
				} else {
				}
			}.bind(this)
		});
		
		fx.start(1);
	
		this.index = index;
		this.selectors.removeClass('current');
	},
	
	setImage: function(index) {
		this.image1.setStyle('background', 'transparent url(' + this.images[index].src + ') center no-repeat');
		this.image2.setStyle('opacity', 0);
		this.selectors[this.index].addClass('current');
	}
});

window.addEvent('domready', function() {
	$$('.slideshow').each(function (ss) {
		var slideshow = new Slideshow(ss);
	});
});