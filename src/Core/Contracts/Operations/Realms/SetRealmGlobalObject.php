<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Realms;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\RealmRecord;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface SetRealmGlobalObject
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-setrealmglobalobject
     */
    public function __invoke(Agent $agent, RealmRecord $realmRec, ObjectValue|UndefinedValue $globalObj, ObjectValue|UndefinedValue $thisValue): RealmRecord;
}
