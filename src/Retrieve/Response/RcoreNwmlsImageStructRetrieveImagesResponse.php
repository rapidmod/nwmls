<?php
/**
 * File for class RcoreNwmlsImageStructRetrieveImagesResponse
 * @package RcoreNwmlsImage
 * @subpackage Structs
 * @author RapidMod.com
 * @author 813.330.0522
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for RcoreNwmlsImageStructRetrieveImagesResponse originally named RetrieveImagesResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://images.idx.nwmls.com/imageservice/imagequery.asmx?WSDL}
 * @package RcoreNwmlsImage
 * @subpackage Structs
 * @author RapidMod.com
 * @author 813.330.0522
 * @version 20150429-01
 * @date 2017-01-04
 */
class RcoreNwmlsImageStructRetrieveImagesResponse extends RcoreNwmlsImageWsdlClass
{
    /**
     * The RetrieveImagesResult
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $RetrieveImagesResult;
    /**
     * Constructor method for RetrieveImagesResponse
     * @see parent::__construct()
     * @param string $_retrieveImagesResult
     * @return RcoreNwmlsImageStructRetrieveImagesResponse
     */
    public function __construct($_retrieveImagesResult = NULL)
    {
        parent::__construct(array('RetrieveImagesResult'=>$_retrieveImagesResult),false);
    }
    /**
     * Get RetrieveImagesResult value
     * @return string|null
     */
    public function getRetrieveImagesResult()
    {
        return $this->RetrieveImagesResult;
    }
    /**
     * Set RetrieveImagesResult value
     * @param string $_retrieveImagesResult the RetrieveImagesResult
     * @return string
     */
    public function setRetrieveImagesResult($_retrieveImagesResult)
    {
        return ($this->RetrieveImagesResult = $_retrieveImagesResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see RcoreNwmlsImageWsdlClass::__set_state()
     * @uses RcoreNwmlsImageWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return RcoreNwmlsImageStructRetrieveImagesResponse
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
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
