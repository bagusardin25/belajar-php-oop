<?php
    require_once "Data/Programmer.php";

    $company = new Company();
    $company->programmer = new Programmer("Bagus");
    $company->programmer->Work();
    $company->programmer = new BackendProgrammer("Bagus");
    $company->programmer->Work();
    $company->programmer = new FrontendProgrammer("Bagus");
    $company->programmer->Work();
?>