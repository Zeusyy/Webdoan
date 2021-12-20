<?php
namespace App\Repositories;

use App\Models\Receipt;
use App\Models\Receipt_Detail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReceiptRepository implements ReceiptRepositoryInterface
{
    private $receiptStatusAcceptedID    = 1;

    private $receiptStatusWaitingID     = 3;

    private $receiptStatusCancledID     = 2;

    private $receiptStatusPaidID        = 4;

    //get user's role name
    public function getRoleName(){
        return Auth::user()->role->name;
    }

    public function getWaitingReceipt(){
        return Receipt::where('status_id',$this->receiptStatusWaitingID)
        ->paginate(10);
    }

    public function getNewReceiptWithoutPaginate()
    {
        return Receipt::whereDate('created_at',Carbon::today())
        ->get();
    }

    public function getWaitingReceiptByID($keyword)
    {
        return Receipt::where('id',$keyword)
        ->where('status_id',$this->receiptStatusWaitingID)
        ->get();
    }

    public function getWaitingReceiptByUserID($keyword)
    {
        return Receipt::where('user_id',$keyword)
        ->where('status_id',$this->receiptStatusWaitingID)
        ->get();
    }
    
    public function getReceiptOfUser($user_id){
        return Receipt::where('user_id',$user_id)
        ->orderBy('id','desc')->get();
    }
    
    public function getAcceptedIndex(){
        return Receipt::where('status_id','!=',$this->receiptStatusWaitingID)
        ->orderBy('id','desc')
        ->paginate(20);
    }

    public function searchID($keyword){
        return Receipt::find($keyword);
    }

    public function searchUserID($keyword){
        return Receipt::where('user_id',$keyword)
        ->orderBy('id','desc')->get();
    }

    // public function getAcceptedIndex(){
    //     return Receipt::where('status_id','!=',$this->receiptStatusWaitingID)
    //     ->orderBy('id','desc')
    //     ->paginate(20);
    // }

    public function getPaidIndex(){
        return Receipt::where('status_id',$this->receiptStatusPaidID)
        ->paginate(20);
    }
    public function getPaidReceiptWithoutPaginateToday()
    {
        return Receipt::where('status_id',$this->receiptStatusPaidID)
        ->whereDate('updated_at',Carbon::today())
        ->get();
    }

    public function getCanceledIndex(){
        return Receipt::where('status_id',$this->receiptStatusCancledID)
        ->paginate(20);
    }

    public function saveReceipt(Receipt $receipt){
        $receipt->save();
    }
    
    public function show(Receipt $receipt){
        return  Receipt_Detail::
        where('receipt_id',$receipt->id)->paginate(10);
    }
    
    public function delete($id){
        Receipt::destroy($id);
    }

    public function store(Receipt $receipt){
        $receipt->save();

        return $receipt;
    }

    public function pay(Receipt $receipt){
        $receipt->status_id = $this->receiptStatusPaidID;

        $receipt->paid_at   = Carbon::today();

        $receipt->save();

        return $receipt;
    }

    public function unpay(Receipt $receipt){
        $receipt->status_id = $this->receiptStatusAcceptedID;

        $receipt->save();

        return $receipt;
    }

    public function cancel(Receipt $receipt){
        $receipt->status_id = $this->receiptStatusCancledID;

        $receipt->cancel_by = Auth::user()->id;

        $receipt->save();

        return $receipt;
    }

    public function finish(Receipt $receipt){
        $receipt->is_finish = true;

        $receipt->finish_by = Auth::user()->id;

        $receipt->save();

        return $receipt;
    }

    public function unfinish(Receipt $receipt){
        $receipt->is_finish = false;

        $receipt->finish_by = null;

        $receipt->save();

        return $receipt;
    }

    public function whereMonth($month,$year) {

        return Receipt::where('status_id',$this->receiptStatusPaidID)
        ->whereYear ('created_at', $year)
        ->whereMonth('created_at', $month)
        ->get();
    }

    public function whereDay($day,$month,$year) {

        return Receipt::where('status_id',$this->receiptStatusPaidID)
        ->whereYear ('created_at', $year)
        ->whereMonth('created_at', $month)
        ->whereDay  ('created_at', $day)
        ->get();
        // return $month;
    }

    public function whereYear($year){
        return Receipt::where('status_id',$this->receiptStatusPaidID)
        ->whereYear ('created_at', $year)
        ->get();
    }

    public function paidToday()
    {
        return Receipt::where('status_id',$this->receiptStatusPaidID)
        ->whereDate('paid_at', Carbon::today())
        ->get();
    }
}