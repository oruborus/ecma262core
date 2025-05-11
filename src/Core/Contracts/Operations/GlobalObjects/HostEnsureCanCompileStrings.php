<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\GlobalObjects;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\RealmRecord;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\UnusedValue;

interface HostEnsureCanCompileStrings
{
    /**
     * @see https://tc39.es/ecma262/#sec-hostensurecancompilestrings
     *
     * @param ListValue<StringValue> $parameterStrings
     * @throws AbruptCompletion
     */
    public function __invoke(RealmRecord $calleeRealm, ListValue $parameterStrings, StringValue $bodyString, BooleanValue $direct): UnusedValue;
}
