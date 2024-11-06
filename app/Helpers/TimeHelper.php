<?php

if (!function_exists('timeAgo')) {
    function timeAgo ($time) {
        $time = \Carbon\Carbon::parse($time);

        return $time->diffForHumans();
    }
}
