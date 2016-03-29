<?php

/**
 * @file
 * Contains \Drupal\display_modes_example\TapaInterface.
 */

namespace Drupal\display_modes_example;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Tapa entities.
 *
 * @ingroup display_modes_example
 */
interface TapaInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {
  // Add get/set methods for your configuration properties here.
  /**
   * Gets the Tapa name.
   *
   * @return string
   *   Name of the Tapa.
   */
  public function getName();

  /**
   * Sets the Tapa name.
   *
   * @param string $name
   *   The Tapa name.
   *
   * @return \Drupal\display_modes_example\TapaInterface
   *   The called Tapa entity.
   */
  public function setName($name);

  /**
   * Gets the Tapa creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Tapa.
   */
  public function getCreatedTime();

  /**
   * Sets the Tapa creation timestamp.
   *
   * @param int $timestamp
   *   The Tapa creation timestamp.
   *
   * @return \Drupal\display_modes_example\TapaInterface
   *   The called Tapa entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Tapa published status indicator.
   *
   * Unpublished Tapa are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Tapa is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Tapa.
   *
   * @param bool $published
   *   TRUE to set this Tapa to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\display_modes_example\TapaInterface
   *   The called Tapa entity.
   */
  public function setPublished($published);

}
