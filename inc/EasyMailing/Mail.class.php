<?php

class Mail
{

    //vars
    private $to = '';
    private $from = '';
    private $subject = '';
    private $message = '';

    /**
     * Set the receiver of the email
     * Formatting must comply with RFC 2822
     *
     * @param string $to The email address of the receiver(s)
     */
    public function setTo($to)
    {
        $this->to = $to;
    }

    /**
     * Get the receiver of the mail
     *
     * @return string
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Set the sender of the email
     * Formatting must comply with RFC 2822
     *
     * @param string $from The email address of the receiver(s)
     */
    public function setFrom($from)
    {
        $this->from = $from;
    }

    /**
     * Get the sender of the mail
     *
     * @return string
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Set the subject of the email
     *
     * @param string $subject The subject of the email
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * Get the subject of the email
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set the message of the email
     *
     * @param string $message The message of the email
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * Append a string to the end of the message
     *
     * @param string $message The message to append
     */
    public function appendMessage($message)
    {
        $this->message .= $message;
    }

    /**
     * Get the message of the email
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Send the email
     * @return bool
     */
    public function send()
    {
        //TODO

        ini_set('SMTP', 'ka-mail1.mauve.eu');
        ini_set('sendmail_from', 'info@pentasource.de');

        $headers = array();
        $headers[] = "MIME-Version: 1.0";
        $headers[] = "Content-type: text/plain; charset=iso-8859-1";
        $headers[] = "From: {$this->getFrom()}";
        $headers[] = "Reply-To: {$this->getFrom()}";
        $headers[] = "Subject: {$this->getSubject()}";
        $headers[] = "X-Mailer: PHP/" . phpversion();


        return mail($this->getTo(), $this->getSubject(), $this->getMessage());
    }

} 