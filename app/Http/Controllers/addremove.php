<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

use App\addremoveDB;

class addremove extends Controller
{
	public function homepage()
    { 
		$client = addremoveDB::select('*')->orderBy('id', 'DESC')->get();
		$i = 1;
		$kk = '';
		foreach($client as $tt2){
			$kk .= '<tr>
				<th>'.$i++.'</th>
				<td>'. $tt2->name_address .'</td>
				<td>'. $tt2->phone .'</td>
				<td>'. $tt2->relation .'</td>
			</tr>';
		}
		return view('welcome',['showAR' => $kk]);
    }
	public function savetodb(Request $request)
	{
		$this->validate($request, [
			'name_address' => 'required',
			'phone' => 'required',
			'relation' => 'required'
		]);
		$reg = new addremoveDB;
		$count = count($request->input('name_address'));
		$i = 0;
		for($i = 0; $count > $i; $i++){
			$data = array(	
				'name_address' => $request->input('name_address')[$i],
				'phone' => $request->input('phone')[$i],
				'relation' => $request->input('relation')[$i]
			);
			$reg::insert($data);
		}
		return redirect()->back()->with('success', 'Successfully save to database!');
		
		//return redirect()->route('homepage');	
	}
}





























