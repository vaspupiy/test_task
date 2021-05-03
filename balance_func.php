<?php
//Examples:
//balance("!!","??") === "Right"
//balance("!??","?!!") === "Left"
//balance("!?!!","?!?") === "Left"
//balance("!!???!????","??!!?!!!!!!!") === "Balance"

const SYMBOL_WEIGHT = array("?" => 3, "!" => 2,);


function symbolWeight($stringW, $arrW)
{
    $res = 0;
    for ($i = 0; $i < strlen($stringW); $i++) {
        $res += $arrW[$stringW[$i]];
    }
    return $res;
}


function balance($str1, $str2)
{
    $left = symbolWeight($str1, SYMBOL_WEIGHT);
    $right = symbolWeight($str2, SYMBOL_WEIGHT);
    if ($left > $right) {
        return "Left";
    } elseif ($left < $right) {
        return "Right";
    } else {
        return "Balance";
    }
}


echo balance("!!", "??") === "Right";
echo "<br/>";
echo balance("!??", "?!!") === "Left";
echo "<br/>";
echo balance("!?!!", "?!?") === "Left";
echo "<br/>";
echo balance("!!???!????", "??!!?!!!!!!!") === "Balance";
