<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Scripts;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\RealmRecord;
use Oru\EcmaScript\Core\Contracts\Values\ScriptRecord;

interface ParseScript
{
    /**
     * @see https://tc39.es/ecma262/#sec-parse-script
     *
     * @param ListValue<int> $sourceText
     * @return ScriptRecord|ListValue<ObjectValue>
     */
    public function __invoke(Agent $agent, ListValue $sourceText, RealmRecord $realm, mixed $hostDefined): ScriptRecord|ListValue;
}
