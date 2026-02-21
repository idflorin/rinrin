<?php

/**
 * @file
 * Post update functions for Rinrin.
 */

/**
 * Implements hook_removed_post_updates().
 */
function rinrin_removed_post_updates() {
  return [
    'rinrin_post_update_add_rinrin_primary_color' => '11.0.0',
  ];
}
