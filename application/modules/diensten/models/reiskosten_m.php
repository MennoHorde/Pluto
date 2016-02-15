<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Reiskosten_m extends MY_Model {

    public function __construct()
    {
        $this->load->model('db/diensten_m', 'diensten');
        $this->load->library('Distance_matrix');
    }
    
    /**
     * 
     * @param int $jaar
     * @param int $maand
     * @param string $route
     * @return array|object
     */
    public function getRoutes($jaar, $maand, $route)
    {
        $fields = '
            id,
            CONCAT_WS(" ", REPLACE(TRIM(adres), " ", ""), (huisnuummer), REPLACE(postcode, " ",""), "NL") as destination,
            DATE_FORMAT(datum, "%e") as day';

        $where = array(
            'YEAR(datum)' => $jaar,
            'MONTH(datum)' => $maand,
            'route' => $route
        );

        $order_by = 'datum asc, van asc';

        $routes = $this->diensten->as_array()->getDiensten($fields, $where, $order_by);

        $routes = sort_array_by_key($routes, 'day');

        $routes = $this->_addDestination($routes);

        return $routes;
    }
    
    /**
     * 
     * @param array $routes
     * @return array
     */
    private function _addDestination($routes)
    {
        foreach ($routes as $key => $sub_array)
        {
            foreach ($sub_array as $sub_key => $sub_sub_array)
            {
                // Skip first client
                if($sub_key != 0)
                {
                    $prev_key = $sub_key - 1;

                    $routes[$key][$sub_key]['origin'] = $sub_array[$prev_key]['destination'];
                }
            }
        }

        return $routes;
    }
    
    /**
     * 
     * @return object
     */
    public function getResponse()
    {
        return $this->distance_matrix->getResponse(' 3703TG Laan van Bergen 3', '3708XA Graaf Adolflaan 15');
    }
    
    /**
     * 
     * @param array $dienst
     */
    public function updateReiskosten($dienst)
    {
        $data = array(
            'reiskosten' => $dienst['reiskosten']
        );

        $this->diensten->updateDienst($dienst['id'], $data);
    }
}
