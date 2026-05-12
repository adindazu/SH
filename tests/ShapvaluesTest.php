<?php
/**
 * Tests for SHAPValues
 */

use PHPUnit\Framework\TestCase;
use Shapvalues\Shapvalues;

class ShapvaluesTest extends TestCase {
    private Shapvalues $instance;

    protected function setUp(): void {
        $this->instance = new Shapvalues(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Shapvalues::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
