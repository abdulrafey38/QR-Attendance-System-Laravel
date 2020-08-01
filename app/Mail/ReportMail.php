<?php

namespace App\Mail;

use App\Course;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReportMail extends Mailable
{
    use Queueable, SerializesModels;
    public $attendances;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($attendances)
    {
        $this->attendances = $attendances;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $course = Course::find($this->attendances[0]->course_id);
//        dd($course);
        return $this->view('Emails.report', ['attendances' => $this->attendances, 'course' => $course])
            ->subject('Class Attendance Report.')
            ->from('support@comsats.edu.pk');
    }
}
