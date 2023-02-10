<?php
/**
 * LoginRequest.
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
 * The version of the OpenAPI document: v1.1.18
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
 * Class representing the LoginRequest model.
 *
 * @author  OpenAPI Generator team
 */
class LoginRequest
{
  /**
   * Name of the user.
   *
   * @SerializedName("username")
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   *
   * @Assert\Length(
   *     max=180
   * )
   * @Assert\Length(
   *     min=3
   * )
   */
  protected ?string $username = null;

  /**
   * A secure password.
   *
   * @SerializedName("password")
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   *
   * @Assert\Length(
   *     max=4096
   * )
   * @Assert\Length(
   *     min=6
   * )
   */
  protected ?string $password = null;

  /**
   * Constructor.
   *
   * @param array|null $data Associated array of property values initializing the model
   */
  public function __construct(array $data = null)
  {
    $this->username = $data['username'] ?? null;
    $this->password = $data['password'] ?? null;
  }

  /**
   * Gets username.
   */
  public function getUsername(): ?string
  {
    return $this->username;
  }

  /**
   * Sets username.
   *
   * @param string|null $username Name of the user
   *
   * @return $this
   */
  public function setUsername(?string $username = null): self
  {
    $this->username = $username;

    return $this;
  }

  /**
   * Gets password.
   */
  public function getPassword(): ?string
  {
    return $this->password;
  }

  /**
   * Sets password.
   *
   * @param string|null $password A secure password
   *
   * @return $this
   */
  public function setPassword(?string $password = null): self
  {
    $this->password = $password;

    return $this;
  }
}
