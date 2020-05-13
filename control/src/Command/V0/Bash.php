<?php

namespace Addshore\Mwdd\Command\V0;

use Addshore\Mwdd\DockerCompose\Legacy;
use Addshore\Mwdd\Shell\DockerCompose;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Bash extends Command
{

	protected static $defaultName = 'v0:bash';

	protected function configure()
	{
		$this->setDescription('Runs bash in the MediaWiki / web container.');
		$this->setHelp('Runs bash in the MediaWiki / web container.');
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		(new DockerCompose())->exec( Legacy::SRV_MEDIAWIKI, 'sh -c "cd /var/www/mediawiki;bash"' );
		return 0;
	}
}
