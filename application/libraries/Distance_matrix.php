<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Distance_matrix {

    private $origin;
    private $destination;
    private $mode;
    private $language;

    public function __construct()
    {
        $this->mode = 'driving';
        $this->language = 'nl-NL';
    }

    public function set_origin($origin)
    {
        $this->origin = $origin;
    }

    public function set_destination($destination)
    {
        $this->destination = $destination;
    }

    public function getResponse($origin = null, $destination = null)
    {
        if ($origin != null)
        {
            $this->set_origin($origin);
        }

        if ($destination != null)
        {
            $this->set_destination($destination);
        }

        $request_parameters = array(
			'origins' => $origin,
			'destinations' => $destination,
			'mode' => $this->mode,
			'language' => $this->language
		);

		$url = 'http://maps.googleapis.com/maps/api/distancematrix/json?' . http_build_query($request_parameters);

		$response = json_decode(file_get_contents($url));

        if (!$this->validate_response($response)) {

        }

        return $response;
    }

    public function validate_response($response)
    {
        if (isset($response->status) && $response->status == 'OK')
        {
            return true;
        }

        return false;
    }
}
