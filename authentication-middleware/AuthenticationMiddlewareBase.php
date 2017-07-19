<?php

namespace systems\tmsservice\middleware\authentication;

use \Slim\Slim;

/**
 * Authentication Middleware Base Class - For building authentication rules.
 *
 * @author Sean Wallis <sean.wallis2@networkrail.co.uk>
 */
abstract class AuthenticationMiddlewareBase implements AuthenticationMiddlewareInterface
{
    /** @var Slim $app Application object. */
    protected $app;

    /**
     * Constructor - Pull in an instance of the Application.
     *
     * @param Slim $app Instance of the Slim Application
     */
    public function __construct(Slim $app)
    {
        $this->app = $app;
    }

    /**
     * Not Authenticated - Inform the user that they require authentication.
     *
     * @return \Slim\Http\Response Json response
     */
    public function notAuthenticated()
    {
        $errorResponse = array(
            'message' => 'Requires authentication'
        );
        return $this->app->response->withStatus(401)->withJson($errorResponse);
    }
}
