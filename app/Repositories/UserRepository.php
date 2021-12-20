<?php
namespace App\Repositories;

use App\User;
use Carbon\Carbon;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;

class UserRepository implements UserRepositoryInterface{
    public function all(){
        return User::paginate(20);
    }
    public function allWithoutPaginate(){
        return User::all();
    }

    public function delete($id){
        User::destroy($id);
    }
    public function update(Request $request, User $user){
        $user->name     =  $request->name;

        $user->email    =  $request->email;

        $user->phone    =  $request->phone;

        $user->gender   =  $request->gender;

        if (!empty($request->role)){
            $user->role_id = $request->role;
        }

        if (!empty($request->file('avatar')))
        {
            $uploadedFileUrl = Cloudinary::upload($request->file('avatar')->getRealPath(),[
                'folder' => 'FnGO/UserAvatar',
            ])->getSecurePath();

            $user->avatar = $uploadedFileUrl;
        }

        $user->save();
    }

    public function searchID($keyword)
    {
        return User::find($keyword);
    }

    public function searchName($keyword){
        return User::where('name','like','%'.$keyword.'%')
        ->get();
    }

    public function searchPhone($keyword){
        return User::where('phone','like','%'.$keyword.'%')
        ->get();
    }
    
    public function searchEmail($keyword){
        return User::where('email','like','%'.$keyword.'%')
        ->get();
    }

    public function onlyRole($role_id){
        return User::where('role_id',$role_id)
        ->paginate(12);
    }
    //2 is role user
    public function countNewUser(){
        return User::where('role_id',2)
        ->whereDate('created_at',Carbon::today())
        ->get();
    }
}