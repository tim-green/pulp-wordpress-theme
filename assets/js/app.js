// This adds the class of 'js-enabled' to <body> when JavaScript is detected.
document.addEventListener('DOMContentLoaded', () => {
	document.body.classList.add('js-enabled');
});

//Cache header element to reduce DOM queries.
const pulpHeader = document.querySelector(".site-header");

// Store last scroll position.
let pulpLastScrollTop = 0;

// Handle scroll events.
function handleScroll() {
	if (pulpHeader) { 
		const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

		// Toggle header visibility based on scroll direction.
		pulpHeader.style.top = scrollTop > pulpLastScrollTop ? "-100%" : "0";

		// Update last scroll position.
		pulpLastScrollTop = scrollTop;
	}
}

// Throttle scroll event, just for performance.
let isThrottled = false;
const pulpThrottleDuration = 100; // Throttle duration in milliseconds.

window.addEventListener("scroll", () => {
	if (!isThrottled) {
		handleScroll();
		isThrottled = true;

		// Un-throttle after duration.
		setTimeout(() => {
			isThrottled = false;
		}, pulpThrottleDuration);
	}
});
