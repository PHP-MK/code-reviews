<?php

namespace systems\tmsservice\middleware\authentication\Test;

// Mock the global ROOT_DIR
define("ROOT_DIR", 'mock');

class AuthenticationByUserGroupMiddlewareTest extends \PHPUnit_Framework_TestCase
{
    protected $app;

    protected function setUp()
    {
        // Mock the application
        $this->app = $this
            ->getMockBuilder('\Slim\Slim')
            ->disableOriginalConstructor()
            ->getMock();
    }

    /**
     * @param array $userGroupsResultMock - Groups the user is part of.
     * @param bool $expectedResult - If the user is in the admin group.
     *
     * @dataProvider providerTestAuthenticationByAdminUserGroup
     */
    public function testAuthenticationByAdminUserGroup($userGroupsResultMock, $expectedResult)
    {
        // Mock the Authorisation Controller
        $authController = $this
            ->getMockBuilder('\systems\portal\controllers\AuthController')
            ->disableOriginalConstructor()
            ->getMock(
                "systems\portal\controllers\AuthController",
                array("checkUser")
            );

        // Stub the AuthController checkUser method
        $authController->expects($this->any())
            ->method("checkUser")
            ->will($this->returnValue($userGroupsResultMock));

        // Stub the notAuthenticated method
        // All other methods are mocked and run the actual code
        $authenticateByGroup = $this
            ->getMockBuilder('\systems\tmsservice\middleware\authentication\AuthenticationByUserGroupMiddleware')
            ->setConstructorArgs(array($this->app, $authController))
            ->setMethods(array('notAuthenticated'))
            ->getMock();

        $result = $authenticateByGroup->isAdmin();
        $this->assertEquals($expectedResult, $result);
    }

    public function providerTestAuthenticationByAdminUserGroup()
    {
        return array(
            'Admin User' => array(
                array(1),
                true
            ),
            'Admin User in Multiple Groups' => array(
                array(9, 8, 1, 33),
                true
            ),
            'Non Admin User' => array(
                array(2),
                false
            ),
            'Non Admin User in Multiple Groups' => array(
                array(9, 8, 7, 33),
                false
            ),
            'No User Groups' => array(
                array(),
                false
            )
        );
    }
}
