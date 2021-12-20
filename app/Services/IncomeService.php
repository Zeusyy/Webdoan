<?php
namespace App\Services;

class IncomeService implements IncomeServiceInterface {

    private $receipt;

    public function __construct (
        ReceiptServiceInterface $receipt
        )
    {
        $this->receipt = $receipt;
    }
    public function getDailyIncome($day, $month, $year) {

        $dayIncome  = 0; 

        $receipts   = $this->receipt->whereDay($day,$month,$year);

        foreach ($receipts as $receipt) {
            $dayIncome += $receipt->price_sum;
        }

        return $dayIncome;
    }

    public function arrayOfDailyFunction($month,$year) {

        $array = [];

        switch ($month) {
            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12:
                $dayNumber = 31;
                break;
            case 2:
                if(date('L',strtotime($year))){
                    $dayNumber = 29;
                    break;
                }
                else{
                    $dayNumber = 28;
                    break;
                }
            default:
            $dayNumber = 30;
        }

        $dayNumber++;

        for ($i=1; $i < $dayNumber; $i++) { 
            $income = $this->getDailyIncome($i,$month,$year);
            if($income != 0)
                array_push($array,['day' => $i,'income' => $income]);
            else
                array_push($array,['day' => $i,'income' => 0]);
        }

        return $array;
    }

    public function getMonthIncome($month,$year) {

        $monthIncome    = 0; 

        $receipts       = $this->receipt->whereMonth($month,$year);

        foreach ($receipts as $receipt) {
            $monthIncome += $receipt->price_sum;
        }

        return $monthIncome;
    }

    public function getYearIncome($year) {

        $yearIncome = 0; 

        $receipts   = $this->receipt->whereYear($year);

        foreach ($receipts as $receipt) {
            $yearIncome += $receipt->price_sum;
        }

        return $yearIncome;
    }

    public function arrayOfMonthlyFunction($year) {

        $array = [];

        for ($i=1; $i < 13; $i++) { 
            $income = $this->getMonthIncome($i,$year);
            if($income != 0)
                array_push($array,['month' => $i,'income' => $income]);
            else
                array_push($array,['month' => $i,'income' => 0]);
        }

        return $array;
    }

    public function getYearlyIncome(){
        // 
    }
}