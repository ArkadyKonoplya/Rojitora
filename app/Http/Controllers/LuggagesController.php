<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Luggage;

class LuggagesController extends Controller
{
    public function __construct()
    {
       
        $this->middleware('auth:api');
    }	
    public function index()
    {
    	$luggages = Luggage::all();
    	return response()->json($luggages);
    }
    public function create()
    {

    }
	public function store(Request $request)
	{
		$luggage = new Luggage([
			'urgent_matter' => $request->get('urgent_matter'),
			'loading_date' => $request->get('loading_date'),
			'loading_time' => $request->get('loading_time'),
			'loading_space' => $request->get('loading_space'),
			'loading_city' => $request->get('loading_city'),
			'drop_date' => $request->get('drop_date'),
			'drop_time' => $request->get('drop_time'),
			'drop_space' => $request->get('drop_space'),
			'drop_city' => $request->get('drop_city'),
			'baggage_name' => $request->get('baggage_name'),
			'baggage_weight' => $request->get('baggage_weight'),
			'vehicle_inf' => $request->get('vehicle_inf'),
			'vehicle_type1' => $request->get('vehicle_type1'),
			'vehicle_type1_content' => $request->get('vehicle_type1_content'),
			'vehicle_type2' => $request->get('vehicle_type2'),
			'vehicle_type3' => $request->get('vehicle_type3'),
			'bigo' => $request->get('bigo'),
			'fares_money' => $request->get('fares_money'),
			'is_consultation' => $request->get('is_consultation'),
			'phone_number' => $request->get('phone_number'),
			'person_charge' => $request->get('person_charge')
		]);
		$luggage->save();
		return response()->json('Successfully added');
	}
	public function show($id)
	{

	}
	public function edit($id)
	{
		$luggage = Luggage::find($id);
		return response()->json($luggage);
	}
	public function update(Request $request, $id)
	{
		$luggage = Luggage::find($id);
		$luggage->urgent_matter = $request->get('urgent_matter');
		$luggage->loading_date = $request->get('loading_date');
		$luggage->loading_time = $request->get('loading_time');
		$luggage->loading_space = $request->get('loading_space');
		$luggage->loading_city = $request->get('loading_city');
		$luggage->drop_date = $request->get('drop_date');
		$luggage->drop_time = $request->get('drop_time');
		$luggage->drop_space = $request->get('drop_space');
		$luggage->drop_city = $request->get('drop_city');
		$luggage->baggage_name = $request->get('baggage_name');
		$luggage->baggage_weight = $request->get('baggage_weight');
		$luggage->vehicle_inf = $request->get('vehicle_inf');
		$luggage->vehicle_type1 = $request->get('vehicle_type1');
		$luggage->vehicle_type1_content = $request->get('vehicle_type1_content');
		$luggage->vehicle_type2 = $request->get('vehicle_type2');
		$luggage->vehicle_type3 = $request->get('vehicle_type3');
		$luggage->bigo = $request->get('bigo');
		$luggage->fares_money = $request->get('fares_money');
		$luggage->is_consultation = $request->get('is_consultation');
		$luggage->phone_number = $request->get('phone_number');
		$luggage->person_charge = $request->get('person_charge');
		$luggage->save();
		return response()->json("Successfully Updated");
	}
	public function destroy($id)
	{
		$luggage = Luggage::find($id);
		$luggage->delete();
		return response()->json('Successfully Deleted');
	}
}
