<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;
use Stripe\Exception\InvalidRequestException;

// class StripeController extends Controller
// {
//     public function session (Request $request) {
//        
//         \Stripe\Stripe::setApiKey(config('stripe.sk'));
//         $totalPrice = $request->get('total');
//         $two0 = '00';
//         $total = $totalPrice . $two0;

//         $session = \Stripe\Checkout\Session::create ([
//             'line_items' => [
//                 [
//                     'price_data' => [
//                         'currency' => 'USD', // Replace with your currency code (e.g., USD)
//                         'unit_amount' => $total,
//                         'product_data' => [
//                             'name' => 'Your Product Name',
//                         ],
//                     ],
//                     'quantity' => 1,
//                 ],
//             ],
//             'mode' => 'payment',
//             'success_url' => route('success'),
//             'cancel_url' => route('checkout'),


//         ]);
//         return redirect() -> away($session->url);
//     }
// }
class StripeController extends Controller
{
    public function session(Request $request)
    {
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

        try {
            // Save the model to the database only if payment is successful
            \Stripe\Stripe::setApiKey(config('stripe.sk'));
            $totalPrice = $request->get('total');
            $two0 = '00';
            $total = $totalPrice . $two0;

            $session = \Stripe\Checkout\Session::create([
                'line_items' => [
                    [
                        'price_data' => [
                            'currency' => 'PKR',
                            'unit_amount' => $total,
                            'product_data' => [
                                'name' => 'Your Product Name',
                            ],
                        ],
                        'quantity' => 1,
                    ],
                ],
                'mode' => 'payment',
                'success_url' => route('success'),
                'cancel_url' => route('checkout'),
            ]);

            // Store the Checkout model only if the payment is successful
            $checkout->stripe_session_id = $session->id;
            $checkout->save();

            return redirect()->away($session->url);
        } catch (InvalidRequestException $e) {
            // Handle Stripe API exception (payment failure)
            // You can customize this based on your application's requirements
            return redirect()->route('checkout')->with('error', 'Payment failed. Please try again.');
        }
    }
}