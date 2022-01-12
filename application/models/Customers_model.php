<?php
class Customers_model extends CI_Model {
    public function get_customer($id) {
        $data['id'] = 3;
        $data['first_name'] = 'Sushant';
        $data['last_name'] = 'Adhikari';
        $data['address'] = 'Baneshwor';

        return $data;
    }
}