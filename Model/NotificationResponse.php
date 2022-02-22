<?php
/**
 * NotificationResponse.
 *
 * PHP version 7.1.3
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://github.com/openapitools/openapi-generator
 */

/**
 * Catroweb API.
 *
 * API for the Catrobat Share Platform
 *
 * The version of the OpenAPI document: v1.0.72
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class representing the NotificationResponse model.
 *
 * @author  OpenAPI Generator team
 */
class NotificationResponse
{
  /**
   * Id of the notification.
   *
   * @var int|null
   * @SerializedName("id")
   * @Assert\Type("int")
   * @Type("int")
   */
  protected $id;

  /**
   * Notification Type.
   *
   * @var string|null
   * @SerializedName("type")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected $type;

  /**
   * Seen status of the notification.
   *
   * @var bool|null
   * @SerializedName("seen")
   * @Assert\Type("bool")
   * @Type("bool")
   */
  protected $seen;

  /**
   * @var OpenAPI\Server\Model\NotificationContent[]|null
   * @SerializedName("content")
   * @Assert\All({
   *     @Assert\Type("OpenAPI\Server\Model\NotificationContent")
   * })
   * @Type("array<OpenAPI\Server\Model\NotificationContent>")
   */
  protected $content;

  /**
   * Constructor.
   *
   * @param mixed[] $data Associated array of property values initializing the model
   */
  public function __construct(array $data = null)
  {
    $this->id = isset($data['id']) ? $data['id'] : null;
    $this->type = isset($data['type']) ? $data['type'] : null;
    $this->seen = isset($data['seen']) ? $data['seen'] : null;
    $this->content = isset($data['content']) ? $data['content'] : null;
  }

  /**
   * Gets id.
   */
  public function getId(): ?int
  {
    return $this->id;
  }

  /**
   * Sets id.
   *
   * @param int|null $id Id of the notification
   *
   * @return $this
   */
  public function setId(int $id = null)
  {
    $this->id = $id;

    return $this;
  }

  /**
   * Gets type.
   */
  public function getType(): ?string
  {
    return $this->type;
  }

  /**
   * Sets type.
   *
   * @param string|null $type Notification Type
   *
   * @return $this
   */
  public function setType(string $type = null)
  {
    $this->type = $type;

    return $this;
  }

  /**
   * Gets seen.
   */
  public function isSeen(): ?bool
  {
    return $this->seen;
  }

  /**
   * Sets seen.
   *
   * @param bool|null $seen Seen status of the notification
   *
   * @return $this
   */
  public function setSeen(bool $seen = null)
  {
    $this->seen = $seen;

    return $this;
  }

  /**
   * Gets content.
   *
   * @return OpenAPI\Server\Model\NotificationContent[]|null
   */
  public function getContent(): ?array
  {
    return $this->content;
  }

  /**
   * Sets content.
   *
   * @param OpenAPI\Server\Model\NotificationContent[]|null $content
   *
   * @return $this
   */
  public function setContent(array $content = null)
  {
    $this->content = $content;

    return $this;
  }
}
