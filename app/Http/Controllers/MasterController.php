<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    // Company Information function
    public function companyInformation(){
        return view('masters.companyInfo');
    }

    // Account Master submenu function
    public function ledgerMaster(){
        return view('masters.ledgerMaster');
    }
    public function supplierMaster(){
        return view('masters.SupplierMaster');
    }
    public function groupMaster(){
        return view('masters.GroupMaster');
    }
    public function clientMaster(){
        return view('masters.clientMaster');
    }
    public function openingBalance(){
        return view('masters.openingBalance');
    }

    // Prodcut master with all submenu
    public function itemMaster(){
        return view('masters.itemMaster');
    }
}
