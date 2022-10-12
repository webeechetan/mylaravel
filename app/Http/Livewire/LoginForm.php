<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class LoginForm extends Component
{
    public $number = 0;

    public $users;

    public $username;

    public $slug = '';

    public function render()
    {
        return view('livewire.login-form');
    }

    public function mount(){
        $this->users = User::all();
    }

    public function increment(){
        $this->number++;
    }

    public function decrement(){
        $this->number--;
    }

    public function UpdateUserList(){
        $this->users = User::all();
    }

    public function updatedSlug($value){
        $this->slug = str_replace(' ', '-', $value);
    }
}
