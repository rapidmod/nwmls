<?php
/**
 * File for class RcoreNwmlsImageStructRetrieveImages
 * @package RcoreNwmlsImage
 * @subpackage Structs
 * @author RapidMod.com
 * @author 813.330.0522
 * @version 20150429-01
 * @date 2017-01-04
 */
/**
 * This class stands for RcoreNwmlsImageStructRetrieveImages originally named RetrieveImages
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://images.idx.nwmls.com/imageservice/imagequery.asmx?WSDL}
 * @package RcoreNwmlsImage
 * @subpackage Structs
 * @author RapidMod.com
 * @author 813.330.0522
 * @version 20150429-01
 * @date 2017-01-04
 */
class RcoreNwmlsImageStructRetrieveImages extends RcoreNwmlsImageWsdlClass
{
    /**
     * The query
     * Meta informations extracted from the WSDL
     * - maxOccurs : 1
     * - minOccurs : 0
     * @var string
     */
    public $query;
    /**
     * Constructor method for RetrieveImages
     * @see parent::__construct()
     * @param string $_query
     * @return RcoreNwmlsImageStructRetrieveImages
     */
    public function __construct($_query = NULL)
    {
        parent::__construct(array('query'=>$_query),false);
    }
    /**
     * Get query value
     * @return string|null
     */
    public function getQuery()
    {
        return $this->query;
    }
    /**
     * Set query value
     * @param string $_query the query
     * @return string
     */
    public function setQuery($_query)
    {
        return ($this->query = $_query);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see RcoreNwmlsImageWsdlClass::__set_state()
     * @uses RcoreNwmlsImageWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return RcoreNwmlsImageStructRetrieveImages
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
