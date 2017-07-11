<?php

namespace systems\tmsservice\middleware\authentication;

use \Slim\Slim;
use \systems\portal\controllers\AuthController;

/**
 * Authentication Middleware Base Class for the Portal
 *
 * For building authentication rules around the Portal site.
 *
 * @author Sean Wallis <sean.wallis2@networkrail.co.uk>
 */
abstract class AuthenticationPortalMiddlewareBase extends AuthenticationMiddlewareBase
{
    /** @var Slim $app Application object. */
    protected $app;

    /** @var AuthController $authController Authorisation controller. */
    protected $authController;

    /**
     * Constructor - Pull in the dependencies.
     *
     * @param Slim $app
     * @param AuthController $authController
     */
    public function __construct(Slim $app, AuthController $authController)
    {
        parent::__construct($app);
        $this->authController = $authController;
    }

    /**
     * Check User Group Access for the system
     *
     * Check the user has access to all groups in $groups
     * for a given system based on their session.
     *
     * @param array $groups
     * @return bool
     */
    public function checkGroupAccess(array $groups)
    {
        // Retrieve the groups the user belongs to for the given system
        $userGroupsResult = $this->authController->checkUser(false);

        return count(array_intersect($groups, $userGroupsResult)) == count($groups);
    }
}
