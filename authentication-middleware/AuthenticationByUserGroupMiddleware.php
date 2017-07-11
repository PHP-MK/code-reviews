<?php

namespace systems\tmsservice\middleware\authentication;

/**
 * Authentication By User Groups Middleware
 *
 * A middleware strategy for handling application authorisation using User Groups.
 *
 * @author Sean Wallis <sean.wallis2@networkrail.co.uk>
 */
class AuthenticationByUserGroupMiddleware extends AuthenticationPortalMiddlewareBase
{
    /**
     * Is Admin - Check if the user is an admin user.
     *
     * @return bool
     */
    public function isAdmin()
    {
        if (!$this->checkGroupAccess(array(1))) {
            $this->notAuthenticated();
            return false;
        }

        return true;
    }
}
