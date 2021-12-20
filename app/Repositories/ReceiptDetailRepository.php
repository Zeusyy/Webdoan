<?php
namespace App\Repositories;

use App\Models\Receipt;
use App\Models\Receipt_Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReceiptDetailRepository implements ReceiptDetailRepositoryInterface
{
    
    public function update(Request $request, Receipt_Detail $receiptDetail){
        $id         = $receiptDetail->id;

        $quantity   = $request->quantity;

        $temp       = $receiptDetail->receipt;

        Receipt_Detail::where('id', $id)
      ->update(['quantity' => $quantity]);
        
        return $temp;
    }
    public function delete(Receipt_Detail $receipt_detail) {

        $temp = $receipt_detail->receipt;

        $receipt_detail->delete();

        return $temp;
    }
    public function store(Receipt_Detail $receipt) {

        $receipt->save();
        
        return $receipt;
    }
}