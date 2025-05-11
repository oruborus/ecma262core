<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\CompletionRecords;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;

interface UpdateEmpty
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-updateempty
     *
     * @throws AbruptCompletion
     */
    public function __invoke(null|LanguageValue|AbruptCompletion $completionRecord, LanguageValue $value): LanguageValue;
}
