<?php
/**
 * UtilityApiInterface
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
 * The version of the OpenAPI document: v1.0.73
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
 * UtilityApiInterface Interface Doc Comment.
 *
 * @category Interface
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://github.com/openapitools/openapi-generator
 */
interface UtilityApiInterface
{
  /**
   * Operation healthGet.
   *
   * Health Check
   *
   * @param \int   $responseCode    The HTTP response code to return
   * @param \array $responseHeaders Additional HTTP headers to return with the response ()
   */
  public function healthGet(&$responseCode, array &$responseHeaders);

  /**
   * Operation surveyLangCodeGet.
   *
   * Get survey link for given language code.
   *
   * @param \string $lang_code       2 letter Language-Code is based on ISO693-1 (e.g. German &#x3D; de, English &#x3D; en, Russian &#x3D; ru) (required)
   * @param \string $flavor          (optional)
   * @param \int    $responseCode    The HTTP response code to return
   * @param \array  $responseHeaders Additional HTTP headers to return with the response ()
   *
   * @return \OpenAPI\Server\Model\SurveyResponse
   */
  public function surveyLangCodeGet(string $lang_code, string $flavor = null, &$responseCode, array &$responseHeaders);
}
