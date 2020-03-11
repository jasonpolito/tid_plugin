<?php namespace Pl\Tid\Models;

use Model;

/**
 * Model
 */
class State extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'pl_tid_states';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $hasMany = [
        'cities' => 'Pl\Tid\Models\City',
    ];

    public $hasManyThrough = [
        'listings' => [
            'Pl\Tid\Models\Listing',
            'through' => 'Pl\Tid\Models\City'
        ]
    ];
}
