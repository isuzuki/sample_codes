<?php
require_once __DIR__ .'/vendor/autoload.php';

use Pimple\Container;

// infra
interface MailerInterface
{
	public function send($body);
}

class SendmailMailer implements MailerInterface
{
	public function send($body)
	{
	}
}



// domain
class NewsletterTransfer
{
	protected $mailer;

	public function __construct(MailerInterface $mailer)
	{
		$this->mailer = $mailer;
	}

	public function send($newsletter)
	{
		$this->mailer->send($newsletter);
	}
}


$container = new Container();

// object config
$container['infra.mailer'] = function($container) {
	$mailer = new SendmailMailer();

	return $mailer;
};

$container['domain.transfer.newsletter'] = function($container) {
	$newsletterTransfer = new NewsletterTransfer($container['infra.mailer']);

	return $newsletterTransfer;
};


// use object
$newsletterTransfer = $container['domain.transfer.newsletter'];
$newsletterTransfer->send('ニュースレター本文');
