<?php

/**
 * @file
 * Contains tapa.page.inc.
 *
 * Page callback for Tapa entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Tapa templates.
 *
 * Default template: tapa.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_tapa(array &$variables) {
  // Fetch Tapa Entity Object.
  $tapa = $variables['elements']['#tapa'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
