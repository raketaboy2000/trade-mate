<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProfileEditRequest;
use Illuminate\Support\Facades\Session;
//use DB;

use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{


    private $userRepository;

    public function __construct()
    {

        $this->userRepository = app(UserRepository::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        if (!isset($_POST['exchanges'])) {
//            $_POST['exchanges'] = "ref";
//        }
//        if (!isset($_POST['name_ac'])) {
//            $_POST['name_ac'] = 1;
//        }
//        if (!isset($_POST['key'])) {
//            $_POST['key'] = 1;
//        }
//        if (!isset($_POST['secret'])) {
//            $_POST['secret'] = 1;
//        }



//            $user = Auth::id();
//            $exchange = $_GET['exchanges'];
//            $name_ac = $_GET['name_ac'];
//            $key_acc = $_GET['key'];
//            $secret = $_GET['secret'];
//
//            $results = DB::select('select id from trades where name = ?', [$exchange]);
//            global $trade_id;
//            foreach ($results as $key => $object) {
//                $trade_id = $object->id;
//            }
//
//
//            DB::insert('insert IGNORE  into user_trades (name,key_acc,skey,user_id,trade_id) values (?, ?, ?, ?, ?)', [$name_ac, $key_acc, $secret, $user, $trade_id]);
//            header('location: /');




//

//


        $id = Auth::id();
        $item = $this->userRepository->getEditId($id);
        if (empty($item)) {
            abort(404);
        }


        $user_agent = $_SERVER["HTTP_USER_AGENT"];
        if (strpos($user_agent, "Firefox") !== false) $browser = "Firefox";
        elseif (strpos($user_agent, "Opera") !== false) $browser = "Opera";
        elseif (strpos($user_agent, "Chrome") !== false) $browser = "Chrome";
        elseif (strpos($user_agent, "MSIE") !== false) $browser = "Internet Explorer";
        elseif (strpos($user_agent, "Safari") !== false) $browser = "Safari";
        else $browser = "Неизвестный";


        return view('admin.profile', compact('item', 'browser'));

    }

    /**zx
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $item = $this->userRepository->getEditId($id);
        dd($item);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, ProfileEditRequest $request)
    {


        $user = User::find($id);
        $user->name = $request['name'];
        $user->email = $request['email'];

        $save = $user->save();

        if (!$save) {
            session()->flash('success', 'Ошибка сохранения');
            return back();

        } else {
            session()->flash('success', 'Успешно сохранено');
            return redirect()
                ->route('profile.index');

        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function updatePassword(Request $request)
    {

        $this->validate($request, [
            'old_password' => 'required',
            'new_password' => 'required|min:6',
            'confirm_password' => 'required|same:new_password',
        ]);

        $data = $request->all();


        if (!Hash::check($data['old_password'], auth()->user()->password)) {
            session()->flash('warning', 'Старый пароль неверный');
            return back()
                ->withErrors(['msg' => 'You have entered wrong password'])
                ->withInput();

        } else {

            $user_id = Auth::User()->id;
            $obj_user = User::find($user_id);
            $obj_user->password = Hash::make($request->input('new_password'));
            $obj_user->save();
            session()->flash('success', 'Пароль успешно изменен');
            return redirect()
                ->route('profile.index');

        }
    }
}
