<?php


namespace App\Services;


use App\Models\Contact;

class ContactService
{
    public function getContact()
    {
        $contact = Contact::all();
        return $contact;
    }

}
