<?php
namespace app\controller;
use app\core\Controller;
use app\core\Request;

class AuthController extends Controller {
    public function login(Request $request) {
        $this->setLayout('auth');
        if ($request->isPost()) {
            return 'Handling submitted data';
        }

        return $this->render('displayLogin');
    }
}

?>