<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\ProxyObjects;

use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\ThrowCompletion;
use Oru\EcmaScript\Core\Contracts\Values\UnusedValue;

interface ValidateNonRevokedProxy
{
    /**
     * @see https://tc39.es/ecma262/#sec-validatenonrevokedproxy
     *
     * @throws ThrowCompletion
     */
    public function __invoke(ObjectValue $proxy): UnusedValue;
}
