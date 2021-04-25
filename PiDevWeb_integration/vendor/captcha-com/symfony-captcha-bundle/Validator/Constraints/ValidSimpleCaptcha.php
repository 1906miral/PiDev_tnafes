<?php

namespace Captcha\Bundle\CaptchaBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class ValidSimpleCaptcha extends Constraint
{
    /*
     * @var string
     */
    public $message = 'La validation CAPTCHA a échoué, réessayez.';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return 'valid_simple_captcha';
    }
}
