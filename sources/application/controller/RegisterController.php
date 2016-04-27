<?php

require_once('HostController.php');

/**
 * The note controller: Just an example of simple create, read, update and delete (CRUD) actions.
 */
class RegisterController extends Controller
{

    private $hostController;
    private $dinnerController;

    public function __construct()
    {
        $this->hostController = new HostController();
        parent::__construct();
    }

    public function host()
    {
        $this->hostController->create();
        // dinnerController->create();
    }

}
