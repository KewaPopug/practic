<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\User;
use yii\web\UploadedFile;

/**
 * Signup form
 */
class SignupForm extends Model
{
    private $user;
    public $username;
    public $email;
    public $password;
    public function __construct()
    {
        if($this->user == null) {
            $this->user = new User;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\app\models\User', 'message' => 'Такое имя уже занято'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\app\models\User', 'message' => 'Такой email уже занят'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * Signs profile up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function signup()
    {
        $this->user->username = $this->username;
        $this->user->email = $this->email;
        $this->user->setPassword($this->password);
        $this->user->generateAuthKey();
        $this->user->generateEmailVerificationToken();

        return $this->user->save();
    }

}
