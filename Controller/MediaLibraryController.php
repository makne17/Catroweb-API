<?php

/**
 * MediaLibraryController
 * PHP version 8.1.1.
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

namespace OpenAPI\Server\Controller;

use JMS\Serializer\Exception\RuntimeException as SerializerRuntimeException;
use OpenAPI\Server\Api\MediaLibraryApiInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * MediaLibraryController Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://github.com/openapitools/openapi-generator
 */
class MediaLibraryController extends Controller
{
  /**
   * Operation mediaFileIdGet.
   *
   * Get the information of a specific media file
   *
   * @param Request $request the Symfony request to handle
   * @param mixed   $id
   *
   * @return Response the Symfony response
   */
  public function mediaFileIdGetAction(Request $request, $id)
  {
    // Figure out what data format to return to the client
    $produces = ['application/json'];
    // Figure out what the client accepts
    $clientAccepts = $request->headers->has('Accept') ? $request->headers->get('Accept') : '*/*';
    $responseFormat = $this->getOutputFormat($clientAccepts, $produces);
    if (null === $responseFormat) {
      return new Response('', 406);
    }

    // Handle authentication

    // Read out all input parameter values into variables
    $attributes = $request->query->get('attributes', '');

    // Use the default value if no value was provided

    // Deserialize the input values that needs it
    try {
      $id = $this->deserialize($id, 'int', 'string');
      $attributes = $this->deserialize($attributes, 'string', 'string');
    } catch (SerializerRuntimeException $exception) {
      return $this->createBadRequestResponse($exception->getMessage());
    }

    // Validate the input values
    $asserts = [];
    $asserts[] = new Assert\NotNull();
    $asserts[] = new Assert\Type('int');
    $response = $this->validate($id, $asserts);
    if ($response instanceof Response) {
      return $response;
    }
    $asserts = [];
    $asserts[] = new Assert\Type('string');
    $asserts[] = new Assert\Regex('/^[a-zA-Z0-9\\-_]+(,[a-zA-Z0-9\\-_]+)*$/');
    $response = $this->validate($attributes, $asserts);
    if ($response instanceof Response) {
      return $response;
    }

    try {
      $handler = $this->getApiHandler();

      // Make the call to the business logic
      $responseCode = 200;
      $responseHeaders = [];

      $result = $handler->mediaFileIdGet($id, $attributes, $responseCode, $responseHeaders);

      // Find default response message
      $message = '';

      // Find a more specific message, if available
      switch ($responseCode) {
                case 200:
                    $message = 'OK';
                    break;
                case 400:
                    $message = 'Bad request (Invalid, or missing parameters)';
                    break;
                case 404:
                    $message = 'Not found';
                    break;
                case 406:
                    $message = 'Not acceptable - client must accept application/json as content type';
                    break;
            }

      return new Response(
                null !== $result ? $this->serialize($result, $responseFormat) : '',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                      'Content-Type' => $responseFormat,
                      'X-OpenAPI-Message' => $message,
                    ]
                )
            );
    } catch (\Throwable $fallthrough) {
      return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
    }
  }

  /**
   * Operation mediaFilesGet.
   *
   * Get *all* content of the media library.
   *
   * @param Request $request the Symfony request to handle
   *
   * @return Response the Symfony response
   */
  public function mediaFilesGetAction(Request $request)
  {
    // Figure out what data format to return to the client
    $produces = ['application/json'];
    // Figure out what the client accepts
    $clientAccepts = $request->headers->has('Accept') ? $request->headers->get('Accept') : '*/*';
    $responseFormat = $this->getOutputFormat($clientAccepts, $produces);
    if (null === $responseFormat) {
      return new Response('', 406);
    }

    // Handle authentication

    // Read out all input parameter values into variables
    $limit = $request->query->get('limit', 20);
    $offset = $request->query->get('offset', 0);
    $attributes = $request->query->get('attributes', '');
    $flavor = $request->query->get('flavor', '');

    // Use the default value if no value was provided

    // Deserialize the input values that needs it
    try {
      $limit = $this->deserialize($limit, 'int', 'string');
      $offset = $this->deserialize($offset, 'int', 'string');
      $attributes = $this->deserialize($attributes, 'string', 'string');
      $flavor = $this->deserialize($flavor, 'string', 'string');
    } catch (SerializerRuntimeException $exception) {
      return $this->createBadRequestResponse($exception->getMessage());
    }

    // Validate the input values
    $asserts = [];
    $asserts[] = new Assert\Type('int');
    $asserts[] = new Assert\GreaterThanOrEqual(0);
    $response = $this->validate($limit, $asserts);
    if ($response instanceof Response) {
      return $response;
    }
    $asserts = [];
    $asserts[] = new Assert\Type('int');
    $asserts[] = new Assert\GreaterThanOrEqual(0);
    $response = $this->validate($offset, $asserts);
    if ($response instanceof Response) {
      return $response;
    }
    $asserts = [];
    $asserts[] = new Assert\Type('string');
    $asserts[] = new Assert\Regex('/^[a-zA-Z0-9\\-_]+(,[a-zA-Z0-9\\-_]+)*$/');
    $response = $this->validate($attributes, $asserts);
    if ($response instanceof Response) {
      return $response;
    }
    $asserts = [];
    $asserts[] = new Assert\Type('string');
    $response = $this->validate($flavor, $asserts);
    if ($response instanceof Response) {
      return $response;
    }

    try {
      $handler = $this->getApiHandler();

      // Make the call to the business logic
      $responseCode = 200;
      $responseHeaders = [];

      $result = $handler->mediaFilesGet($limit, $offset, $attributes, $flavor, $responseCode, $responseHeaders);

      // Find default response message
      $message = '';

      // Find a more specific message, if available
      switch ($responseCode) {
                case 200:
                    $message = 'OK';
                    break;
                case 400:
                    $message = 'Bad request (Invalid, or missing parameters)';
                    break;
                case 406:
                    $message = 'Not acceptable - client must accept application/json as content type';
                    break;
            }

      return new Response(
                null !== $result ? $this->serialize($result, $responseFormat) : '',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                      'Content-Type' => $responseFormat,
                      'X-OpenAPI-Message' => $message,
                    ]
                )
            );
    } catch (\Throwable $fallthrough) {
      return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
    }
  }

  /**
   * Operation mediaFilesSearchGet.
   *
   * Search for mediafiles associated with keywords
   *
   * @param Request $request the Symfony request to handle
   *
   * @return Response the Symfony response
   */
  public function mediaFilesSearchGetAction(Request $request)
  {
    // Figure out what data format to return to the client
    $produces = ['application/json'];
    // Figure out what the client accepts
    $clientAccepts = $request->headers->has('Accept') ? $request->headers->get('Accept') : '*/*';
    $responseFormat = $this->getOutputFormat($clientAccepts, $produces);
    if (null === $responseFormat) {
      return new Response('', 406);
    }

    // Handle authentication

    // Read out all input parameter values into variables
    $query = $request->query->get('query');
    $limit = $request->query->get('limit', 20);
    $offset = $request->query->get('offset', 0);
    $attributes = $request->query->get('attributes', '');
    $flavor = $request->query->get('flavor', '');
    $package_name = $request->query->get('package_name', '');

    // Use the default value if no value was provided

    // Deserialize the input values that needs it
    try {
      $query = $this->deserialize($query, 'string', 'string');
      $limit = $this->deserialize($limit, 'int', 'string');
      $offset = $this->deserialize($offset, 'int', 'string');
      $attributes = $this->deserialize($attributes, 'string', 'string');
      $flavor = $this->deserialize($flavor, 'string', 'string');
      $package_name = $this->deserialize($package_name, 'string', 'string');
    } catch (SerializerRuntimeException $exception) {
      return $this->createBadRequestResponse($exception->getMessage());
    }

    // Validate the input values
    $asserts = [];
    $asserts[] = new Assert\NotNull();
    $asserts[] = new Assert\Type('string');
    $response = $this->validate($query, $asserts);
    if ($response instanceof Response) {
      return $response;
    }
    $asserts = [];
    $asserts[] = new Assert\Type('int');
    $asserts[] = new Assert\GreaterThanOrEqual(0);
    $response = $this->validate($limit, $asserts);
    if ($response instanceof Response) {
      return $response;
    }
    $asserts = [];
    $asserts[] = new Assert\Type('int');
    $asserts[] = new Assert\GreaterThanOrEqual(0);
    $response = $this->validate($offset, $asserts);
    if ($response instanceof Response) {
      return $response;
    }
    $asserts = [];
    $asserts[] = new Assert\Type('string');
    $asserts[] = new Assert\Regex('/^[a-zA-Z0-9\\-_]+(,[a-zA-Z0-9\\-_]+)*$/');
    $response = $this->validate($attributes, $asserts);
    if ($response instanceof Response) {
      return $response;
    }
    $asserts = [];
    $asserts[] = new Assert\Type('string');
    $response = $this->validate($flavor, $asserts);
    if ($response instanceof Response) {
      return $response;
    }
    $asserts = [];
    $asserts[] = new Assert\Type('string');
    $response = $this->validate($package_name, $asserts);
    if ($response instanceof Response) {
      return $response;
    }

    try {
      $handler = $this->getApiHandler();

      // Make the call to the business logic
      $responseCode = 200;
      $responseHeaders = [];

      $result = $handler->mediaFilesSearchGet($query, $limit, $offset, $attributes, $flavor, $package_name, $responseCode, $responseHeaders);

      // Find default response message
      $message = '';

      // Find a more specific message, if available
      switch ($responseCode) {
                case 200:
                    $message = 'OK';
                    break;
                case 400:
                    $message = 'Bad request (Invalid, or missing parameters)';
                    break;
                case 406:
                    $message = 'Not acceptable - client must accept application/json as content type';
                    break;
            }

      return new Response(
                null !== $result ? $this->serialize($result, $responseFormat) : '',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                      'Content-Type' => $responseFormat,
                      'X-OpenAPI-Message' => $message,
                    ]
                )
            );
    } catch (\Throwable $fallthrough) {
      return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
    }
  }

  /**
   * Operation mediaPackageNameGet.
   *
   * Get media-library asstes of a named package
   *
   * @param Request $request the Symfony request to handle
   * @param mixed   $name
   *
   * @return Response the Symfony response
   */
  public function mediaPackageNameGetAction(Request $request, $name)
  {
    // Figure out what data format to return to the client
    $produces = ['application/json'];
    // Figure out what the client accepts
    $clientAccepts = $request->headers->has('Accept') ? $request->headers->get('Accept') : '*/*';
    $responseFormat = $this->getOutputFormat($clientAccepts, $produces);
    if (null === $responseFormat) {
      return new Response('', 406);
    }

    // Handle authentication

    // Read out all input parameter values into variables
    $limit = $request->query->get('limit', 20);
    $offset = $request->query->get('offset', 0);
    $attributes = $request->query->get('attributes', '');

    // Use the default value if no value was provided

    // Deserialize the input values that needs it
    try {
      $name = $this->deserialize($name, 'string', 'string');
      $limit = $this->deserialize($limit, 'int', 'string');
      $offset = $this->deserialize($offset, 'int', 'string');
      $attributes = $this->deserialize($attributes, 'string', 'string');
    } catch (SerializerRuntimeException $exception) {
      return $this->createBadRequestResponse($exception->getMessage());
    }

    // Validate the input values
    $asserts = [];
    $asserts[] = new Assert\NotNull();
    $asserts[] = new Assert\Type('string');
    $asserts[] = new Assert\Regex('/^[a-zA-Z0-9\\-_]+$/');
    $response = $this->validate($name, $asserts);
    if ($response instanceof Response) {
      return $response;
    }
    $asserts = [];
    $asserts[] = new Assert\Type('int');
    $asserts[] = new Assert\GreaterThanOrEqual(0);
    $response = $this->validate($limit, $asserts);
    if ($response instanceof Response) {
      return $response;
    }
    $asserts = [];
    $asserts[] = new Assert\Type('int');
    $asserts[] = new Assert\GreaterThanOrEqual(0);
    $response = $this->validate($offset, $asserts);
    if ($response instanceof Response) {
      return $response;
    }
    $asserts = [];
    $asserts[] = new Assert\Type('string');
    $asserts[] = new Assert\Regex('/^[a-zA-Z0-9\\-_]+(,[a-zA-Z0-9\\-_]+)*$/');
    $response = $this->validate($attributes, $asserts);
    if ($response instanceof Response) {
      return $response;
    }

    try {
      $handler = $this->getApiHandler();

      // Make the call to the business logic
      $responseCode = 200;
      $responseHeaders = [];

      $result = $handler->mediaPackageNameGet($name, $limit, $offset, $attributes, $responseCode, $responseHeaders);

      // Find default response message
      $message = '';

      // Find a more specific message, if available
      switch ($responseCode) {
                case 200:
                    $message = 'OK';
                    break;
                case 400:
                    $message = 'Bad request (Invalid, or missing parameters)';
                    break;
                case 404:
                    $message = 'Not found';
                    break;
                case 406:
                    $message = 'Not acceptable - client must accept application/json as content type';
                    break;
            }

      return new Response(
                null !== $result ? $this->serialize($result, $responseFormat) : '',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                      'Content-Type' => $responseFormat,
                      'X-OpenAPI-Message' => $message,
                    ]
                )
            );
    } catch (\Throwable $fallthrough) {
      return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
    }
  }

  /**
   * Returns the handler for this API controller.
   *
   * @return MediaLibraryApiInterface
   */
  public function getApiHandler()
  {
    return $this->apiServer->getApiHandler('mediaLibrary');
  }
}
