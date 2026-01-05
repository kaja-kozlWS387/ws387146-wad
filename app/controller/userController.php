<?php
namespace app\controller;

require_once '../model/userModel.php';
require_once __DIR__ . '/permissionsController.php';

class UserController {
    private $userModel;

    public function __construct() {
        // TODO: Initialize userModel
        // $this->userModel = new User(...);
    }

    private function getCurrentUser() {
        // Placeholder: retrieve current user from session or auth layer.
        // Example: return $_SESSION['current_user'] ?? null;
        return isset($_SESSION) && isset($_SESSION['current_user']) ? $_SESSION['current_user'] : null;
    }

    // TODO: at the end, if there is no extra logic to checkPerms (only calls PermissionsController) then remove it
    private function checkPerms($user, $action) {
        // Accepts either a user object (with accessLevel) or a role string
        $pc = new PermissionsController();
        return $pc->hasPermission($user, $action);
    }

    public function verifyUserCredentails($email, $password) {
        // Santise user input (email and password)
        // Hash password
        // Call userModel->verifyUser($email, $password)
        // Return success code or error
        return $this->userModel->verifyUser($email, $password);
    }

    public function createUser($userUid, $userData) {
        // Sanitise user data
        // Check permissions
        // Call model to edit user
        // Return success code or error
    }
    public function getUser() {
        // TODO: Retrieve user from request/session
        // TODO: Call userModel->getUser()
        // TODO: Return user details to view
    }

    public function viewUser($userUid, $viewedUid) {
        // Check permissions
        // Call model to edit user
        // Return success code or error
    }

    public function editUser($userUid, $editedUid, $valuesChanged) {
        // Sanitise user data
        // Check permissions
        // Call model to edit user
        // Return success code or error
    }

    public function deleteUser($userUid, $deletedUid) {
        // Check permissions
        // Call model to delete user
        // Return success code or error
    }

    public function listUsers() {
        // Check permissions
        // Send to model to fetch users
        // Return array of users for view to display
    }
}

?>