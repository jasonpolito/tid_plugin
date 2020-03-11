<?php namespace Pl\Tid\Models;

use Model;

/**
 * Model
 */
class Zip extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];
    protected $fillable = ['zip'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'pl_tid_zips';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsToMany = [
        'cities' => ['Pl\Tid\Models\City', 'table' => 'pl_tid_cities_zips']
    ];

    public function listings() {
        return Listing::whereIn('city_id', $this->cities);
    }

    public function searchListings($query) {
        return $this->cities()->with('listings')->where('title', 'like', "%$query%")->get()->pluck('listings');
    }

}
