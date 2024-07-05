<?php

namespace App\Models;

use App\PageRole;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * @property-read int $id Page ID and {@see PageRole role}
 */
class Page extends Model
{
    use HasFactory;

	protected $fillable = [
		'content',
		'image',
		'is_visible',
		'meta_title',
		'name',
		'slug',
		'title',
	];

	public function canHaveContent(): Attribute
	{
		return Attribute::make(function ()
		{
			return in_array($this->id, [PageRole::PrivacyPolitics]);
		});
	}

	protected static function boot(): void
	{
		parent::boot();

		static::creating(function ($model)
		{
			if ($model->id == PageRole::Home->value)
				$model->slug = null;
			elseif (!$model->slug)
				$model->slug = Str::slug($model->name);
		});
	}
}
