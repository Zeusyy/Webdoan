<?php
namespace App\Services;

use App\Models\Receipt;
use App\Models\Receipt_Detail;
use App\Repositories\ReceiptRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReceiptService implements ReceiptServiceInterface
{
    private $receiptStatusAcceptedID = 1;
    private $receiptStatusWaitingID = 3;

    private $receipt;

    public function __construct(ReceiptRepositoryInterface $receipt)
    {
        $this->receipt = $receipt;
    }

    //get user's role name
    public function getRoleName() {
        return $this->receipt->getRoleName();
    }

    public function all(){
        $user_id = Auth::user()->id;
        return $this->receipt->getReceiptOfUser($user_id);
    }
    
    public function getReceiptById($id){
        return Receipt::find($id);
    }

    public function getWaitingReceipt(){
        return $this->receipt->getWaitingReceipt();
    }

    public function getNewReceiptWithoutPaginate()
    {
        return $this->receipt->getNewReceiptWithoutPaginate();
    }

    public function searchWaiting($keyword,$option)
    {
        if($keyword == null)
            return $this->receipt->getWaitingReceipt();

        if($option == 'id')
            return $this->receipt->getWaitingReceiptByID($keyword);

        if($option == 'userid')
            return $this->receipt->getWaitingReceiptByUserID($keyword);

        return $this->receipt->getWaitingReceipt();
    }
    
    public function acceptedIndex(){
        return $this->receipt->getAcceptedIndex();
    }

    // options = [id,userid,username]
    public function search($keyword,$option)
    {
        if($keyword == null)
            return $this->receipt->getAcceptedIndex();
        if($option == 'id')
            return $this->receipt->searchID($keyword);
        if($option == 'userid')
            return $this->receipt->searchUserID($keyword);
        if($option == 'username')
            // return $this->receipt->searchUserName($keyword);
            return 1;
        // neu k co option thi tra ve tat ca
        return $this->receipt->getAcceptedIndex();
    }

    public function canceledIndex(){
        return $this->receipt->getCanceledIndex();
    }
    public function paidIndex(){
        return $this->receipt->getPaidIndex();
    }

    public function getPaidReceiptWithoutPaginateToday()
    {
        return $this->receipt->getPaidReceiptWithoutPaginateToday();
    }


    public function receiptAccept (Receipt $receipt) {

        $receipt->status_id     = $this->receiptStatusAcceptedID;

        $receipt->accept_by     = Auth::user()->id;

        $this->receipt->saveReceipt($receipt);
    }

    public function show(Receipt $receipt){
        return  $this->receipt->show($receipt);
    }

    public function update(Request $request, Receipt $receipt) {

        $receipt->price_sum =  $request->price_sum;

        $receipt->description =  $request->description;

        $this->receipt->saveReceipt($receipt);
    }

    public function delete($id){
        $this->receipt->delete($id);
    }

    // lay trang thai hoa don de tra ra route thich hop
    public function getRoute(Receipt $receipt){
        if($receipt->status_id == $this->receiptStatusAcceptedID)
            return 'receipt.indexAccepted';
        else if($receipt->status_id == $this->receiptStatusWaitingID)
                return 'receipt.index';
    }
    //hoan thanh hoa don
    // public function finish(Receipt $receipt){
    //     $this->receipt->finish($receipt);
    // }

    //thanh toan, huy, hoan thanh hoa don
    public function receiptProcess(Receipt $receipt, $action){

        if ($action == 'pay')
            return $this->receipt->pay($receipt);

        if ($action == 'unpay')
            return $this->receipt->unpay($receipt);

        if ($action == 'cancel')
            return $this->receipt->cancel($receipt);

        if ($action == 'finish')
            return $this->receipt->finish($receipt);

        if ($action == 'unfinish')
            return $this->receipt->unfinish($receipt);

        return 'Undefine action';
    }

    public function store(Receipt $receipt){
        $this->receipt->saveReceipt($receipt);
    }
    public function whereMonth($month,$year){
        return $this->receipt->whereMonth($month,$year);
    }
    public function whereDay($day,$month,$year){
        return $this->receipt->whereDay($day,$month,$year);
        // return 11;
    }
    public function whereYear($year){
        return $this->receipt->whereYear($year);
    }
    public function paidToday(){
        return $this->receipt->paidToday();
    }
}