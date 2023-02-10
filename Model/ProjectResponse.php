<?php
/**
 * ProjectResponse.
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
 * Class representing the ProjectResponse model.
 *
 * @author  OpenAPI Generator team
 */
class ProjectResponse
{
  /**
   * The unique identifier of the project.
   *
   * @SerializedName("id")
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   */
  protected ?string $id = null;

  /**
   * The name of the project. minLength: 1 | maxLength: 255.
   *
   * @SerializedName("name")
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   */
  protected ?string $name = null;

  /**
   * The name of the projects&#39; author.
   *
   * @SerializedName("author")
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   */
  protected ?string $author = null;

  /**
   * A description of the project.
   *
   * @SerializedName("description")
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   */
  protected ?string $description = null;

  /**
   * Credits and notes for the project. E.g., credits for using ideas, scripts or artwork from other people.
   *
   * @SerializedName("credits")
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   */
  protected ?string $credits = null;

  /**
   * The catrobat version that was used to create this project.
   *
   * @SerializedName("version")
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   */
  protected ?string $version = null;

  /**
   * The projects&#39; count of views.
   *
   * @SerializedName("views")
   *
   * @Assert\Type("int")
   *
   * @Type("int")
   */
  protected ?int $views = null;

  /**
   * The projects&#39; count of downloads. Deprecated. Use downloads.
   *
   * @SerializedName("download")
   *
   * @Assert\Type("int")
   *
   * @Type("int")
   */
  protected ?int $download = null;

  /**
   * The projects&#39; count of downloads.
   *
   * @SerializedName("downloads")
   *
   * @Assert\Type("int")
   *
   * @Type("int")
   */
  protected ?int $downloads = null;

  /**
   * The projects&#39; count of reactions.
   *
   * @SerializedName("reactions")
   *
   * @Assert\Type("int")
   *
   * @Type("int")
   */
  protected ?int $reactions = null;

  /**
   * The projects&#39; count of comments.
   *
   * @SerializedName("comments")
   *
   * @Assert\Type("int")
   *
   * @Type("int")
   */
  protected ?int $comments = null;

  /**
   * Whether a project is publicly visible (false) or only via direct link (true).
   *
   * @SerializedName("private")
   *
   * @Assert\Type("bool")
   *
   * @Type("bool")
   */
  protected ?bool $private = null;

  /**
   * @SerializedName("flavor")
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   */
  protected ?string $flavor = null;

  /**
   * Tags allow projects to be categorized by their creators.
   *
   * @SerializedName("tags")
   *
   * @Assert\All({
   *
   *   @Assert\Type("string")
   * })
   *
   * @Type("array<string>")
   */
  protected ?array $tags = null;

  /**
   * The time of the upload.
   *
   * @SerializedName("uploaded")
   *
   * @Assert\Type("int")
   *
   * @Type("int")
   */
  protected ?int $uploaded = null;

  /**
   * A localised text interpretation of the uploaded timestamp.
   *
   * @SerializedName("uploaded_string")
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   */
  protected ?string $uploaded_string = null;

  /**
   * @SerializedName("screenshot_large")
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   */
  protected ?string $screenshot_large = null;

  /**
   * @SerializedName("screenshot_small")
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   */
  protected ?string $screenshot_small = null;

  /**
   * The url to the project on our official share community platform.
   *
   * @SerializedName("project_url")
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   */
  protected ?string $project_url = null;

  /**
   * The url to GET the catrobat file of this project.
   *
   * @SerializedName("download_url")
   *
   * @Assert\Type("string")
   *
   * @Type("string")
   */
  protected ?string $download_url = null;

  /**
   * The filesize of the catrobat file in megabytes.
   *
   * @SerializedName("filesize")
   *
   * @Assert\Type("float")
   *
   * @Type("float")
   */
  protected ?float $filesize = null;

