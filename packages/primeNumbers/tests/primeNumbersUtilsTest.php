<?php
use PHPUnit\Framework\TestCase;
use exads\primeNumbers\primeNumbersUtils;

class primeNumbersUtilsTest extends TestCase {

    public function testGetFullList() {
        $utils = new primeNumbersUtils();
        $result = $utils->getFullList(1, 10);
        $this->assertIsArray($result);
        $this->assertCount(10, $result);
        $this->assertArrayHasKey(1, $result);
        $this->assertArrayHasKey(2, $result);
        $this->assertArrayHasKey(3, $result);
        $this->assertArrayHasKey(4, $result);
        $this->assertArrayHasKey(5, $result);
        $this->assertArrayHasKey(6, $result);
        $this->assertArrayHasKey(7, $result);
        $this->assertArrayHasKey(8, $result);
        $this->assertArrayHasKey(9, $result);
        $this->assertArrayHasKey(10, $result);
        $this->assertEquals('[PRIME]', $result[1]);
        $this->assertEquals('[PRIME]', $result[2]);
        $this->assertEquals('{2}', $result[4]);
        $this->assertEquals('[PRIME]', $result[5]);
        $this->assertEquals('{2;3}', $result[6]);
        $this->assertEquals('[PRIME]', $result[7]);
        $this->assertEquals('{2;4}', $result[8]);
        $this->assertEquals('{3}', $result[9]);
        $this->assertEquals('[PRIME]', $result[10]);
    }
}
