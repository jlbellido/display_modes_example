<?php

namespace Drupal\display_modes_example;

use Drupal\Core\Entity\EntityViewBuilder;


/**
 * Class TapaViewBuilder
 *
 * Render controller for Tapas.
 */
class TapaViewBuilder extends EntityViewBuilder  {

  /**
   * {@inheritdoc}
   */
  public function buildComponents(array &$build, array $entities, array $displays, $view_mode) {
    parent::buildComponents($build, $entities, $displays, $view_mode);
    foreach ($entities as $id => $entity) {
      $bundle = $entity->bundle();
      $display = $displays[$bundle];
      if ($display->getComponent('common_text')) {
        $build[$id]['common_text'] = [
          '#theme' => 'common_text',
          '#text' => t('Taste this and other awesome Tapas at this DrupalCamp Es!!! '),
        ];
      }
    }
  }

}