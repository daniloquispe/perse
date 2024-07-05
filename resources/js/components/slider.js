const container = document.querySelector('.slider');
const delay = container.dataset.delay;
let currentIndex = 0;

function navigate(direction)
{
	const slidesCount = document.querySelectorAll('.slider .slide').length;

	currentIndex = (currentIndex + direction + slidesCount) % slidesCount;
	const offset = -currentIndex * 100;

	container.style.transform = `translateX(${offset}%)`;
}

// Autoplay

let autoplayInterval = null;

function startAutoplay(interval)
{
	stopAutoplay();
	autoplayInterval = setInterval(() => navigate(1), interval);
}

function stopAutoplay()
{
	clearInterval(autoplayInterval);
}

startAutoplay(delay);
