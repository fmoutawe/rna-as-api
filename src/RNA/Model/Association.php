<?php
declare(strict_types=1);

namespace RNA\Model;

use RNA\Exception\AssociationMalformedException;

class Association
{
    /** @var integer */
    private $id;
    /** @var boolean */
    private $isWaldec = false;
    /** @var string|null */
    private $idAssociation;
    /** @var string|null */
    private $idExAssociation;
    /** @var string|null */
    private $siret;
    /** @var string|null */
    private $numeroReconnaissanceUtilitePublique;
    /** @var string|null */
    private $codeGestion;
    /** @var string|null */
    private $dateCreation;
    /** @var string|null */
    private $dateDerniereDeclaration;
    /** @var string|null */
    private $datePublicationCreation;
    /** @var string|null */
    private $dateDeclarationDissolution;
    /** @var string */
    private $nature;
    /** @var string */
    private $groupement;
    /** @var string */
    private $titre;
    /** @var string|null */
    private $titreCourt;
    /** @var string|null */
    private $objet;
    /** @var string|null */
    private $objetSocial1;
    /** @var string|null */
    private $objetSocial2;
    /** @var string|null */
    private $l1AdresseImport;
    /** @var string|null */
    private $l2AdresseImport;
    /** @var string|null */
    private $l3AdresseImport;
    /** @var string|null */
    private $adresseSiege;
    /** @var string|null */
    private $adresseNumeroVoie;
    /** @var string|null */
    private $adresseRepetition;
    /** @var string|null */
    private $adresseTypeVoie;
    /** @var string|null */
    private $adresseLibelleVoie;
    /** @var string|null */
    private $adresseDistribution;
    /** @var string|null */
    private $adresseCodeInsee;
    /** @var string|null */
    private $adresseCodePostal;
    /** @var string|null */
    private $adresseLibelleCommune;
    /** @var string|null */
    private $adresseGestionNom;
    /** @var string|null */
    private $adresseGestionFormatPostal;
    /** @var string|null */
    private $adresseGestionGeo;
    /** @var string|null */
    private $adresseGestionLibelleVoie;
    /** @var string|null */
    private $adresseGestionDistribution;
    /** @var string|null */
    private $adresseGestionCodePostal;
    /** @var string|null */
    private $adresseGestionAcheminement;
    /** @var string|null */
    private $adresseGestionPays;
    /** @var string */
    private $dirigeantCivilite;
    /** @var string|null */
    private $telephone;
    /** @var string|null */
    private $siteWeb;
    /** @var string|null */
    private $email;
    /** @var string|null */
    private $autorisationPublicationWeb;
    /** @var string|null */
    private $observation;
    /** @var string */
    private $positionActivite;
    /** @var \DateTime */
    private $derniereMaj;
    /** @var \DateTime */
    private $createdAt;
    /** @var \DateTime */
    private $updatedAt;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Association
     */
    public function setId(int $id): Association
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return bool
     */
    public function isWaldec(): bool
    {
        return $this->isWaldec;
    }

