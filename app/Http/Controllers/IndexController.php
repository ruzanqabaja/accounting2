<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transact;

class IndexController extends Controller
{
    function getpost()
    {
        $posts = \App\Models\transact::paginate(7);
        $postc = \App\Models\transact::get();
        $countc = count($postc);
        $countv = count($posts);
        return view('home', compact('posts', 'countc', 'countv'));
    }

    function deletePost(Request $id)
    {
        $postToDelet = transact::where('trano', $id['id']);

        $postToDelet->delete();

        return redirect('/ss');
    }

    function uploadtrans(Request $req)
    {
        $data = new transact();
        $data->TraDate = $req['date'];

        $data->VouNo = $req['transnumber'];

        $data->BillId = $req['billid'];

        $data->TraDetails = $req['transdetails'];
        $data->TraCurrency = $req['transcur'];
        $data->CurP = $req['curp'];
        $data->Project = $req['projectnumber'];

        $data->UserNo = $req['usernumber'];

        $data->typesales = $req['salty'];

        $data->save();
        $posts = \App\Models\transact::paginate(7);

        return redirect('/ss');
    }
}
