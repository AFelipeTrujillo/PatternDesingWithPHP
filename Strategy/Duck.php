<?php 
namespace Duck;

abstract class Duck
{
    protected $flyBehavior;
    protected $quackBehavior;
    
    public function __construct()
    {
        
    }
    
    public abstract function display();
    
    public function performFly()
    {
        $this->flyBehavior->fly();
    }
    
    public function performQuack()
    {
        $this->quackBehavior->quack();
    }
    
    public function swim()
    {
        echo "All ducks float ;D ";
    }
    
    public function setFlyBehavior(\Fly\FlyBehavior $fb)
    {
        $this->flyBehavior = $fb;
    }
    
    public function setQuackBehavior(\Quack\QuackBehavior $qb)
    {
        $this->quackBehavior = $qb;
    }
}