<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;


interface ModuleEnvironmentRecord extends DeclarativeEnvironmentRecord
{
    public function createImportBinding(StringValue $n, ModuleRecord $m, StringValue $n2): UnusedValue;

    public function getThisBinding(): UndefinedValue;

    public function getSuperBase(): ObjectValue|UndefinedValue;
}
