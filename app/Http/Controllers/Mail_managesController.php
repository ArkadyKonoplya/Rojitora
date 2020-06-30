<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail_manage;

class Mail_managesController extends Controller
{
    public function __construct()
    {
       
        $this->middleware('auth:api');
    }	
    public function index()
    {
    	$mail_manage = Mail_manage::all();
    	return response()->json($mail_manage);
    }
    public function create()
    {

    }
    public function store(Request $request)
    {
    	$mail_manage = new Mail_manage([
    		'first_name' => $request->get('name01'),
    		'last_name' => $request->get('name02'),
    		'company_name1' => $request->get('corpName01'),
    		'company_name2' => $request->get('corpName02'),
    		'address_1' => $request->get('address01'),
    		'address_2' => $request->get('address02'),
    		'address_3' => $request->get('address03'),
    		'email' => $request->get('mail'),
    		'phone_number' => $request->get('tel'),
    		'question_content' => $request->get('textarea'),
    	]);
    	$mail_manage->save();
    	return response()->json('Successfully added');
    }
    public function show($id)
    {

    }
    public function edit($id)
    {
    	$mail_manage = Mail_manage::find($id);
    	return response()->json($mail_manage);
    }
    public function update(Request $request,$id)
    {
    	$mail_manage = Mail_manage::find($id);
    	$mail_manage->first_name = $request->get('name01');
    	$mail_manage->last_name = $request->get('name02');
    	$mail_manage->company_name1 = $request->get('corpName01');
    	$mail_manage->company_name2 = $request->get('corpName02');
    	$mail_manage->address_1 = $request->get('address01');
    	$mail_manage->address_2 = $request->get('address02');
    	$mail_manage->address_3 = $request->get('address03');
    	$mail_manage->email = $request->get('mail');
    	$mail_manage->phone_number = $request->get('tel');
    	$mail_manage->question_content = $request->get('textarea');
    	$mail_manage->save();
    	return response()->json('Successfully Updated');
    }
    public function destroy($id)
    {
    	$mail_manage = Mail_manage::find($id);
    	$mail_manage->delete();
    	return response()->json('Successfully Deleted');
    }

}
