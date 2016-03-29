<?php

/**
 * @file
 * Contains \Drupal\display_modes_example\Entity\Tapa.
 */

namespace Drupal\display_modes_example\Entity;

use Drupal\views\EntityViewsData;
use Drupal\views\EntityViewsDataInterface;

/**
 * Provides Views data for Tapa entities.
 */
class TapaViewsData extends EntityViewsData implements EntityViewsDataInterface {
  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    $data['tapa']['table']['base'] = array(
      'field' => 'id',
      'title' => $this->t('Tapa'),
      'help' => $this->t('The Tapa ID.'),
    );

    return $data;
  }

}
