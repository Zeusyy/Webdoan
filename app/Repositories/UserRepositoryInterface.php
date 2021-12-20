<?php
namespace App\Repositories;

use App\User;
use Illuminate\Http\Request;

interface UserRepositoryInterface{
    public function all();

    public function allWithoutPaginate();

    public function delete($id);

    public function update(Request $request, User $user);

    public function searchID($keyword);

    public function searchName($keyword);

    public function searchPhone($keyword);

    public function searchEmail($keyword);

    public function onlyRole($role_id);
    
    public function countNewUser();
}