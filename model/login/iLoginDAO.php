<?php
interface iLoginDAO{
    public function login(LoginVO $value);

    public function requestRegister(LoginVO $value);

    public function forgotPassword(LoginVO $value);

    public function requestSupport(LoginVO $value);
}
?>