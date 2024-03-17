<?php

if (!function_exists('contentText')) {
    function contentText($content)
    {
        $start_tag = "<div>";
        $end_tag = "</div>";
    
        if (substr($content, 0, strlen($start_tag)) === $start_tag &&
            substr($content, -strlen($end_tag)) === $end_tag) {
            // Xoá các tag "<div>" và "</div>"
            $string = substr($content, strlen($start_tag), -strlen($end_tag));
        }
    
        $content = $string;
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

