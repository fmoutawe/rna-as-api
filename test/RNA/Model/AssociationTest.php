<?php


namespace RNA\Test\Model;


use PHPUnit\Framework\TestCase;
use RNA\Model\Association;

class AssociationTest extends TestCase
{
    public function testHydrate()
    {
        // Given
        $template = "{\"association\":{\"id\":26572442,\"is_waldec\":\"true\",\"id_association\":\"W691089939\",\"id_ex_association\":null,\"siret\":null,\"numero_reconnaissance_utilite_publique\":null,\"code_gestion\":\"691P\",\"date_creation\":\"2015-11-05\",\"date_derniere_declaration\":\"2015-11-05\",\"date_publication_creation\":\"2016-02-20\",\"date_declaration_dissolution\":null,\"nature\":\"D\",\"groupement\":\"S\",\"titre\":\"LES BRICODEURS\",\"titre_court\":\"LES BRICODEURS\",\"objet\":\"diffuser la culture numérique et accompagner des projets numériques citoyens et tous les autres moyens susceptibles de concourir à la réalisation de cet objet, notamment des activités de prestation, conseil, de formation à destination du grand public, des entreprises, des collectivités et élus\",\"objet_social1\":\"005000\",\"objet_social2\":\"000000\",\"l1_adresse_import\":null,\"l2_adresse_import\":null,\"l3_adresse_import\":null,\"adresse_siege\":null,\"adresse_numero_voie\":\"8\",\"adresse_repetition\":null,\"adresse_type_voie\":\"PL\",\"adresse_libelle_voie\":\"Louis Chazette\",\"adresse_distribution\":\"_\",\"adresse_code_insee\":\"69381\",\"adresse_code_postal\":\"69001\",\"adresse_libelle_commune\":\"Lyon\",\"adresse_gestion_nom\":null,\"adresse_gestion_format_postal\":null,\"adresse_gestion_geo\":null,\"adresse_gestion_libelle_voie\":\"8  place Louis Chazette\",\"adresse_gestion_distribution\":null,\"adresse_gestion_code_postal\":\"69001\",\"adresse_gestion_acheminement\":\"LYON\",\"adresse_gestion_pays\":\"FRANCE\",\"dirigeant_civilite\":\"PH\",\"telephone\":null,\"site_web\":\"lesbricodeurs.fr\",\"email\":null,\"autorisation_publication_web\":\"0\",\"observation\":\"Le support des démarches ma contacté pour mavertir que la manipulation faite à la demande dun usager via le service électronique de contact.Le fichier était resté en état non transmis.transmis le 10/02/16 message de M. Picolet\",\"position_activite\":\"A\",\"derniere_maj\":\"2016-02-20 12:45:13\",\"created_at\":\"2019-06-07T02:04:04.000Z\",\"updated_at\":\"2019-06-07T02:04:04.000Z\"}}";
        $raw = json_decode($template);
        $format = 'm/d/Y H:i:s';
        // When
        $association = (new Association())->hydrateFromRaw($raw->association);
        // Then
        $this->assertEquals($raw->association->id, $association->getId());
        $this->assertEquals(boolval($raw->association->is_waldec), $association->isWaldec());
        $this->assertEquals($raw->association->id_association, $association->getIdAssociation());
        $this->assertEquals($raw->association->id_ex_association, $association->getIdExAssociation());
        $this->assertEquals($raw->association->siret, $association->getSiret());
        $this->assertEquals($raw->association->numero_reconnaissance_utilite_publique, $association->getNumeroReconnaissanceUtilitePublique());
        $this->assertEquals($raw->association->code_gestion, $association->getCodeGestion());
        $this->assertEquals($raw->association->date_creation, $association->getDateCreation());
        $this->assertEquals($raw->association->date_derniere_declaration, $association->getDateDerniereDeclaration());
        $this->assertEquals($raw->association->date_publication_creation, $association->getDatePublicationCreation());
        $this->assertEquals($raw->association->date_declaration_dissolution, $association->getDateDeclarationDissolution());
        $this->assertEquals($raw->association->nature, $association->getNature());
        $this->assertEquals($raw->association->groupement, $association->getGroupement());
        $this->assertEquals($raw->association->titre, $association->getTitre());
        $this->assertEquals($raw->association->titre_court, $association->getTitreCourt());
        $this->assertEquals($raw->association->objet, $association->getObjet());
        $this->assertEquals($raw->association->objet_social1, $association->getObjetSocial1());
        $this->assertEquals($raw->association->objet_social2, $association->getObjetSocial2());
        $this->assertEquals($raw->association->l1_adresse_import, $association->getL1AdresseImport());
        $this->assertEquals($raw->association->l2_adresse_import, $association->getL2AdresseImport());
        $this->assertEquals($raw->association->l3_adresse_import, $association->getL3AdresseImport());
        $this->assertEquals($raw->association->adresse_siege, $association->getAdresseSiege());
        $this->assertEquals($raw->association->adresse_numero_voie, $association->getAdresseNumeroVoie());
        $this->assertEquals($raw->association->adresse_repetition, $association->getAdresseRepetition());
        $this->assertEquals($raw->association->adresse_type_voie, $association->getAdresseTypeVoie());
        $this->assertEquals($raw->association->adresse_libelle_voie, $association->getAdresseLibelleVoie());
        $this->assertEquals($raw->association->adresse_distribution, $association->getAdresseDistribution());
        $this->assertEquals($raw->association->adresse_code_insee, $association->getAdresseCodeInsee());
        $this->assertEquals($raw->association->adresse_code_postal, $association->getAdresseCodePostal());
        $this->assertEquals($raw->association->adresse_libelle_commune, $association->getAdresseLibelleCommune());
        $this->assertEquals($raw->association->adresse_gestion_nom, $association->getAdresseGestionNom());
        $this->assertEquals($raw->association->adresse_gestion_format_postal, $association->getAdresseGestionFormatPostal());
        $this->assertEquals($raw->association->adresse_gestion_geo, $association->getAdresseGestionGeo());
        $this->assertEquals($raw->association->adresse_gestion_libelle_voie, $association->getAdresseGestionLibelleVoie());
        $this->assertEquals($raw->association->adresse_gestion_distribution, $association->getAdresseGestionDistribution());
        $this->assertEquals($raw->association->adresse_gestion_code_postal, $association->getAdresseGestionCodePostal());
        $this->assertEquals($raw->association->adresse_gestion_acheminement, $association->getAdresseGestionAcheminement());
        $this->assertEquals($raw->association->adresse_gestion_pays, $association->getAdresseGestionPays());
        $this->assertEquals($raw->association->dirigeant_civilite, $association->getDirigeantCivilite());
        $this->assertEquals($raw->association->telephone, $association->getTelephone());
        $this->assertEquals($raw->association->site_web, $association->getSiteWeb());
        $this->assertEquals($raw->association->email, $association->getEmail());
        $this->assertEquals($raw->association->autorisation_publication_web, $association->getAutorisationPublicationWeb());
        $this->assertEquals($raw->association->observation, $association->getObservation());
        $this->assertEquals($raw->association->position_activite, $association->getPositionActivite());
        $this->assertEquals(new \DateTime($raw->association->derniere_maj), $association->getDerniereMaj());
        $this->assertEquals((new \DateTime($raw->association->derniere_maj))->format($format), $association->getDerniereMaj()->format($format));
        $this->assertEquals(new \DateTime($raw->association->created_at), $association->getCreatedAt());
        $this->assertEquals((new \DateTime($raw->association->created_at))->format($format), $association->getCreatedAt()->format($format));
        $this->assertEquals(new \DateTime($raw->association->updated_at), $association->getUpdatedAt());
        $this->assertEquals((new \DateTime($raw->association->updated_at))->format($format), $association->getUpdatedAt()->format($format));
    }
}
