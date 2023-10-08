<?php 
use App\UserName;
use PHPUnit\Framework\TestCase;


class UserNameTest extends TestCase {
    public UserName $username;

    public function setUp():void {
        $this->username=new UserName('doe');
    }

    public function testusername() {
        
        $this->assertSame('doe',$this->username->getName());
    }
}


?>