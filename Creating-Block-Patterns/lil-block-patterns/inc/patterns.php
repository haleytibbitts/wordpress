<?php

function lil_bp_patterns() {

// GRAB PATTERN CONTENT
    include('patterns-content.php');

    // STORE PATTERN METADATA IN AN ARRAY
    $patterns = array(
        'lil-block-patterns/cta' => array(
            'title' => __("Call To Action", 'lil-bp'),
            'description' => _x('A 2-column call to action block with an h2, p, and button', 'lil-bp'),
            'content' => $cta,
            'categories' => array('buttons', 'columns', 'cta', 'lil'),
            'keywords' => array('cta', 'call to action', 'upgrade'),
        ),
        'lil-block-patterns/pricing_table' => array(
            'title' => __("Pricing Table", 'lil-bp'),
            'description' => _x('A 3-column table with pricing options and details with a button to register', 'lil-bp'),
            'content' => $pricing_table,
            'categories' => array('buttons', 'columns', 'lil'),
            'keywords' => array('pricing', 'pricing table', 'upgrade'),
        ),
        'lil-block-patterns/author_bio' => array(
            'title' => __("Author Bio", 'lil-bp'),
            'description' => _x('A 2-column section with featuring the authors photo, socials, and a breif bio.', 'lil-bp'),
            'content' => $author_bio,
            'categories' => array('buttons', 'columns', 'lil'),
            'keywords' => array('author', 'author bio', 'bio', 'bio box', 'social'),
        ),
    );

    // LOOP THROUGH METADATA & REGISTER PATTERNS
    foreach ($patterns as $slug => $props) {
        register_block_pattern($slug, $props);
    };

}

add_action('init', 'lil_bp_patterns');

?>