<?php declare(strict_types=1);

namespace Katas\Kyu6\Which_are_in;

function inArrayLoop($array1, $array2)
{
    return call_user_func(
        function ($array) {
            sort($array);

            return $array;
        },
        array_filter($array1, function ($needle) use ($array2) {
            foreach ($array2 as $hay) {
                if (strpos($hay, $needle) !== false) {
                    return true;
                }
            }

            return false;
        })
    );
}
