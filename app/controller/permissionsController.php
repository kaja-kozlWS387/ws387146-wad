<?php
namespace app\controller;
class PermissionsController {

    // TODO: Move mapping to database or config file
    public $permissionsMap = [
        'superuser' => [
            'user' => ['create', 'view', 'edit', 'delete', 'list'],
            'course' => ['add', 'list', 'view', 'edit', 'enrol', 'unenrol'],
        ],
        'admin' => [
            'user' => ['view.self', 'edit.self', 'delete.self'],
            'course' => ['add', 'list', 'view', 'edit.self', 'enrol.self', 'unenroll.self'], // Self refers to own courses
        ],
        'user' => [
            'user' => ['view.self', 'edit.self', 'delete.self'],
            'course' => ['list', 'view.self', 'enrol.self', 'unenroll.self'], // View only current or own courses
        ],
    ];

    public function hasPermission($user, $action, $resource = 'course')
    {
        // Determine role from user input
        if (is_object($user) && property_exists($user, 'accessLevel')) {
            $role = strtolower((string)$user->accessLevel);
        } elseif (is_string($user)) {
            $role = strtolower($user);
        } else {
            // Unknown input, deny by default
            return false;
        }

        // Check if role exists in permissions map
        if (!isset($this->permissionsMap[$role])) {
            return false;
        }

        // Check if resource exists for this role
        if (!isset($this->permissionsMap[$role][$resource])) {
            return false;
        }

        // Check if action is permitted for this resource
        return in_array($action, $this->permissionsMap[$role][$resource], true);
    }

}

?>