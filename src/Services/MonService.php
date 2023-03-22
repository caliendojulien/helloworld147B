<?php

namespace App\Services;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class MonService
{

    private MailerInterface $mailer;

    public function __construct(
        MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function envoiEmail($msg)
    {
        $email = new Email();
        $email->from('batman@eni-ecole.fr');
        $email->to('admin@eni-ecole.fr');
        $email->subject('Mon email');
        $email->text($msg);

        $this->mailer->send($email);
    }
}