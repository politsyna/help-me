<?php

// Примеры работы с хуками.

/**
 * @file
 * Module.
 */

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\Display\EntityViewDisplayInterface;

/**
 * Implements hook_entity_presave.
 * Данная функция будет вызвана перед сохранение любой сущаности:
 * ноды, юзера, термина таксономии, филд-коллекшена.
 */
function hook_entity_presave(EntityInterface $entity) {
  // $entity - может содержать что угодно: ноду, юзера и т.п.
  // Мы знаем, что если у сущности (entity) есть метод 'getType', но это нода.
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
 * Функция вызывается перед тем, как нарисовать карточку любой сущности: ноды, юзера, термина и т.п.
 * $entity - содержит саму сущность
 * $build - массив данных, на основании которого будет построена карточка товара
 * $view_mode - способ отображения: full - если мы находимся на карточке, напрмер /node/22 или /user/1
 */
function hook_entity_view(array &$build, EntityInterface $entity, EntityViewDisplayInterface $display, $view_mode) {
  // $entity - может содержать что угодно: ноду, юзера и т.п.
  // Мы знаем, что если у сущности (entity) есть метод 'getType', но это нода.
  if (method_exists($entity, 'getType') {
    $node = $entity;
    // Мы сократили вид сущности до ноды, но ноды тоже бывают разные:
    // услуга, команда, заказ, оплата.
    // Будет выполнять наши действия только на определённом типе ноды (тип материала).
    if ($node->getType() == 'orders') {
      // Хорошая практика проверить находимся мы на самой странице, или на её анонсе:
      if ($view_mode == 'full'){
        $my_title = 'Заявка от ' . format_date(time(), 'long');
        $node->title->setValue($my_title);
        $node->save(TRUE);
      }
    }
  }
}
