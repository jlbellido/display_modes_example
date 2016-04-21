<?php

/**
 * @file
 * Contains \Drupal\display_modes_example\Form\TapaForm.
 */

namespace Drupal\display_modes_example\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for Tapa edit forms.
 *
 * @ingroup display_modes_example
 */
class TapaForm extends ContentEntityForm {
  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    /* @var $entity \Drupal\display_modes_example\Entity\Tapa */
    $form = parent::buildForm($form, $form_state);

    $display = $this->getFormDisplay($form_state);
    if ($display->getComponent('common_text_form')) {
      $form['common_text_form']['#markup'] = t('Common text form');
    }

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $entity = $this->entity;
    $status = parent::save($form, $form_state);

    switch ($status) {
      case SAVED_NEW:
        drupal_set_message($this->t('Created the %label Tapa.', [
          '%label' => $entity->label(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label Tapa.', [
          '%label' => $entity->label(),
        ]));
    }
    $form_state->setRedirect('entity.tapa.canonical', ['tapa' => $entity->id()]);
  }

}
