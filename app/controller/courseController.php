<?php

require_once '../model/courseModel.php';

class courseController {
    private $courseModel;

    public function __construct() {
        // TODO: Initialize courseModel
        // $this->courseModel = new Course(...);
    }
    public function addCourse($userUid, $courseDetails) {
        // Course details as $courseTitle, $dateTime, $duration, $maxAttendees, $courseDesc
        // TODO: Validate user permissions
            // Superusers and admins can add courses
        // TODO: Validate input data
        // TODO: Send data to model to add course
    }
    public function listCourses(int $userUid) {
        // TODO: Validate user permissions
            // Superadmin can view courses
            // Admin can view courses
            // Users can only view current_courses (not historical)
        // TODO: Call courseModel->displayCourses($userUid)
        // TODO: Pass courses array to view for display
    }

    public function viewCourse(int $userUid, int $courseUid) {
        // TODO: Validate user permissions
            // Superadmin and admins can view all courses
            // Users can only view current_courses and courses they were signed up on
        // TODO: Call courseModel->viewCourse($userUid, $courseUid)
        // TODO: Pass course details to view
    }

    public function editCourse($userUid, $courseUid, $valuesChanged) {
        // TODO: Validate user permissions
            // Superusers can edit courses
            // Admins can only edit their own courses
        // TODO: Validate input data
        // TODO: Call courseModel->editCourse($userUid, $courseUid, $valuesChanged)
        // TODO: Return response and redirect/display result
    }

    public function enrolUser($userUid, $addedUid, $courseUid) {
        // TODO: Validate user permissions
            // Superusers and admins can add users to courses
            // Users can only add self to courses
        // TODO: Call courseModel->addUser($userUid, $addedUid, $courseUid)
        // TODO: Return response and redirect/display result
    }

    public function unenrollUser($userUid, $addedUid, $courseUid) {
        // TODO: Validate user permissions 
            // Superusers and admins can remove users from courses
            // Users can only remove self from courses
        // TODO: Call courseModel->removeUser($userUid, $addedUid, $courseUid)
        // TODO: Return response and redirect/display result
    }
}

?>