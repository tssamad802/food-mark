<?php
class SecureSession
{
    private $lifetime = 1800; // 30 min
    private $interval = 1800; // regenerate every 30 min

    public function __construct()
    {
        ini_set('session.use_only_cookies', 1);
        ini_set('session.use_strict_mode', 1);

        session_set_cookie_params([
            "lifetime" => $this->lifetime,
            "domain" => "localhost",
            "path" => "/",
            "secure" => false, // change to true when using HTTPS
            "httponly" => true
        ]);

        session_start();
        $this->checkRegeneration();
    }

    private function regenerateSessionId()
    {
        session_regenerate_id(true);
        $_SESSION['last_regeneration'] = time();
    }

    private function checkRegeneration()
    {
        if (!isset($_SESSION['last_regeneration'])) {
            $this->regenerateSessionId();
        } else if (time() - $_SESSION['last_regeneration'] >= $this->interval) {
            $this->regenerateSessionId();
        }
    }
}
