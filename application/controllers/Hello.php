<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Hello extends CI_Controller {

    public function index() {
        echo 'Freetuts.net Hello Controller';
    }

    public function nickname($user='Nhung',$callback='lun') {
        echo 'Nickname cua '.$user.' la '.$user.' '.$callback;
    }
}
