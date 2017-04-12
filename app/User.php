<?php

namespace English;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

/**
 * @author Salim Djerbouh <tbitw31@gmail.com>
 * @version v0.1.1
 */

class User extends Model implements Authenticatable {
    use \Illuminate\Auth\Authenticatable;
}