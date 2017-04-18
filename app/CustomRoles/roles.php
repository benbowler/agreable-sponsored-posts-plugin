<?php
add_action('admin_init', function() {
if (!get_role('sponsored_posts_editor')) {
    // Add Sponsored Postss editor role
    add_role('sponsored_posts_editor',
      'Sponsored Postss Editor',
      array(
        'read' => true,
        'edit_posts' => true,
        'delete_posts' => true,
        'publish_posts' => true,
        'upload_files' => true,
      )
    );
  }
  // Add the roles you'd like to administer the custom post types
  $roles = array('sponsored_posts_editor','administrator');
  // Loop through each role and assign capabilities
  foreach($roles as $the_role) {
    $role = get_role($the_role);
    $role->add_cap('read_sponsored_posts');
    $role->add_cap('read_private_sponsored_posts');
    $role->add_cap('edit_sponsored_posts');
    $role->add_cap('edit_sponsored_posts');
    $role->add_cap('edit_others_sponsored_posts');
    $role->add_cap('edit_published_sponsored_posts');
    $role->add_cap('publish_sponsored_posts');
    $role->add_cap('delete_others_sponsored_posts');
    $role->add_cap('delete_private_sponsored_posts');
    $role->add_cap('delete_published_sponsored_posts');
  }
    get_role($roles[0])->remove_cap('edit_posts');
});
