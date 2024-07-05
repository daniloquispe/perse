const container = document.querySelector('.marquee');
const delay = container.dataset.delay;
let currentIndex = 0;

function navigate()
{
	const slidesCount = document.querySelectorAll('.marquee .slide').length;

	currentIndex = (currentIndex + slidesCount + 1) % slidesCount;

	const offset = -currentIndex * 100;
	container.style.transform = `translateX(${offset}%)`;
}

setInterval(() => navigate(), delay);
