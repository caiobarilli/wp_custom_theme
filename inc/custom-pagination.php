<?php

// Custom Navigation
function custom_navigation()
{
    global $wp_query;
    $settings = array(
        'count' => 7,
        'prev_text' => '<',
        'next_text' => '>',
    );

    $current = max(1, get_query_var('paged'));
    $total = $wp_query->max_num_pages;
    $links = array();

    // Offset for next link
    if ($current < $total) {
        $settings['count']--;
    }

    if ($current + 3 < $total) {
        $settings['count'] = $settings['count'] - 2;
    }

    // Previous
    if ($current > 1) {
        $settings['count']--;
        $links[] = custom_navigation_link($current - 1, 'pagination-previous', $settings['prev_text']);

        $settings['count']--;
        $links[] = custom_navigation_link($current - 1);
    }

    // Current
    $links[] = custom_navigation_link($current, 'active');

    // Next Pages
    for ($i = 1; $i < $settings['count']; $i++) {
        $page = $current + $i;
        if ($page <= $total) {
            $links[] = custom_navigation_link($page);
        }
    }

    // Next
    if ($current < $total) {
        if ($current + 3 < $total) {
            $links[] = '<li class="pagination-omission">&hellip;</li>';
            $links[] = custom_navigation_link($total);
        }
        $links[] = custom_navigation_link($current + 1, 'pagination-next', $settings['next_text']);
    }


    echo '<ul class="pagination justify-content-center my-4">' . join('', $links) . '</ul>';
}

// Custom Navigation Link
function custom_navigation_link($page = false, $class = '', $label = '')
{
    if (! $page) {
        return;
    }

    $label = $label ? $label : $page;
    $link = esc_url_raw(get_pagenum_link($page));

    $output = '';
    if (! empty($class)) {
        $output .= '<li class="page-item ' . esc_attr($class) . '">';
    } else {
        $output .= '<li>';
    }
    $output .= '<a class="page-link" href="' . $link . '">' . $label . '</a></li>';

    return $output;
}
