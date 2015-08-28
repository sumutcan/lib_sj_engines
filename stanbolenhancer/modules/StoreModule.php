<?php
use siwcms\Operation;

/**
 * Created by PhpStorm.
 * User: umutcan
 * Date: 8/28/15
 * Time: 4:08 PM
 */

class StoreModule extends siwcms\SemanticEngineModule {

    /**
     * @param $url
     * @param Operation $operation
     * @param null array $moduleOptions
     */
    public function __construct($url, array $moduleOptions = null)
    {
        parent::setUrl($url);
    }

    /**
     * @param $operationName
     * @param Operation $operation
     */
    public function registerOperation($operationName, siwcms\Operation $operation)
    {
        parent::registerOperation($operationName, $operation);
    }
}