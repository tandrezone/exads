<?php

use exads\asciiArray\asciiArrayUtils;
use PHPUnit\Framework\TestCase;

class asciiArrayUtilsTest extends TestCase {

    public function testCreateRandomAsciiArray() {
        $utils = new asciiArrayUtils();
        $utils->createRandomAsciiArray();
        $this->assertIsArray($utils->fullArray);
        $this->assertContainsOnly('string', $utils->fullArray);
        $this->assertContains(',', $utils->fullArray);
        $this->assertContains('|', $utils->fullArray);
    }

    public function testRemoveRandomElement() {
        $utils = new asciiArrayUtils();
        $utils->createRandomAsciiArray();
        $utils->removeRandomElement();
        $this->assertIsArray($utils->missingElementArray);
        $this->assertContainsOnly('string', $utils->missingElementArray);
    }

    public function testFindMissingAscii() {
        $utils = new asciiArrayUtils();
        $utils->fullArray = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '_', '+', '{', '}', '|'];
        $utils->missingElementArray = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '_', '{', '}', '|'];
        $this->assertEquals('+', $utils->findMissingAscii());
    }
}