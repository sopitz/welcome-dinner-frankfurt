<?php

require_once('HostController.php');
require_once('DinnerController.php');

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
        $this->dinnerController = new DinnerController();
        parent::__construct();
    }

    public function host()
    {
        $hostId = $this->hostController->create();
        $this->dinnerController->create($hostId);
    }

}
