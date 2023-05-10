<?php

namespace exads\primeNumbers;

class primeNumbersUtils {
    static function  getFullList(int $startRage = 1, int $endRange = 100) : array {
        $range = range($startRage,$endRange);
        $result = [];

        foreach ($range as $value) {
            $result[$value] =[];
            $multiplier=$startRage;
            while ($multiplier<$endRange) {
                if($value %$multiplier == 0 && $value != $multiplier && $multiplier != 1) {
                    $result[$value][] = $multiplier;
                }
                $multiplier++;
            }
            if(empty($result[$value])) {
                $result[$value] = '[PRIME]';
            } else {
                $result[$value] = '{'.implode(';',$result[$value]).'}';
            }
        }
        return $result;
    }

}