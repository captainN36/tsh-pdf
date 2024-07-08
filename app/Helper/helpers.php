<?php

if (!function_exists('contentText')) {
    function contentText($content, $diff = false)
    {
        $start_tag = "<div>";
        $end_tag = "</div>";
    
        if (substr($content, 0, strlen($start_tag)) === $start_tag &&
            substr($content, -strlen($end_tag)) === $end_tag) {
            $content = substr($content, strlen($start_tag), -strlen($end_tag));
        }
        if ($diff) {
            $pages =  explode('<p><span style="color: rgb(206, 145, 120);">-----</span></p>', $content);
        } else {
            $pages =  explode('<></>', $content);
            for ($i = 0; $i < count($pages); $i++) {
                if (strpos($pages[$i], "<></>") !== false) {
                    $childcontent = explode("<></>", $pages[$i]);
                    array_splice($pages, $i, 0, $childcontent);
                    unset($pages[$i + count($childcontent)]);
                    $pages = array_values($pages);
                }
            }
        }
        

        return $pages;
    }
}

if (!function_exists('textFromArray')) {
    function textFromArray($array, $next = false)
    {
        for ($i = 0; $i < count($array); $i++) {
            if (strpos($array[$i], "<></>") !== false) {
                $childcontent = explode("<></>", $array[$i]);
                array_splice($array, $i, 0, $childcontent);
                unset($array[$i + count($childcontent)]);
                $array = array_values($array);
            }
        }

        $concatenated_string = implode(" <br>", $array);
        $data = [];
        $strlen = $next ? 4350 : 2060;
        while (strlen($concatenated_string) > $strlen) {
            $data[] = $array[count($array) - 1];
            array_pop($array);
            $concatenated_string = implode(" <br>", $array);
        }
        $data = array_reverse($data);
        return [$concatenated_string, $data];
    }
}

if (!function_exists('getTextData')) {
    function getTextData ($array, $dataContent) {
        if (count($array) < 2) {
            $dataContent['data'][0] = $dataContent['firstContent'];
            [$textFromArray, $nextPagesContent] = textFromArray($dataContent['data']);
        } else {
            array_shift($dataContent['data']);
            $firstContent = $array[0];
            array_shift($array);
            for ($i=0; $i < count($dataContent['data']); $i++) { 
                $array[] = $dataContent['data'][$i];
            }
            [$textFromArray, $nextPagesContent] = textFromArray($array);
        }
        $textFromArray = count($array) >= 2 ? $firstContent : $textFromArray;
        $nextPagesContent = count($array) >= 2 ? $array : $nextPagesContent;
        
        return [$textFromArray, $nextPagesContent];
    }
}


