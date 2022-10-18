<?php
/**
 * GetInboundEmailEventsByUuid
 *
 * PHP version 5
 *
 * @category Class
 * @package  SendinBlue\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SendinBlue API
 *
 * SendinBlue provide a RESTFul API that can be used with any languages. With this API, you will be able to :   - Manage your campaigns and get the statistics   - Manage your contacts   - Send transactional Emails and SMS   - and much more...  You can download our wrappers at https://github.com/orgs/sendinblue  **Possible responses**   | Code | Message |   | :-------------: | ------------- |   | 200  | OK. Successful Request  |   | 201  | OK. Successful Creation |   | 202  | OK. Request accepted |   | 204  | OK. Successful Update/Deletion  |   | 400  | Error. Bad Request  |   | 401  | Error. Authentication Needed  |   | 402  | Error. Not enough credit, plan upgrade needed  |   | 403  | Error. Permission denied  |   | 404  | Error. Object does not exist |   | 405  | Error. Method not allowed  |   | 406  | Error. Not Acceptable  |
 *
 * OpenAPI spec version: 3.0.0
 * Contact: contact@sendinblue.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.19
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SendinBlue\Client\Model;

use \ArrayAccess;
use \SendinBlue\Client\ObjectSerializer;

/**
 * GetInboundEmailEventsByUuid Class Doc Comment
 *
 * @category Class
 * @package  SendinBlue\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetInboundEmailEventsByUuid implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'getInboundEmailEventsByUuid';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'receivedAt' => '\DateTime',
        'deliveredAt' => '\DateTime',
        'recipient' => 'string',
        'sender' => 'string',
        'messageId' => 'string',
        'subject' => 'string',
        'attachments' => '\SendinBlue\Client\Model\GetInboundEmailEventsByUuidAttachments[]',
        'logs' => '\SendinBlue\Client\Model\GetInboundEmailEventsByUuidLogs[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'receivedAt' => 'date-time',
        'deliveredAt' => 'date-time',
        'recipient' => 'email',
        'sender' => 'email',
        'messageId' => null,
        'subject' => null,
        'attachments' => null,
        'logs' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'receivedAt' => 'receivedAt',
        'deliveredAt' => 'deliveredAt',
        'recipient' => 'recipient',
        'sender' => 'sender',
        'messageId' => 'messageId',
        'subject' => 'subject',
        'attachments' => 'attachments',
        'logs' => 'logs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'receivedAt' => 'setReceivedAt',
        'deliveredAt' => 'setDeliveredAt',
        'recipient' => 'setRecipient',
        'sender' => 'setSender',
        'messageId' => 'setMessageId',
        'subject' => 'setSubject',
        'attachments' => 'setAttachments',
        'logs' => 'setLogs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'receivedAt' => 'getReceivedAt',
        'deliveredAt' => 'getDeliveredAt',
        'recipient' => 'getRecipient',
        'sender' => 'getSender',
        'messageId' => 'getMessageId',
        'subject' => 'getSubject',
        'attachments' => 'getAttachments',
        'logs' => 'getLogs'
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
        return self::$swaggerModelName;
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
        $this->container['receivedAt'] = isset($data['receivedAt']) ? $data['receivedAt'] : null;
        $this->container['deliveredAt'] = isset($data['deliveredAt']) ? $data['deliveredAt'] : null;
        $this->container['recipient'] = isset($data['recipient']) ? $data['recipient'] : null;
        $this->container['sender'] = isset($data['sender']) ? $data['sender'] : null;
        $this->container['messageId'] = isset($data['messageId']) ? $data['messageId'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['attachments'] = isset($data['attachments']) ? $data['attachments'] : null;
        $this->container['logs'] = isset($data['logs']) ? $data['logs'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets receivedAt
     *
     * @return \DateTime
     */
    public function getReceivedAt()
    {
        return $this->container['receivedAt'];
    }

    /**
     * Sets receivedAt
     *
     * @param \DateTime $receivedAt Date when email was received on SMTP relay
     *
     * @return $this
     */
    public function setReceivedAt($receivedAt)
    {
        $this->container['receivedAt'] = $receivedAt;

        return $this;
    }

    /**
     * Gets deliveredAt
     *
     * @return \DateTime
     */
    public function getDeliveredAt()
    {
        return $this->container['deliveredAt'];
    }

    /**
     * Sets deliveredAt
     *
     * @param \DateTime $deliveredAt Date when email was delivered successfully to client’s webhook
     *
     * @return $this
     */
    public function setDeliveredAt($deliveredAt)
    {
        $this->container['deliveredAt'] = $deliveredAt;

        return $this;
    }

    /**
     * Gets recipient
     *
     * @return string
     */
    public function getRecipient()
    {
        return $this->container['recipient'];
    }

    /**
     * Sets recipient
     *
     * @param string $recipient Recipient’s email address
     *
     * @return $this
     */
    public function setRecipient($recipient)
    {
        $this->container['recipient'] = $recipient;

        return $this;
    }

    /**
     * Gets sender
     *
     * @return string
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param string $sender Sender’s email address
     *
     * @return $this
     */
    public function setSender($sender)
    {
        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets messageId
     *
     * @return string
     */
    public function getMessageId()
    {
        return $this->container['messageId'];
    }

    /**
     * Sets messageId
     *
     * @param string $messageId Value of the Message-ID header. This will be present only after the processing is done.
     *
     * @return $this
     */
    public function setMessageId($messageId)
    {
        $this->container['messageId'] = $messageId;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject Value of the Subject header. This will be present only after the processing is done.
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return \SendinBlue\Client\Model\GetInboundEmailEventsByUuidAttachments[]
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \SendinBlue\Client\Model\GetInboundEmailEventsByUuidAttachments[] $attachments List of attachments of the email. This will be present only after the processing is done.
     *
     * @return $this
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets logs
     *
     * @return \SendinBlue\Client\Model\GetInboundEmailEventsByUuidLogs[]
     */
    public function getLogs()
    {
        return $this->container['logs'];
    }

    /**
     * Sets logs
     *
     * @param \SendinBlue\Client\Model\GetInboundEmailEventsByUuidLogs[] $logs List of events/logs that describe the lifecycle of the email on SIB platform
     *
     * @return $this
     */
    public function setLogs($logs)
    {
        $this->container['logs'] = $logs;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    public function offsetGet($offset): mixed
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


