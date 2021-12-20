<?php
namespace App\Services;

use App\User;
use Illuminate\Http\Request;

interface UserServiceInterface{
    public function all();

    public function allWithoutPaginate();

    public function delete($id);

    public function update(Request $request, User $user);

    public function search($keyword,$option);

    public function onlyRole($role);
    
    public function countUser($role);
    
    public function countNewUser();
}