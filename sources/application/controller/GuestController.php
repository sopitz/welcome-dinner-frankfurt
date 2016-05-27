<?php

/**
 * The note controller: Just an example of simple create, read, update and delete (CRUD) actions.
 */
class GuestController extends Controller
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

    public function register($lang = 'de') {
        if ($lang == 'en') {
            $this->View->render('index/guest_en', array());
        }
        $this->View->render('index/guest', array());
    }

    public function match($id) {
        GuestModel::matchToDinner($id);
        Redirect::to('dashboard/index');
    }

    public function create()
    {
        $guestData['gender'] = Request::post('gender');
        $guestData['firstname'] = Request::post('firstname');
        $guestData['lastname'] = Request::post('lastname');
        $guestData['age'] = Request::post('age');
        $guestData['phone'] = Request::post('phone');
        $guestData['mail'] = Request::post('mail');
        $guestData['street'] = Request::post('street');
        $guestData['zipCode'] = Request::post('zipCode');
        $guestData['city'] = Request::post('city');
        $guestData['country'] = Request::post('country');
        $guestData['languages'] = Request::post('languages', false);
        $guestData['foodspecials'] = Request::post('foodspecials', false);
        $guestData['foodspecialsnotes'] = Request::post('foodspecialsnotes');
        $guestData['welcomeDinnerOrigin'] = Request::post('welcomeDinnerOrigin');
        $guestData['bringalongs'] = Request::post('bringalongs');
        $guestData['notes'] = Request::post('notes');


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

        $guestData['lat'] = $lat;
        $guestData['long'] = $long;

        $host = new Guest($guestData);
        $result = GuestModel::createGuest($host);
        if (!$result) {
            // failure
            //Redirect::to('note');
        } else {
            // success
            return $result;
            //Redirect::to('note');
        }

    }

}
