<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TestTable extends Model
{
	protected $primaryKey = 'uid';

	protected $fillable = ['username', 'uid', 'password', 'sex', 'description', 'createtime'];

	public $timestamps = false;

    protected $table = 'test_data';

    public function insert($params=[])
    {
    	// 处理参数
    	$params['uid'] = null;
    	$result = self::create($params);
    	return $result->uid;
    }

    public function list($offset, $limit)
    {
    	$data = DB::table($this->table)->where('username', '=', 'testuser')->get();
    	$data = DB::table($this->table)->whereIn('username',['testuser', 'testuser4', 'testuser7'])->get();
    	$data = DB::table($this->table)->orderBy('uid', 'desc')->skip($offset)->take($limit)->get(['username', 'password', 'sex']);
    	return $data;
    }

    public function single($uid)
    {
    	if($uid && is_numeric($uid)) {
    		$obj = self::find($uid);
    		$result = $obj->attributes;
    		return $result;
    	} else {
    		return null;
    	}
    }

    public function updateUserInfo($params)
    {
    	$update = DB::table($this->table)->where([
    		'uid' => $params['uid']
    	])->update([
    		'username' => $params['username'],
    		'password' => $params['password'],
    		'sex' => $params['sex'],
    		'description' => $params['description']
    	]);
    	return $update;
    }

}
