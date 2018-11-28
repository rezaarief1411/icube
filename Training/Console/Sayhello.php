<?php
namespace Icube\Training\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;
use Icube\Training\Helper\Data;

class Sayhello extends Command
{
	protected $helper;
	const NAME = 'name';
	
	public function __construct(
	    \Icube\Training\Helper\Data $helper
	){
		$this->helper = $helper;
		parent::__construct();
	}
	
   protected function configure()
   {
   		$options = [
			new InputOption(
				self::NAME,
				null,
				InputOption::VALUE_REQUIRED,
				'Name'
			)
		];

       $this->setName('training:sayhello');
       $this->setDescription('Training command line')
       ->setDefinition($options);

       parent::configure();
   }
   protected function execute(InputInterface $input, OutputInterface $output)
   {
      if ($name = $input->getOption(self::NAME)) {

			$output->writeln("Hello " . $name);


		} else {

			$output->writeln("Hello World");

		}

		return $this;
   }
}