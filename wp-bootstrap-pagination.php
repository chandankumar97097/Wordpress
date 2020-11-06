<?php
/*
* custom pagination with bootstrap .pagination class
* source: http://www.ordinarycoder.com/paginate_links-class-ul-li-bootstrap/
*/
function bootstrap_pagination( $echo = true ) {
global $wp_query;

$big = 999999999; // need an unlikely integer

$pages = paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $wp_query->max_num_pages,
    'type'  => 'array',
    'prev_next'   => true,
    'prev_text'    => __('<i class="fa fa-angle-double-left"></i>'),
    'next_text'    => __('<i class="fa fa-angle-double-right"></i>'),
)
);

if( is_array( $pages ) ) {
$paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');

$pagination = '<ul class="pagination">';

    foreach ( $pages as $page ) {
        $pagination .= '<li class="page-item '.(strpos($page, 'current') !== false ? 'active' : '').'"> ' . str_replace( 'page-numbers', 'page-link', $page ) . '</li>';
    }

    $pagination .= '</ul>';

if ( $echo ) {
echo $pagination;
} else {
return $pagination;
}
}
}