<?php

namespace App\View\Components\SiteHeader;

use App\Models\BookCategory;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class MainMenu extends Component
{
	public Collection $items;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
		$this->items = BookCategory::query()
			->where('is_visible', true)
			->orderBy('order')
			->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.site-header.main-menu');
    }
}
