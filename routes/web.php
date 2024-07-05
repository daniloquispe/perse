<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

// Guest routes
Route::group(['middleware' => 'guest'], function ()
{
	// Home
	Route::get('/', \App\Http\Controllers\HomeController::class)->name('home');

	// Book categories
	Route::get('category', \App\Http\Controllers\BookCategoryController::class)->name('book-category');

	// Books
	Route::get('libro-{slug}', \App\Http\Controllers\BookController::class)->name('book');

	// Information pages
	$pages = \App\Models\Page::query()
		->select(['id', 'name', 'slug'])
		->where('is_visible', true)
		->whereKeyNot(\App\PageRole::Home->value)
		->get();

	foreach ($pages as $page)
		Route::get($page->slug, \App\Http\Controllers\PageController::class)->name('page.id-' . $page->id);
});
