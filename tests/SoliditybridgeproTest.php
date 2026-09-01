<?php
/**
 * Tests for SolidityBridgePro
 */

use PHPUnit\Framework\TestCase;
use Soliditybridgepro\Soliditybridgepro;

class SoliditybridgeproTest extends TestCase {
    private Soliditybridgepro $instance;

    protected function setUp(): void {
        $this->instance = new Soliditybridgepro(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Soliditybridgepro::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
