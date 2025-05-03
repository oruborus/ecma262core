<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\IteratorObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\IteratorRecord;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ListValue;

interface CreateListIteratorRecord
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-createlistiteratorRecord
     *
     * @param ListValue<LanguageValue> $list
     */
    public function __invoke(Agent $agent, ListValue $list): IteratorRecord;
}
