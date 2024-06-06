<?php

namespace App\Services\Feature;

class FeatureList
{
    public const REGISTRATION = 'registration';
    public const LOGIN_USERS = 'login.users';
    public const RESET_PASSWORD = 'reset_password';
    public const ACCOUNT_USERS = 'account.users';
    //Cache
    public const CACHE = 'cache';
    // API
    public const API = 'api';
    public const API_AUTH = 'api.auth';
    public const API_LOGIN_USERS = 'api.login.users';
    public const API_LOGOUT_USERS = 'api.logout.users';
    public const API_REFRESH_TOKEN = 'api.refresh_token';
    public const API_RESET_PASSWORD_LINK = 'api.reset_password_link';
    public const API_CHECK_RESET_PASSWORD_TOKEN = 'api.check_reset_password_token';
    public const API_UPDATE_PASSWORD = 'api.update_password';
}
