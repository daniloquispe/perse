<div class="marquee-container">
	<div class="marquee" data-delay={marquee.delay}>
		@foreach($items as $item)
			<div class="slide">
				<a href="{{ $item->url }}">{{ $item->text }}</a>
			</div>
		@endforeach
	</div>
</div>
