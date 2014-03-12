<?php
/**
 * Created by PhpStorm.
 * User: Johnson
 * Date: 3/11/14
 * Time: 7:18 PM
 */

namespace Yelp\Facebook;


class FacebookPage
{
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function get()
    {
        //http://graph.facebook.com/PAGE-ID-HERE
        $endpoint = "http://graph.facebook.com/" . $this->id;
        $json = file_get_contents($endpoint);
        return json_decode($json);
    }

    /*
     * $fbpage = new \Yelp\Facebook\FacebookPage(PAGE ID HERE);
$fbpage = $fbpage->get();
     */
} 