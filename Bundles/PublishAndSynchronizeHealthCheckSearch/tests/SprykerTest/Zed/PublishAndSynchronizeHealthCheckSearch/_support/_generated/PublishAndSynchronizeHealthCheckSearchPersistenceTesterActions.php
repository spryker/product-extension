<?php  //[STAMP] 33e7b3f27e98b914033bc587770ad02c
namespace SprykerTest\Zed\PublishAndSynchronizeHealthCheckSearch\_generated;

// This class was automatically generated by build task
// You should not change it manually as it will be overwritten on next build
// @codingStandardsIgnoreFile

trait PublishAndSynchronizeHealthCheckSearchPersistenceTesterActions
{
    /**
     * @return \Codeception\Scenario
     */
    abstract protected function getScenario();

    
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Sets a class instance into the Locator cache to ensure the mocked instance is returned when
     * `$locator->moduleName()->type()` is used.
     *
     * !!! When this method is used the locator will not re-initialize classes with `new` but will return
     * always the already resolved instances. This can have but should not have side-effects.
     *
     * @param string $cacheKey
     * @param mixed $classInstance
     *
     * @return void
     * @see \SprykerTest\Shared\Testify\Helper\LocatorHelper::addToLocatorCache()
     */
    public function addToLocatorCache(string $cacheKey, $classInstance): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('addToLocatorCache', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $key
     * @param array|bool|float|int|string $value
     *
     * @return void
     * @see \SprykerTest\Shared\Testify\Helper\ConfigHelper::setConfig()
     */
    public function setConfig(string $key, $value): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('setConfig', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @return \Spryker\Shared\Kernel\LocatorLocatorInterface|\Generated\Zed\Ide\AutoCompletion|\Generated\Service\Ide\AutoCompletion|\Generated\Glue\Ide\AutoCompletion
     * @see \SprykerTest\Shared\Testify\Helper\LocatorHelper::getLocator()
     */
    public function getLocator() {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('getLocator', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string|null $moduleName
     *
     * @return \Spryker\Zed\Kernel\Business\AbstractFacade
     * @see \SprykerTest\Zed\Testify\Helper\Business\BusinessHelper::getFacade()
     */
    public function getFacade(?string $moduleName = NULL): \Spryker\Zed\Kernel\Business\AbstractFacade {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('getFacade', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param \Closure $closure
     *
     * @return void
     * @see \SprykerTest\Shared\Testify\Helper\DataCleanupHelper::addCleanup()
     */
    public function addCleanup(\Closure $closure): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('addCleanup', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @return \Generated\Shared\Transfer\PublishAndSynchronizeHealthCheckTransfer
     * @see \SprykerTest\Zed\PublishAndSynchronizeHealthCheck\Helper\PublishAndSynchronizeHealthCheckDataHelper::havePublishAndSynchronizeHealthCheck()
     */
    public function havePublishAndSynchronizeHealthCheck(): \Generated\Shared\Transfer\PublishAndSynchronizeHealthCheckTransfer {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('havePublishAndSynchronizeHealthCheck', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $key
     *
     * @return void
     * @see \SprykerTest\Client\Search\Helper\SearchHelper::assertSearchHasKey()
     */
    public function assertSearchHasKey(string $key): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('assertSearchHasKey', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $key
     *
     * @return void
     * @see \SprykerTest\Client\Search\Helper\SearchHelper::assertSearchNotHasKey()
     */
    public function assertSearchNotHasKey(string $key): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('assertSearchNotHasKey', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * This will clean-up the in-memory storage.
     *
     * @return void
     * @see \SprykerTest\Client\Search\Helper\SearchHelper::cleanupInMemorySearch()
     */
    public function cleanupInMemorySearch(): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('cleanupInMemorySearch', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @return \Spryker\Client\Queue\QueueClientInterface
     * @see \SprykerTest\Client\Queue\Helper\QueueHelper::getClient()
     */
    public function getClient(): \Spryker\Client\Queue\QueueClientInterface {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('getClient', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $key
     * @param mixed $value
     * @param string|null $onlyFor
     *
     * @return void
     * @see \SprykerTest\Zed\Testify\Helper\AbstractDependencyProviderHelper::setDependency()
     */
    public function setDependency($key, $value, $onlyFor = NULL) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('setDependency', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $methodName
     * @param mixed $return
     * @param string|null $moduleName
     *
     * @throws \Exception
     *
     * @return \Spryker\Zed\Kernel\AbstractBundleDependencyProvider
     * @see \SprykerTest\Zed\Testify\Helper\AbstractDependencyProviderHelper::mockDependencyProviderMethod()
     */
    public function mockDependencyProviderMethod(string $methodName, $return, ?string $moduleName = NULL): \Spryker\Zed\Kernel\AbstractBundleDependencyProvider {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('mockDependencyProviderMethod', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string|null $moduleName
     *
     * @return \Spryker\Zed\Kernel\Container
     * @see \SprykerTest\Zed\Testify\Helper\AbstractDependencyProviderHelper::getModuleContainer()
     */
    public function getModuleContainer(?string $moduleName = NULL): \Spryker\Zed\Kernel\Container {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('getModuleContainer', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $methodName
     * @param mixed $return
     * @param string|null $moduleName
     *
     * @throws \Exception
     *
     * @return object|\Spryker\Zed\Kernel\Business\AbstractBusinessFactory
     * @see \SprykerTest\Zed\Testify\Helper\Business\BusinessHelper::mockFactoryMethod()
     */
    public function mockFactoryMethod(string $methodName, $return, ?string $moduleName = NULL) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('mockFactoryMethod', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string|null $moduleName
     *
     * @return \Spryker\Zed\Kernel\Business\AbstractBusinessFactory
     * @see \SprykerTest\Zed\Testify\Helper\Business\BusinessHelper::getFactory()
     */
    public function getFactory(?string $moduleName = NULL): \Spryker\Zed\Kernel\Business\AbstractBusinessFactory {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('getFactory', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $methodName
     * @param mixed $return
     * @param string|null $moduleName
     *
     * @throws \Exception
     *
     * @return \Spryker\Client\Kernel\AbstractClient
     * @see \SprykerTest\Client\Testify\Helper\ClientHelper::mockClientMethod()
     */
    public function mockClientMethod(string $methodName, $return, ?string $moduleName = NULL) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('mockClientMethod', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $key
     * @param array|bool|float|int|string $value
     *
     * @return void
     * @see \SprykerTest\Shared\Testify\Helper\ConfigHelper::mockEnvironmentConfig()
     */
    public function mockEnvironmentConfig(string $key, $value): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('mockEnvironmentConfig', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $methodName
     * @param mixed $return
     * @param string|null $moduleName
     *
     * @throws \Exception
     *
     * @return \Spryker\Shared\Kernel\AbstractBundleConfig|null
     * @see \SprykerTest\Shared\Testify\Helper\ConfigHelper::mockConfigMethod()
     */
    public function mockConfigMethod(string $methodName, $return, ?string $moduleName = NULL): ?\Spryker\Shared\Kernel\AbstractBundleConfig {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('mockConfigMethod', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $methodName
     * @param mixed $return
     * @param string|null $moduleName
     *
     * @throws \Exception
     *
     * @return \Spryker\Shared\Kernel\AbstractSharedConfig|null
     * @see \SprykerTest\Shared\Testify\Helper\ConfigHelper::mockSharedConfigMethod()
     */
    public function mockSharedConfigMethod(string $methodName, $return, ?string $moduleName = NULL): ?\Spryker\Shared\Kernel\AbstractSharedConfig {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('mockSharedConfigMethod', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string|null $moduleName
     *
     * @return \Spryker\Shared\Kernel\AbstractBundleConfig
     * @see \SprykerTest\Shared\Testify\Helper\ConfigHelper::getModuleConfig()
     */
    public function getModuleConfig(?string $moduleName = NULL): \Spryker\Shared\Kernel\AbstractBundleConfig {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('getModuleConfig', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string|null $moduleName
     *
     * @return \Spryker\Shared\Kernel\AbstractSharedConfig|null
     * @see \SprykerTest\Shared\Testify\Helper\ConfigHelper::getSharedModuleConfig()
     */
    public function getSharedModuleConfig(?string $moduleName = NULL): ?\Spryker\Shared\Kernel\AbstractSharedConfig {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('getSharedModuleConfig', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $key
     *
     * @return void
     * @see \SprykerTest\Shared\Testify\Helper\ConfigHelper::removeConfig()
     */
    public function removeConfig(string $key): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('removeConfig', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Helper method to:
     * - Assert at least 1 entry for the given `$eventName` exists in the `SpyEventBehaviorEntityChangeTableMap::TABLE_NAME` database table.
     * - Trigger runtime events to load the data from the `SpyEventBehaviorEntityChangeTableMap::TABLE_NAME` database table
     *   and add entries to the `$expectedPublishQueueName` queue.
     * - Assert that at least 1 message exists in the `$expectedPublishQueueName` queue.
     * - Assert that messages are consumed from the `$expectedPublishQueueName` and the queue is in a healthy state.
     *
     * Healthy state means that all messages which are received from the queue are either acknowledged, rejected or errored.
     *
     * @param string $eventName
     * @param string $expectedPublishQueueName
     *
     * @return void
     * @see \SprykerTest\Zed\Publisher\Helper\PublishAndSynchronizeHelper::assertEntityIsPublished()
     */
    public function assertEntityIsPublished(string $eventName, string $expectedPublishQueueName): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('assertEntityIsPublished', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Helper method to:
     * - Trigger manual event for passed `$ids` to let the assigned listeners for this event do it's job
     *   and add entries to the `$expectedPublishQueueName` queue.
     * - Assert that at least 1 message exists in the `$expectedPublishQueueName` queue.
     * - Assert that messages are consumed from the `$expectedPublishQueueName` and the queue is in a healthy state.
     *
     * Healthy state means that all messages which are received from the queue are either acknowledged, rejected or errored.
     *
     * @param string $eventName
     * @param array $ids
     * @param string $expectedPublishQueueName
     *
     * @return void
     * @see \SprykerTest\Zed\Publisher\Helper\PublishAndSynchronizeHelper::assertEntityCanBeManuallyPublished()
     */
    public function assertEntityCanBeManuallyPublished(string $eventName, array $ids, string $expectedPublishQueueName): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('assertEntityCanBeManuallyPublished', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Helper method to:
     * - Assert that at least 1 message exists in the `$expectedSyncQueueName` queue.
     * - Assert that messages are consumed from the `$expectedSyncQueueName` and the queue is in a healthy state.
     *
     * Healthy state means that all messages which are received from the queue are either acknowledged, rejected or errored.
     *
     * @param string $expectedSyncQueueName
     *
     * @return void
     * @see \SprykerTest\Zed\Publisher\Helper\PublishAndSynchronizeHelper::assertEntityIsSynchronizedToStorage()
     */
    public function assertEntityIsSynchronizedToStorage(string $expectedSyncQueueName): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('assertEntityIsSynchronizedToStorage', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Helper method to:
     * - Assert that at least 1 message exists in the `$expectedSyncQueueName` queue.
     * - Assert that messages are consumed from the `$expectedPublishQueueName` and the queue is in a healthy state.
     *
     * Healthy state means that all messages which are received from the queue are either acknowledged, rejected or errored.
     *
     * @param string $expectedSyncQueueName
     *
     * @return void
     * @see \SprykerTest\Zed\Publisher\Helper\PublishAndSynchronizeHelper::assertEntityIsUpdatedInStorage()
     */
    public function assertEntityIsUpdatedInStorage(string $expectedSyncQueueName): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('assertEntityIsUpdatedInStorage', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Helper method to:
     * - Assert that at least 1 message exists in the `$expectedSyncQueueName` queue.
     * - Assert that messages are consumed from the `$expectedPublishQueueName` and the queue is in a healthy state.
     *
     * Healthy state means that all messages which are received from the queue are either acknowledged, rejected or errored.
     *
     * @param string $expectedSyncQueueName
     *
     * @return void
     * @see \SprykerTest\Zed\Publisher\Helper\PublishAndSynchronizeHelper::assertEntityIsRemovedFromStorage()
     */
    public function assertEntityIsRemovedFromStorage(string $expectedSyncQueueName): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('assertEntityIsRemovedFromStorage', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Helper method to:
     * - Assert that at least 1 message exists in the `$expectedSyncQueueName` queue.
     * - Assert that messages are consumed from the `$expectedPublishQueueName` and the queue is in a healthy state.
     *
     * Healthy state means that all messages which are received from the queue are either acknowledged, rejected or errored.
     *
     * @param string $expectedSyncQueueName
     *
     * @return void
     * @see \SprykerTest\Zed\Publisher\Helper\PublishAndSynchronizeHelper::assertEntityIsSynchronizedToSearch()
     */
    public function assertEntityIsSynchronizedToSearch(string $expectedSyncQueueName): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('assertEntityIsSynchronizedToSearch', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Helper method to:
     * - Assert that at least 1 message exists in the `$expectedSyncQueueName` queue.
     * - Assert that messages are consumed from the `$expectedPublishQueueName` and the queue is in a healthy state.
     *
     * Healthy state means that all messages which are received from the queue are either acknowledged, rejected or errored.
     *
     * @param string $expectedSyncQueueName
     *
     * @return void
     * @see \SprykerTest\Zed\Publisher\Helper\PublishAndSynchronizeHelper::assertEntityIsUpdatedInSearch()
     */
    public function assertEntityIsUpdatedInSearch(string $expectedSyncQueueName): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('assertEntityIsUpdatedInSearch', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Helper method to:
     * - Assert that at least 1 message exists in the `$expectedSyncQueueName` queue.
     * - Assert that messages are consumed from the `$expectedPublishQueueName` and the queue is in a healthy state.
     *
     * Healthy state means that all messages which are received from the queue are either acknowledged, rejected or errored.
     *
     * @param string $expectedSyncQueueName
     *
     * @return void
     * @see \SprykerTest\Zed\Publisher\Helper\PublishAndSynchronizeHelper::assertEntityIsRemovedFromSearch()
     */
    public function assertEntityIsRemovedFromSearch(string $expectedSyncQueueName): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('assertEntityIsRemovedFromSearch', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Loads entities from `SpyEventBehaviorEntityChangeTableMap::TABLE_NAME` and adds them to the event queue.
     *
     * @return void
     * @see \SprykerTest\Zed\EventBehavior\Helper\EventBehaviorHelper::triggerRuntimeEvents()
     */
    public function triggerRuntimeEvents(): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('triggerRuntimeEvents', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * The EventBehavior adds methods to entities and saves a copy of the relevant data in it's own database table. This
     * table should have at least one line added for the `$eventName`.
     *
     * @param string $eventName
     *
     * @return void
     * @see \SprykerTest\Zed\EventBehavior\Helper\EventBehaviorHelper::assertAtLeastOneEventBehaviorEntityChangeEntryExistsForEvent()
     */
    public function assertAtLeastOneEventBehaviorEntityChangeEntryExistsForEvent(string $eventName): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('assertAtLeastOneEventBehaviorEntityChangeEntryExistsForEvent', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * This will clean-up the in-memory queue.
     *
     * @return void
     * @see \SprykerTest\Client\Queue\Helper\QueueHelper::cleanupInMemoryQueue()
     */
    public function cleanupInMemoryQueue(): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('cleanupInMemoryQueue', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $queueName
     *
     * @return void
     * @see \SprykerTest\Client\Queue\Helper\QueueHelper::assertMessagesConsumedFromEventQueue()
     */
    public function assertMessagesConsumedFromEventQueue(string $queueName): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('assertMessagesConsumedFromEventQueue', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Assert that at least `$expectedMessageCount` messages found in the given `$queueName`.
     *
     * @param string $queueName
     * @param int $expectedMessageCount
     *
     * @return void
     * @see \SprykerTest\Client\Queue\Helper\QueueHelper::assertQueueMessageCount()
     */
    public function assertQueueMessageCount(string $queueName, int $expectedMessageCount = 1): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('assertQueueMessageCount', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $queueName
     * @param string|null $expectedStorageKeyThatShouldExist
     *
     * @return void
     * @see \SprykerTest\Client\Queue\Helper\QueueHelper::assertMessagesConsumedFromQueueAndSyncedToStorage()
     */
    public function assertMessagesConsumedFromQueueAndSyncedToStorage(string $queueName, ?string $expectedStorageKeyThatShouldExist = NULL): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('assertMessagesConsumedFromQueueAndSyncedToStorage', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $queueName
     * @param string|null $expectedStorageKeyThatShouldExist
     *
     * @return void
     * @see \SprykerTest\Client\Queue\Helper\QueueHelper::assertMessagesConsumedFromQueueAndUpdatedInStorage()
     */
    public function assertMessagesConsumedFromQueueAndUpdatedInStorage(string $queueName, ?string $expectedStorageKeyThatShouldExist = NULL): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('assertMessagesConsumedFromQueueAndUpdatedInStorage', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $queueName
     * @param string|null $expectedStorageKeyThatGetsRemoved
     *
     * @return void
     * @see \SprykerTest\Client\Queue\Helper\QueueHelper::assertMessagesConsumedFromQueueAndRemovedFromStorage()
     */
    public function assertMessagesConsumedFromQueueAndRemovedFromStorage(string $queueName, ?string $expectedStorageKeyThatGetsRemoved = NULL): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('assertMessagesConsumedFromQueueAndRemovedFromStorage', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $queueName
     * @param string|null $expectedSearchKeyThatShouldExist
     *
     * @return void
     * @see \SprykerTest\Client\Queue\Helper\QueueHelper::assertMessagesConsumedFromQueueAndSyncedToSearch()
     */
    public function assertMessagesConsumedFromQueueAndSyncedToSearch(string $queueName, ?string $expectedSearchKeyThatShouldExist = NULL): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('assertMessagesConsumedFromQueueAndSyncedToSearch', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $queueName
     * @param string|null $expectedSearchKeyThatShouldExist
     *
     * @return void
     * @see \SprykerTest\Client\Queue\Helper\QueueHelper::assertMessagesConsumedFromQueueAndUpdatedInSearch()
     */
    public function assertMessagesConsumedFromQueueAndUpdatedInSearch(string $queueName, ?string $expectedSearchKeyThatShouldExist = NULL): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('assertMessagesConsumedFromQueueAndUpdatedInSearch', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $queueName
     * @param string|null $expectedSearchKeyThatGetsRemoved
     *
     * @return void
     * @see \SprykerTest\Client\Queue\Helper\QueueHelper::assertMessagesConsumedFromQueueAndRemovedFromSearch()
     */
    public function assertMessagesConsumedFromQueueAndRemovedFromSearch(string $queueName, ?string $expectedSearchKeyThatGetsRemoved = NULL): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('assertMessagesConsumedFromQueueAndRemovedFromSearch', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @return \SprykerTest\Client\Queue\Helper\InMemoryAdapterInterface
     * @see \SprykerTest\Client\Queue\Helper\QueueHelper::getInMemoryQueueAdapter()
     */
    public function getInMemoryQueueAdapter(): \SprykerTest\Client\Queue\Helper\InMemoryAdapterInterface {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('getInMemoryQueueAdapter', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $methodName
     * @param mixed $return
     * @param string|null $moduleName
     *
     * @throws \Exception
     *
     * @return \Spryker\Zed\Kernel\Business\AbstractFacade
     * @see \SprykerTest\Zed\Testify\Helper\Business\BusinessHelper::mockFacadeMethod()
     */
    public function mockFacadeMethod(string $methodName, $return, ?string $moduleName = NULL) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('mockFacadeMethod', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $methodName
     * @param mixed $return
     * @param string|null $moduleName
     *
     * @throws \Exception
     *
     * @return object|\Spryker\Zed\Kernel\Business\AbstractBusinessFactory
     * @see \SprykerTest\Zed\Testify\Helper\Business\BusinessHelper::mockSharedFactoryMethod()
     */
    public function mockSharedFactoryMethod(string $methodName, $return, ?string $moduleName = NULL) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('mockSharedFactoryMethod', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param EventSubscriberInterface $eventSubscriber
     *
     * @return void
     * @see \SprykerTest\Zed\Event\Helper\EventHelper::addEventSubscriber()
     */
    public function addEventSubscriber(\Spryker\Zed\Event\Dependency\Plugin\EventSubscriberInterface $eventSubscriber): void {
        $this->getScenario()->runStep(new \Codeception\Step\Action('addEventSubscriber', func_get_args()));
    }
}
