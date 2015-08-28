<?php
/**
 * Created by PhpStorm.
 * User: umutcan
 * Date: 8/28/15
 * Time: 4:36 PM
 */

class Store extends \siwcms\Operation {

    protected function preRun()
    {
        $data = parent::getData();
        $resourceUri = JURI::base()."index.php?com_content&view=article&id=".$data["articleID"];
        $annotation =  new EasyRdf_Graph($resourceUri);
        foreach ($data["entityIDs"] as $entityID) {
            $annotation->addResource($resourceUri, "sioc:about", "http://www.mni.thm.de/user/".$entityID);
        }
        parent::setData($annotation->serialise("rdfxml"));
    }

    /**
     * @return null
     */
    protected function processResult()
    {
        // TODO: Implement processResult() method.
        $result = parent::getResult();
        return $result;
    }
}