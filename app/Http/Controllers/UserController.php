<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use App\Models\Userreg;
class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('home', ['title' => 'Home']);

    }

    public function about()
    {
        return view('about', ['title' => 'About']);

    }

    public function produk()
    {

        return view('produk', ['title' => 'produk']);
    }

   public function create()
   {
    $userreg = userreg::all();
    return view('create', compact(['userreg']), ['title' => 'Register']);



   }

   public function postreg(request $request)
   {
    //dd($Request->all());
    $validated = $request->validate([
        'nama' => 'required|max:255',
        'email' => 'email|max:255',
        'password' => 'required|max:255'


    ]);

    userreg::create($request->except(['_token','submit']));
    return redirect('User/create');
   }

   public function hapusreg($id)
   {
      $hapusdata=userreg::find($id);
      $hapusdata->delete();
      return redirect('User/create');
   }
public function editreg($id)
{
    $userreg = userreg::find($id);
    return view('editreg', compact(['userreg']), ['title' => 'Register']);
}

public function updatereg($id, request $request)
{
   $ok = userreg::find($id);
   //dd($id);

   $ok->update($request->except(['_token','submit']));
   return redirect('User/create');
}
//PRODUK
public function inputproduk()
{
   return'TESS';
}





}
