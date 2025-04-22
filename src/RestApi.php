<?php
namespace Rest;
class RestApi
{
    /**
     * source url : https://restcountries.com/#rest-countries
     * @var $name;
     * @var $lang;
     * @var $code;
     * @var $region;
     * @var $translation;
     */

    public  $name;
    public  $lang;
    public  $code;
    public  $region;
    public  $translation;
    public  $capital;

    /**
     * @return false|string
     */
    public function getAll()
    {
        $response =file_get_contents('https://restcountries.com/v3.1/all');
        return $response;
    }

    /**
     * @return false|string
     * Search by country name. If you want to get an exact match, use the next endpoint. It can be the common or official value
     */
    public  function getName()
    {
        $response =file_get_contents('https://restcountries.com/v3.1/name/'.$this->name);
        return $response;
    }

    /**
     * @return false|string
     * Search by country’s full name. It can be the common or official value
     */
    public  function getFullName()
    {
        $response =file_get_contents('https://restcountries.com/v3.1/name/'.$this->name.'?fullText=true');
        return $response;
    }

    /**
     * @return false|string
     * Search by cca2, ccn3, cca3 or cioc country code (yes, any!)
     */
    public  function getCode()
    {
        $response =file_get_contents('https://restcountries.com/v3.1/alpha/'.$this->code);
        return $response;
    }

    /**
     * @return false|string
     * Search by language code or name
     */
    public  function getLang()
    {
        $response =file_get_contents('https://restcountries.com/v3.1/lang/'.$this->lang);
        return $response;
    }

    public  function getCapital()
    {
        $response =file_get_contents('https://restcountries.com/v3.1/capital/'.$this->capital);
        return $response;
    }
    /**
     * @return false|string
     * Search by region (replace X with the version you want to use)
     */


    public  function getRegion()
    {
        $response =file_get_contents('https://restcountries.com/v3.1/region/'.$this->region);
        return $response;
    }

    /**
     * @return false|string
     * You can search by any translation name
     */
    public  function getTranslation()
    {
        $response =file_get_contents('https://restcountries.com/v3.1/translation/'.$this->translation);
        return $response;
    }
    /**
     * @return false|string
     * You can filter the output of your request to include only the specified fields.
     * https://restcountries.com/v3.1/{service}?fields={field},{field},{field}
     */
    public  function getFiltrResponse()
    {
        $response =file_get_contents('https://restcountries.com/v3.1/all?fields='.$this->name.','.$this->capital);
        return $response;
    }
}

$rest=new RestApi();
$rest->region='Asia';
$rest->getRegion();