<!DOCTYPE html>
<html>
<body>

<?php
class Contact1 {

    protected $email;
    protected $phone;

    protected function setContact($email,$phone){
        $this->email = $email;
        $this->phone = $phone;
    }
    public function getContact (){
        return "email: " . $this->email . " phone: " . $this->phone;
    }
    public function contains ($text){
        if (strpos($this->email, $text)!==false || strpos($this->phone, $text)!==false){
            return $this->email . $this->phone;
        } else return false;
    }

}

class ContactList extends Contact {

    protected $contacts = [];
    
    public function addContact ($contact){
        if ($contact instanceof Contact)
        $this->contacts = $contact;
    }
    public function listAllContacts (){
        print_r( $this->contacts) ;
    }
}
$contact1 = new Contact('523','55');
$contact2 = new Contact('2',"55");
$contact3 = new Contact("2","33");
$list = new ContactList();
echo  $contact3->getContact();

//echo $contact1->contains('5');

$list->addContact($contact1);
$list->addContact($contact2);
$list->addContact($contact3);
$list->addContact($contact1);

$list->listAllContacts();
?>

</body>
</html>