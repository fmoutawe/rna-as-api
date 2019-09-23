<?php
declare(strict_types=1);

namespace RNA\Service;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use RNA\Exception\RnaMalformedException;
use RNA\Exception\SiretMalformedException;
use RNA\Utils\Detect;

class WebServices
{
    const REMOTE_API_PREFIX = 'https://entreprise.data.gouv.fr/api/rna/';
    const REMOTE_API_VERSION = 'v1';

    /**
     * @param string $code
     * @return object|null
     * @throws RnaMalformedException
     */
    public function getAssociationRawByRna(string $code): ?object
    {
        if (!Detect::isRna($code)) {
            throw new RnaMalformedException();
        }

        $url = self::REMOTE_API_PREFIX . self::REMOTE_API_VERSION . '/id/' . $code;
        return $this->getAssociationRaw($url);
    }

    /**
     * @param string $code
     * @return object|null
     * @throws SiretMalformedException
     */
    public function getAssociationBySiret(string $code): ?object
    {
        if (!Detect::isSiret($code)) {
            throw new SiretMalformedException();
        }

        $url = self::REMOTE_API_PREFIX . self::REMOTE_API_VERSION . '/siret/' . $code;
        return $this->getAssociationRaw($url);
    }

    /**
     * @param $url
     * @return object|null
     */
    private function getAssociationRaw($url): ?object
    {
        $client = new Client(['verify' => false]);
        try {
            $res = $client->request('GET', $url);

            if ($res->getStatusCode() === 200) {
                $body = $res->getBody()->getContents();
                return json_decode($body);
            }

            return null;
        } catch (GuzzleException $e) {
            return null;
        }
    }
}
