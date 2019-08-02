<?php

namespace App\Http\Controllers;

use App\Customer;
use http\Env\Response;
use Illuminate\Http\Request;

/**
 * Class CustomerController
 * @package App\Http\Controllers
 */
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection = Customer::all();

        return response()->json($collection,200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'name'              => 'required|min:6,max:32',
            'surname'           => 'required|min:6,max:32',
            'email'             => 'required|email',
        ]);


        $customer = Customer::create([
            'name'      => $data['name'],
            'surname'   => $data['surname'],
            'email'     => $data['email']
        ]);

        return response()->json($customer,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return response()->json($customer,200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $data = $request->validate([
            'name'              => 'min:6,max:32',
            'surname'           => 'min:6,max:32',
            'email'             => 'email',
        ]);

        $customer->update($data);

        return response()->json($customer,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->forceDelete();

        Return response()->json(null,204);
    }
}
