<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\DefaultMethods;

use Oru\EcmaScript\Core\Contracts\FieldName;

interface HasDefaultMethods
{
    public function defaultMethod(FieldName $methodName): callable;
}
