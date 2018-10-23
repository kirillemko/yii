<?php
namespace app\components;

class Test
{
    public static function test()
    {
        //set_exception_handler( test2 );
        //$h = fopen('asdfasd.txt');
//        $h = null;
//        if (!$h) {
//            throw new FileNotFoundException();
//        }
        //asdfasd
        ////asdfasdfa
        /// asdfasdf

        throw new SaveFailedException();

    }

    public static function test2()
    {
        //$h = fopen('asdfasd.txt');
        $h = null;
        if (!$h) {

            throw new \Exception();
        }
    }
}