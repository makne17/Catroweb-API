<?php
/**
 * UpgradeTokenRequest.
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
 * The version of the OpenAPI document: v1.1.10
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
 * Class representing the UpgradeTokenRequest model.
 *
 * @author  OpenAPI Generator team
 */
class UpgradeTokenRequest
{
  /**
   * @SerializedName("upload_token")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected ?string $upload_token = null;

  /**
   * Constructor.
   *
   * @param array|null $data Associated array of property values initializing the model
   */
  public function __construct(array $data = null)
  {
    $this->upload_token = $data['upload_token'] ?? null;
  }

  /**
   * Gets upload_token.
   */
  public function getUploadToken(): ?string
  {
    return $this->upload_token;
  }

  /**
   * Sets upload_token.
   *
   * @return $this
   */
  public function setUploadToken(string $upload_token = null): self
  {
    $this->upload_token = $upload_token;

    return $this;
  }
}
