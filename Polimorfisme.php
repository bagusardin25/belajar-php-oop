<?php
    require_once "Data/Programmer.php";

    $company = new Company();
    $company->programmer = new Programmer("Bagus");
    var_dump($company);
    $company->programmer->Work();
    $company->programmer = new BackendProgrammer("Bagus");
    var_dump($company);
    $company->programmer->Work();
    $company->programmer = new FrontendProgrammer("Bagus");
    var_dump($company);
    $company->programmer->Work();
?>