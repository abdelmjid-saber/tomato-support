<?php

namespace TomatoPHP\TomatoSupport\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

/**
 * @property integer $id
 * @property string $color
 * @property mixed $title
 * @property mixed $short_description
 * @property string $slug
 * @property mixed $body
 * @property boolean $is_active
 * @property boolean $has_view
 * @property string $view
 * @property string $created_at
 * @property string $updated_at
 */
class Page extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasTranslations;

    protected $casts = [
        'is_active' => 'boolean',
        'has_view' => 'boolean',
    ];

    public $translatable = ['title', 'short_description', 'body'];
    /**
     * @var array
     */
    protected $fillable = ['color', 'title', 'short_description', 'slug', 'body', 'is_active', 'has_view', 'view', 'created_at', 'updated_at'];
}
