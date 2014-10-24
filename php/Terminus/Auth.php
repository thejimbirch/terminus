<?php
namespace Terminus;

use Terminus\FileCache;
use Terminus;
use Terminus\Session;

class Auth {

  public function loggedIn() {
    if ( false === Session::instance()->getValue('session',false) ) {
      \Terminus::error("Please login first with `terminus auth login`");
    }
  }

}
