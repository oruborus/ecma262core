<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;

interface Engine
{
    public function addFiles(string ...$paths): void;

    public function addCode(string $source, ?string $file = null, bool $isModuleCode = false): void;

    /** @param callable():LanguageValue $job */
    public function addJob(callable $job): void;

    public function run(): LanguageValue|AbruptCompletion;

    public Agent $agent { get; }

    /** @var array<string, mixed> $hostDefinedProperties */
    public array $hostDefinedProperties { get; }

    /** @return array<int, string> */
    public function getSupportedFeatures(): array;
}
