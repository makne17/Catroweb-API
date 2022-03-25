<?php
/**
 * NotificationsApiInterface
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
 * The version of the OpenAPI document: v1.0.74
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace OpenAPI\Server\Api;

use OpenAPI\Server\Model\NotificationsType;

/**
 * NotificationsApiInterface Interface Doc Comment.
 *
 * @category Interface
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://github.com/openapitools/openapi-generator
 */
interface NotificationsApiInterface
{
  /**
   * Sets authentication method PandaAuth.
   *
   * @param string $value value of the PandaAuth authentication method
   */
  public function setPandaAuth($value);

  /**
   * Operation notificationIdReadPut.
   *
   * Mark specified notification as read - StatusCode: 501 - Not yet implemented
   *
   * @param \int    $id              (required)
   * @param \string $accept_language (optional)
   * @param \int    $responseCode    The HTTP response code to return
   * @param \array  $responseHeaders Additional HTTP headers to return with the response ()
   */
  public function notificationIdReadPut(int $id, string $accept_language = null, &$responseCode, array &$responseHeaders);

  /**
   * Operation notificationsCountGet.
   *
   * Count the number of unseen notifications -- StatusCode: 501 - Not yet implemented
   *
   * @param \int   $responseCode    The HTTP response code to return
   * @param \array $responseHeaders Additional HTTP headers to return with the response ()
   *
   * @return \OpenAPI\Server\Model\NotificationsCountResponse
   */
  public function notificationsCountGet(&$responseCode, array &$responseHeaders);

  /**
   * Operation notificationsGet.
   *
   * Get user notifications -- StatusCode: 501 - Not yet implemented
   *
   * @param \string                                 $accept_language (optional)
   * @param \int                                    $limit           (optional, default to 20)
   * @param \int                                    $offset          (optional, default to 0)
   * @param \OpenAPI\Server\Model\NotificationsType $type            (optional)
   * @param \int                                    $responseCode    The HTTP response code to return
   * @param \array                                  $responseHeaders Additional HTTP headers to return with the response ()
   *
   * @return \OpenAPI\Server\Model\NotificationResponse[]
   */
  public function notificationsGet(string $accept_language = null, int $limit = 20, int $offset = 0, NotificationsType $type = null, &$responseCode, array &$responseHeaders);

  /**
   * Operation notificationsReadPut.
   *
   * Mark all notifications as read -- StatusCode: 501 - Not yet implemented
   *
   * @param \int   $responseCode    The HTTP response code to return
   * @param \array $responseHeaders Additional HTTP headers to return with the response ()
   */
  public function notificationsReadPut(&$responseCode, array &$responseHeaders);
}
