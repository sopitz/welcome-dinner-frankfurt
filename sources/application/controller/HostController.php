<?php

/**
 * The note controller: Just an example of simple create, read, update and delete (CRUD) actions.
 */
class HostController extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->View->render('note/index', array(
            'notes' => NoteModel::getAllNotes()
        ));
    }

    public function register() {
        $this->View->render('index/host', array());
    }

    public function create()
    {
        $hostData['gender'] = Request::post('gender');
        $hostData['firstname'] = Request::post('firstname');
        $hostData['lastname'] = Request::post('lastname');
        $hostData['phone'] = Request::post('phone');
        $hostData['mail'] = Request::post('mail');
        $hostData['street'] = Request::post('street');
        $hostData['zipCode'] = Request::post('zipCode');
        $hostData['city'] = Request::post('city');
        $hostData['languages'] = Request::post('languages', false);
        $hostData['welcomeDinnerOrigin'] = Request::post('welcomeDinnerOrigin');
        $hostData['coHosts'] = Request::post('coHosts');
        $hostData['notes'] = Request::post('notes');
        $host = new Host($hostData);
        if (HostModel::createHost($host)) {
            // success
            //Redirect::to('note');
        } else {
            // failure
            //Redirect::to('note');
        }

    }

}
