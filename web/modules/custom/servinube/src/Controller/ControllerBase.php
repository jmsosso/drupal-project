<?php

namespace Drupal\servinube\Controller;

/**
 * Class ControllerBase.
 *
 * @package Drupal\servinube\Controller
 */
class ControllerBase extends \Drupal\Core\Controller\ControllerBase {

  /**
   * Demo.
   *
   * @return string
   *   Return Hello string.
   */
  public function demo() {
    /* @var $user \Drupal\Core\Session\AccountProxyInterface */
    $user = \Drupal::currentUser();
    
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Hello :name, it\'s working!', [
        ':name' => $user->getDisplayName(),
      ]),
    ];
  }

}
