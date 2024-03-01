<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;


class CheckoutController extends Controller
{
    public function showCheckoutPage()
    {
        $subtotal = request()->input('subtotal', 0);
        $shipping = request()->input('shipping', 0);
        $total = request()->input('total', 0);

        return view('checkout', compact('subtotal', 'shipping', 'total'));
    }
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'fname' => 'required|string',
            'billingemail' => 'required|email',
            // Add other validation rules for your form fields
        ]);

        // Create a new Checkout model instance
        $checkout = new Checkout();

        // Assign form data to the model attributes
        $checkout->fname = $request->input('fname');
        $checkout->lname = $request->input('lname');
        $checkout->billingemail = $request->input('billingemail');
        $checkout->country = $request->input('country');
        $checkout->billingaddress = $request->input('address1');
        $checkout->shippingaddress = $request->input('address2');
        $checkout->province = $request->input('province');
        $checkout->cellno = $request->input('cellno');
        $checkout->city = $request->input('city');
        $checkout->zipcode = $request->input('zipcode');
        $checkout->paymentmethod = $request->input('paymentmethod');
        $checkout->subtotal = $request->input('subtotal');
        $checkout->shipping = $request->input('shipping');
        $checkout->total = $request->input('total');

        // Save the model to the database
        $checkout->save();

        // You can also return a response or redirect the user after saving the data
        return redirect()->route('success')->with('message', 'Order placed successfully!');
    }

    public function showProductPage(Request $request)
    {
        // Retrieve data from the query string
        $img = $request->query('img');
        $title = $request->query('title');
        $price = $request->query('price');

        // Pass data to the view
        return view('product', compact('img', 'title', 'price'));
    }


}


