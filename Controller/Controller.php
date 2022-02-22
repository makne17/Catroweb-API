<?php
/**
 * Controller.
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

namespace OpenAPI\Server\Controller;

use OpenAPI\Server\Service\SerializerInterface;
use OpenAPI\Server\Service\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

/**
 * Controller Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://github.com/openapitools/openapi-generator
 */
class Controller extends AbstractController
{
  protected $validator;
  protected $serializer;
  protected $apiServer;

  public function setValidator(ValidatorInterface $validator)
  {
    $this->validator = $validator;
  }

  public function setSerializer(SerializerInterface $serializer)
  {
    $this->serializer = $serializer;
  }

  public function setApiServer($server)
  {
    $this->apiServer = $server;
  }

  /**
   * This will return a response with code 400. Usage example:
   *     return $this->createBadRequestResponse('Unable to access this page!');.
   *
   * @param string $message A message
   *
   * @return Response
   */
  public function createBadRequestResponse($message = 'Bad Request.')
  {
    return new Response($message, 400);
  }

  /**
   * This will return an error response. Usage example:
   *     return $this->createErrorResponse(new UnauthorizedHttpException());.
   *
   * @param HttpException $exception An HTTP exception
   *
   * @return Response
   */
  public function createErrorResponse(HttpException $exception)
  {
    $statusCode = $exception->getStatusCode();
    $headers = array_merge($exception->getHeaders(), ['Content-Type' => 'application/json']);

    $json = $this->exceptionToArray($exception);
    $json['statusCode'] = $statusCode;

    return new Response(json_encode($json, 15, 512), $statusCode, $headers);
  }

  /**
   * Serializes data to a given type format.
   *
   * @param mixed  $data   the data to serialize
   * @param string $class  the source data class
   * @param string $format the target serialization format
   *
   * @return string a serialized data string
   */
  protected function serialize($data, $format)
  {
    return $this->serializer->serialize($data, $format);
  }

  /**
   * Deserializes data from a given type format.
   *
   * @param string $data   the data to deserialize
   * @param string $class  the target data class
   * @param string $format the source serialization format
   *
   * @return mixed a deserialized data
   */
  protected function deserialize($data, $class, $format)
  {
    return $this->serializer->deserialize($data, $class, $format);
  }

  protected function validate($data, $asserts = null)
  {
    $errors = $this->validator->validate($data, $asserts);

    if (count($errors) > 0) {
      $errorsString = (string) $errors;

      return $this->createBadRequestResponse($errorsString);
    }
  }

  /**
   * Converts an exception to a serializable array.
   *
   * @return array
   */
  private function exceptionToArray(\Exception $exception = null)
  {
    if (null === $exception) {
      return null;
    }

    if (!$this->container->get('kernel')->isDebug()) {
      return [
        'message' => $exception->getMessage(),
      ];
    }

    return [
      'message' => $exception->getMessage(),
      'type' => get_class($exception),
      'previous' => $this->exceptionToArray($exception->getPrevious()),
    ];
  }

  protected function getOutputFormat($accept, array $produced)
  {
    // Figure out what the client accepts
    $accept = preg_split('/[\\s,]+/', $accept);

    if (in_array('*/*', $accept, true) || in_array('application/*', $accept, true)) {
      // Prefer JSON if the client has no preference
      if (in_array('application/json', $produced, true)) {
        return 'application/json';
      }
      if (in_array('application/xml', $produced, true)) {
        return 'application/xml';
      }
    }

    if (in_array('application/json', $accept, true) && in_array('application/json', $produced, true)) {
      return 'application/json';
    }

    if (in_array('application/xml', $accept, true) && in_array('application/xml', $produced, true)) {
      return 'application/xml';
    }

    // If we reach this point, we don't have a common ground between server and client
    return null;
  }

  /**
   * Checks whether Content-Type request header presented in supported formats.
   *
   * @param Request $request  request instance
   * @param array   $consumes array of supported content types
   *
   * @return bool returns true if Content-Type supported otherwise false
   */
  public static function isContentTypeAllowed(Request $request, array $consumes = [])
  {
    if (!empty($consumes) && '*/*' !== $consumes[0]) {
      $currentFormat = $request->getContentType();
      foreach ($consumes as $mimeType) {
        // canonize mime type
        if (is_string($mimeType) && false !== $pos = strpos($mimeType, ';')) {
          $mimeType = trim(substr($mimeType, 0, $pos));
        }

        if (!$format = $request->getFormat($mimeType)) {
          // add custom format to request
          $format = $mimeType;
          $request->setFormat($format, $format);
          $currentFormat = $request->getContentType();
        }

        if ($format === $currentFormat) {
          return true;
        }
      }

      return false;
    }

    return true;
  }
}
