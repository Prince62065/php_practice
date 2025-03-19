<?php
setcookie('__stripe_mid', '', time() - 3600, "/");

if (!isset($_COOKIE['__stripe_mid'])) {
    echo "__stripe_mid cookie has been deleted.";
} else {
    echo "Failed to delete the cookie.";
}
?>
