<?php
/**
 * @file
 * Contains \Drupal\bootstrap\Plugin\Prerender\PrerenderInterface.
 */

namespace Drupal\bootstrap\Plugin\Prerender;

/**
 * Defines the interface for an object oriented preprocess plugin.
 */
interface PrerenderInterface {

  /**
   * Pre-render render array element callback.
   *
   * @param array $element
   *   The render array element.
   *
   * @return array
   *   The modified render array element.
   */
  public static function preRender(array $element);

}
