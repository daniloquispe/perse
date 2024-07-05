<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class Slider extends Component
{
	public Collection $slides;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
		$mainSlider = \App\Models\Slider::query()
			->where('is_visible', true)
			->with([
				'slides' => function (HasMany $query)
				{
					$query->where('is_enabled', true)
						->orderBy('order');
				}
			])
			->first();

		$this->slides = $mainSlider->slides;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.slider');
    }
}
