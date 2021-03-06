<?php
/**
 * File for class RcoreNwmlsImageServiceRetrieve
 * @package RcoreNwmlsImage
 * @subpackage Services
 * @author RapidMod.com
 * @author 813.330.0522
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for RcoreNwmlsImageServiceRetrieve originally named Retrieve
 * @package RcoreNwmlsImage
 * @subpackage Services
 * @author RapidMod.com
 * @author 813.330.0522
 * @version 20150429-01
 * @date 2017-01-04
 */
class RcoreNwmlsImageServiceRetrieve extends RcoreNwmlsImageWsdlClass
{
    /**
     * Method to call the operation originally named RetrieveImages
     * @uses RcoreNwmlsImageWsdlClass::getSoapClient()
     * @uses RcoreNwmlsImageWsdlClass::setResult()
     * @uses RcoreNwmlsImageWsdlClass::saveLastError()
     * @param RcoreNwmlsImageStructRetrieveImages $_rcoreNwmlsImageStructRetrieveImages
     * @return RcoreNwmlsImageStructRetrieveImagesResponse
     */
    public function RetrieveImages(RcoreNwmlsImageStructRetrieveImages $_rcoreNwmlsImageStructRetrieveImages)
    {
        try
        {
            return $this->setResult(new RcoreNwmlsImageStructRetrieveImagesResponse(self::getSoapClient()->RetrieveImages(array('parameters'=>array($_rcoreNwmlsImageStructRetrieveImages)))->parameters));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see RcoreNwmlsImageWsdlClass::getResult()
     * @return RcoreNwmlsImageStructRetrieveImagesResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
