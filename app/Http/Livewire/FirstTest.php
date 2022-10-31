<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FirstTest extends Component
{
public $name;
public $loud = false;

    public function render( $name)
    {
       $name='yees';
      $this->$name=$name;
        //return view('livewire.first-test',['name'=>'benn']);
       //return view('livewire.first-test',[$name=>'ben']);
       return view('livewire.first-test');
    }
    //$2y$10$vfDCHuwKgDawcqmjGwMty.98RN384ecdkBtv9iHGdQ0Nh9k/wXDDa
}
