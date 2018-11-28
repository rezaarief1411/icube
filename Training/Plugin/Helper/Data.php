<?php
namespace Icube\Training\Plugin\Helper;

class Data
{
	public function beforeGetPluginHelper(\Icube\Training\Helper\Data $subject)
	{
		echo 'beforeGetTestHelper';
		echo '<br>';
	}
	public function afterGetPluginHelper(\Icube\Training\Helper\Data $subject)
	{
		echo '<br>';
		echo 'afterGetPluginHelper';
	}
	// public function aroundGetPluginHelper(\Icube\Training\Helper\Data $subject)
	// {
	// 	echo '<br>';
	// 	echo 'aroundGetPluginHelper';
	// }
}