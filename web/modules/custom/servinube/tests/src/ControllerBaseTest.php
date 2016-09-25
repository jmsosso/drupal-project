<?php

namespace Drupal\Tests\servinube;

use Drupal\KernelTests\KernelTestBase;
use Drupal\servinube\Controller\ControllerBase;

/**
 * Provides automated tests for the servinube module.
 * 
 * @group servinube
 */
class ControllerBaseTest extends KernelTestBase {


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
    $controller = new ControllerBase();
    $this->assertEquals(count($controller->demo()), 0, 'Test Unit Generated via Drupal Console.');
  }

}
