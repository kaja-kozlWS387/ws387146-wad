<?php

abstract class UserBase {
  public $uid;
  public $email;
  public $firstName;
  public $lastName;
  public $jobTitle;
  public $accessLevel;

  function __construct($uid, $email, $firstName, $lastName, $jobTitle, $accessLevel) {
    $this->uid = $uid;
    $this->email = $email;
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->jobTitle = $jobTitle;
    $this->accessLevel = $accessLevel;
  }

    public function createUser($userData) {
        // TODO: Insert new user into database
    }

    public function verifyUser($email, $password) { 
        // TODO: Verify user credentials against database
    }
    public function viewUser($userUid, $viewedUid) {
        // TODO: If viewed, return user details from existing model
        // TODO: Else, Check user permissions then fetch from database and return
    }

    public function editUser($userUid, $edittedUid, $valuesChanged) {
        // TODO: Ensure permissions
        // TODO: Update user details in database
    }

    public function deleteUser($userUid, $deletedUid) {
        // TODO: Ensure permissions
        // TODO: Delete user from in database
    }

    public function listUsers() {
        // TODO: Check user permissions
        // TODO: Fetch all relevant users from database
        // TODO: Return array of users
    }
}

?>