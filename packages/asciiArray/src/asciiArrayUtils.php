<?php

namespace exads\asciiArray;

class asciiArrayUtils
{
    public array $fullArray;
    public array $missingElementArray;
    public function createRandomAsciiArray(string $fromChar = ',', string $toChar = '|') {
        $asciiArray = range(',','|');
        shuffle($asciiArray);
        $this->fullArray = $asciiArray;
    }

    public function removeRandomElement() {
        $randomElement = rand(0,sizeof($this->fullArray));
        $missingElementArray = $this->fullArray;
        unset($missingElementArray[$randomElement]);
        $this->missingElementArray= $missingElementArray;
    }

    public function findMissingAscii() : string {
        $sumFull = self::sumAsciiValues($this->fullArray);
        $sumMissing = self::sumAsciiValues($this->missingElementArray);
        return chr($sumFull-$sumMissing);
    }


    /**
     * Function that turns an array of ascii converts them into values and then sum the values
     * @param array $ascii The array of ascii
     * @return int The sum of all the values of the ascii
     */
    private static function sumAsciiValues(array $ascii) : int {
        return array_sum(array_map('ord',$ascii));
    }
}