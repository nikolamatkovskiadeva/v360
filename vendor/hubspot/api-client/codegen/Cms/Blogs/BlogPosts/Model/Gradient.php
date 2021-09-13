<?php
/**
 * Gradient
 *
 * PHP version 5
 *
 * @category Class
 * @package  HubSpot\Client\Cms\Blogs\BlogPosts
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Blog Post endpoints
 *
 * \"Use these endpoints for interacting with Blog Posts, Blog Authors, and Blog Tags\"
 *
 * The version of the OpenAPI document: v3
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\Cms\Blogs\BlogPosts\Model;

use \ArrayAccess;
use \HubSpot\Client\Cms\Blogs\BlogPosts\ObjectSerializer;

/**
 * Gradient Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Cms\Blogs\BlogPosts
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Gradient implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Gradient';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'side_or_corner' => '\HubSpot\Client\Cms\Blogs\BlogPosts\Model\SideOrCorner',
        'angle' => '\HubSpot\Client\Cms\Blogs\BlogPosts\Model\Angle',
        'colors' => '\HubSpot\Client\Cms\Blogs\BlogPosts\Model\ColorStop[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'side_or_corner' => null,
        'angle' => null,
        'colors' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'side_or_corner' => 'sideOrCorner',
        'angle' => 'angle',
        'colors' => 'colors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'side_or_corner' => 'setSideOrCorner',
        'angle' => 'setAngle',
        'colors' => 'setColors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'side_or_corner' => 'getSideOrCorner',
        'angle' => 'getAngle',
        'colors' => 'getColors'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['side_or_corner'] = isset($data['side_or_corner']) ? $data['side_or_corner'] : null;
        $this->container['angle'] = isset($data['angle']) ? $data['angle'] : null;
        $this->container['colors'] = isset($data['colors']) ? $data['colors'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['side_or_corner'] === null) {
            $invalidProperties[] = "'side_or_corner' can't be null";
        }
        if ($this->container['angle'] === null) {
            $invalidProperties[] = "'angle' can't be null";
        }
        if ($this->container['colors'] === null) {
            $invalidProperties[] = "'colors' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets side_or_corner
     *
     * @return \HubSpot\Client\Cms\Blogs\BlogPosts\Model\SideOrCorner
     */
    public function getSideOrCorner()
    {
        return $this->container['side_or_corner'];
    }

    /**
     * Sets side_or_corner
     *
     * @param \HubSpot\Client\Cms\Blogs\BlogPosts\Model\SideOrCorner $side_or_corner side_or_corner
     *
     * @return $this
     */
    public function setSideOrCorner($side_or_corner)
    {
        $this->container['side_or_corner'] = $side_or_corner;

        return $this;
    }

    /**
     * Gets angle
     *
     * @return \HubSpot\Client\Cms\Blogs\BlogPosts\Model\Angle
     */
    public function getAngle()
    {
        return $this->container['angle'];
    }

    /**
     * Sets angle
     *
     * @param \HubSpot\Client\Cms\Blogs\BlogPosts\Model\Angle $angle angle
     *
     * @return $this
     */
    public function setAngle($angle)
    {
        $this->container['angle'] = $angle;

        return $this;
    }

    /**
     * Gets colors
     *
     * @return \HubSpot\Client\Cms\Blogs\BlogPosts\Model\ColorStop[]
     */
    public function getColors()
    {
        return $this->container['colors'];
    }

    /**
     * Sets colors
     *
     * @param \HubSpot\Client\Cms\Blogs\BlogPosts\Model\ColorStop[] $colors colors
     *
     * @return $this
     */
    public function setColors($colors)
    {
        $this->container['colors'] = $colors;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


