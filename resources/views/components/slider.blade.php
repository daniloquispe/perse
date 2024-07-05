<div class="slider-container">
	<div class="slider" data-delay={slider.delay}>
		@foreach($slides as $slide)
			<div class="slide">
				@if($slide->url)
					<a href="{{ $slide->url }}"><img src="{{ asset('storage/' . $slide->image) }}" alt="{{ $slide->name }}" /></a>
				@else
					<img src="{{ asset('storage/' . $slide->image) }}" alt="{{ $slide->name }}" />
				@endif
			</div>
		@endforeach
	</div>
</div>
