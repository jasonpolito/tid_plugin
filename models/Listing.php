<?php namespace Pl\Tid\Models;

use Model;

/**
 * Model
 */
class Listing extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];
    // protected $jsonable = ['hours'];
    protected $fillable = [
        'title',
        'address',
        'city_id',
        'slug',
        'hours',
    ];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'pl_tid_listings';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        'city' => 'Pl\Tid\Models\City'
    ];

    public function scopeIsFeatured($query) {
        return $query->where('is_featured', true);
    }

    public function nearByListings() {
        return $this->city->listings()->where('id', '!=', $this->id)->where('is_featured', '!=', 1)->get();
    }

    public function nearByFeaturedListings() {
        return $this->city->listings()->where('id', '!=', $this->id)->where('is_featured', '=', 1)->get();
    }

    public function fartherListings() {
        return $this->city->zips;
    }

}