  /**
   * Constructor.
   *
   * @param array|null $data Associated array of property values initializing the model
   */
  public function __construct(array $data = null)
  {
    $this->id = $data['id'] ?? null;
    $this->name = $data['name'] ?? null;
    $this->author = $data['author'] ?? null;
    $this->description = $data['description'] ?? null;
    $this->credits = $data['credits'] ?? null;
    $this->version = $data['version'] ?? null;
    $this->views = $data['views'] ?? null;
    $this->download = $data['download'] ?? null;
    $this->downloads = $data['downloads'] ?? null;
    $this->reactions = $data['reactions'] ?? null;
    $this->comments = $data['comments'] ?? null;
    $this->private = $data['private'] ?? null;
    $this->flavor = $data['flavor'] ?? null;
    $this->tags = $data['tags'] ?? null;
    $this->uploaded = $data['uploaded'] ?? null;
    $this->uploaded_string = $data['uploaded_string'] ?? null;
    $this->screenshot_large = $data['screenshot_large'] ?? null;
    $this->screenshot_small = $data['screenshot_small'] ?? null;
    $this->project_url = $data['project_url'] ?? null;
    $this->download_url = $data['download_url'] ?? null;
    $this->filesize = $data['filesize'] ?? null;
  }

  /**
   * Gets id.
   */
  public function getId(): ?string
  {
    return $this->id;
  }

