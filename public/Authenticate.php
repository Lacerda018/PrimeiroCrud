<?php

namespace app\library;

use Google\Client;

class Authenticate
{
    public function authGoogle($dataClass)
    {

        $person = $service->people->get('people/me');

        $nome = $person->getNames()[0]->getDisplayName();
        $email = $person->getEmailAddresses()[0]->getValue();
    }

    public function auth()
    {

    }
}
