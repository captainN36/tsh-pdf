<?php

if (!function_exists('contentText')) {
    function contentText($content)
    {
        $start_tag = "<div>";
        $end_tag = "</div>";
    
        if (substr($content, 0, strlen($start_tag)) === $start_tag &&
            substr($content, -strlen($end_tag)) === $end_tag) {
            $content = substr($content, strlen($start_tag), -strlen($end_tag));
        }

        $pages =  explode('<></>', $content);

        return $pages;
    }
}

if (!function_exists('textFromArray')) {
    function textFromArray($array)
    {
        $concatenated_string = implode(" <br>", $array);
        $data = [];
        while (strlen($concatenated_string) > 3144) {
            $data[] = $array[count($array) - 1];
            array_pop($array);
            $concatenated_string = implode(" <br>", $array);
        }

        return $concatenated_string;
    }
}

