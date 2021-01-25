<?php

namespace Drupal\openy_gc_personal_training;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Personal training entity.
 *
 * @see \Drupal\openy_gc_personal_training\Entity\PersonalTraining.
 */
class PersonalTrainingAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    switch ($operation) {
      case 'view':
        // TODO: add plugin manager checkPersonalTrainingAccess [PRODDEV-180].
        return AccessResult::allowedIfHasPermission($account, 'view published personal training entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit personal training entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete personal training entities');
    }

    // Unknown operation, close access.
    return AccessResult::forbidden();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add personal training entities');
  }

}
