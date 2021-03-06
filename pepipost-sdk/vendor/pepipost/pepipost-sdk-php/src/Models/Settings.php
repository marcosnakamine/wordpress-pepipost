<?php 
/*
 * PepipostAPIV10Lib
 *
 * This file was automatically generated by APIMATIC v2.0 on 04/08/2016
 */

namespace PepipostAPIV10Lib\Models;

use JsonSerializable;

class Settings implements JsonSerializable {
    /**
     * TODO: Write general description for this property
     * @param bool|null $footer public property
     */
    protected $footer;

    /**
     * TODO: Write general description for this property
     * @param bool|null $clicktrack public property
     */
    protected $clicktrack;

    /**
     * TODO: Write general description for this property
     * @param bool|null $opentrack public property
     */
    protected $opentrack;

    /**
     * TODO: Write general description for this property
     * @param bool|null $unsubscribe public property
     */
    protected $unsubscribe;

    /**
     * TODO: Write general description for this property
     * @param string|null $bcc public property
     */
    protected $bcc;

    /**
     * TODO: Write general description for this property
     * @param string|null $attachmentid public property
     */
    protected $attachmentid;

    /**
     * TODO: Write general description for this property
     * @param int|null $template public property
     */
    protected $template;

    /**
     * Constructor to set initial or default values of member properties
	 * @param   bool|null         $footer         Initialization value for the property $this->footer      
	 * @param   bool|null         $clicktrack     Initialization value for the property $this->clicktrack  
	 * @param   bool|null         $opentrack      Initialization value for the property $this->opentrack   
	 * @param   bool|null         $unsubscribe    Initialization value for the property $this->unsubscribe 
	 * @param   string|null       $bcc            Initialization value for the property $this->bcc         
	 * @param   string|null       $attachmentid   Initialization value for the property $this->attachmentid
	 * @param   int|null          $template       Initialization value for the property $this->template    
     */
    public function __construct()
    {
        switch(func_num_args())      
        {
            case 7:
                $this->footer       = func_get_arg(0);
                $this->clicktrack   = func_get_arg(1);
                $this->opentrack    = func_get_arg(2);
                $this->unsubscribe  = func_get_arg(3);
                $this->bcc          = func_get_arg(4);
                $this->attachmentid = func_get_arg(5);
                $this->template     = func_get_arg(6);
                break;

            default:
                $this->footer = true;
                $this->clicktrack = true;
                $this->opentrack = true;
                $this->unsubscribe = true;
                break;
        }
    }

    /**
     * Return a property of the response if it exists.
     * Possibilities include: code, raw_body, headers, body (if the response is json-decodable)
     * @return mixed
     */
    public function __get($property)
    {
        if (property_exists($this, $property)) {
            //UTF-8 is recommended for correct JSON serialization
            $value = $this->$property;
            if (is_string($value) && mb_detect_encoding($value, "UTF-8", TRUE) != "UTF-8") {
                return utf8_encode($value);
            }
            else {
                return $value;
            }
        }
    }
    
    /**
     * Set the properties of this object
     * @param string $property the property name
     * @param mixed $value the property value
     */
    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            //UTF-8 is recommended for correct JSON serialization
            if (is_string($value) && mb_detect_encoding($value, "UTF-8", TRUE) != "UTF-8") {
                $this->$property = utf8_encode($value);
            }
            else {
                $this->$property = $value;
            }
        }

        return $this;
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['footer']       = $this->footer;
        $json['clicktrack']   = $this->clicktrack;
        $json['opentrack']    = $this->opentrack;
        $json['unsubscribe']  = $this->unsubscribe;
        $json['bcc']          = $this->bcc;
        $json['attachmentid'] = $this->attachmentid;
        $json['template']     = $this->template;
        return $json;
    }
}