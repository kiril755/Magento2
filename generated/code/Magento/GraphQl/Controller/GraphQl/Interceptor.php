<?php
namespace Magento\GraphQl\Controller\GraphQl;

/**
 * Interceptor class for @see \Magento\GraphQl\Controller\GraphQl
 */
class Interceptor extends \Magento\GraphQl\Controller\GraphQl implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Webapi\Response $response, \Magento\Framework\GraphQl\Schema\SchemaGeneratorInterface $schemaGenerator, \Magento\Framework\Serialize\SerializerInterface $jsonSerializer, \Magento\Framework\GraphQl\Query\QueryProcessor $queryProcessor, \Magento\Framework\GraphQl\Exception\ExceptionFormatter $graphQlError, \Magento\Framework\GraphQl\Query\Resolver\ContextInterface $resolverContext, \Magento\GraphQl\Controller\HttpRequestProcessor $requestProcessor, \Magento\Framework\GraphQl\Query\Fields $queryFields, ?\Magento\Framework\Controller\Result\JsonFactory $jsonFactory = null, ?\Magento\Framework\App\Response\Http $httpResponse = null, ?\Magento\GraphQl\Model\Query\ContextFactoryInterface $contextFactory = null, ?\Magento\GraphQl\Helper\Query\Logger\LogData $logDataHelper = null, ?\Magento\GraphQl\Model\Query\Logger\LoggerPool $loggerPool = null, ?\Magento\Framework\App\AreaList $areaList = null)
    {
        $this->___init();
        parent::__construct($response, $schemaGenerator, $jsonSerializer, $queryProcessor, $graphQlError, $resolverContext, $requestProcessor, $queryFields, $jsonFactory, $httpResponse, $contextFactory, $logDataHelper, $loggerPool, $areaList);
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request) : \Magento\Framework\App\ResponseInterface
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
