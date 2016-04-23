<?php

/**
 * @file
 * Contains \Drupal\display_modes_example\TapaListBuilder.
 */

namespace Drupal\display_modes_example;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Routing\LinkGeneratorTrait;
use Drupal\Core\Url;

/**
 * Defines a class to build a listing of Tapa entities.
 *
 * @ingroup display_modes_example
 */
class TapaListBuilder extends EntityListBuilder {
  use LinkGeneratorTrait;
  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('Tapa ID');
    $header['name'] = $this->t('Name');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\display_modes_example\Entity\Tapa */
    $row['id'] = $entity->id();
    $row['name'] = $this->l(
      $entity->label(),
      new Url(
        'entity.tapa.edit_form', array(
          'tapa' => $entity->id(),
        )
      )
    );
    return $row + parent::buildRow($entity);
  }

}
