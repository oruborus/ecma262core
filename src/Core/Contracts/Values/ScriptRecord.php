<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Nodes\Node;

interface ScriptRecord extends SpecificationValue
{
    public function setRealm(RealmRecord|UndefinedValue $value): void;

    public function getRealm(Agent $agent): RealmRecord;

    public function setEnvironment(EnvironmentRecord|UndefinedValue $value): void;

    public function getEnvironment(Agent $agent): EnvironmentRecord;

    public function setEcmaScriptCode(?Node $value): void;

    public function getEcmaScriptCode(Agent $agent): ?Node;

    public function setHostDefined(mixed $value): void;

    public function getHostDefined(): mixed;
}
