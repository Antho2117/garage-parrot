<?php

class LogoutController
{
    public function logoutIndex()
    {
        header("location: "._BASE_USERSPACE_URL."/");
    }
}