<?php
/**
 * Created by PhpStorm.
 * User: umutcan
 * Date: 8/19/15
 * Time: 1:35 AM
 */

$dynamicPath = dirname(__FILE__);
define("STANBOL_ENHANCER_PATH", $dynamicPath);

require_once $dynamicPath."/EntityAnnotation.php";
require_once $dynamicPath."/TextAnnotation.php";
require_once $dynamicPath."/engines/StanbolEngine.php";
require_once $dynamicPath."/modules/StanbolEnhancer.php";
require_once $dynamicPath."/operations/Enhance.php";
require_once $dynamicPath."/Person.php";
require_once $dynamicPath."/operations/Store.php";
require_once $dynamicPath."/modules/StoreModule.php";

/*class StanbolEngineInit {


    public static function init($url)
    {
        EasyRdf_Namespace::set("stanbol","http://fise.iks-project.eu/ontology/");
        $engine = new StanbolEngine("\"admin,admin\"");
        $module = new StanbolEnhancer();
        $operation = new Enhance();

        $module->registerOperation("enhance",$operation);
        $module->setUrl($url);


    }
}*/