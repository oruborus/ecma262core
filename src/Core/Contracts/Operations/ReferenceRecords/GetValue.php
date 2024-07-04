<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\ReferenceRecords;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ReferenceRecord;

interface GetValue
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-getvalue
     *
     * @psalm-assert LanguageValue|ReferenceRecord $v
     *
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, LanguageValue|ReferenceRecord|AbruptCompletion $v): LanguageValue;
}
