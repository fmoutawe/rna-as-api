<?php
declare(strict_types=1);

namespace RNA;

use GuzzleHttp\Exception\GuzzleException;
use RNA\Model\Association;
use RNA\Service\WebServices;
use RNA\Utils\Detect;

class RNA
{
    /**
     * @var WebServices
     */
    private $webServices;

    public function __construct()
    {
        $this->webServices = new WebServices();
    }

    public function isRNA(string $code): bool
    {
        return Detect::isRna($code);
    }

    public function isSIRET(string $code): bool
    {
        return Detect::isSiret($code);
    }

    public function getAssociation($code): ?Association
    {
        $association = null;
        $associationRaw = null;

        if ($this->isRNA($code)) {
            try {
                $associationRaw = $this->webServices->getAssociationRawByRna($code);
            } catch (Exception\RnaMalformedException|Exception\AssociationMalformedException $e) {
                return null;
            }
        }

        if ($this->isSIRET($code)) {
            try {
                $associationRaw = $this->webServices->getAssociationBySiret($code);
            } catch (Exception\SiretMalformedException|Exception\AssociationMalformedException $e) {
                return null;
            }
        }

        if ($associationRaw) {
            $association = (new Association())->hydrateFromRaw($associationRaw->association);
        }

        return $association;
    }
}
