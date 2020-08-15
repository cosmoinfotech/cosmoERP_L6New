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
    public function ledgeropeningBalance(){
        return view('masters.leadgeropeningBalance');
    }

    // Product master with all submenu
    public function itemMaster(){
        return view('masters.itemMaster');
    }
    public function categoryMaster(){
        return view('masters.categoryMaster');
    }
    public function openingStock(){
        return view('masters.openingStock');
    }
    public function priceList(){
        return view('masters.priceList');
    }
    public function godownMaster(){
        return view('masters.godownMaster');
    }

    // Tax Master
    public function taxMaster(){
        return view('masters.taxMaster');
    }

    // Narration
    public function narrationMaster(){
        return view('masters.narration');
    }

    // Setup 
    public function setupMaster(){
        return view('masters.setupMaster');
    }


    // create User
    public function createUser(){
        return view('masters.createUser');
    }


}
