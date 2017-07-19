<?php

namespace systems\tmsservice\middleware\authentication;

/**
 * An interface for handling authentication rules.
 *
 * @author Sean Wallis <sean.wallis2@networkrail.co.uk>
 */
interface AuthenticationMiddlewareInterface
{
    /**
     * Not Authenticated - Inform the user that they require authentication.
     *
     * @return \Slim\Http\Response Json response
     */
    public function notAuthenticated();
}
