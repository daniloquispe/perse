<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
	public function __invoke(Request $request): View
	{
		$slug = $request->path();

		$page = Page::query()
			->where('slug', $slug)
			->first();

		$data = compact('page');

		return view('pages.page', $data);
	}
}
