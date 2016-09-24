<?php

namespace Drupal\servinube\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the servinube module.
 */
class ControllerBaseTest extends WebTestBase {


  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "servinube ControllerBase's controller functionality",
      'description' => 'Test Unit for module servinube and controller ControllerBase.',
      'group' => 'Other',
    );
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests servinube functionality.
   */
  public function testControllerBase() {
    // Check that the basic functions of module servinube.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via Drupal Console.');
  }

}
