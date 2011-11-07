var Countdown = new Class({
	
	container: null,
	date: null,
	
	running: null,
	timer: null,
	
	days: null,
	hours: null,
	minutes: null,
	seconds: null,
	
	delay: 1000,
	
	initialize: function(container) {
		this.container = container;
		this.date = new Date(this.container.get('data-date'));
		
		this.days = this.container.getElement('.days div:first-child');
		this.hours = this.container.getElement('.hours div:first-child');
		this.minutes = this.container.getElement('.minutes div:first-child');
		this.seconds = this.container.getElement('.seconds div:first-child');
	},
	
	start: function() {
		this.running = true;
		this.tick();
	},
	
	tick: function() {
		var now, diff, days, hours, minutes, seconds;
		
		if (this.timer) {
			clearTimeout(this.timer);
		}
		
		now = new Date();
		diff = this.date - now;
		
		days = Math.floor(diff / 1000/60/60/24);
		this.days.set('html', days);
		diff -= days * 1000*60*60*24;
		
		hours = Math.floor(diff / 1000/60/60);
		this.hours.set('html', hours);
		diff -= hours * 1000*60*60;
		
		minutes = Math.floor(diff / 1000/60);
		this.minutes.set('html', minutes);
		diff -= minutes * 1000*60;
		
		seconds = Math.floor(diff / 1000);
		this.seconds.set('html', seconds);
		
		
		if (this.running) {
			this.timer = this.tick.delay(this.delay, this)
		}
	}
	
});

window.addEvent('domready', function () {
	$$('.countdown').each(function (countdown) {
		var c = new Countdown(countdown);
		c.start();
	});
});