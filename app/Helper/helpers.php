<?php

if (!function_exists('contentText')) {
    function contentText($content)
    {
        $pages =  explode('<></>', $content);
        for ($i = 0; $i < count($pages); $i++) {
            if ($i == 0) {
                $string = preg_replace('/<p><br><\/p>/', '', $pages[0], 1);
                $pages[0] = $string;
            }
        }

        return $pages;
    }
}

