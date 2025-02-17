<?php
/**
 * FeaturedProjectResponseTest.
 *
 * PHP version 8.1.1
 *
 * @category Class
 *
 * @author   openapi-generator contributors
 *
 * @see     https://github.com/openapitools/openapi-generator
 */

/**
 * Catroweb API.
 *
 * API for the Catrobat Share Platform
 *
 * The version of the OpenAPI document: v1.1.19
 * Contact: webmaster@catrobat.org
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Please update the test case below to test the model.
 */

namespace OpenAPI\Server\Model;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * FeaturedProjectResponseTest Class Doc Comment.
 *
 * @category    Class
 *
 * @description FeaturedProjectResponse
 *
 * @author      openapi-generator contributors
 *
 * @see        https://github.com/openapitools/openapi-generator
 *
 * @coversDefaultClass \OpenAPI\Server\Model\FeaturedProjectResponse
 *
 * @internal
 */
class FeaturedProjectResponseTest extends TestCase
{
  protected FeaturedProjectResponse|MockObject $object;

  /**
   * Setup before running any test case.
   */
  public static function setUpBeforeClass(): void
  {
  }

  /**
   * Setup before running each test case.
   */
  public function setUp(): void
  {
    $this->object = $this->getMockBuilder(FeaturedProjectResponse::class)->getMockForAbstractClass();
  }

  /**
   * Clean up after running each test case.
   */
  public function tearDown(): void
  {
  }

  /**
   * Clean up after running all test cases.
   */
  public static function tearDownAfterClass(): void
  {
  }

  /**
   * @group integration
   *
   * @small
   */
  public function testTestClassExists(): void
  {
    $this->assertTrue(class_exists(FeaturedProjectResponse::class));
    $this->assertInstanceOf(FeaturedProjectResponse::class, $this->object);
  }

  /**
   * Test attribute "id".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyId(): void
  {
    $this->markTestSkipped('Test for property id not implemented');
  }

  /**
   * Test attribute "project_id".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyProjectId(): void
  {
    $this->markTestSkipped('Test for property project_id not implemented');
  }

  /**
   * Test attribute "project_url".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyProjectUrl(): void
  {
    $this->markTestSkipped('Test for property project_url not implemented');
  }

  /**
   * Test attribute "url".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyUrl(): void
  {
    $this->markTestSkipped('Test for property url not implemented');
  }

  /**
   * Test attribute "name".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyName(): void
  {
    $this->markTestSkipped('Test for property name not implemented');
  }

  /**
   * Test attribute "author".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyAuthor(): void
  {
    $this->markTestSkipped('Test for property author not implemented');
  }

  /**
   * Test attribute "featured_image".
   *
   * @group unit
   *
   * @small
   */
  public function testPropertyFeaturedImage(): void
  {
    $this->markTestSkipped('Test for property featured_image not implemented');
  }
}
