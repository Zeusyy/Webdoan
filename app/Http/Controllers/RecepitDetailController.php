<?php

namespace App\Http\Controllers;

use App\Models\Receipt_Detail;
use App\Repositories\ReceiptDetailRepositoryInterface;
use Illuminate\Http\Request;

class RecepitDetailController extends Controller
{
    private $receipt_detail;
    
    public function __construct(ReceiptDetailRepositoryInterface $receipt_detail)
    {
        $this->receipt_detail = $receipt_detail;
    }
    




    /**
     * Show the form for editing the specified resource.
     *
     * @param  Receipt_Detail $receipt;
     * 
     * @return \Illuminate\Http\Response
     */
    public function edit(Receipt_Detail $receiptDetail)
    {
        //
        return view('admin.receiptDetail.edit')
        ->with('receiptDetail',$receiptDetail);
        // return $receiptDetail;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Receipt_Detail $receiptDetail)
    {
        //
        $temp = $this->receipt_detail
        ->update($request,$receiptDetail);

        return redirect()->route('receipt.show',$temp);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receipt_Detail $receipt_detail)
    {
        //
        $temp = $this->receipt_detail
        ->delete($receipt_detail);
        
        return redirect()->route('receipt.show',$temp);
    }
}
