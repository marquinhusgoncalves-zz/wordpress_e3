<?php

  static function get_project_tags( $post_id ) {
    $project_tags = get_the_terms( $post_id, self::CUSTOM_TAXONOMY_TAG );

    // If no tags, return empty string
    if ( empty( $project_tags ) || is_wp_error( $project_tags ) ) {
      return false;
    }

    $html = '<div class="project-tags"><span>' . __( 'Tags', 'jetpack' ) . ':</span>';
    $tags = array();
    // Loop thorugh all the tags
    foreach ( $project_tags as $project_tag ) {
      $project_tag_link = get_term_link( $project_tag, self::CUSTOM_TAXONOMY_TYPE );

      if ( is_wp_error( $project_tag_link ) ) {
        return $project_tag_link;
      }

      $tags[] = '<a href="' . esc_url( $project_tag_link ) . '" rel="tag">' . esc_html( $project_tag->name ) . '</a>';
    }
    $html .= ' '. implode( ', ', $tags );
    $html .= '</div>';

    return $html;
  }
  ?>