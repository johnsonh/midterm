<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    $restaurants = Restaurant::all();

    //display all restaurants from restaurant table
    return View::make('restaurants', [
        'restaurants' => $restaurants
    ]);

	//return View::make('hello');
});

Route::get('/restaurants/{id}/review', function($id)
{
    //echo 'sdfdsf';

    //get all the info about the restaurant, then pass it in
    $restaurant = Restaurant::find($id);

    $reviews =  Review::where('restaurant_id', '=', $id)->get();
    //dd($reviews);

    if ($restaurant->facebook_page != null)
    {
        $fbpage = new \Yelp\Facebook\FacebookPage($restaurant->facebook_page);
        $fbpage = $fbpage->get();
        //dd($fbpage);

        return View::Make('review', [
            'restaurant' => $restaurant,
            'reviews' => $reviews,
            'fbpage' => $fbpage
        ]);
    }
    else
    {
        return View::Make('review', [
            'restaurant' => $restaurant,
            'reviews' => $reviews
        ]);
    }

});