add_action('admin_menu','custom_theme_option');
function custom_theme_option(){
    add_menu_page( "Theme Options", "Theme Options", "manage_options", "theme-options", 'create_options');
}

function create_options()
{
    ?>
    <style>
        .site-branding {
            display: none;
        }
    </style>
    <?php
    acf_form_head();
    get_header();
    acf_form(array('id' => 'acf_theme-options', 'fields' => false, 'post_id' => 1, 'submit_value' => __("Update", 'acf'), 'updated_message' => __("Post updated", 'acf'), 'form' => true));
    get_footer();
}

function my_acf_save_post( $post_id ) {

    // get new value
    //$value = get_field('my_field');

    ?>
    <script>window.location.reload()</script>

<?php
    // do something

}

add_action('acf/save_post', 'my_acf_save_post', 20);


//sitebranding.php
$img=get_field('logo',1);
the_field('site_title',1);
the_field('site_title',1);
$description=get_field('site__description',1);