<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Users extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'user_id';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'phone',
        'address',
        'role',
        'created_by'
    ];
    
    public function Get_User_By_Username($username){
    $result = DB::select('SELECT * FROM users WHERE username = ?', [$username]);
    return count($result) ? $result[0] : null;
}

public function Register_Donor($data)
{
    DB::insert("
        INSERT INTO users (name, username, email, password, phone, address, role)
        VALUES (?, ?, ?, ?, ?, ?, ?)
    ", [
        $data['name'],
        $data['username'],
        $data['email'],
        $data['password'], // or Hash::make($data['password'])
        $data['phone'],
        $data['address'],
        'Donor'
    ]);
}

public function Get_User_By_Id($userId)
{
    $rows = DB::select("
        SELECT user_id, name, username, email, phone, address, role
        FROM users
        WHERE user_id = ?
        LIMIT 1
    ", [$userId]);

    return count($rows) ? $rows[0] : null;
}

public function Update_Donor($userId, $data)
    {
        return DB::update("
            UPDATE users
            SET name = ?, username = ?, email = ?, phone = ?, address = ?
            WHERE user_id = ?
        ", [
            $data['name'],
            $data['username'],
            $data['email'],
            $data['phone'],
            $data['address'],
            $userId
        ]);
    }

    public function Get_Donor(){
        return DB::select('SELECT user_id, username FROM users WHERE role = ?', ['Donor']);
    }
    public function Get_All_Users(){
    return DB::select('SELECT * FROM users');
}

public function Create_User($data)
    {
        $data['created_at'] = now();
        // Insert into the database
        return DB::table($this->table)->insert($data);
    }
public function Update_User($userId, $data)
{
    // Only hash password if present
      if (empty($data['password'])) {
        unset($data['password']);
    }
    $data['updated_at'] = now();
    return DB::table('users')->where('user_id', $userId)->update($data);
}
public function Delete_Account($userId){
    return DB::delete('DELETE FROM users WHERE user_Id =? ', [$userId]);
}
}
