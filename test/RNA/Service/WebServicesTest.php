<?php


namespace RNA\Test\Service;


use PHPUnit\Framework\TestCase;
use RNA\Exception\RnaMalformedException;
use RNA\Exception\SiretMalformedException;
use RNA\Service\WebServices;

class WebServicesTest extends TestCase
{
    /**
     * @var WebServices
     */
    private $webServices;

    protected function setUp(): void
    {
        $this->webServices = new WebServices();
    }

    public function testGetAssociationRawByRna() {
        // Given
        $rna = 'W691089939';
        $expectedInfos = [
            'id' => 26572442,
            'is_waldec' => 'true',
            'id_association' => 'W691089939',
            'titre' => 'LES BRICODEURS'
        ];
        // When
        $rawAssociation = $this->webServices->getAssociationRawByRna($rna);
        // Then
        $this->assertNotNull($rawAssociation->association);
        $this->assertEquals($rawAssociation->association->id, $expectedInfos['id']);
        $this->assertEquals($rawAssociation->association->is_waldec, $expectedInfos['is_waldec']);
        $this->assertEquals($rawAssociation->association->id_association, $expectedInfos['id_association']);
        $this->assertEquals($rawAssociation->association->titre, $expectedInfos['titre']);
    }

    public function testGetAssociationRawByRnaWithMalformedRna() {
        // Given
        $malformedRna = 'W6910899';
        // Then
        $this->expectException(RnaMalformedException::class);
        // When
        $this->webServices->getAssociationRawByRna($malformedRna);
    }

    public function testGetAssociationRawByRnaWithUnknownRna() {
        // Given
        $unknownRna = 'W999999999';
        // When
        $rawAssociation = $this->webServices->getAssociationRawByRna($unknownRna);
        // Then
        $this->assertNull($rawAssociation);
    }

    public function testGetAssociationRawBySiret() {
        // Given
        $siret = '48077929700013';
        $expectedInfos = [
            'id' => 25922488,
            'is_waldec' => 'true',
            'id_association' => 'W561004166',
            'siret' => '48077929700013',
            'titre' => 'ASSOCIATION DE FORMATION AU SECOURISME DU PAYS DE PLOUAY'
        ];
        // When
        $rawAssociation = $this->webServices->getAssociationBySiret($siret);
        // Then
        $this->assertNotNull($rawAssociation->association);
        $this->assertEquals($rawAssociation->association->id, $expectedInfos['id']);
        $this->assertEquals($rawAssociation->association->is_waldec, $expectedInfos['is_waldec']);
        $this->assertEquals($rawAssociation->association->id_association, $expectedInfos['id_association']);
        $this->assertEquals($rawAssociation->association->siret, $expectedInfos['siret']);
        $this->assertEquals($rawAssociation->association->titre, $expectedInfos['titre']);
    }

    public function testGetAssociationRawBySiretWithMalformedSiret() {
        // Given
        $siret = '98077929700013';
        // Then
        $this->expectException(SiretMalformedException::class);
        // When
        $this->webServices->getAssociationBySiret($siret);
    }
}
