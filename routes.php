<?php
use Pl\Tid\Models\State;
use Pl\Tid\Models\City;
use Pl\Tid\Models\Listing;
use Pl\Tid\Models\Zip;

// Route::get('/zip-extraction', function($state, $city = null, $listing = null){
//   return Zip::where('zip', '32127')->first()->cities;
//   $listings = Listing::all();
//   foreach ($listings as $listing) {
//     preg_match("/\\d{5}(-\d{4})?\b/", $listing->address, $matches);
//     $number = $matches[0];
//     if ($number) {
//       $zip = Zip::firstOrCreate(['zip' => $number]);
//       if (!$zip->cities->contains($listing->city->id)) {
//         $zip->cities()->sync([$listing->city->id], false);
//         echo json_encode($zip);
//       }
//     }
//   }
// });
