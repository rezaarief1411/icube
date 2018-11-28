<?php
namespace Icube\Training\Block\Override;

class Hello extends \Icube\Training\Block\Hello
{
	public function getHelloworldToIcubtTeam()
	{
		return 'Override Hello world Icube';
	}
}