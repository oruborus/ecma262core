<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Realms;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\RealmRecord;

interface CreateIntrinsics
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-createintrinsics
     * @see https://262.ecma-international.org/12.0/#table-well-known-intrinsic-objects
     *
     * @return array<string, ObjectValue>
     */
    public function __invoke(Agent $agent, RealmRecord $realmRecord): array;
}
