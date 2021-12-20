<?php
namespace App\Services;

interface IncomeServiceInterface {

    public function getDailyIncome ($day, $year, $month);

    public function arrayOfDailyFunction ($month,$year);

    public function getMonthIncome ($month,$year);

    public function getYearIncome ($year);

    public function arrayOfMonthlyFunction ($year);

    public function getYearlyIncome ();
}