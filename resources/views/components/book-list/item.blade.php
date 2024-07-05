<article class="book-list-item">
	<header>
		@if($presale)
			<div class="presale">Preventa</div>
		@endif
		<div class="cover">
			<a href={{ route('book', 'a-alias-assumenda-dolor-eveniet-doloremque') }}><img src="{{ asset('images/placeholders/book.jpg') }}" alt="{{ $title }}" /></a>
		</div>
		<div class="title">{{ $title }}</div>
		<div class="author">{{ $author }}</div>
	</header>
	<main class="prices">
		<div class="current">S/99.00</div>
		<div class="normal"><del>S/61.00</del></div>
		<div class="discount">-23%</div>
	</main>
	<footer>
		<form>
			<input name="qty" id="qty" type="number" value="1" min="1" aria-label="Quantity" />
			<button>Agregar</button>
		</form>
	</footer>
</article>
