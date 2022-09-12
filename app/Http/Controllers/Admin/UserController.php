<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use function PHPSTORM_META\type;

class UserController extends Controller
{
    public function index()
    {
        $users=User::where('type','user')->paginate(10);
        return view('admin.user.index',compact('users'));
    }

    public function destroy($id)
    {
       User::destroy($id);
        return redirect()->route('admin.users.index')->
        with('msg', 'Testimonial delete successfully')->with('type', 'success');
    }
}
