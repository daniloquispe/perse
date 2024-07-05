<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $delay Transition delay (in milliseconds)
 * @property int $id
 * @property-read Collection<Slide> $visibleSlides List of visible (active) slides
 */
class Slider extends Model
{
    use HasFactory;

	protected $fillable = ['is_visible', 'name', 'delay'];

	public function slides(): HasMany
	{
		return $this->hasMany(Slide::class);
	}

	public function visibleSlides(): HasMany
	{
		return $this->slides()->where('is_enabled', true);
	}
}
