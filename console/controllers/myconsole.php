<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 09.12.14
 * Time: 14:04
 */
namespace console\controllers;
use yii\gii\CodeFile;
use yii\console\Controller;
use yii\helpers\Console;
use yii\helpers\FileHelper;

class MyconsoleController extends Controller
{
    public function actionCreate()
    {
        $dir = 'frontend/console/';
        $text = 'Hello World!';
        $file = 'hello.txt';


        FileHelper::createDirectory($dir, '0775', true);
        if (FileHelper::findFiles($dir, [$dir => $file])){
            $this->stdout('File is present, and data is recorded in the file ' . PHP_EOL, Console::BG_YELLOW );
            $this->createFiles($dir, $text, $file);
        } else {
            $this->stdout('File is create!, and data is recorded in the file' . PHP_EOL, Console::BG_BLUE );
            $this->createFiles($dir, $text, $file);
        }
    }


    private function createFiles($dir, $text, $file)
    {
        $result = file_put_contents($dir . $file, $text . "\n", FILE_APPEND | LOCK_EX);
        return $result;
    }
}