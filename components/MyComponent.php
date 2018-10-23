<?php
namespace app\components;


use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;

class MyComponent extends Component
{
    public $text;

    public function welcome()
    {
        echo $this->text;
    }

}