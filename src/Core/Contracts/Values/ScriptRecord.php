<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

use Oru\EcmaScript\Core\Contracts\Grammars\Node;

interface ScriptRecord extends SpecificationValue
{
    public function setRealm(RealmRecord|UndefinedValue $value): void;

    public function getRealm(): RealmRecord;

    public function setEnvironment(EnvironmentRecord|UndefinedValue $value): void;

    public function getEnvironment(): EnvironmentRecord;

    public function setEcmaScriptCode(?Node $value): void;

    public function getEcmaScriptCode(): ?Node;

    public function setHostDefined(mixed $value): void;

    public function getHostDefined(): mixed;
}
