@extends('layouts.guest')

@section('title', 'Inicio')

@section('content')
	<x-slider />
	<section class="container-box content-wrapper">
		<x-book-list.carousel title="Los más vendidos" />
	</section>
	<section class="container-box content-wrapper">
		<x-book-list.carousel title="Novedades" />
	</section>
	<section class="container-box content-wrapper">
		<a href="#"><img src="{{ asset('images/placeholders/wide-banner.png') }}" alt="Banner" /></a>
	</section>
	<section class="container-box content-wrapper">
		<x-book-list.carousel title="Libros infantiles" />
	</section>
	<section class="container-box content-wrapper">
		<x-book-list.carousel title="Libros juveniles" />
	</section>
	<section class="container-box content-wrapper">
		<x-book-list.carousel title="Best sellers infaltables" />
	</section>
	<section class="container-box content-wrapper">
		<div class="dummy-banners-carousel">
			<a href="#"><img src="{{ asset('images/placeholders/banner.png') }}" alt="Banner" /></a>
			<a href="#"><img src="{{ asset('images/placeholders/banner.png') }}" alt="Banner" /></a>
			<a href="#"><img src="{{ asset('images/placeholders/banner.png') }}" alt="Banner" /></a>
		</div>
	</section>
@endsection
