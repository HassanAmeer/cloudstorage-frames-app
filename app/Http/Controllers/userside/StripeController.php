<?php


namespace App\Http\Controllers\userside;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Stripe\Customer;
use Stripe\Exception\ApiErrorException;

use \App\Models\downloadedDoc;
use \App\Models\settings;

use Illuminate\Support\Facades\Mail;
use App\Mail\InspectMyRides;

class StripeController extends Controller
{
    public function stripeForm()
    {
        return view('stripe');
    }

    public function processPayment(Request $request)
    {
        try {
            Stripe::setApiKey("sk_test_51MvzNZCXOCh8OoqUMcYC33kfKoUhRxcajYdPOnNpc6AIvBmIKTRgXEEx5YmTSpvr1VlhaCrV2lVRaVXWeJrFghVw005w5vZFvP");


            $customer = Customer::create(array(
                "address" => [
                        "line1" => "Virani Chowk",
                        "postal_code" => "360001",
                        "city" => "Rajkot",
                        "state" => "GJ",
                        "country" => "PAK",
                    ],
                "email" => $request->email,
                "name" => $request->fname . $request->lname,
                "source" => $request->stripeToken
             ));
            

            // Create a PaymentIntent
            $paymentIntent = PaymentIntent::create([
                'amount' => $request->amount * 100, // Convert to cents
                'currency' => 'usd',
                'description' => 'Payment by' . $request->phone,
                'payment_method' => $request->trid,
                // 'confirmation_method' => 'manual',
                'confirm' => true,
                'automatic_payment_methods' => [
                    'enabled' => true,
                    'allow_redirects' => 'never',
                ],
                "shipping" => [
                    "name" => $request->fname . $request->lname,
                    "address" => [
                        "line1" => " ",
                        "postal_code" => " ",
                        "city" => " ",
                        "state" => " ",
                        "country" => " ",
                    ],
                ],
             
            ]);


           $check = downloadedDoc::create([
                'transactionId' => $request->trid,
                'price' => (string) $request->amount,
                'package' => $request->pkg,
                'userName' => $request->fname . $request->lname,
                'email' => $request->email,
                'phone' => $request->phone,
                'cardNumber' => $request->card_number,
                'vId' => $request->vid,
                'vImg' => (string) $request->vImg,
                'make' => $request->make,
                'bodyStyle' => $request->bodyStyle,
                'vehicleType' => $request->vehicleType,
                'model' => $request->model,
                'type' => $request->type,
            ]);



            if($check){
                $settings = settings::first();
                // send email
                Mail::to($request->email)->send(new InspectMyRides($settings,$request->vid,$request->title,$request->email));
            }

            return response()->json([
                'clientSecret' => $paymentIntent->client_secret,
                'success' => true,
                'message' => 'Payment successful!',
            ]);
        } catch (ApiErrorException $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ]);
        }
    }
}