<?php
namespace Cars\Libraries;
use Cars\Models\CarsModel;
class CarsLib {
  public function __construct()
  {
    $config         = config(App::class);
    $this->response = new Response($config);
    $this->myCars();
  }
  
  private function myCars() {
    //
  }

  public function requestGet($path, $param = false) {
    //
  }
}