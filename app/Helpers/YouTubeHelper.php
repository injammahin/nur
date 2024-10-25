<?php

namespace App\Helpers;

class YouTubeHelper
{
    /**
     * Extracts the YouTube video ID from a URL.
     *
     * @param string $url
     * @return string|null
     */
    public static function getYouTubeVideoId($url)
    {
        $pattern = '%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)?/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i';
        preg_match($pattern, $url, $matches);
        return $matches[1] ?? null;
    }
}
