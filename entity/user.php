<?php

class User {
    protected int $id;
    protected string $lastN;
    protected string $firstN;
    protected string $email;
    protected string $pwd;
    protected string $phone;
    protected string $address;
    protected int $postalCode;
    protected string $advisor;
    protected DateTime $date;



    function __construct($id, $lastN, $firstN, $email, $pwd, $phone, $address, $postalCode, $advisor, $date) {
        $this->id=$id;
        $this->lastN=$lastN;
        $this->firstN=$firstN;
        $this->email=$email;
        $this->pwd=$pwd;
        $this->phone=$phone;
        $this->address=$address;
        $this->postalCode=$postalCode;
        $this->advisor=$advisor;
        $this->date=$date;
    }
    
        
       
    public function setId($id){$this->id = $id; return $this;}
    public function getId()
    {
        return $this->id;
    }


    public function setLastN($lastN){$this->lastN = $lastN; return $this;}
    public function getlastN()
    {
        return $this->lastN;
    }



    public function setFirstN($firstN){$this->firstN = $firstN; return $this;}
    public function getFirstN()
    {
        return $this->firstN;
    }



    public function setEmail($email){$this->email = $email; return $this;}
    public function getEmail()
    {
        return $this->email;
    }



    public function setPwd($pwd){$this->pwd = $pwd;  return $this;}
    public function getPwd()
    {
        return $this->pwd;
    }



    public function setPhone($phone){$this->phone = $phone; return $this;}
    public function getPhone()
    {
        return $this->phone;
    }



    public function setAddress($address){$this->address = $address; return $this;}
    public function getAddress()
    {
        return $this->address;
    }



    public function setPostalCode($postalCode) {$this->postalCode = $postalCode; return $this;}
    public function getPostalCode()
    {
        return $this->postalCode;
    }



    public function setAdvisor($advisor){$this->advisor = $advisor; return $this;}
    public function getAdvisor()
    {
        return $this->advisor;
    }



    public function setDate($date){$this->date = $date; return $this;}
    public function getDate()
    {
        return $this->date;
    }  

}    

?>