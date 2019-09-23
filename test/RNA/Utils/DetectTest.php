<?php


namespace RNA\Test\Utils;

use PHPUnit\Framework\TestCase;
use RNA\Utils\Detect;

class DetectTest extends TestCase
{
    public function testIsRNAOK() {
        // GIVEN
        $rna = 'W691089939';
        $rnaWithLetters = 'W9C1000188';
        // WHEN
        // THEN
        $this->assertTrue(Detect::isRna($rna));
        $this->assertTrue(Detect::isRna($rnaWithLetters));
    }

    public function testIsRNAKO() {
        // GIVEN
        $rnaTooShort = 'W691089';
        $rnaTooLong = 'W6910899398741256';
        $rnaWithoutFirstLetter = '6910899394';
        $rnaWithWrongFirstLetter = 'A691089939';
        // WHEN
        // THEN
        $this->assertFalse(Detect::isRna($rnaTooShort));
        $this->assertFalse(Detect::isRna($rnaTooLong));
        $this->assertFalse(\RNA\Utils\Detect::isRna($rnaWithoutFirstLetter));
        $this->assertFalse(\RNA\Utils\Detect::isRna($rnaWithWrongFirstLetter));
    }

    public function testIsSIRETOK() {
        // GIVEN
        $siret = '48077929700013';
        $siret2 = '81971052600016';
        // WHEN
        // THEN
        $this->assertTrue(Detect::isSiret($siret));
        $this->assertTrue(\RNA\Utils\Detect::isSiret($siret2));
    }

    public function testIsSIRETKO() {
        // GIVEN
        $siretUpdated = '47077929700013';
        $siretTooLong = '480779297000134587';
        $siretTooShort = '480779297000';
        $siretWithLetters = '480E7929700013';
        // WHEN
        // THEN
        $this->assertFalse(\RNA\Utils\Detect::isSiret($siretUpdated));
        $this->assertFalse(\RNA\Utils\Detect::isSiret($siretTooLong));
        $this->assertFalse(Detect::isSiret($siretTooShort));
        $this->assertFalse(\RNA\Utils\Detect::isSiret($siretWithLetters));
    }
}
