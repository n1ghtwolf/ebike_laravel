<?php
class exists_bikes_calc implements calculator{
//class exists_bikes_calc{
    // все компоненты
    private $make_spokes = 1000;//спицовка в грн
    private $throttle;
    private $kit;
    private $display;
    private $battery;
    private $pay_for_work = 800;
    private $battery_case = 1500;

    /**
     * exists_bikes_calc constructor.
     * @param $throttle
     * @param $kit
     * @param $display
     * @param $battery
     */
    public function __construct($throttle, $kit, $display, $battery)
    {

        $this->throttle = $throttle;
        $this->kit = $kit;
        $this->display = $display;
        $this->battery = $battery;
//       echo 'tut';die;
//        $this->calculate();
    }


    /**
     * @return int
     */
    public function getMakeSpokes(): int
    {
        return $this->make_spokes;
    }

    /**
     * @param int $make_spokes
     */
    public function setMakeSpokes(int $make_spokes)
    {
        $this->make_spokes = $make_spokes;
    }

    /**
     * @return mixed
     */
    public function getThrottle()
    {
        return $this->throttle;
    }

    /**
     * @param mixed $throttle
     */
    public function setThrottle($throttle)
    {
        $this->throttle = $throttle;
    }

    /**
     * @return mixed
     */
    public function getKit()
    {
        return $this->kit;
    }

    /**
     * @param mixed $kit
     */
    public function setKit($kit)
    {
        $this->kit = $kit;
    }

    /**
     * @return mixed
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * @param mixed $display
     */
    public function setDisplay($display)
    {
        $this->display = $display;
    }

    /**
     * @return mixed
     */
    public function getBattery()
    {
        return $this->battery;
    }

    /**
     * @param mixed $battery
     */
    public function setBattery($battery)
    {
        $this->battery = $battery;
    }


    public function calculate():int
    {
        return $this->getThrottle()+$this->getDisplay()+$this->getKit()+$this->getBattery()+$this->getMakeSpokes()+$this->getPayForWork()+$this->getBatteryCase();
        // TODO: Implement calculate() method.
    }

    /**
     * @return int
     */
    public function getPayForWork(): int
    {
        return $this->pay_for_work;
    }

    /**
     * @param int $pay_for_work
     */
    public function setPayForWork(int $pay_for_work)
    {
        $this->pay_for_work = $pay_for_work;
    }

    /**
     * @param int $battery_case
     */
    public function getBatteryCase()
    {
        return $this->battery_case;
    }

}

