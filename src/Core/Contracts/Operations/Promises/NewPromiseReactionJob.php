<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Promises;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\PromiseReaction;
use Oru\EcmaScript\Core\Contracts\Values\PromiseReactionJob;

interface NewPromiseReactionJob
{
    /**
     * @see https://tc39.es/ecma262/#sec-newpromisereactionjob
     * 
     * @throws AbruptCompletion
     */
    public function __invoke(PromiseReaction $reaction, LanguageValue $argument): PromiseReactionJob;
}
