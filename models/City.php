<?php namespace Pl\Tid\Models;

use Model;

/**
 * Model
 */
class City extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];
    protected $fillable = ['title', 'slug'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'pl_tid_cities';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $hasMany = [
        'listings' => 'Pl\Tid\Models\Listing'
    ];

    public $belongsTo = [
        'state' => 'Pl\Tid\Models\State'
    ];

    public $belongsToMany = [
        'zips' => ['Pl\Tid\Models\Zip', 'table' => 'pl_tid_cities_zips']
    ];

    public function featuredListings() {
        return $this->listings()->where('is_featured', 1)->get();
    }

}
