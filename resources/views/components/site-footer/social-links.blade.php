<div class="footer-social-links">
	<p class="title">Visita nuestras redes</p>
	<ul>
		@foreach($links as $link)
			<li>
				<a href="{{ $link->url }}" target="_blank">
					{!! $link->svg !!}
					<span>{{ $link->name }}</span>
				</a>
			</li>
		@endforeach
	</ul>
</div>
