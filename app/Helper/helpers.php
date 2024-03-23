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
    function textFromArray($array, $next = false)
    {
        $concatenated_string = implode(" <br>", $array);
        $data = [];
        $num = count($array);
        $strlen = $next ? 2060 * 2 : 2060;
        while (strlen($concatenated_string) > $strlen) {
            $num--;
            $data[] = "$num-------" . $array[count($array) - 1];
            array_pop($array);
            $concatenated_string = implode(" <br>", $array);
        }
        $data = array_reverse($data);
        return [$concatenated_string, $data];
    }
}

