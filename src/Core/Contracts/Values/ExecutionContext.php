<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;


interface ExecutionContext extends SpecificationValue
{
    public function setFunction(ObjectValue $function): void;

    public function getFunction(): ObjectValue;

    public function setRealm(RealmRecord $realmRecord): void;

    public function getRealm(): RealmRecord;

    public function hasScriptOrModule(): bool;

    public function setScriptOrModule(ScriptRecord|ModuleRecord|NullValue $scriptOrModule): void;

    public function getScriptOrModule(): ScriptRecord|ModuleRecord|NullValue;

    public function setLexicalEnvironment(EnvironmentRecord $lexicalEnvironment): void;

    public function getLexicalEnvironment(): EnvironmentRecord;

    public function setPrivateEnvironment(PrivateEnvironmentRecord $privateEnvironment): void;

    public function getPrivateEnvironment(): NullValue|PrivateEnvironmentRecord;

    public function setVariableEnvironment(EnvironmentRecord $variableEnvironment): void;

    public function getVariableEnvironment(): EnvironmentRecord;

    /**
     * @throws AbruptCompletion
     */
    public function resume(null|LanguageValue|AbruptCompletion $resumptionValue = null): LanguageValue;

    /**
     * @throws AbruptCompletion
     */
    public function suspend(null|LanguageValue|AbruptCompletion $suspensionValue = null): LanguageValue;

    public function isSuspended(): bool;

    /**
     * @param callable(LanguageValue|AbruptCompletion=): LanguageValue $callable
     * @throws AbruptCompletion
     */
    public function runInContext(callable $callable): LanguageValue;

    public function setGenerator(UndefinedValue|ObjectValue $value): void;

    public function getGenerator(): UndefinedValue|ObjectValue;

    /** @param ?callable(LanguageValue|AbruptCompletion=): LanguageValue $state */
    public function setEvaluationState(?callable $state): void;
}
