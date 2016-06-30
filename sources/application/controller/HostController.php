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
        $hostData['languagesnotes'] = Request::post('languagesnotes', false);
        $hostData['welcomeDinnerOrigin'] = Request::post('welcomeDinnerOrigin');
        $hostData['coHosts'] = Request::post('coHosts');
        $hostData['notes'] = Request::post('notes');
        $hostData['children'] = Request::post('children');


        $address = urlencode(Request::post('street')."+".Request::post('zipCode')."+".Request::post('city'));
        $url = "http://maps.google.com/maps/api/geocode/json?address=$address&sensor=false";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $response = curl_exec($ch);
        curl_close($ch);
        $response_a = json_decode($response);
        $lat = $response_a->results[0]->geometry->location->lat;
        $long = $response_a->results[0]->geometry->location->lng;

        $hostData['lat'] = $lat;
        $hostData['long'] = $long;

        $host = new Host($hostData);
        $result = HostModel::createHost($host);
        if (!$result) {
            // failure
            //Redirect::to('note');
        } else {
            // success
            return $result;
            //Redirect::to('note');
        }

    }

    public function update() {

        $field = $_POST['name'];
        $hostId = $_POST['pk'];
        $newValue = $_POST['value'];

        HostModel::updateHost($field, $hostId, $newValue);

        return true;
    }

}
