document.addEventListener('DOMContentLoaded', function() {
	const slider = document.querySelector('.lasles-testimonials-wrapper');
	if (!slider) return;

	const cards = slider.querySelectorAll('.lasles-testimonial-card');
	const dots = document.querySelectorAll('.lasles-dot');
	const prevBtn = document.querySelector('.lasles-slider-prev');
	const nextBtn = document.querySelector('.lasles-slider-next');
	
	let activeIndex = 0;

	function updateSliderState(index) {
		// Update active classes for cards
		cards.forEach(c => c.classList.remove('active'));
		if (cards[index]) {
			cards[index].classList.add('active');
		}

		// Update dots styling
		dots.forEach((dot, i) => {
			if (i === index) {
				dot.classList.add('active');
				dot.style.width = '45px';
				dot.style.background = '#F53838';
			} else {
				dot.classList.remove('active');
				dot.style.width = '15px';
				dot.style.background = '#DDE0E4';
			}
		});

		// Scroll to card
		if (cards[index]) {
			// Calculate scroll position precisely
			const scrollLeft = cards[index].offsetLeft - slider.offsetLeft;
			slider.scrollTo({
				left: scrollLeft,
				behavior: 'smooth'
			});
		}
	}

	// Listen for scroll events to auto-update dots if swiped natively
	let isScrolling;
	slider.addEventListener('scroll', function() {
		window.clearTimeout(isScrolling);
		isScrolling = setTimeout(function() {
			let maxVisibleArea = 0;
			let newIndex = activeIndex;
			
			cards.forEach((card, index) => {
				const rect = card.getBoundingClientRect();
				const sliderRect = slider.getBoundingClientRect();
				
				const visibleWidth = Math.min(rect.right, sliderRect.right) - Math.max(rect.left, sliderRect.left);
				
				if (visibleWidth > maxVisibleArea && visibleWidth > 0) {
					maxVisibleArea = visibleWidth;
					newIndex = index;
				}
			});

			if (newIndex !== activeIndex) {
				activeIndex = newIndex;
				updateSliderState(activeIndex);
			}
		}, 100);
	});

	// Arrow clicks
	if (prevBtn) {
		prevBtn.addEventListener('click', () => {
			if (activeIndex > 0) {
				activeIndex--;
				updateSliderState(activeIndex);
			}
		});
	}

	if (nextBtn) {
		nextBtn.addEventListener('click', () => {
			if (activeIndex < cards.length - 1) {
				activeIndex++;
				updateSliderState(activeIndex);
			}
		});
	}

	// Dot clicks
	dots.forEach((dot, index) => {
		dot.addEventListener('click', () => {
			activeIndex = index;
			updateSliderState(activeIndex);
		});
	});

	// Init
	updateSliderState(0);
});
