<?php
/*  Copyright 2006  ADY ROMANTIKA  (email : ady@romantika.name)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/*
Plugin Name: Random Posts Widget
Plugin URI: http://wordpress.org/plugins/random-posts-widget/
Description: Display Random Posts Widget. This simple plugin is a widget that displays a list of random posts on your widgetized sidebar. It supports multiple instances with WordPress 2.8 and above.
Author: Ady Romantika
Version: 2.1
Author URI: http://www.romantika.name/v2/
License: GPL2
*/

function ara_random_posts( $instance )
{
    $finalString = '';
    $rand_articles = ara_get_random_posts( $instance['count'], $instance['cat'] );

    switch( $instance['type'] ) {
        case 'br':
            $list_start = '<p>';
            $line_start = '';
            $line_end   = "<br />\n";
            $list_end   = "</p>\n";
            break;
        case 'p':
            $list_start = '';
            $line_start = '<p>';
            $line_end   = "</p>\n";
            $list_end   = '';
            break;
        case 'ul':
        default:
            $list_start = "<ul>\n";
            $line_start = "<li>";
            $line_end   = "</li>\n";
            $list_end   = "</ul>\n";
    }

    $finalString .= $list_start;

    for ( $x=0; $x<count( $rand_articles ); $x++ ) {
        $finalString .= $line_start . '<a href="'.$rand_articles[$x]['permalink'].'">'.$rand_articles[$x]['title'].'</a>' . $line_end;
    }

    $finalString .= $list_end;

    return $finalString;
}

function ara_get_random_posts( $numPosts = '5', $category = '' ) {
    global $wpdb, $wp_db_version;

    if( '' == $category ):
        $sql = "SELECT $wpdb->posts.ID FROM $wpdb->posts WHERE $wpdb->posts.post_status = 'publish' AND $wpdb->posts.post_type = 'post'";
    else:
        if($wp_db_version >= 6124): // Database structure has changed since WP 2.3
            $sql = "SELECT $wpdb->posts.ID ";
            $sql.= "FROM $wpdb->posts, $wpdb->term_relationships, $wpdb->term_taxonomy ";
            $sql.= "WHERE $wpdb->posts.post_status = 'publish' ";
            $sql.= "AND $wpdb->posts.post_type = 'post' ";
            $sql.= 'AND ';
            $sql.= '( ';
            $sql.= "$wpdb->posts.ID = $wpdb->term_relationships.object_id ";
            $sql.= "AND $wpdb->term_relationships.term_taxonomy_id = $wpdb->term_taxonomy.term_taxonomy_id ";
            $sql.= "AND $wpdb->term_taxonomy.term_id = $category ";
            $sql.= ')';
        else:
            $sql = "SELECT $wpdb->posts.ID ";
            $sql.= "FROM $wpdb->posts, $wpdb->post2cat ";
            $sql.= "WHERE $wpdb->posts.post_status = 'publish' ";
            $sql.= "AND $wpdb->posts.post_type = 'post'";
            $sql.= "AND $wpdb->post2cat.post_id = $wpdb->posts.ID ";
            $sql.= "AND $wpdb->post2cat.category_id = $category";
        endif;
    endif;

    $the_ids = $wpdb->get_results( $sql );

    $luckyPosts = (array) array_rand( $the_ids, ( $numPosts > count( $the_ids ) ? count( $the_ids ) : $numPosts ) );

    $sql = "SELECT $wpdb->posts.post_title, $wpdb->posts.ID";
    $sql .=	" FROM $wpdb->posts";
    $sql .=	' WHERE';

    # Here we minimize number of query to the database by using ORs - just one query needed
    foreach ( $luckyPosts as $id )
    {
        if( true == $notfirst ) $sql .= ' OR';
        else $sql .= ' (';
        $sql .= " $wpdb->posts.ID = ".$the_ids[$id]->ID;
        $notfirst = true;
    }
    $sql .= ')';

    $rand_articles = $wpdb->get_results( $sql );

    # Give it a shuffle just to spice it up
    shuffle( $rand_articles );

    if ( $rand_articles ) {
        foreach ( $rand_articles as $item ) {
            $posts_results[] = array( 'title' => str_replace( '"', '', stripslashes ( $item->post_title ) ), 'permalink' => post_permalink( $item->ID ) );
        }
        return $posts_results;
    }
    else {
        return false;
    }
}

