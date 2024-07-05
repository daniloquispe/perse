<?php

namespace App\View\Components\SiteFooter;

use App\Models\SocialLink;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class SocialLinks extends Component
{
	public Collection $links;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
		$this->links = SocialLink::query()
			->where('is_visible', true)
			->orderBy('order')
			->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.site-footer.social-links');
    }
}
