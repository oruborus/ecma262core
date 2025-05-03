<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Modules;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\RealmRecord;
use Oru\EcmaScript\Core\Contracts\Values\SourceTextModuleRecord;

interface ParseModule
{
    /**
     * @see https://tc39.es/ecma262/#sec-parse-module
     *
     * @param ListValue<int> $sourceText
     * @return SourceTextModuleRecord|ListValue<ObjectValue>
     */
    public function __invoke(Agent $agent, ListValue $sourceText, RealmRecord $realm, mixed $hostDefined): SourceTextModuleRecord|ListValue;
}
