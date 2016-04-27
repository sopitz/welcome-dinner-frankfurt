<?php

/**
 * The note controller: Just an example of simple create, read, update and delete (CRUD) actions.
 */
class DinnerController extends Controller
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

    public function create($hostId)
    {
        $dinnerData['date'] = Request::post('date');
        $dinnerData['hostId'] = $hostId;
        $dinner = new Dinner($dinnerData);
        if (DinnerModel::createDinner($dinner)) {
            // success
            //Redirect::to('note');
        } else {
            // failure
            //Redirect::to('note');
        }

    }

}
