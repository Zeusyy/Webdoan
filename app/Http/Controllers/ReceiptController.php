<?php

namespace App\Http\Controllers;

use App\Models\Receipt;
use App\Services\ProductServiceInterface;
use App\Services\ReceiptServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReceiptController extends Controller
{
    private $receipt;
    private $product;

    public function __construct(
        ReceiptServiceInterface $receipt,
        ProductServiceInterface $product
        )
    {
        $this->receipt = $receipt;
        $this->product = $product;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $receiptStatusAcceptedID    = 1;
    private $receiptStatusWaitingID     = 3;

    public function userOrAdmin()
    {
        if(Auth::user()->role->name == 'user')
           return 'user';
        return 'admin';
    }
    public function index()
    {
        //
        $role       = $this->userOrAdmin();

        $receipts   = $this->receipt->all();

        $view       = $role . ".receipt.index";
        
        return view($view)
        ->with('receipts',$receipts);
        // return $receipts;   
    }
    
    public function waitingIndex()
    {
        $receipts   = $this->receipt->getWaitingReceipt();

        $role       = $this->userOrAdmin();

        $view       = $role . ".receipt.waiting";

        return view($view)->with('receipts',$receipts);
    }
    public function searchWaiting(Request $request)
    {
        $keyword    = $request->search;

        $option     = $request->searchOptions;
        
        $receipts   = $this->receipt->searchWaiting($keyword,$option);
        
        $role = $this->userOrAdmin();
        
        if($receipts instanceof \Illuminate\Pagination\LengthAwarePaginator)
        {
            $view = $role .".receipt.waiting";
            return view($view)->with('receipts',$receipts);
        }

        if($receipts != null &&  !($receipts instanceof \Illuminate\Database\Eloquent\Collection))
            $receipts = array($receipts);

        $view = $role. ".receipt.search";
        
        
        return view($view)->with('receipts',$receipts); 
    }

    // view accepted reciepts       
    public function acceptedIndex()
    {
        $receipts   = $this->receipt->acceptedIndex();
        
        $role       = $this->userOrAdmin();

        $view       = $role . ".receiptAccepted.index";
        
        return view($view)->with('receipts',$receipts); 
    }
    public function search(Request $request)
    {   
        $keyword    = $request->search;

        $option     = $request->searchOptions;
        
        $receipts   = $this->receipt->search($keyword,$option);
        
        $role       = $this->userOrAdmin();
        
        if($receipts instanceof \Illuminate\Pagination\LengthAwarePaginator)
        {
            $view   = $role . ".receiptAccepted.index";
            
            return view($view)->with('receipts',$receipts);
        } 

        // check collection vi get() tra ra collection, find thi khong
        if($receipts != null && !($receipts instanceof \Illuminate\Database\Eloquent\Collection))
            $receipts = array($receipts);
        
        $view       = $role . ".receiptAccepted.search";
        // var_dump ($receipts);
        
        return view($view)->with('receipts',$receipts); 
    }


    public function receiptAccept(Receipt $receipt)
    {
        $this->receipt->receiptAccept($receipt);

        return redirect()->route('receipt.waiting');
    }
    public function receiptPay(Receipt $receipt)
    {   
        $action = 'pay';
        
        $this->receipt->receiptProcess($receipt,$action);
        
        return redirect()->route('receipt.indexAccepted');
        // return $receipt;
    }
    public function receiptCancel(Receipt $receipt)
    {
        $action = 'cancel';
        
        $this->receipt->receiptProcess($receipt,$action);
        
        return redirect()->route('receipt.indexAccepted');

    }

    public function receiptFinish(Receipt $receipt)
    {
        $action = 'finish';
        
        $this->receipt->receiptProcess($receipt,$action);
        
        return redirect()->route('receipt.indexAccepted');

    }

    public function receiptUnFinish(Receipt $receipt)
    {
        $action = 'unfinish';
        
        $this->receipt->receiptProcess($receipt,$action);
        
        return redirect()->route('receipt.indexAccepted');

    }
    public function receiptUnPay(Receipt $receipt)
    {   
        $action = 'unpay';
        
        $this->receipt->receiptProcess($receipt,$action);
        
        return redirect()->route('receipt.indexAccepted');

    }
    


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @param  Receipt $receipt
     * @return \Illuminate\Http\Response
     */
    public function show(Receipt $receipt)
    {
        //
        if(Auth::user() == null)
            $role = 'user';
        else{
            $role = 'admin';
        }
        $view = $role . ".receiptDetail.index";
        $receiptDetails = $this->receipt->show($receipt);

        return view($view)
        ->with('receiptDetails',$receiptDetails);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Receipt $receipt
     * @return \Illuminate\Http\Response
     */
    public function edit(Receipt $receipt)
    {
        // 
        return view('admin.receipt.edit')
        ->with('receipt',$receipt);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Receipt $receipt)
    {
        //
        $this->receipt->update($request,$receipt);

        //lay route tuong ung voi trang thai hoa don
        $route = $this->receipt->getRoute($receipt);
        
        return redirect()->route($route);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receipt $receipt)
    {
        //
        $this->receipt->delete($receipt->id);

        return redirect()->back();
        
    }
}
