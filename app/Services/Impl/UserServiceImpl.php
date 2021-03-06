<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 26/02/2018
 * Time: 3:09 PM
 */

namespace App\Services\Impl;

use App\Entities\User;
use App\Entities\UserRole;
use App\Repositories\RoleRepo;
use App\Services\UserService;
use App\Services\RoleService;
use App\Repositories\UserRepo;
use App\Services\Impl\UploadService;
use Illuminate\Support\Facades\Hash;


class UserServiceImpl implements UserService
{
    protected $uploadService, $userRepo, $roleRepo;
    public function __construct(UploadService $uploadService, UserRepo $userRepo, RoleRepo $roleRepo)
    {
        $this->uploadService = $uploadService;
        $this->userRepo = $userRepo;
        $this->roleRepo = $roleRepo;
    }

    public function getAllActiveUsers()
    {
        // TODO: Implement getAllActiveUsers() method.
    }

    public function getAllUsers()
    {
        return $this->userRepo->getAllUsers();
    }

    public function getUserById($id)
    {
        return $this->userRepo->getUserById($id);
    }



    public function updateUser($data,$id)
    {
        $user = $this->userRepo->getUserById($id);
        $user->setFirstName($data->get('firstName'));
        $user->setLastName($data->get('lastName'));
        $path = $this->uploadService->UploadFile($data,'profilePic','ProfilePic/');
        $path?$user->setProfilePic($path):'';
        $user->setEmail($data->get('email'));
        //$user->setPassword(bcrypt($data->get('email')));
        $user->setContactNumber($data->get('contactNumber'));
        $user->setIsActive($data->get('active'));
        $user->setIsAdmin($data->get('isAdmin'));
        $user->setDeleted(0);
        $this->userRepo->removeExistingUserRole($id);
        $userRole = new UserRole();
        $userRole->setDeleted(0);
        $userRole->setCreatedAt(new \DateTime());
        $userRole->setUpdatedAt(new \DateTime());
        $userRole->setRoleId($this->roleRepo->getRoleById($data->get('role')));
        $user->addUserRole($userRole);
        return $this->userRepo->saveUser($user);
    }


    public function save($data)
    {
        $user = new User();
        $user->setFirstName($data->get('firstName'));
        $user->setLastName($data->get('lastName'));
        $path = $this->uploadService->UploadFile($data,'profilePic','ProfilePic/');
        $user->setProfilePic($path);
        $user->setEmail($data->get('email'));
        $user->setPassword(bcrypt($data->get('email')));
        $user->setContactNumber($data->get('contactNumber'));
        $user->setIsActive(1);
        $user->setIsAdmin($data->get('isAdmin'));
        $user->setDeleted(0);
        $userRole = new UserRole();
        $userRole->setDeleted(0);
        $userRole->setCreatedAt(new \DateTime());
        $userRole->setUpdatedAt(new \DateTime());
        $userRole->setRoleId($this->roleRepo->getRoleById($data->get('role')));
        $user->addUserRole($userRole);
        return $this->userRepo->saveUser($user);

    }

    public function chkPass($data){
        return $this->userRepo->chkPass($data);
    }

    public function changepassword($data){
        $user = $this->userRepo->getUserById($data['userid']);
        $user->setPassword(Hash::make($data['cNewPass']));
        return $this->userRepo->saveUser($user);
    }
}