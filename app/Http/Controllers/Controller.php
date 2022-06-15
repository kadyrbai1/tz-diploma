<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function register()
    {
        return view('register.index');
    }

    public function registerPost(Request $request)
    {
        $validated = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'birthDate' => 'required',
            'omc' => 'required',
            'passportNumber' => 'required',
            'phoneNumber' => 'required',
            'type' => 'required',
        ]);

        $countUser = User::where('type', $request->input('type'))->count();

        if ($countUser > 30)
        {
            $message = 'Кечиресиз, тилеке каршы орун калган жок';
            return redirect()->back()->with([
                'message' => $message,
            ]);
        }




        $user = new User();
        $user->first_name = $request->input('firstName');
        $user->last_name = $request->input('lastName');
        $user->middle_name = $request->input('middleName');
        $user->birth_date = $request->input('birthDate');
        $user->omc = $request->input('omc');
        $user->passport_number = $request->input('passportNumber');
        $user->parent_phone_number = $request->input('phoneNumber');
        $user->type = $request->input('type');

        $user->save();



        return redirect(route('listOfChild'));
    }

    public function listOfChild()
    {
        $smallUsers = User::where('type', 1)->get();
        $middleUsers = User::where('type', 2)->get();
        $bigUsers = User::where('type', 3)->get();
        return view('listOfChild.index', [
            'smallUsers' => $smallUsers,
            'middleUsers' => $middleUsers,
            'bigUsers' => $bigUsers,
        ]);
    }
}
