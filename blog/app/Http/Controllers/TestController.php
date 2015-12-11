<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\TestTable;
use Illuminate\Support\Facades\Validator;
use App\Commands\testcommand;

class TestController extends Controller {

	private $model = null;

	public function __construct()
	{
		$this->model = new TestTable();
	}

	public function updateUserInfo(Request $request)
	{
		$formData = $request->all();
		// $validate = Validator::make($request->all(), [
		// 	'username' => 'required',
		// 	'password' => 'required',
		// 	'description' => 'required',
		// 	'sex' => 'between:1,2',
		// ]);

		$result = $this->model->updateUserInfo($formData);
		$response = $result ? ['code' => '200', 'error' => '添加成功'] : ['code' => '500', 'error' => '添加失败'];
		return response()->json($response);
	}

	public function add(Request $request)
	{
		$username = $request->get('username');
		$password = $request->get('password');
		$sex      = $request->get('sex');
		$description = $request->get('description');

		$result = $this->model->insert([
			'username' => $username,
			'password' => $password,
			'sex'      => $sex,
			'description' => $description,
			'createtime' => time()
		]);

		$response = $result ? ['code' => '200', 'error' => '添加成功'] : ['code' => '500', 'error' => '添加失败'];
		return response()->json($response);
	}

	public function list(Request $request)
	{
		$offset = $request->get('offset');
		$limit  = $request->get('limit');
		$data = $this->model->list($offset, $limit);
		var_dump($data);
	}

	public function single(Request $request)
	{
		$uid = $request->get('uid');
		if($uid) {
			$data = $this->model->single($uid);
			return view('test.updateUserInfo', $data);
		} else {
			response()->json(['code' => '404', 'error' => '页面不存在']);
		}
	}

	public function home(Request $request)
	{
		$uid = $request->get('uid');
		if($uid) {
			$data = $this->model->single($uid);
			return view('test.home', $data);
		} else {
			response()->json(['code' => '404', 'error' => '页面不存在']);
		}
	}

	public function testcommand()
	{
		$this->dispatch(
			new TestCommand('testcommand', '我也不知道啊')
		);
	}


}
