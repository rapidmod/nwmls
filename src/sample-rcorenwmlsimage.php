<?php
/**
 * Test with RcoreNwmlsImage for 'http://images.idx.nwmls.com/imageservice/imagequery.asmx?WSDL'
 * @package RcoreNwmlsImage
 * @author RapidMod.com
 * @author 813.330.0522
 * @version 20150429-01
 * @date 2017-01-04
 */
ini_set('memory_limit','512M');
ini_set('display_errors',true);
error_reporting(-1);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/RcoreNwmlsImageAutoload.php';
/**
 * Wsdl instanciation infos. By default, nothing has to be set.
 * If you wish to override the SoapClient's options, please refer to the sample below.
 *
 * This is an associative array as:
 * - the key must be a RcoreNwmlsImageWsdlClass constant beginning with WSDL_
 * - the value must be the corresponding key value
 * Each option matches the {@link http://www.php.net/manual/en/soapclient.soapclient.php} options
 *
 * Here is below an example of how you can set the array:
 * $wsdl = array();
 * $wsdl[RcoreNwmlsImageWsdlClass::WSDL_URL] = 'http://images.idx.nwmls.com/imageservice/imagequery.asmx?WSDL';
 * $wsdl[RcoreNwmlsImageWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
 * $wsdl[RcoreNwmlsImageWsdlClass::WSDL_TRACE] = true;
 * $wsdl[RcoreNwmlsImageWsdlClass::WSDL_LOGIN] = 'myLogin';
 * $wsdl[RcoreNwmlsImageWsdlClass::WSDL_PASSWD] = '**********';
 * etc....
 * Then instantiate the Service class as:
 * - $wsdlObject = new RcoreNwmlsImageWsdlClass($wsdl);
 */
/**
 * Examples
 */


/********************************************
 * Example for RcoreNwmlsImageServiceRetrieve
 */
$rcoreNwmlsImageServiceRetrieve = new RcoreNwmlsImageServiceRetrieve();
// sample call for RcoreNwmlsImageServiceRetrieve::RetrieveImages()
if($rcoreNwmlsImageServiceRetrieve->RetrieveImages(new RcoreNwmlsImageStructRetrieveImages(/*** update parameters list ***/)))
    print_r($rcoreNwmlsImageServiceRetrieve->getResult());
else
    print_r($rcoreNwmlsImageServiceRetrieve->getLastError());
