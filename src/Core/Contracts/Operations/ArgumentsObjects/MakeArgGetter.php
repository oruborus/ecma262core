<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\ArgumentsObjects;

use Oru\EcmaScript\Core\Contracts\Values\EnvironmentRecord;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface MakeArgGetter
{
    /**
     * @see https://tc39.es/ecma262/#sec-makearggetter
     */
    public function __invoke(StringValue $name, EnvironmentRecord $env): ObjectValue;
}
