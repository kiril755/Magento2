<?php
namespace Magento\Shipping\Model\Rate\Result;

/**
 * ProxyDeferred class for @see \Magento\Shipping\Model\Rate\Result
 */
class ProxyDeferred extends \Magento\Shipping\Model\Rate\Result implements \Magento\Framework\ObjectManager\NoninterceptableInterface
{
    /**
     * Proxied instance
     *
     * @var string
     */
    private $instance = null;

    /**
     * Deferred to wait for
     *
     * @var string
     */
    private $deferred = null;

    /**
     * ProxyDeferred constructor
     *
     * @param \Magento\Framework\ObjectManager\DefinitionFactory $objectManager
     */
    public function __construct(\Magento\Framework\Async\DeferredInterface $deferred)
    {
        $this->deferred = $deferred;
    }

    /**
     * Serialize only the instance
     *
     * @return array
     */
    public function __sleep()
    {
        $this->wait();
        return ['instance'];
    }

    /**
     * Clone proxied instance
     */
    public function __clone()
    {
        $this->wait();
        $this->instance = clone $this->instance;
    }

    /**
     * Get proxied instance
     *
     * @return \Magento\Shipping\Model\Rate\Result
     */
    private function wait()
    {
        if (!$this->instance) {
            $this->instance = $this->deferred->get();
            if (!$this->instance instanceof \Magento\Shipping\Model\Rate\Result) {
                throw new \RuntimeException('Wrong instance returned by deferred');
            }
        }
        return $this->instance;
    }

    /**
     * @inheritDoc
     */
    public function reset()
    {
        $this->wait();
        return $this->instance->reset();
    }

    /**
     * @inheritDoc
     */
    public function setError($error)
    {
        $this->wait();
        return $this->instance->setError($error);
    }

    /**
     * @inheritDoc
     */
    public function getError()
    {
        $this->wait();
        return $this->instance->getError();
    }

    /**
     * @inheritDoc
     */
    public function append($result)
    {
        $this->wait();
        return $this->instance->append($result);
    }

    /**
     * @inheritDoc
     */
    public function getAllRates()
    {
        $this->wait();
        return $this->instance->getAllRates();
    }

    /**
     * @inheritDoc
     */
    public function getRateById($id)
    {
        $this->wait();
        return $this->instance->getRateById($id);
    }

    /**
     * @inheritDoc
     */
    public function getRatesByCarrier($carrier)
    {
        $this->wait();
        return $this->instance->getRatesByCarrier($carrier);
    }

    /**
     * @inheritDoc
     */
    public function asArray()
    {
        $this->wait();
        return $this->instance->asArray();
    }

    /**
     * @inheritDoc
     */
    public function getCheapestRate()
    {
        $this->wait();
        return $this->instance->getCheapestRate();
    }

    /**
     * @inheritDoc
     */
    public function sortRatesByPrice()
    {
        $this->wait();
        return $this->instance->sortRatesByPrice();
    }

    /**
     * @inheritDoc
     */
    public function updateRatePrice($packageCount)
    {
        $this->wait();
        return $this->instance->updateRatePrice($packageCount);
    }
}
