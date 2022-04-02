<?php

$planet = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

// function array_ran($planets)
// {
//     if (isset($planets)) 
//     {
//         $a = array_filter($planets);
//     }
// }
// print_r(array_ran($planets));






function array_ra($arr,$number)
{
    $filter_arr = array_filter($arr);
    $arr_rand =  array_rand($filter_arr,$number);

    $res = array_map(function ($item) use ($filter_arr){
        return $filter_arr[$item];
    },$arr_rand);

    return $res;
}


print_r(array_ra($planet,4));