<?php printf( __( 'Forked from <a href="%1$s">%2$s</a>' ), admin_url( "post.php?post={$post->post_parent}&action=edit" ), $this->get_parent_name( $post ) ); ?>