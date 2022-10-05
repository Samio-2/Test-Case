<?php

function countChar($str)
{
    foreach (count_chars($str, 1) as $i => $val) {
        if ($val === 1) {
            $val = "";
        }
        echo chr($i) . $val;
    }
}

countChar("aabbckkkml");
print_r("<br>");
countChar("aaaabsdfbhckkhfdkml");
