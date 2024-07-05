<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BookController extends Controller
{
	public function __invoke(string $slug): View
	{
		$book = Book::query()
			->select(['id', 'publisher_id', 'cover', 'sku', 'isbn', 'title', 'summary', 'price', 'pages_count', 'weight', 'width', 'height', 'year'])
			->where('is_visible', true)
			->where('slug', $slug)
			->with(['authors:id,name,photo,summary', 'publisher:id,name'])
			->first();

		$data = compact('book');

		return view('pages.book', $data);
	}
}
