<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\IteratorObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\IteratorRecord;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;

interface AsyncIteratorClose
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-asynciteratorclose
     *
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, IteratorRecord $iteratorRecord, LanguageValue|AbruptCompletion $completion): LanguageValue;
}
