<?php

// Примеры работы с хуками.

/**
 * @file
 * Module.
 */

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\Display\EntityViewDisplayInterface;
use Drupal\node_orders\Controller\Group;

/**
 * Implements hook_entity_presave.
 */
function hook_entity_presave(EntityInterface $node) {
  if (method_exists($node, 'getType') && $node->getType() == 'orders') {
    $usluga = ' --- ';
    if (is_object($node->field_orders_ref_activity)) {
      $usluga = $node->field_orders_ref_activity->entity->title->value;
    }
    $title = 'Заявка на ' . $usluga . ' от ' . format_date(time(), 'long');
    $node->title->setValue($title);
  }
}

/**
 * Implements hook_entity_view.
 */
function hook_entity_view(array &$build, EntityInterface $entity, EntityViewDisplayInterface $display, $view_mode) {
  if (method_exists($entity, 'getType') && $entity->getType() == 'orders') {
    $group = Group::collectionPrepare($entity);
    dsm($group);
    //$entity->field_orders_group->setValue($group);
    //$entity->save(TRUE);
  }
}
