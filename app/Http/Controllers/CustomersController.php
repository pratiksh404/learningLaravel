<?php

namespace App\Http\Controllers;


use Validator;
use App\Company;
use App\Customer;
use Illuminate\Http\Request;
use App\Mail\WelcomeNewUserMail;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use App\Events\NewCustomerRegisteredEvent;

class CustomersController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth')->except('index');
	}

	public function index()
	{
		$customers = Customer::all();

		return view('customers.index', compact('customers'));
	}

	public function create()
	{
		$companies = Company::all();

		return view('customers.create', compact('companies'));
	}

	public function store()
	{


		/* $customer = new Customer();
        $customer->name=request('name');
        $customer->email = request('email');
        $customer->phone = request('phone');
        $customer->contact = request('contact');
        $customer->active = request('active');
        $customer->save(); */
		$customer = Customer::create($this->validateRequest());
		$this->storeImage($customer);
		event(new NewCustomerRegisteredEvent($customer));


		// Register to Newsletter
		// dump('Registered to Newsletter');

		// slack notification to admin
		//    dump('Slack message here');

		// Mass assignment 
		// return back();

		return redirect('/customers')->with('message', 'New User Created');
	}


	// the variable $customer as parameter in show() is wildcard variable came from rouye
	public function show(Customer $customer)
	{
		/* thos route model binding only works when wildcard variable in route and parameter used in store() is same and its model name(Customer) is used */

		// $customer = Customer::find($customer);

		// $customer = Customer::where('id',$customer)->firstOrFail();
		/* main logic behind using this is to avoid error when supplied id which is not in db..this return error 404 page */

		return view('customers.show', compact('customer'));
	}

	public function edit(Customer $customer)
	{
		$companies = Company::all();
		return view('customers.edit', compact('customer', 'companies'));
	}

	public function update(Customer $customer)
	{
		/*    $data = request()->validate([
            'name' => 'required|min:3|max:30',
            'email' => 'required|email',
            'phone' => 'max:10',
            'contact' => 'required|max:50',
            'active' => 'required',
            'company_id' => 'required',
        ]); */

		$customer->update($this->validateRequest());

		$this->storeImage($customer);

		/* this (private) method  */

		return redirect('customers/' . $customer->id)->with('message', 'User Updated');
	}

	public function destroy(Customer $customer)
	{
		$customer->delete();

		return redirect('/customers')->with('message', 'User Deleted');
	}

	private function validateRequest()
	{
		$validateData = request()->validate([
			'name' => 'required|min:3|max:30',
			'email' => 'required|email',
			'phone' => 'max:10',
			'contact' => 'required|max:50',
			'active' => 'required',
			'company_id' => 'required',
			'image' => 'sometimes |file|image|max:10000', 
		]); 

			if (request()->hasFile('image')) {
				request()->validate([
					'image' => 'file|image|max:10000',

				]);
			
		}
		return $validateData;
	}
	private function storeImage($customer){
if(request()->has('image')){
$customer->update([
	'image' => request()->image->store('uploads','public'),
]);
}
	}
}
