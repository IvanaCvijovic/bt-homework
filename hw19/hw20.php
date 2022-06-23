<?php

//nisam bas razumela abstract, tako da to fali sigurno, ostatak sam valjda dobro razumela

class Contact {

    protected $email;
    protected $phone;

    public function setEmail($email){
        $this->email = $email;
    }
    public function setPhone($phone){
        $this->phone = $phone;
    }
    public function getContact (){
        return "email: " . $this->email . " phone: " . $this->phone;
    }
    public function contains ($text){
        if (strpos($this->email, $text)!==false || strpos($this->phone, $text)!==false){
            echo $this->getContact();
        } else echo "Nema odabira";
    }
    public function displayMe(){
        echo "email: " . $this->email . " phone: " . $this->phone;
    }

}
class ContactList extends Contact {

    protected $contacts = [];
    
    public function addContact ($contact){
        if ($contact instanceof Contact)
        $this->contacts[] = $contact;
    }
    public function listAllContacts (){
        foreach ($this->contacts as $contact){
            echo "<br>" ;
            echo $contact->getContact();
        }
    }
}

class CustomerContact extends Contact {
    protected $firstName;
    protected $lastName;
    public function setFirstName($firstName){
        $this->firstName = $firstName;
    }
    public function setLastName($lastName){
        $this->lastName = $lastName;
    }
    public function displayMe (){
        echo  "<br>email: " . $this->email . " phone: " . $this->phone . 
         " lastName: " . $this->lastName . " firstName: " . $this->firstName;
    }
}

class BusinessContact  extends Contact {
    protected $adress;
    protected $companyName;
    public function setAdress($adress){
        $this->adress = $adress;
    }
    public function setCompanyName($companyName){
        $this->companyName = $companyName;
    }
    public function displayMe (){
        echo  "<br>email: " . $this->email . " phone: " . $this->phone . 
         " adress: " . $this->adress . " companyName: " . $this->companyName;
    }
}

$contact1 = new CustomerContact ();
$contact2 = new CustomerContact ();
$contact3 = new BusinessContact ();
$contact4 = new BusinessContact ();

$contact1->setEmail('cv@cv');
$contact1->setPhone('3456');
$contact1->setFirstName('nikola');
$contact1->setLastName('nikic');

$contact2->setEmail('aw@aw');
$contact2->setPhone('9873');
$contact2->setFirstName('aw@aw');
$contact2->setPhone('9873');


$contact3->setEmail('hy@hy');
$contact3->setPhone('1263');
$contact3->setAdress('bg');
$contact3->setCompanyName('cube');

$contact4->setEmail('rt@uy');
$contact4->setPhone('6789');
$contact4->setAdress('ns');
$contact4->setCompanyName('agro');


echo "<br>" ;

$list = new ContactList();
$list->addContact($contact1->displayMe());
$list->addContact($contact2->displayMe());
$list->addContact($contact3->displayMe());
$list->addContact($contact4->displayMe());


$list->listAllContacts() ;


