<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Modules;

use Oru\EcmaScript\Core\Contracts\Values\EmptyValue;
use Oru\EcmaScript\Core\Contracts\Values\ModuleRecord;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface GetModuleNamespace
{
    /**
     * @see https://tc39.es/ecma262/#sec-getmodulenamespace
     */
    public function __invoke(ModuleRecord $module): ObjectValue|EmptyValue;
}
