<?php

namespace App\View\Components\SiteHeader;

use App\Models\MarqueeItem;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class Marquee extends Component
{
	public Collection $items;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
		$this->items = MarqueeItem::query()
			->select(['text', 'url', 'text_color', 'background_color'])
			->where('is_visible', true)
			->orderBy('order')
			->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.site-header.marquee');
    }
}
