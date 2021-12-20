<?php

namespace App\Http\Controllers;

use App\Models\Receipt;
use App\Services\IncomeServiceInterface;
use App\Services\ReceiptServiceInterface;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    private $receipt;

    private $income;

    public function __construct
    (
        IncomeServiceInterface  $income,

        ReceiptServiceInterface $receipt
    )
    {
        $this->income   = $income;

        $this->receipt  = $receipt;
    }
    //
    public function index()
    {
        $receipts = $this->receipt->whereYear(2021);

        return view('admin.income.index')
        ->with('receipts',$receipts);
        // $date = $receipts->first()->created_at;
        // $date = date('d/m/Y',strtotime($date));
        // var_dump($date) ;
        // return($receipts) ;
    }
    public function month($year,$month){
        // $receipts = $this->receipt->whereMonth($month,$year);
        $days =  $this->income->arrayOfDailyFunction($month, $year);
        
        $receipt = new Receipt;
        
        return view('admin.income.eachDay')->with('days',$days)
        ->with('month',     $month)
        ->with('year',      $year)
        ->with('receipt',   $receipt);
    }

    public function year($year){
        $receipts = $this->receipt->whereYear($year);
        return $receipts;
    }

    public function eachDay($year, $month){
        return $this->income->arrayOfDailyFunction($month, $year);
        // return $day;
    }
    public function incomeCurrentDay()
    {
        $now        = Carbon::now();
        $year       = $now->year;
        $month      = $now->month;
        $day        = $now->day;
        $receipts   = $this->receipt->whereDay($day,$month,$year);
        
        return view('admin.income.day')
        ->with('receipts',  $receipts)
        ->with('day',       $day)
        ->with('month',     $month)
        ->with('year',      $year);
    }
    public function incomeCurrentMonth()
    {
        $now                = Carbon::now();
        $year               = $now->year;
        $month              = $now->month;
        $day                = $now->day;
        $totalMonthIncome   = $this->income->getMonthIncome($month,$year);
        $days               =  $this->income->arrayOfDailyFunction($month, $year);
        $receipt            = new Receipt;
        
        return view('admin.income.eachDay')->with('days',$days)
        ->with('month',     $month)
        ->with('year',      $year)
        ->with('receipt',   $receipt)
        ->with('total',     $totalMonthIncome);

        // return $days;
    }
    public function incomeCurrentYear()
    {
        $now                = Carbon::now();
        $year               = $now->year;
        $month              = $now->month;
        $day                = $now->day;
        $totalYearIncome    = $this->income->getYearIncome($year);
        $months             =  $this->income->arrayOfMonthlyFunction($year);
        $receipt            = new Receipt;
        
        return view('admin.income.eachMonth')
        ->with('months',    $months)
        ->with('month',     $month)
        ->with('year',      $year)
        ->with('receipt',   $receipt)
        ->with('total',     $totalYearIncome);;

        // return $days;
    }
}
