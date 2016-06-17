<?php

include ('../metars/MetarsClass.php');

class MetarsTest extends PHPUnit_Framework_TestCase {

    protected function setUp() {
        $this->Metars = new Metars();
    }

    protected function tearDown() {
        unset($this->Metars);
    }

    public function testValidationFailsWithNumber() {
        $validation = $this->Metars->icaoValidate(1);
        $this->assertEquals('<p class="text text-danger">ICAO\'s can only be four digits</p>', $validation);
    }

    public function testValidationFailsWithMultipleNumbers() {
        $validation = $this->Metars->icaoValidate(1234);
        $this->assertEquals('<p class="text text-danger">ICAO\'s can\'t contain numbers!</p>', $validation);
    }

    public function testValidationFailsWithNoContent() {
        $validation = $this->Metars->icaoValidate(null);
        $this->assertEquals('<p class="text text-danger">Please enter an ICAO</p>', $validation);
    }

    public function testValidationFailsWithMixOfNumbersAndLetters() {
        $validation = $this->Metars->icaoValidate('ab12');
        $this->assertEquals('<p class="text text-danger">ICAO\'s can\'t contain numbers!</p>', $validation);
    }

    public function testValidationsPassesWithIcao() {
        $this->assertNull( $this->Metars->icaoValidate('aaaa') );
        $this->assertNull( $this->Metars->icaoValidate('zzzz') );
        $this->assertNull( $this->Metars->icaoValidate('abcd') );
        $this->assertNull( $this->Metars->icaoValidate('zyxw') );
    }

    public function testDataRetrieveReturnsCorrectAirportName() {
        $this->assertEquals('London Luton Airport', $this->Metars->dataRetrieve('EGGW', 'airport_name') );
    }

    public function testDataRetrieveReturnsCorrectCompleteLocation() {
        $this->assertEquals('Luton (near London), England, United Kingdom', $this->Metars->dataRetrieve('EGGW', 'complete_location') );
    }

    public function testDataRetrieveReturnsCorrectCity() {
        $this->assertEquals('Luton (near London)', $this->Metars->dataRetrieve('EGGW', 'city') );
    }

    public function testDataRetrieveReturnsCorrectCountry() {
        $this->assertEquals('United Kingdom', $this->Metars->dataRetrieve('EGGW', 'country') );
    }

    public function testDataRetrieveReturnsCorrectIata() {
        $this->assertEquals('LTN', $this->Metars->dataRetrieve('EGGW', 'iata_code') );
    }

}
