<?php
/**
 * UpdateUserRequestAllOf.
 *
 * PHP version 8.1.1
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
 * The version of the OpenAPI document: v1.1.19
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
 * Class representing the UpdateUserRequestAllOf model.
 *
 * @author  OpenAPI Generator team
 */
class UpdateUserRequestAllOf
{
  /**
   * The current password of the user. Required for changing the password.
   *
   * @SerializedName("currentPassword")
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   */
  protected ?string $current_password = null;

  /**
   * Constructor.
   *
   * @param array|null $data Associated array of property values initializing the model
   */
  public function __construct(array $data = null)
  {
    $this->current_password = $data['current_password'] ?? null;
  }

  /**
   * Gets current_password.
   */
  public function getCurrentPassword(): ?string
  {
    return $this->current_password;
  }

  /**
   * Sets current_password.
   *
   * @param string|null $current_password The current password of the user. Required for changing the password.
   *
   * @return $this
   */
  public function setCurrentPassword(?string $current_password = null): self
  {
    $this->current_password = $current_password;

    return $this;
  }
}
