<?php

namespace App\Http\Controllers;

use App\Services\MomoServiceInterface;
use App\Services\ReceiptServiceInterface;
use Illuminate\Http\Request;

class MomoController extends Controller
{
    private $momo;
    private $receipt;

    public function __construct
    (
        MomoServiceInterface    $momo,
        ReceiptServiceInterface $receipt
    )
    {
        $this->momo     = $momo;
        $this->receipt  = $receipt;
    }
    //
    public function getResponeFromMomo(Request $request){
        $partnerCode    = $request['partnerCode'];
        $requestId      = $request['requestId'];
        $orderId        = $request['orderId'];
        $orderType      = $request['orderType'];
        $amount         = $request['amount'];
        $responseTime   = $request['responseTime'];
        $message        = $request['message'];
        $resultCode     = $request['resultCode'];
        $payType        = $request['payType'];
        $orderInfo      = $request['orderInfo'];
        $transId        = $request['transId'];
        $extraData      = $request['extraData'];


        $signature      = $request['signature'];

        $accessKey = \Config::get('values.access_key');

        $rawHash = 
        "accessKey="    . $accessKey . 
        "&amount="      . $amount . 
        "&extraData="   . $extraData . 
        "&message="     . $message . 
        "&orderId="     . $orderId . 
        "&orderInfo="   . $orderInfo . 
        "&orderType="   . $orderType . 
        "&partnerCode=" . $partnerCode . 
        "&payType="     . $payType .
        "&requestId="   . $requestId .
        "&responseTime=". $responseTime .  
        "&resultCode="  . $resultCode .
        "&transId="     . $transId  ;

        $serectkey = \Config::get('values.secret_key');
        $newSign = hash_hmac("sha256", $rawHash, $serectkey);

        if($newSign == $signature)
        {
            //
            if($resultCode == 0)
            {
                $request->session()->forget('Cart');
                // $this->momo->success($orderId);
                
                return redirect()->route('receipt.index');
            }
            else
            {
                // $this->momo->fail($orderId);

                return redirect()->route('cart.index')
                ->with('error',__('payment.Fail'));
            }
        }
        else
            abort(403,'Unauthorized action.');

        
        // return $request;
    }

    public function momoIPN(Request $request)
    {
        $partnerCode    = $request['partnerCode'];
        $requestId      = $request['requestId'];
        $orderId        = $request['orderId'];
        $orderType      = $request['orderType'];
        $amount         = $request['amount'];
        $responseTime   = $request['responseTime'];
        $message        = $request['message'];
        $resultCode     = $request['resultCode'];
        $payType        = $request['payType'];
        $orderInfo      = $request['orderInfo'];
        $transId        = $request['transId'];
        $extraData      = $request['extraData'];


        $signature      = $request['signature'];

        $accessKey = \Config::get('values.access_key');

        $rawHash = 
        "accessKey="    . $accessKey . 
        "&amount="      . $amount . 
        "&extraData="   . $extraData . 
        "&message="     . $message . 
        "&orderId="     . $orderId . 
        "&orderInfo="   . $orderInfo . 
        "&orderType="   . $orderType . 
        "&partnerCode=" . $partnerCode . 
        "&payType="     . $payType .
        "&requestId="   . $requestId .
        "&responseTime=". $responseTime .  
        "&resultCode="  . $resultCode .
        "&transId="     . $transId  ;

        $serectkey = \Config::get('values.secret_key');
        $newSign = hash_hmac("sha256", $rawHash, $serectkey);

        if($newSign == $signature)
        {
            //
            if($resultCode == 0)
                $this->momo->success($orderId);
            else
            {
                $this->momo->fail($orderId);
            }
                
        }
    }
}