if( $wp_db_version < 11548 ) # WordPress older than 2.8 doesn't have WP_Widget
{
    function widget_ara_randomposts_control() {

        $options = $newoptions = get_option( 'widget_ara_randomposts' );
        if ( $_POST['randomposts-submit'] ) {
            $newoptions['title'] = strip_tags( stripslashes( $_POST['randomposts-title'] ) );
            $newoptions['type'] = $_POST['randomposts-type'];
            $newoptions['count'] = (int) $_POST['randomposts-count'];
            $newoptions['cat'] = $_POST['randomposts-category'];
        }
        if ( $options != $newoptions ) {
            $options = $newoptions;
            update_option( 'widget_ara_randomposts', $options );
        }

        # Get categories from the database
        $all_categories = get_categories();
    ?>
            <div style="text-align:right">
            <label for="randomposts-title" style="line-height:25px;display:block;"><?php _e('Widget title:', 'widgets'); ?> <input style="width: 200px;" type="text" id="randomposts-title" name="randomposts-title" value="<?php echo ($options['title'] ? wp_specialchars($options['title'], true) : 'Random Posts'); ?>" /></label>
            <label for="randomposts-type" style="line-height:25px;display:block;">
                <?php _e('List Type:', 'widgets'); ?>
                    <select style="width: 200px;" id="randomposts-type" name="randomposts-type">
                        <option value="ul"<?php if ( $options['type'] == 'ul' ) echo ' selected' ?>>&lt;ul&gt;</option>
                        <option value="br"<?php if ( $options['type'] == 'br' ) echo ' selected' ?>>&lt;br /&gt;</option>
                        <option value="p"<?php if ( $options['type'] == 'p' ) echo ' selected' ?>>&lt;p&gt;</option>
                    </select>
            </label>
            <label for="randomposts-count" style="line-height:25px;display:block;">
                <?php _e('Post count:', 'widgets'); ?>
                    <select style="width: 200px;" id="randomposts-count" name="randomposts-count"/>
                        <?php for( $cnt=1; $cnt<=10; $cnt++ ): ?>
                            <option value="<?php echo $cnt ?>"<?php if( $options['count'] == $cnt ) echo ' selected' ?>><?php echo $cnt ?></option>
                        <?php endfor; ?>
                    </select>
            </label>
            <label for="randomposts-category" style="line-height:25px;display:block;">
                <?php _e('Category:', 'widgets'); ?>
                    <select style="width: 200px;" id="randomposts-category" name="randomposts-category"/>
                        <option value="">-- None --</option>
                        <?php foreach ( $all_categories as $cat ) { ?>
                            <option value="<?php echo $cat->cat_ID ?>"<?php if( $options['cat'] == $cat->cat_ID ) echo ' selected' ?>><?php echo $cat->cat_name ?></option>
                        <?php } ?>
                    </select>
            </label>
            <input type="hidden" name="randomposts-submit" id="randomposts-submit" value="1" />
            </div>
    <?php
    }

    function widget_ara_randomposts_init() {

        // Check for the required API functions
        if ( ! function_exists( 'register_sidebar_widget' ) || ! function_exists( 'register_widget_control' ) )
            return;

        // This prints the widget
        function widget_ara_randomposts( $args ) {
            extract( $args );
            $options = get_option( 'widget_ara_randomposts' );
            echo $before_widget;
            if ( $options['title'] )
                echo $before_title . $options['title'] . $after_title;
            echo ara_random_posts( $options );
            echo $after_widget;
        }

        // Tell Dynamic Sidebar about our new widget and its control
        register_sidebar_widget( array( 'Random Posts Widget', 'widgets' ), 'widget_ara_randomposts' );
        register_widget_control( array( 'Random Posts Widget', 'widgets' ), 'widget_ara_randomposts_control' );
    }
}
else
{
    class WP_ARA_Widget_Random_Posts extends WP_Widget {

        public function WP_ARA_Widget_Random_Posts() {
		    $widget_ops = array( 'classname' => 'wp_ara_widget_random_posts', 'description' => 'Display Random Posts Widget.' );
		    $control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'wp_ara_widget_random_posts' );
		    $this->WP_Widget( 'wp_ara_widget_random_posts', 'Random Posts Widget', $widget_ops, $control_ops );
        }

        public function widget( $args, $instance ) {
            extract( $args );

            $title = apply_filters( 'widget_title', $instance['title'] );

            echo $before_widget;
            if ( $title )
                echo $before_title . $title . $after_title;
            echo ara_random_posts( $instance );
            echo $after_widget;
        }

        public function form( $instance ) {
            $defaults = array( 'title' => 'Random Posts', 'type' => 'ul' );
            $instance = wp_parse_args( (array) $instance, $defaults );
            ?>
            <p>
  		    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
  		    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $instance['title']; ?>" />
  		    </p>
            <p>
  		    <label for="<?php echo $this->get_field_id( 'type' ); ?>"><?php _e( 'Type:' ); ?></label>
                <select class="widefat" id="<?php echo $this->get_field_id( 'type' ); ?>" name="<?php echo $this->get_field_name( 'type' ); ?>">
                    <option value="ul"<?php if ( $instance['type'] == 'ul' ) echo ' selected' ?>>&lt;ul&gt; - Unordered list (bullets)</option>
                    <option value="br"<?php if ( $instance['type'] == 'br' ) echo ' selected' ?>>&lt;br /&gt; - Line breaks</option>
                    <option value="p"<?php if ( $instance['type'] == 'p' ) echo ' selected' ?>>&lt;p&gt; - Paragraph</option>
                </select>
  		    </p>
            <p>
  		    <label for="<?php echo $this->get_field_id( 'count' ); ?>"><?php _e( 'Count:' ); ?></label>
                <select class="widefat" id="<?php echo $this->get_field_id( 'count' ); ?>" name="<?php echo $this->get_field_name( 'count' ); ?>">
                    <?php for ( $cnt=1;$cnt<=10;$cnt++ ): ?>
                    <option value="<?php echo $cnt ?>"<?php if ( $instance['count'] == $cnt ) echo ' selected' ?>><?php echo $cnt ?></option>
                    <?php endfor; ?>
                </select>
  		    </p>
            <p>
            <label for="<?php echo $this->get_field_id( 'cat' ); ?>"><?php _e( 'Category:' ); ?></label>
                <select class="widefat" id="<?php echo $this->get_field_id( 'cat' ); ?>" name="<?php echo $this->get_field_name( 'cat' ); ?>">
                    <option value="">-- None --</option>
                    <?php foreach ( get_categories() as $cat ): ?>
                    <option value="<?php echo $cat->cat_ID  ?>"<?php if ( $instance['cat'] == $cat->cat_ID ) echo ' selected' ?>><?php echo $cat->cat_name  ?></option>
                    <?php endforeach; ?>
                </select>
            </p>
            <?php
        }

        public function update( $new_instance, $old_instance ) {
            $instance = $old_instance;

            $instance['title'] = strip_tags( stripslashes( $new_instance['title'] ) );
            $instance['type']  = $new_instance['type'];
            $instance['count'] = (int) $new_instance['count'];
            $instance['cat']   = $new_instance['cat'];
            return $instance;
        }
    }

    function widget_ara_randomposts_init() {
        register_widget( 'WP_ARA_Widget_Random_Posts' );
    }
}

add_action('widgets_init', 'widget_ara_randomposts_init');
?>
