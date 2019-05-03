<?php namespace Ununnunium\Slider\Models;

use Model;

/**
 * Model
 */
class Slider extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'ununnunium_slider_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];


    /**
     * Relations
     */

    public $attachOne = [
        'image' => 'System\Models\File'
    ];
}
