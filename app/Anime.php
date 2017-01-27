<?php

namespace App;

use Carbon\Carbon;

class Anime {
    function __construct() {
        $this->firebase = new \Firebase\FirebaseLib(env('FB_HOST'), env('FB_SECRET'));
    }

    public function inReview() {
        return $this->firebase->get('review');
    }

    public function needingApproval() {
        $data = [];
        $reviewing = json_decode($this->inReview(), true);
        foreach ($reviewing AS $key => $anime) {
            if (isset($anime['post']) && isset($anime['post']['blog']) && isset($anime['post']['date']) && Carbon::now()->gt(Carbon::parse($anime['post']['date']))) {
                $data[$key] = $anime;
            }
        }

        return $data;
    }

    public function approveScheduled() {
        $data = [];
        foreach($this->needingApproval() AS $key => $anime) {
            $data[$key] = $anime;
            $this->firebase->set('anime/'.$key, $anime);
            $this->firebase->delete('review/'.$key);
        }

        return $data;
    }
}