<?php


// add metabox for np_portfolio

add_action( 'add_meta_boxes_np_portfolio', 'add_custom_metabox' );
function add_custom_metabox( $post ) {
    add_meta_box( 
        'np-portfolio-meta-box',
        __( 'NP-Portfolio' ),
        'render_np_portfolio_metabox',
        'np_portfolio',
        'side',
        'default'
    );
}

function render_np_portfolio_metabox($post) {
    $date = get_post_meta($post->ID, 'np_portfolio_date', true);
    $link = get_post_meta($post->ID, 'np_portfolio_link', true);
    ?>

        <p>NP-Portfolio date:<br>
        <input type="text" name="np_portfolio_date" id="np_portfolio_date" value=<?=$date;?> >
        </p>
        <p>NP-Portfolio link:<br>
        <input type="text" name="np_portfolio_link" id="np_portfolio_link" value=<?=$link;?> >
        </p>

   <?php
}


add_action('save_post', 'save_np_portfolio_metabox');

function save_np_portfolio_metabox( $post_id ) {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return $post_id;
    }

    // echo '<pre>';
    // var_dump($_POST);
    // echo '<pre>';
    // wp_die(); // 


    if ( !isset($_POST['np_portfolio_date']) ) return $post_id; // есть ли в посте наше поле

    // Sanitize the user input.
    $pfdate = sanitize_text_field( $_POST['np_portfolio_date'] ); // 'вырезает' из текста опасные части - откуда пришел запрос
    $pflink = sanitize_text_field( $_POST['np_portfolio_link'] );

    // Update the meta field.
    update_post_meta( $post_id, 'np_portfolio_date', $pfdate );
    update_post_meta( $post_id, 'np_portfolio_link', $pflink );

}


?>
