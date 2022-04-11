<?php
require_once "class_account.php";

class AccountBank extends Account{
    public $customer;

    function __construct($nomor, $saldo, $customer)
    {
        parent::__construct($nomor, $saldo);
        $this->customer = $customer;
    }

    public function customer_transfer($acc_tujuan, $saldo)
    {
        $acc_tujuan->deposit($saldo);
        $this->withdraw($saldo);
    }
}
echo "<b>Daftar Account</b>";
echo "<hr>";
$customer1 = new AccountBank("C001", 6000000, "Budi");
echo "<b>Nama Customer:</b> ".$customer1->customer;
$customer1->cetak();
$customer2 = new AccountBank("C002", 5350000, "Ahmad");
echo "<br><br>";
echo "<b>Nama Customer:</b> ".$customer2->customer;
$customer2->cetak();
$customer3 = new AccountBank("C003", 2500000, "Kurniawan");
echo "<br><br>";
echo "<b>Nama Customer:</b> ".$customer3->customer;
$customer3->cetak();
echo "<br><br><br>";

echo "<b>Ahmad Nabung sebesar Rp. 1.000.000,-</b>";
echo "<hr>";
$customer2->deposit(1000000);
echo "<b>Nama Customer:</b> ".$customer2->customer;
$customer2->cetak();
echo "<br><br><br>";

echo "<b>Ahmad transfer Rp. 1.500.000 ke kurniawan dan Rp. 500.000 ke Budi</b>";
echo "<hr>";
$customer2->customer_transfer($customer3, 1500000);
echo "<b>Nama Customer:</b> ".$customer2->customer;
$customer2->cetak();
echo "<br><br>";
echo "<b>Nama Customer:</b> ".$customer3->customer;
$customer3->cetak();
echo "<br><br>";
$customer2->customer_transfer($customer1, 500000);
echo "<b>Nama Customer:</b> ".$customer2->customer;
$customer2->cetak();
echo "<br><br>";
echo "<b>Nama Customer:</b> ".$customer1->customer;
$customer1->cetak();
echo "<br><br><br>";

echo "<b>Budi tarik uang 2.500.000</b>";
echo "<hr>";
$customer1->withdraw(2500000);
echo "<b>Nama Customer:</b> ".$customer1->customer;
$customer1->cetak();
echo "<br><br><br>";
?>