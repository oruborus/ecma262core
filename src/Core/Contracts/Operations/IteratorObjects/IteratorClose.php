<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\IteratorObjects;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\IteratorRecord;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;

interface IteratorClose
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-iteratorclose
     *
     * @throws AbruptCompletion
     */
    public function __invoke(IteratorRecord $iteratorRecord, LanguageValue|AbruptCompletion $completion): LanguageValue;
}
