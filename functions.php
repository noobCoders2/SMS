var_dump($_SERVER);

function dump($var = null) {
    echo '<pre>';
    var_dump($var ?? $_SERVER);
    echo '</pre>';
}
