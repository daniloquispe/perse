<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\PageRole;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
	public function __invoke(Request $request): View
	{
		$slug = $request->path();

		$page = Page::query()
			->select('id', 'name', 'title', 'image', 'content')
			->where('slug', $slug)
			->first();

		$data = compact('page');

		$view = match ($page->id)
		{
			PageRole::Contact->value => 'pages.contact',
			PageRole::AboutUs->value => 'pages.about',
			default => 'pages.page'
		};

		return view($view, $data);
	}
}
