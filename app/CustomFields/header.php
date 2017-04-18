<?php
use AgreableLongformPlugin\CustomFields\HeaderDefinition;

$post_type = 'sponsored_posts';
$key = $post_type . '_header';

$header_acf = HeaderDefinition::get($post_type);


$brand = [
  'key' => $key . '_brand',
  'label' => 'Brand',
  'name' => 'header_brand',
  'type' => 'text',
  'instructions' => 'Add a brand specific sell (optional)',
  'default_value' => '',
  'wrapper' => [
    'width' => '50%',
    'class' => 'agreable-options',
  ]
];

$brand_image = [
  'key' => $key . '_brand_image',
  'label' => 'Brand Image',
  'name' => 'header_brand_image',
  'type' => 'image',
  'instructions' => 'Add a brand logo (optional)',
  'return_format' => 'array',
  'preview_size' => 'thumbnail',
  'library' => 'all',
  'wrapper' => [
    'width' => '50%',
    'class' => 'agreable-options',
  ]
];
foreach($header_acf['fields'] as &$field) {
  if ($field['key'] === $key . '_type') {
    $field['choices']['no-header'] = 'No header';
  }
}

$header_acf['fields'][] = $brand;
$header_acf['fields'][] = $brand_image;

$header_acf = apply_filters('agreable_sponsored_posts_plugin_header_acf', $header_acf);
register_field_group($header_acf);