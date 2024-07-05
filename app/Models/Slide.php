<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $image
 * @property string $url Destination URL (when image is pressed in website)
 */
class Slide extends Model
{
    use HasFactory;

	protected $fillable = ['is_enabled', 'image', 'name', 'url', 'order'];
}
