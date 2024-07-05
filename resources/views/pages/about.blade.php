@extends('layouts.guest')

@section('title', $page->title)

@section('content')
	<div class="container-box">
		<x-breadcrumbs>{{ $page->name }}</x-breadcrumbs>
	</div>
	<article class="container-box-stretch content-wrapper about-page document">
		<header>
			<h1>{{ $page->name }}</h1>
		</header>
		<main>
			<div>
				<img src="{{ asset('storage/' . $page->image) }}" alt="{{ $page->name }}" />
			</div>
			<div>
				<div>{!! $page->content !!}</div>
			</div>
		</main>
	</article>
@endsection
