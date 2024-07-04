<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

use Oru\EcmaScript\Core\Contracts\Agent;

/**
 * @see https://tc39.es/ecma262/#table-cyclic-module-fields
 * @see https://tc39.es/ecma262/#table-cyclic-module-methods
 */
interface CyclicModuleRecord extends ModuleRecord
{
    public function status(?Status $status = null): Status;

    public function evaluationError(?ThrowCompletion $evaluationError = null): ThrowCompletion|EmptyValue;

    public function namespace(null|ObjectValue|EmptyValue $namespace = null): ObjectValue|EmptyValue;

    public function hostDefined(mixed $hostDefined = null): mixed;

    /**
     * Initialize the Environment Record of the module, including resolving all imported bindings, 
     * and create the module's execution context.
     *
     * @throws AbruptCompletion
     */
    public function initializeEnvironment(Agent $agent): UnusedValue;

    /**
     * Evaluate the module's code within its execution context.
     * If this module has true in [[HasTLA]], then a PromiseCapability Record is passed as an argument,
     * and the method is expected to resolve or reject the given capability.
     * In this case, the method must not throw an exception,
     * but instead reject the PromiseCapability Record if necessary.
     *
     * @throws AbruptCompletion
     */
    public function executeModule(Agent $agent, ?PromiseCapabilityRecord $promiseCapability = null): UnusedValue;
}
