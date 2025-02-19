<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        return view('users', ['users' => Users::all()]);
    }

    public function home()
    {
        return view('home');
    }

    public function ourFileStore(request $data)
    {

        $validated = $data->validate([
            'name' => 'required|unique:users,name|max:255',
            'about' => 'required',
            'image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // upload image
        if(isset($data->image))
        {
            $imageName = time().'.'.$data->image->extension();
            $data->image->move(public_path('images'), $imageName);
        }

        // Add new post
        $table = new Users;

        $table->name = $data->name;
        $table->about = $data->about;
        $table->image = $imageName;

        $table->save();
        return redirect()->back()->with('success', 'Data saved successfully');
    }

    // edit data
    public function editData($id)
    {
        $data = Users::findOrFail($id);

        return view('edit', ['data' => $data]);
    }

    // update data
    public function updateData(request $request, $id)
    {
        $data = Users::findOrFail($id);
        $validated = $request->validate([
            'name' => 'required',
            'about' => 'required',
            'image' =>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // upload image
        $data->name = $request->name;
        $data->about = $request->about;
        if(isset($request->image))
        {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $data->image = $imageName;

        }

        $data->save();
        return redirect('/users')->with('success', 'Data updated successfully');
    }

    // delete data
    public function deleteData($id)
    {
        $data = Users::findOrFail($id);
        $data->delete();
        return redirect('/users')->with('success', 'Data deleted successfully');
    }
}
