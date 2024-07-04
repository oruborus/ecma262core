<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

interface PromiseReaction extends SpecificationValue
{
    /**
     * @psalm-mutation-free
     */
    public function capability(): UndefinedValue|PromiseCapabilityRecord;

    /**
     * @psalm-mutation-free
     */
    public function type(): PromiseReactionType;

    /**
     * @psalm-mutation-free
     */
    public function handler(): EmptyValue|JobCallback;
}
