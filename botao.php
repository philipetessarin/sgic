<?php
function get_post_action($name)
{
    $params = func_get_args();

    foreach ($params as $name) {
        if (isset($_POST[$name])) {
            return $name;
        }
    }
}


switch (get_post_action('save', 'submit', 'publish')) {
    case 'save':
        //save article and keep editing
        break;

    case 'submit':
        //save article and redirect
        break;

    default:
        //no action sent
}
?>