<?php
/**
 * Column
 *
 * PHP version 5
 *
 * @category Class
 * @package  HubSpot\Client\Cms\Hubdb
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * HubDB endpoints
 *
 * HubDB is a relational data store that presents data as rows, columns, and cells in a table, much like a spreadsheet. HubDB tables can be added or modified [in the HubSpot CMS](https://knowledge.hubspot.com/cos-general/how-to-edit-hubdb-tables), but you can also use the API endpoints documented here. For more information on HubDB tables and using their data on a HubSpot site, see the [CMS developers site](https://designers.hubspot.com/docs/tools/hubdb). You can also see the [documentation for dynamic pages](https://designers.hubspot.com/docs/tutorials/how-to-build-dynamic-pages-with-hubdb) for more details about the `useForPages` field.  HubDB tables support `draft` and `live` versions and you can publish and unpublish the live version. This allows you to update data in the table, either for testing or to allow for a manual approval process, without affecting any live pages using the existing data. Draft data can be reviewed, pushed to live version, and published by a user working in HubSpot or published via the API. Draft data can also be discarded, allowing users to go back to the live version of the data without disrupting it. If a table is set to be `allowed for public access`, you can access the published version of the table and rows without any authentication by specifying the portal id via the query parameter `portalId`.
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

namespace HubSpot\Client\Cms\Hubdb\Model;

use \ArrayAccess;
use \HubSpot\Client\Cms\Hubdb\ObjectSerializer;

/**
 * Column Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Cms\Hubdb
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Column implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Column';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'label' => 'string',
        'id' => 'string',
        'width' => 'int',
        'foreign_table_id' => 'int',
        'foreign_column_id' => 'int',
        'foreign_ids' => '\HubSpot\Client\Cms\Hubdb\Model\ForeignId[]',
        'foreign_ids_by_name' => 'map[string,\HubSpot\Client\Cms\Hubdb\Model\ForeignId]',
        'foreign_ids_by_id' => 'map[string,\HubSpot\Client\Cms\Hubdb\Model\ForeignId]',
        'type' => 'string',
        'option_count' => 'int',
        'archived' => 'bool',
        'options' => '\HubSpot\Client\Cms\Hubdb\Model\Option[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'name' => null,
        'label' => null,
        'id' => null,
        'width' => 'int32',
        'foreign_table_id' => 'int64',
        'foreign_column_id' => 'int32',
        'foreign_ids' => null,
        'foreign_ids_by_name' => null,
        'foreign_ids_by_id' => null,
        'type' => null,
        'option_count' => 'int32',
        'archived' => null,
        'options' => null
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
        'name' => 'name',
        'label' => 'label',
        'id' => 'id',
        'width' => 'width',
        'foreign_table_id' => 'foreignTableId',
        'foreign_column_id' => 'foreignColumnId',
        'foreign_ids' => 'foreignIds',
        'foreign_ids_by_name' => 'foreignIdsByName',
        'foreign_ids_by_id' => 'foreignIdsById',
        'type' => 'type',
        'option_count' => 'optionCount',
        'archived' => 'archived',
        'options' => 'options'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'label' => 'setLabel',
        'id' => 'setId',
        'width' => 'setWidth',
        'foreign_table_id' => 'setForeignTableId',
        'foreign_column_id' => 'setForeignColumnId',
        'foreign_ids' => 'setForeignIds',
        'foreign_ids_by_name' => 'setForeignIdsByName',
        'foreign_ids_by_id' => 'setForeignIdsById',
        'type' => 'setType',
        'option_count' => 'setOptionCount',
        'archived' => 'setArchived',
        'options' => 'setOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'label' => 'getLabel',
        'id' => 'getId',
        'width' => 'getWidth',
        'foreign_table_id' => 'getForeignTableId',
        'foreign_column_id' => 'getForeignColumnId',
        'foreign_ids' => 'getForeignIds',
        'foreign_ids_by_name' => 'getForeignIdsByName',
        'foreign_ids_by_id' => 'getForeignIdsById',
        'type' => 'getType',
        'option_count' => 'getOptionCount',
        'archived' => 'getArchived',
        'options' => 'getOptions'
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

    const TYPE_NULL = 'NULL';
    const TYPE_TEXT = 'TEXT';
    const TYPE_NUMBER = 'NUMBER';
    const TYPE_URL = 'URL';
    const TYPE_IMAGE = 'IMAGE';
    const TYPE_SELECT = 'SELECT';
    const TYPE_MULTISELECT = 'MULTISELECT';
    const TYPE_BOOLEAN = 'BOOLEAN';
    const TYPE_LOCATION = 'LOCATION';
    const TYPE_DATE = 'DATE';
    const TYPE_DATETIME = 'DATETIME';
    const TYPE_CURRENCY = 'CURRENCY';
    const TYPE_RICHTEXT = 'RICHTEXT';
    const TYPE_FOREIGN_ID = 'FOREIGN_ID';
    const TYPE_VIDEO = 'VIDEO';
    const TYPE_CTA = 'CTA';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_NULL,
            self::TYPE_TEXT,
            self::TYPE_NUMBER,
            self::TYPE_URL,
            self::TYPE_IMAGE,
            self::TYPE_SELECT,
            self::TYPE_MULTISELECT,
            self::TYPE_BOOLEAN,
            self::TYPE_LOCATION,
            self::TYPE_DATE,
            self::TYPE_DATETIME,
            self::TYPE_CURRENCY,
            self::TYPE_RICHTEXT,
            self::TYPE_FOREIGN_ID,
            self::TYPE_VIDEO,
            self::TYPE_CTA,
        ];
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['foreign_table_id'] = isset($data['foreign_table_id']) ? $data['foreign_table_id'] : null;
        $this->container['foreign_column_id'] = isset($data['foreign_column_id']) ? $data['foreign_column_id'] : null;
        $this->container['foreign_ids'] = isset($data['foreign_ids']) ? $data['foreign_ids'] : null;
        $this->container['foreign_ids_by_name'] = isset($data['foreign_ids_by_name']) ? $data['foreign_ids_by_name'] : null;
        $this->container['foreign_ids_by_id'] = isset($data['foreign_ids_by_id']) ? $data['foreign_ids_by_id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['option_count'] = isset($data['option_count']) ? $data['option_count'] : null;
        $this->container['archived'] = isset($data['archived']) ? $data['archived'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['label'] === null) {
            $invalidProperties[] = "'label' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the column
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label Label of the column
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Column Id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int|null
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int|null $width Column width for HubDB UI
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets foreign_table_id
     *
     * @return int|null
     */
    public function getForeignTableId()
    {
        return $this->container['foreign_table_id'];
    }

    /**
     * Sets foreign_table_id
     *
     * @param int|null $foreign_table_id Foreign table id referenced
     *
     * @return $this
     */
    public function setForeignTableId($foreign_table_id)
    {
        $this->container['foreign_table_id'] = $foreign_table_id;

        return $this;
    }

    /**
     * Gets foreign_column_id
     *
     * @return int|null
     */
    public function getForeignColumnId()
    {
        return $this->container['foreign_column_id'];
    }

    /**
     * Sets foreign_column_id
     *
     * @param int|null $foreign_column_id Foreign Column id
     *
     * @return $this
     */
    public function setForeignColumnId($foreign_column_id)
    {
        $this->container['foreign_column_id'] = $foreign_column_id;

        return $this;
    }

    /**
     * Gets foreign_ids
     *
     * @return \HubSpot\Client\Cms\Hubdb\Model\ForeignId[]|null
     */
    public function getForeignIds()
    {
        return $this->container['foreign_ids'];
    }

    /**
     * Sets foreign_ids
     *
     * @param \HubSpot\Client\Cms\Hubdb\Model\ForeignId[]|null $foreign_ids Foreign Ids
     *
     * @return $this
     */
    public function setForeignIds($foreign_ids)
    {
        $this->container['foreign_ids'] = $foreign_ids;

        return $this;
    }

    /**
     * Gets foreign_ids_by_name
     *
     * @return map[string,\HubSpot\Client\Cms\Hubdb\Model\ForeignId]|null
     */
    public function getForeignIdsByName()
    {
        return $this->container['foreign_ids_by_name'];
    }

    /**
     * Sets foreign_ids_by_name
     *
     * @param map[string,\HubSpot\Client\Cms\Hubdb\Model\ForeignId]|null $foreign_ids_by_name Foreign ids by name
     *
     * @return $this
     */
    public function setForeignIdsByName($foreign_ids_by_name)
    {
        $this->container['foreign_ids_by_name'] = $foreign_ids_by_name;

        return $this;
    }

    /**
     * Gets foreign_ids_by_id
     *
     * @return map[string,\HubSpot\Client\Cms\Hubdb\Model\ForeignId]|null
     */
    public function getForeignIdsById()
    {
        return $this->container['foreign_ids_by_id'];
    }

    /**
     * Sets foreign_ids_by_id
     *
     * @param map[string,\HubSpot\Client\Cms\Hubdb\Model\ForeignId]|null $foreign_ids_by_id Foreign ids
     *
     * @return $this
     */
    public function setForeignIdsById($foreign_ids_by_id)
    {
        $this->container['foreign_ids_by_id'] = $foreign_ids_by_id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Type of the column
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets option_count
     *
     * @return int|null
     */
    public function getOptionCount()
    {
        return $this->container['option_count'];
    }

    /**
     * Sets option_count
     *
     * @param int|null $option_count Number of options available
     *
     * @return $this
     */
    public function setOptionCount($option_count)
    {
        $this->container['option_count'] = $option_count;

        return $this;
    }

    /**
     * Gets archived
     *
     * @return bool|null
     */
    public function getArchived()
    {
        return $this->container['archived'];
    }

    /**
     * Sets archived
     *
     * @param bool|null $archived Specifies whether the column is archived
     *
     * @return $this
     */
    public function setArchived($archived)
    {
        $this->container['archived'] = $archived;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \HubSpot\Client\Cms\Hubdb\Model\Option[]|null
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \HubSpot\Client\Cms\Hubdb\Model\Option[]|null $options Options to choose for select and multi-select columns
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

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


