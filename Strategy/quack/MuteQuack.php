<?php
namespace Quack;
/**
 * Description of MuteQuack
 *
 * @author afelipetrujillo
 */
class MuteQuack implements QuackBehavior
{
    public function quack()
    {
        echo "...";
    }

}
