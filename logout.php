

<?php
class SessionManager {
    public function __construct() {
        session_start();
    }

    public function unsetAndDestroy() {
        session_unset();
        session_destroy();
    }
}

$sessionManager = new SessionManager();
$sessionManager->unsetAndDestroy();

header("Location: index.php");
exit();
?>

