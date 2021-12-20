<?php
namespace App\Services;

use App\Repositories\UserRepositoryInterface;
use App\User;
use Illuminate\Http\Request;

class UserService implements UserServiceInterface {
    private $user;

    public function __construct(UserRepositoryInterface $user)
    {
        $this->user = $user;
    }

    public function all(){
        return $this->user->all();
    }

    public function delete($id){
        $this->user->delete($id);
    }

    public function update(Request $request, User $user){
        $this->user->update($request,$user);
    }

    // options = [id,name,email,phone]
    public function search($keyword,$option)
    {
        if($keyword == null)
            return $this->user->all();
            
        if($option == 'id')
            return $this->user->searchID($keyword);
            
        if($option == 'name')
            return $this->user->searchName($keyword);
            
        if($option == 'email')
            return $this->user->searchEmail($keyword);
            
        if($option == 'phone')
            return $this->user->searchPhone($keyword);
            
        return $this->user->all();
    }

    public function onlyRole($role)
    {
        // admin: 1   user:2   employee:3
        if($role == 'admin')
            return $this->user->onlyRole(1);
    
        if($role == 'user')
            return $this->user->onlyRole(2);
    
        if($role == 'employee')
            return $this->user->onlyRole(3);
    
    }
    public function countUser($role){
        if($role == 'all')
            return $this->user->allWithoutPaginate()->count();

        if($role == 'user')
            return $this->user->onlyRole(2)->count();

        if($role == 'admin')
            return $this->user->onlyRole(1)->count();

        if($role == 'employee')
            return $this->user->onlyRole(3)->count();
    }

    public function countNewUser(){
        return $this->user->countNewUser()->count();
    }
    
    public function allWithoutPaginate(){
        return $this->user->allWithoutPaginate();
    }
}