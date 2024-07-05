<nav class="main-menu">
    <ul>
		@foreach($items as $item)
			<li><a href="/category">{{ $item->name }}</a></li>
		@endforeach
	</ul>
</nav>
