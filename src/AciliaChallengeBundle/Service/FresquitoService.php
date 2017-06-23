<?php

namespace AciliaChallengeBundle\Service;

use AciliaChallengeBundle\Library\FresquitoServiceInterface;

class FresquitoService implements FresquitoServiceInterface
{
    protected $apiUrl;

    public function setApiUrl($apiUrl)
    {
        $this->apiUrl = $apiUrl;
    }

    public function getResults()
    {
        // Esta función debe leer la api y retornar el listado
        // respetando el formato establecido en http://challenge.acilia.es/bases.html
        return [
            'vigo' => '20',
            'santander' => '25',
            'madrid' => '30'
        ];
    }
}
