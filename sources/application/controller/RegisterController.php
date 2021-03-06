<?php

require_once('HostController.php');
require_once('DinnerController.php');
require_once('GuestController.php');

/**
 * The note controller: Just an example of simple create, read, update and delete (CRUD) actions.
 */
class RegisterController extends Controller
{

    private $hostController;
    private $dinnerController;
    private $guestController;

    public function __construct()
    {
        $this->hostController = new HostController();
        $this->dinnerController = new DinnerController();
        $this->guestController = new GuestController();
        parent::__construct();
    }

    public function host()
    {
        $hostId = $this->hostController->create();
        $this->dinnerController->create($hostId);
        Redirect::to('close/index');
    }

    public function guest() {
        $this->guestController->create();
        Redirect::to('close/index');
    }

}
