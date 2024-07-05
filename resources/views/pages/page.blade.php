@extends('layouts.guest')

@section('title', $page->title)

@section('content')
	<div class="container-box">
		<x-breadcrumbs>{{ $page->name }}</x-breadcrumbs>
	</div>
	<article class="document container-box-stretch">
		<header>
			<h1>{{ $page->name }}</h1>
		</header>
		<main>{!! $page->content !!}</main>
	</article>
@endsection
