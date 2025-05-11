<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\EnvironmentRecords;

use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\EnvironmentRecord;
use Oru\EcmaScript\Core\Contracts\Values\NullValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectEnvironmentRecord;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface NewObjectEnvironment
{
    /**
     * @see https://tc39.es/ecma262/#sec-newobjectenvironment
     */
    public function __invoke(ObjectValue $o, BooleanValue $w, NullValue|EnvironmentRecord $e): ObjectEnvironmentRecord;
}
