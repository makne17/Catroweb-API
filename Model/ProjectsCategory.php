<?php
/**
 * ProjectsCategory.
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
 * Class representing the ProjectsCategory model.
 *
 * @author  OpenAPI Generator team
 */
class ProjectsCategory
{
  /**
   * The name of the categories in english.
   *
   * @SerializedName("type")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected ?string $type = null;

  /**
   * Translated name according to the language header.
   *
   * @SerializedName("name")
   * @Assert\Type("string")
   * @Type("string")
   */
  protected ?string $name = null;

  /**
   * Array of projects.
   *
   * @SerializedName("projectsList")
   * @Assert\All({
   *   @Assert\Type("OpenAPI\Server\Model\ProjectResponse")
   * })
   * @Type("array<OpenAPI\Server\Model\ProjectResponse>")
   */
  protected ?array $projects_list = null;

  /**
   * Constructor.
   *
   * @param array|null $data Associated array of property values initializing the model
   */
  public function __construct(array $data = null)
  {
    $this->type = $data['type'] ?? null;
    $this->name = $data['name'] ?? null;
    $this->projects_list = $data['projects_list'] ?? null;
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
   * @param string|null $type the name of the categories in english
   *
   * @return $this
   */
  public function setType(?string $type = null): self
  {
    $this->type = $type;

    return $this;
  }

  /**
   * Gets name.
   */
  public function getName(): ?string
  {
    return $this->name;
  }

  /**
   * Sets name.
   *
   * @param string|null $name Translated name according to the language header
   *
   * @return $this
   */
  public function setName(?string $name = null): self
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Gets projects_list.
   */
  public function getProjectsList(): ?array
  {
    return $this->projects_list;
  }

  /**
   * Sets projects_list.
   *
   * @param array|null $projects_list Array of projects
   *
   * @return $this
   */
  public function setProjectsList(?array $projects_list = null): self
  {
    $this->projects_list = $projects_list;

    return $this;
  }
}
