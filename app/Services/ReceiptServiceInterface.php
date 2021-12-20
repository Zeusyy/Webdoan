<?php
namespace App\Services;

use App\Models\Receipt;
use Illuminate\Http\Request;

interface ReceiptServiceInterface {

    public function getRoleName();

    public function all();
    
    public function getWaitingReceipt();

    public function getNewReceiptWithoutPaginate();

    public function searchWaiting($keyword,$option);

    public function acceptedIndex();

    public function search($keyword,$option);

    public function getReceiptById($id);

    public function canceledIndex();

    public function paidIndex();

    public function getPaidReceiptWithoutPaginateToday();

    public function receiptAccept(Receipt $receipt);

    public function show(Receipt $receipt);
    
    public function update(Request $request, Receipt $receipt);
    
    public function delete($id);
    
    public function getRoute(Receipt $receipt);

    //hoan thanh hoa don
    // public function finish(Receipt $receipt);
    
    //thanh toan, huy, hoan thanh hoa don
    public function receiptProcess(Receipt $receipt, $action);

    
    public function store(Receipt $receipt);

    public function whereMonth($month,$year);

    public function whereDay($day,$month,$year);

    public function whereYear($year);
    
    public function paidToday();
}