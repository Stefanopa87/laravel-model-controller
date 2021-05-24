<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movies extends Model
{
   protected $table = 'movies';
   // ricorda che il model va al singolare..
   // in questo caso sarebbe sato meglio mettere movie e poi lui lo trasformava al plurale
}