  /**
   * Sets id.
   *
   * @param string|null $id The unique identifier of the project
   *
   * @return $this
   */
  public function setId(?string $id = null): self
  {
    $this->id = $id;

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
   * @param string|null $name The name of the project. minLength: 1 | maxLength: 255
   *
   * @return $this
   */
  public function setName(?string $name = null): self
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Gets author.
   */
  public function getAuthor(): ?string
  {
    return $this->author;
  }

  /**
   * Sets author.
   *
   * @param string|null $author The name of the projects' author
   *
   * @return $this
   */
  public function setAuthor(?string $author = null): self
  {
    $this->author = $author;

    return $this;
  }

  /**
   * Gets description.
   */
  public function getDescription(): ?string
  {
    return $this->description;
  }

  /**
   * Sets description.
   *
   * @param string|null $description a description of the project
   *
   * @return $this
   */
  public function setDescription(?string $description = null): self
  {
    $this->description = $description;

    return $this;
  }

  /**
   * Gets credits.
   */
  public function getCredits(): ?string
  {
    return $this->credits;
  }

  /**
   * Sets credits.
   *
   * @param string|null $credits Credits and notes for the project. E.g., credits for using ideas, scripts or artwork from other people.
   *
   * @return $this
   */
  public function setCredits(?string $credits = null): self
  {
    $this->credits = $credits;

    return $this;
  }

  /**
   * Gets version.
   */
  public function getVersion(): ?string
  {
    return $this->version;
  }

  /**
   * Sets version.
   *
   * @param string|null $version the catrobat version that was used to create this project
   *
   * @return $this
   */
  public function setVersion(?string $version = null): self
  {
    $this->version = $version;

    return $this;
  }

  /**
   * Gets views.
   */
  public function getViews(): ?int
  {
    return $this->views;
  }

  /**
   * Sets views.
   *
   * @param int|null $views The projects' count of views
   *
   * @return $this
   */
  public function setViews(?int $views = null): self
  {
    $this->views = $views;

    return $this;
  }

  /**
   * Gets download.
   */
  public function getDownload(): ?int
  {
    return $this->download;
  }

  /**
   * Sets download.
   *
   * @param int|null $download The projects' count of downloads. Deprecated. Use downloads
   *
   * @return $this
   */
  public function setDownload(?int $download = null): self
  {
    $this->download = $download;

    return $this;
  }

  /**
   * Gets downloads.
   */
  public function getDownloads(): ?int
  {
    return $this->downloads;
  }

  /**
   * Sets downloads.
   *
   * @param int|null $downloads The projects' count of downloads
   *
   * @return $this
   */
  public function setDownloads(?int $downloads = null): self
  {
    $this->downloads = $downloads;

    return $this;
  }

  /**
   * Gets reactions.
   */
  public function getReactions(): ?int
  {
    return $this->reactions;
  }

  /**
   * Sets reactions.
   *
   * @param int|null $reactions The projects' count of reactions
   *
   * @return $this
   */
  public function setReactions(?int $reactions = null): self
  {
    $this->reactions = $reactions;

    return $this;
  }

  /**
   * Gets comments.
   */
  public function getComments(): ?int
  {
    return $this->comments;
  }

  /**
   * Sets comments.
   *
   * @param int|null $comments The projects' count of comments
   *
   * @return $this
   */
  public function setComments(?int $comments = null): self
  {
    $this->comments = $comments;

    return $this;
  }

  /**
   * Gets private.
   */
  public function isPrivate(): ?bool
  {
    return $this->private;
  }

  /**
   * Sets private.
   *
   * @param bool|null $private whether a project is publicly visible (false) or only via direct link (true)
   *
   * @return $this
   */
  public function setPrivate(?bool $private = null): self
  {
    $this->private = $private;

    return $this;
  }

  /**
   * Gets flavor.
   */
  public function getFlavor(): ?string
  {
    return $this->flavor;
  }

  /**
   * Sets flavor.
   *
   * @return $this
   */
  public function setFlavor(?string $flavor = null): self
  {
    $this->flavor = $flavor;

    return $this;
  }

  /**
   * Gets tags.
   */
  public function getTags(): ?array
  {
    return $this->tags;
  }

  /**
   * Sets tags.
   *
   * @param array|null $tags Tags allow projects to be categorized by their creators
   *
   * @return $this
   */
  public function setTags(?array $tags = null): self
  {
    $this->tags = $tags;

    return $this;
  }

  /**
   * Gets uploaded.
   */
  public function getUploaded(): ?int
  {
    return $this->uploaded;
  }

  /**
   * Sets uploaded.
   *
   * @param int|null $uploaded the time of the upload
   *
   * @return $this
   */
  public function setUploaded(?int $uploaded = null): self
  {
    $this->uploaded = $uploaded;

    return $this;
  }

  /**
   * Gets uploaded_string.
   */
  public function getUploadedString(): ?string
  {
    return $this->uploaded_string;
  }

  /**
   * Sets uploaded_string.
   *
   * @param string|null $uploaded_string A localised text interpretation of the uploaded timestamp
   *
   * @return $this
   */
  public function setUploadedString(?string $uploaded_string = null): self
  {
    $this->uploaded_string = $uploaded_string;

    return $this;
  }

  /**
   * Gets screenshot_large.
   */
  public function getScreenshotLarge(): ?string
  {
    return $this->screenshot_large;
  }

  /**
   * Sets screenshot_large.
   *
   * @return $this
   */
  public function setScreenshotLarge(?string $screenshot_large = null): self
  {
    $this->screenshot_large = $screenshot_large;

    return $this;
  }

  /**
   * Gets screenshot_small.
   */
  public function getScreenshotSmall(): ?string
  {
    return $this->screenshot_small;
  }

  /**
   * Sets screenshot_small.
   *
   * @return $this
   */
  public function setScreenshotSmall(?string $screenshot_small = null): self
  {
    $this->screenshot_small = $screenshot_small;

    return $this;
  }

  /**
   * Gets project_url.
   */
  public function getProjectUrl(): ?string
  {
    return $this->project_url;
  }

  /**
   * Sets project_url.
   *
   * @param string|null $project_url The url to the project on our official share community platform
   *
   * @return $this
   */
  public function setProjectUrl(?string $project_url = null): self
  {
    $this->project_url = $project_url;

    return $this;
  }

  /**
   * Gets download_url.
   */
  public function getDownloadUrl(): ?string
  {
    return $this->download_url;
  }

  /**
   * Sets download_url.
   *
   * @param string|null $download_url The url to GET the catrobat file of this project
   *
   * @return $this
   */
  public function setDownloadUrl(?string $download_url = null): self
  {
    $this->download_url = $download_url;

    return $this;
  }

  /**
   * Gets filesize.
   */
  public function getFilesize(): ?float
  {
    return $this->filesize;
  }

  /**
   * Sets filesize.
   *
   * @param float|null $filesize The filesize of the catrobat file in megabytes
   *
   * @return $this
   */
  public function setFilesize(?float $filesize = null): self
  {
    $this->filesize = $filesize;

    return $this;
  }
}
