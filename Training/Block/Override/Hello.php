<?php
namespace Icube\Training\Block\Override;
 
class Hello extends \Icube\Training\Block\Hello
{
    public function getHelloWorld()
    {
        return 'Override Hello world Icube!';
    }
}