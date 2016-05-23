<?php

require './Duck.php';
require './FlyBehavior.php';
require './QuackBehavior.php';
require './fly/FlyNoWay.php';
require './fly/FlyWithWings.php';
require './quack/MuteQuack.php';
require './quack/Quack.php';
require './quack/Squeak.php';

require './MadarinDuck.php';

$mandarin = new MadarinDuck();
echo str_pad($mandarin->display(),10,"#",STR_PAD_BOTH)."\n";
$mandarin->setFlyBehavior(new \Fly\FlyWithWings());
$mandarin->setQuackBehavior(new \Quack\Quack());
$mandarin->performFly();
$mandarin->performQuack();
echo str_pad($mandarin->display(),10,"#",STR_PAD_BOTH)."\n";
      