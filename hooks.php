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
 * Данная функция будет вызвана перед сохранение любой сущаности:
 * ноды, юзера, термина таксономии, филд-коллекшена.
 */
function hook_entity_presave(EntityInterface $entity) {
  // $entity - может содержать что угодно: ноду, юзера и т.п.
  // Мы знаем, что если у ноды есть метод 'getType', но это нода.
  if (method_exists($entity, 'getType') {
    $node = $entity;
    // Мы сократили вид сущности до ноды, но ноды тоже бывают разные:
    // услуга, команда, заказ, оплата.
    // Будет выполнять наши действия только на определённом типе ноды (тип материала).
    if ($node->getType() == 'orders') {
      // Сформируем заголовок по принципу "заявка от %дата%".
      $my_title = 'Заявка от ' . format_date(time(), 'long');
      // Положим значение в поле 'title'.
      $node->title->setValue($my_title);
    }
  }
  // Спосок записи проверки в одну строку
  if (method_exists($node, 'getType') && $node->getType() == 'orders') {
    // $node->title->setValue($my_title);
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
