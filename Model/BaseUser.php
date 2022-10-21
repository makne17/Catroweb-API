<?php
/**
 * BaseUser.
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
 * The version of the OpenAPI document: v1.1.16
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
 * Class representing the BaseUser model.
 *
 * @author  OpenAPI Generator team
 */
class BaseUser
{
  /**
   * Email of the user.
   *
   * @SerializedName("email")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected ?string $email = null;

  /**
   * Name of the user | minLength: 3 | maxLength: 180.
   *
   * @SerializedName("username")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected ?string $username = null;

  /**
   * A secure password | minLength: 6 | maxLength: 4096.
   *
   * @SerializedName("password")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected ?string $password = null;

  /**
   * The profile picture of the user in data URI scheme.
   *
   * @SerializedName("picture")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected ?string $picture = null;

  /**
   * An introduction of the user.
   *
   * @SerializedName("about")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected ?string $about = null;

  /**
   * A short description about the project the user is currently working on.
   *
   * @SerializedName("currentlyWorkingOn")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected ?string $currently_working_on = null;

  /**
   * Constructor.
   *
   * @param array|null $data Associated array of property values initializing the model
   */
  public function __construct(array $data = null)
  {
    $this->email = $data['email'] ?? null;
    $this->username = $data['username'] ?? null;
    $this->password = $data['password'] ?? null;
    $this->picture = $data['picture'] ?? null;
    $this->about = $data['about'] ?? null;
    $this->currently_working_on = $data['currently_working_on'] ?? null;
  }

  /**
   * Gets email.
   */
  public function getEmail(): ?string
  {
    return $this->email;
  }

  /**
   * Sets email.
   *
   * @param string|null $email Email of the user
   *
   * @return $this
   */
  public function setEmail(?string $email = null): self
  {
    $this->email = $email;

    return $this;
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
   * @param string|null $username Name of the user | minLength: 3 | maxLength: 180
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
   * @param string|null $password A secure password | minLength: 6 | maxLength: 4096
   *
   * @return $this
   */
  public function setPassword(?string $password = null): self
  {
    $this->password = $password;

    return $this;
  }

  /**
   * Gets picture.
   */
  public function getPicture(): ?string
  {
    return $this->picture;
  }

  /**
   * Sets picture.
   *
   * @param string|null $picture the profile picture of the user in data URI scheme
   *
   * @return $this
   */
  public function setPicture(?string $picture = null): self
  {
    $this->picture = $picture;

    return $this;
  }

  /**
   * Gets about.
   */
  public function getAbout(): ?string
  {
    return $this->about;
  }

  /**
   * Sets about.
   *
   * @param string|null $about an introduction of the user
   *
   * @return $this
   */
  public function setAbout(?string $about = null): self
  {
    $this->about = $about;

    return $this;
  }

  /**
   * Gets currently_working_on.
   */
  public function getCurrentlyWorkingOn(): ?string
  {
    return $this->currently_working_on;
  }

  /**
   * Sets currently_working_on.
   *
   * @param string|null $currently_working_on a short description about the project the user is currently working on
   *
   * @return $this
   */
  public function setCurrentlyWorkingOn(?string $currently_working_on = null): self
  {
    $this->currently_working_on = $currently_working_on;

    return $this;
  }
}
