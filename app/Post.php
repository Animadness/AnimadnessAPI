<?php

namespace App;

use Corcel\Post as Corcel;

class Post extends Corcel
{
    public function publishMissed() {
        $data = [];
        global $wpdb;
        $dateFormat="Y-m-d H:i:s";
        $now=gmdate($dateFormat);
        $sql="Select ID from $wpdb->posts where post_status='future' and post_date_gmt<'$now'";
        $resulto = $wpdb->get_results($sql);
        foreach( $resulto as $thisarr ) {
            $data[] = $thisarr;
            wp_publish_post($thisarr->ID);
        }

        return $data;
    }
}