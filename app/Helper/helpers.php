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
        $arr = $array;
        for ($i = 0; $i < count($array); $i++) {
            $arr[] = $array[$i];
        }
        $concatenated_string = implode(" <br>", $arr);
        $data = [];
        while (strlen($concatenated_string) > 2060) {
            $data[] = $arr[count($arr) - 1];
            array_pop($arr);
            $concatenated_string = implode(" <br>", $arr);
        }
        return [$concatenated_string, $data];
    }
}

