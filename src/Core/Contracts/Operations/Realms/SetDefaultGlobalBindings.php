<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Realms;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\RealmRecord;

interface SetDefaultGlobalBindings
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-setdefaultglobalbindings
     *
     * @throws AbruptCompletion
     */
    public function __invoke(RealmRecord $realmRec): ObjectValue;
}
