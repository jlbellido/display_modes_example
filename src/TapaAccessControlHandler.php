<?php

/**
 * @file
 * Contains \Drupal\display_modes_example\TapaAccessControlHandler.
 */

namespace Drupal\display_modes_example;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Tapa entity.
 *
 * @see \Drupal\display_modes_example\Entity\Tapa.
 */
class TapaAccessControlHandler extends EntityAccessControlHandler {
  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\display_modes_example\TapaInterface $entity */
    switch ($operation) {
      case 'view':
        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished tapa entities');
        }
        return AccessResult::allowedIfHasPermission($account, 'view published tapa entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit tapa entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete tapa entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add tapa entities');
  }

}