    /**
     * @param bool $isWaldec
     * @return Association
     */
    public function setIsWaldec(bool $isWaldec): Association
    {
        $this->isWaldec = $isWaldec;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIdAssociation(): ?string
    {
        return $this->idAssociation;
    }

    /**
     * @param string|null $idAssociation
     * @return Association
     */
    public function setIdAssociation(?string $idAssociation): Association
    {
        $this->idAssociation = $idAssociation;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIdExAssociation(): ?string
    {
        return $this->idExAssociation;
    }

    /**
     * @param string|null $idExAssociation
     * @return Association
     */
    public function setIdExAssociation(?string $idExAssociation): Association
    {
        $this->idExAssociation = $idExAssociation;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSiret(): ?string
    {
        return $this->siret;
    }

    /**
     * @param string|null $siret
     * @return Association
     */
    public function setSiret(?string $siret): Association
    {
        $this->siret = $siret;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumeroReconnaissanceUtilitePublique(): ?string
    {
        return $this->numeroReconnaissanceUtilitePublique;
    }

    /**
     * @param string|null $numeroReconnaissanceUtilitePublique
     * @return Association
     */
    public function setNumeroReconnaissanceUtilitePublique(?string $numeroReconnaissanceUtilitePublique): Association
    {
        $this->numeroReconnaissanceUtilitePublique = $numeroReconnaissanceUtilitePublique;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCodeGestion(): ?string
    {
        return $this->codeGestion;
    }

    /**
     * @param string|null $codeGestion
     * @return Association
     */
    public function setCodeGestion(?string $codeGestion): Association
    {
        $this->codeGestion = $codeGestion;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDateCreation(): ?string
    {
        return $this->dateCreation;
    }

    /**
     * @param string|null $dateCreation
     * @return Association
     */
    public function setDateCreation(?string $dateCreation): Association
    {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDateDerniereDeclaration(): ?string
    {
        return $this->dateDerniereDeclaration;
    }

    /**
     * @param string|null $dateDerniereDeclaration
     * @return Association
     */
    public function setDateDerniereDeclaration(?string $dateDerniereDeclaration): Association
    {
        $this->dateDerniereDeclaration = $dateDerniereDeclaration;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDatePublicationCreation(): ?string
    {
        return $this->datePublicationCreation;
    }

    /**
     * @param string|null $datePublicationCreation
     * @return Association
     */
    public function setDatePublicationCreation(?string $datePublicationCreation): Association
    {
        $this->datePublicationCreation = $datePublicationCreation;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDateDeclarationDissolution(): ?string
    {
        return $this->dateDeclarationDissolution;
    }

    /**
     * @param string|null $dateDeclarationDissolution
     * @return Association
     */
    public function setDateDeclarationDissolution(?string $dateDeclarationDissolution): Association
    {
        $this->dateDeclarationDissolution = $dateDeclarationDissolution;
        return $this;
    }

    /**
     * @return string
     */
    public function getNature(): string
    {
        return $this->nature;
    }

    /**
     * @param string $nature
     * @return Association
     */
    public function setNature(string $nature): Association
    {
        $this->nature = $nature;
        return $this;
    }

    /**
     * @return string
     */
    public function getGroupement(): string
    {
        return $this->groupement;
    }

    /**
     * @param string $groupement
     * @return Association
     */
    public function setGroupement(string $groupement): Association
    {
        $this->groupement = $groupement;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     * @return Association
     */
    public function setTitre(string $titre): Association
    {
        $this->titre = $titre;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTitreCourt(): ?string
    {
        return $this->titreCourt;
    }

    /**
     * @param string|null $titreCourt
     * @return Association
     */
    public function setTitreCourt(?string $titreCourt): Association
    {
        $this->titreCourt = $titreCourt;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getObjet(): ?string
    {
        return $this->objet;
    }

    /**
     * @param string|null $objet
     * @return Association
     */
    public function setObjet(?string $objet): Association
    {
        $this->objet = $objet;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getObjetSocial1(): ?string
    {
        return $this->objetSocial1;
    }

    /**
     * @param string|null $objetSocial1
     * @return Association
     */
    public function setObjetSocial1(?string $objetSocial1): Association
    {
        $this->objetSocial1 = $objetSocial1;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getObjetSocial2(): ?string
    {
        return $this->objetSocial2;
    }

    /**
     * @param string|null $objetSocial2
     * @return Association
     */
    public function setObjetSocial2(?string $objetSocial2): Association
    {
        $this->objetSocial2 = $objetSocial2;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getL1AdresseImport(): ?string
    {
        return $this->l1AdresseImport;
    }

    /**
     * @param string|null $l1AdresseImport
     * @return Association
     */
    public function setL1AdresseImport(?string $l1AdresseImport): Association
    {
        $this->l1AdresseImport = $l1AdresseImport;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getL2AdresseImport(): ?string
    {
        return $this->l2AdresseImport;
    }

    /**
     * @param string|null $l2AdresseImport
     * @return Association
     */
    public function setL2AdresseImport(?string $l2AdresseImport): Association
    {
        $this->l2AdresseImport = $l2AdresseImport;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getL3AdresseImport(): ?string
    {
        return $this->l3AdresseImport;
    }

    /**
     * @param string|null $l3AdresseImport
     * @return Association
     */
    public function setL3AdresseImport(?string $l3AdresseImport): Association
    {
        $this->l3AdresseImport = $l3AdresseImport;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdresseSiege(): ?string
    {
        return $this->adresseSiege;
    }

    /**
     * @param string|null $adresseSiege
     * @return Association
     */
    public function setAdresseSiege(?string $adresseSiege): Association
    {
        $this->adresseSiege = $adresseSiege;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdresseNumeroVoie(): ?string
    {
        return $this->adresseNumeroVoie;
    }

    /**
     * @param string|null $adresseNumeroVoie
     * @return Association
     */
    public function setAdresseNumeroVoie(?string $adresseNumeroVoie): Association
    {
        $this->adresseNumeroVoie = $adresseNumeroVoie;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdresseRepetition(): ?string
    {
        return $this->adresseRepetition;
    }

    /**
     * @param string|null $adresseRepetition
     * @return Association
     */
    public function setAdresseRepetition(?string $adresseRepetition): Association
    {
        $this->adresseRepetition = $adresseRepetition;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdresseTypeVoie(): ?string
    {
        return $this->adresseTypeVoie;
    }

    /**
     * @param string|null $adresseTypeVoie
     * @return Association
     */
    public function setAdresseTypeVoie(?string $adresseTypeVoie): Association
    {
        $this->adresseTypeVoie = $adresseTypeVoie;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdresseLibelleVoie(): ?string
    {
        return $this->adresseLibelleVoie;
    }

    /**
     * @param string|null $adresseLibelleVoie
     * @return Association
     */
    public function setAdresseLibelleVoie(?string $adresseLibelleVoie): Association
    {
        $this->adresseLibelleVoie = $adresseLibelleVoie;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdresseDistribution(): ?string
    {
        return $this->adresseDistribution;
    }

    /**
     * @param string|null $adresseDistribution
     * @return Association
     */
    public function setAdresseDistribution(?string $adresseDistribution): Association
    {
        $this->adresseDistribution = $adresseDistribution;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdresseCodeInsee(): ?string
    {
        return $this->adresseCodeInsee;
    }

    /**
     * @param string|null $adresseCodeInsee
     * @return Association
     */
    public function setAdresseCodeInsee(?string $adresseCodeInsee): Association
    {
        $this->adresseCodeInsee = $adresseCodeInsee;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdresseCodePostal(): ?string
    {
        return $this->adresseCodePostal;
    }

    /**
     * @param string|null $adresseCodePostal
     * @return Association
     */
    public function setAdresseCodePostal(?string $adresseCodePostal): Association
    {
        $this->adresseCodePostal = $adresseCodePostal;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdresseLibelleCommune(): ?string
    {
        return $this->adresseLibelleCommune;
    }

    /**
     * @param string|null $adresseLibelleCommune
     * @return Association
     */
    public function setAdresseLibelleCommune(?string $adresseLibelleCommune): Association
    {
        $this->adresseLibelleCommune = $adresseLibelleCommune;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdresseGestionNom(): ?string
    {
        return $this->adresseGestionNom;
    }

    /**
     * @param string|null $adresseGestionNom
     * @return Association
     */
    public function setAdresseGestionNom(?string $adresseGestionNom): Association
    {
        $this->adresseGestionNom = $adresseGestionNom;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdresseGestionFormatPostal(): ?string
    {
        return $this->adresseGestionFormatPostal;
    }

    /**
     * @param string|null $adresseGestionFormatPostal
     * @return Association
     */
    public function setAdresseGestionFormatPostal(?string $adresseGestionFormatPostal): Association
    {
        $this->adresseGestionFormatPostal = $adresseGestionFormatPostal;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdresseGestionGeo(): ?string
    {
        return $this->adresseGestionGeo;
    }

    /**
     * @param string|null $adresseGestionGeo
     * @return Association
     */
    public function setAdresseGestionGeo(?string $adresseGestionGeo): Association
    {
        $this->adresseGestionGeo = $adresseGestionGeo;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdresseGestionLibelleVoie(): ?string
    {
        return $this->adresseGestionLibelleVoie;
    }

    /**
     * @param string|null $adresseGestionLibelleVoie
     * @return Association
     */
    public function setAdresseGestionLibelleVoie(?string $adresseGestionLibelleVoie): Association
    {
        $this->adresseGestionLibelleVoie = $adresseGestionLibelleVoie;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdresseGestionDistribution(): ?string
    {
        return $this->adresseGestionDistribution;
    }

    /**
     * @param string|null $adresseGestionDistribution
     * @return Association
     */
    public function setAdresseGestionDistribution(?string $adresseGestionDistribution): Association
    {
        $this->adresseGestionDistribution = $adresseGestionDistribution;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdresseGestionCodePostal(): ?string
    {
        return $this->adresseGestionCodePostal;
    }

    /**
     * @param string|null $adresseGestionCodePostal
     * @return Association
     */
    public function setAdresseGestionCodePostal(?string $adresseGestionCodePostal): Association
    {
        $this->adresseGestionCodePostal = $adresseGestionCodePostal;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdresseGestionAcheminement(): ?string
    {
        return $this->adresseGestionAcheminement;
    }

    /**
     * @param string|null $adresseGestionAcheminement
     * @return Association
     */
    public function setAdresseGestionAcheminement(?string $adresseGestionAcheminement): Association
    {
        $this->adresseGestionAcheminement = $adresseGestionAcheminement;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdresseGestionPays(): ?string
    {
        return $this->adresseGestionPays;
    }

    /**
     * @param string|null $adresseGestionPays
     * @return Association
     */
    public function setAdresseGestionPays(?string $adresseGestionPays): Association
    {
        $this->adresseGestionPays = $adresseGestionPays;
        return $this;
    }

    /**
     * @return string
     */
    public function getDirigeantCivilite(): string
    {
        return $this->dirigeantCivilite;
    }

    /**
     * @param string $dirigeantCivilite
     * @return Association
     */
    public function setDirigeantCivilite(string $dirigeantCivilite): Association
    {
        $this->dirigeantCivilite = $dirigeantCivilite;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    /**
     * @param string|null $telephone
     * @return Association
     */
    public function setTelephone(?string $telephone): Association
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSiteWeb(): ?string
    {
        return $this->siteWeb;
    }

    /**
     * @param string|null $siteWeb
     * @return Association
     */
    public function setSiteWeb(?string $siteWeb): Association
    {
        $this->siteWeb = $siteWeb;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     * @return Association
     */
    public function setEmail(?string $email): Association
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAutorisationPublicationWeb(): ?string
    {
        return $this->autorisationPublicationWeb;
    }

    /**
     * @param string|null $autorisationPublicationWeb
     * @return Association
     */
    public function setAutorisationPublicationWeb(?string $autorisationPublicationWeb): Association
    {
        $this->autorisationPublicationWeb = $autorisationPublicationWeb;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getObservation(): ?string
    {
        return $this->observation;
    }

    /**
     * @param string|null $observation
     * @return Association
     */
    public function setObservation(?string $observation): Association
    {
        $this->observation = $observation;
        return $this;
    }

    /**
     * @return string
     */
    public function getPositionActivite(): string
    {
        return $this->positionActivite;
    }

    /**
     * @param string $positionActivite
     * @return Association
     */
    public function setPositionActivite(string $positionActivite): Association
    {
        $this->positionActivite = $positionActivite;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDerniereMaj(): \DateTime
    {
        return $this->derniereMaj;
    }

    /**
     * @param \DateTime $derniereMaj
     * @return Association
     */
    public function setDerniereMaj(\DateTime $derniereMaj): Association
    {
        $this->derniereMaj = $derniereMaj;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     * @return Association
     */
    public function setCreatedAt(\DateTime $createdAt): Association
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     * @return Association
     */
    public function setUpdatedAt(\DateTime $updatedAt): Association
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * @param object $raw
     * @return Association
     * @throws AssociationMalformedException
     */
    public function hydrateFromRaw(object $raw)
    {
        try {
            return $this
                ->setId($raw->id)
                ->setIsWaldec(boolval($raw->is_waldec))
                ->setIdAssociation($raw->id_association)
                ->setIdExAssociation($raw->id_ex_association)
                ->setSiret($raw->siret)
                ->setNumeroReconnaissanceUtilitePublique($raw->numero_reconnaissance_utilite_publique)
                ->setCodeGestion($raw->code_gestion)
                ->setDateCreation($raw->date_creation)
                ->setDateDerniereDeclaration($raw->date_derniere_declaration)
                ->setDatePublicationCreation($raw->date_publication_creation)
                ->setDateDeclarationDissolution($raw->date_declaration_dissolution)
                ->setNature($raw->nature)
                ->setGroupement($raw->groupement)
                ->setTitre($raw->titre)
                ->setTitreCourt($raw->titre_court)
                ->setObjet($raw->objet)
                ->setObjetSocial1($raw->objet_social1)
                ->setObjetSocial2($raw->objet_social2)
                ->setL1AdresseImport($raw->l1_adresse_import)
                ->setL2AdresseImport($raw->l2_adresse_import)
                ->setL3AdresseImport($raw->l3_adresse_import)
                ->setAdresseSiege($raw->adresse_siege)
                ->setAdresseNumeroVoie($raw->adresse_numero_voie)
                ->setAdresseRepetition($raw->adresse_repetition)
                ->setAdresseTypeVoie($raw->adresse_type_voie)
                ->setAdresseLibelleVoie($raw->adresse_libelle_voie)
                ->setAdresseDistribution($raw->adresse_distribution)
                ->setAdresseCodeInsee($raw->adresse_code_insee)
                ->setAdresseCodePostal($raw->adresse_code_postal)
                ->setAdresseLibelleCommune($raw->adresse_libelle_commune)
                ->setAdresseGestionNom($raw->adresse_gestion_nom)
                ->setAdresseGestionFormatPostal($raw->adresse_gestion_format_postal)
                ->setAdresseGestionGeo($raw->adresse_gestion_geo)
                ->setAdresseGestionLibelleVoie($raw->adresse_gestion_libelle_voie)
                ->setAdresseGestionDistribution($raw->adresse_gestion_distribution)
                ->setAdresseGestionCodePostal($raw->adresse_gestion_code_postal)
                ->setAdresseGestionAcheminement($raw->adresse_gestion_acheminement)
                ->setAdresseGestionPays($raw->adresse_gestion_pays)
                ->setDirigeantCivilite($raw->dirigeant_civilite)
                ->setTelephone($raw->telephone)
                ->setSiteWeb($raw->site_web)
                ->setEmail($raw->email)
                ->setAutorisationPublicationWeb($raw->autorisation_publication_web)
                ->setObservation($raw->observation)
                ->setPositionActivite($raw->position_activite)
                ->setDerniereMaj(new \DateTime($raw->derniere_maj))
                ->setCreatedAt(new \DateTime($raw->created_at))
                ->setUpdatedAt(new \DateTime($raw->updated_at));
        } catch (\Exception $e) {
            throw new AssociationMalformedException();
        }
    }
}
