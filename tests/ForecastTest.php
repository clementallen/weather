<?php

include ('../forecast/ForecastClass.php');

class ForecastTest extends PHPUnit_Framework_TestCase {

    protected function setUp() {

        $this->Forecast = new Forecast();
    }

    protected function tearDown() {

        unset($this->Forecast);
    }

    public function testBearingToCompassPoint() {

        $bearing = $this->Forecast->bearingToCompass(001);
        $this->assertEquals('N', $bearing);

        $bearing = $this->Forecast->bearingToCompass(22);
        $this->assertEquals('NNE', $bearing);

        $bearing = $this->Forecast->bearingToCompass(45);
        $this->assertEquals('NE', $bearing);

        $bearing = $this->Forecast->bearingToCompass(68);
        $this->assertEquals('ENE', $bearing);

        $bearing = $this->Forecast->bearingToCompass(90);
        $this->assertEquals('E', $bearing);

        $bearing = $this->Forecast->bearingToCompass(113);
        $this->assertEquals('ESE', $bearing);

        $bearing = $this->Forecast->bearingToCompass(135);
        $this->assertEquals('SE', $bearing);

        $bearing = $this->Forecast->bearingToCompass(158);
        $this->assertEquals('SSE', $bearing);

        $bearing = $this->Forecast->bearingToCompass(180);
        $this->assertEquals('S', $bearing);

        $bearing = $this->Forecast->bearingToCompass(203);
        $this->assertEquals('SSW', $bearing);

        $bearing = $this->Forecast->bearingToCompass(225);
        $this->assertEquals('SW', $bearing);

        $bearing = $this->Forecast->bearingToCompass(248);
        $this->assertEquals('WSW', $bearing);

        $bearing = $this->Forecast->bearingToCompass(270);
        $this->assertEquals('W', $bearing);

        $bearing = $this->Forecast->bearingToCompass(293);
        $this->assertEquals('WNW', $bearing);

        $bearing = $this->Forecast->bearingToCompass(315);
        $this->assertEquals('NW', $bearing);

        $bearing = $this->Forecast->bearingToCompass(338);
        $this->assertEquals('NNW', $bearing);

    }

    public function testBearingTooBig() {
        $bearing = $this->Forecast->bearingToCompass(361);
        $this->assertNull($bearing);

        $bearing = $this->Forecast->bearingToCompass(1000);
        $this->assertNull($bearing);
    }

    public function testBearingTooSmall() {
        $bearing = $this->Forecast->bearingToCompass(-1);
        $this->assertNull($bearing);
    }

}
