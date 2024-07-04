<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Realms;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\RealmRecord;

interface CreateRealm
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-createrealm
     */
    public function __invoke(Agent $agent): RealmRecord;
}
