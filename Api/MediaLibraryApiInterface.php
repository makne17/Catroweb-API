<?php
/**
 * MediaLibraryApiInterface
 * PHP version 7.1.3.
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
 * The version of the OpenAPI document: v1.0.70
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Api;

/**
 * MediaLibraryApiInterface Interface Doc Comment.
 *
 * @category Interface
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://github.com/openapitools/openapi-generator
 */
interface MediaLibraryApiInterface
{
  /**
   * Operation mediaFileIdGet.
   *
   * Get the information of a specific media file
   *
   * @param \int   $id              ID of any given media file (required)
   * @param \int   $responseCode    The HTTP response code to return
   * @param \array $responseHeaders Additional HTTP headers to return with the response ()
   *
   * @return \OpenAPI\Server\Model\MediaFileResponse
   */
  public function mediaFileIdGet(int $id, &$responseCode, array &$responseHeaders);

  /**
   * Operation mediaFilesGet.
   *
   * Get *all* content of the media library.
   *
   * @param \int    $limit           (optional, default to 20)
   * @param \int    $offset          (optional, default to 0)
   * @param \string $flavor          (optional)
   * @param \int    $responseCode    The HTTP response code to return
   * @param \array  $responseHeaders Additional HTTP headers to return with the response ()
   *
   * @return \OpenAPI\Server\Model\MediaFileResponse[]
   */
  public function mediaFilesGet(int $limit = 20, int $offset = 0, string $flavor = null, &$responseCode, array &$responseHeaders);

  /**
   * Operation mediaFilesSearchGet.
   *
   * Search for mediafiles associated with keywords
   *
   * @param \string $query           (required)
   * @param \string $flavor          (optional)
   * @param \int    $limit           (optional, default to 20)
   * @param \int    $offset          (optional, default to 0)
   * @param \string $package_name    In which package you want to search (for more fine tuned results) (optional)
   * @param \int    $responseCode    The HTTP response code to return
   * @param \array  $responseHeaders Additional HTTP headers to return with the response ()
   *
   * @return \OpenAPI\Server\Model\MediaFileResponse[]
   */
  public function mediaFilesSearchGet(string $query, string $flavor = null, int $limit = 20, int $offset = 0, string $package_name = null, &$responseCode, array &$responseHeaders);

  /**
   * Operation mediaPackageNameGet.
   *
   * Get media-library asstes of a named package
   *
   * @param \string $name            Name of the package (required)
   * @param \int    $limit           (optional, default to 20)
   * @param \int    $offset          (optional, default to 0)
   * @param \int    $responseCode    The HTTP response code to return
   * @param \array  $responseHeaders Additional HTTP headers to return with the response ()
   *
   * @return \OpenAPI\Server\Model\MediaFileResponse[]
   */
  public function mediaPackageNameGet(string $name, int $limit = 20, int $offset = 0, &$responseCode, array &$responseHeaders);
}
