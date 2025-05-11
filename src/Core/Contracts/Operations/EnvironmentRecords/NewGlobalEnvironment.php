<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\EnvironmentRecords;

use Oru\EcmaScript\Core\Contracts\Values\GlobalEnvironmentRecord;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface NewGlobalEnvironment
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-newglobalenvironment
     */
    public function __invoke(ObjectValue $g, ObjectValue $thisValue): GlobalEnvironmentRecord;
}
