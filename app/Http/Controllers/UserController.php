<?php

namespace App\Http\Controllers;

use App\Models\Credit;
use App\Models\Debit;
use App\Models\Donator;
use App\Models\User;
use App\Models\Address;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        try {
            $cardOption = $request->card_option;
        
            $user = new User;
            $user->name = $request-> name;
            $user->email = $request-> email;
            $user->cpf = $request-> cpf;
            $user->phone = $request-> phone;
            $user->date_of_birth = $request->date_of_birth;
            $user->email_verified_at = "";
            $user->password = "";
            $user->remember_token = "";

            $user->save();

            $address = new Address;
            $address->user_id = $user->id;
            $address->zipcode = $request->zipcode;
            $address->street = $request->street;
            $address->number = $request->number;
            $address->complement = $request->complement;
            $address->district = $request->district;
            $address->city = $request->city;
            $address->state = $request->state;
            $address->save();

            if ($cardOption === 'credit') {

                $firstNumbers = $request->first_numbers_card;
                $lastNumbers = $request->last_numbers_card;

                $checkDuplicateCard = Credit::where('first_numbers_card', '=', $firstNumbers)
                ->where('last_numbers_card', '=', $lastNumbers)
                ->exists();

                
                if ($checkDuplicateCard) {
                    return response()->json(['success' => false, 'message' => 'Cartao Ja Cadastrado'],400);
                }

                $credit = new Credit;
                $credit->card_flag = $request->card_flag;
                $credit->first_numbers_card = $request->first_numbers_card;
                $credit->last_numbers_card = $request->last_numbers_card;
                $credit->save();
            }else {

                $debit = new Debit;
                $debit->user_id = $user->id;
                $debit->bank = $request->bank;
                $debit->agency = $request->agency;
                $debit->account = $request->account;
                $debit->digit = $request->digit;
                $debit->save();
            }

            $donor = new Donator;
            $donor->name = $request-> name;
            $donor->user_id = $user->id;
            $donor->donation_range =$request->donation_interval; // Alterar isso
            $donor->payment_method = $cardOption === 'Credito' ? 'Credito' : 'Debito'; 
            $donor->value = $request->donation_value;
            $donor->save();

            return response()->json(['success' => true, 'message' => "Cadastrado Realizado com Sucesso"], 200);
        } catch (\Throwable $th) {
            return response()->json(['success' => false, 'message' => $th->getMessage()], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
