<?php

function couponGenerator($car) {

  $discount = 0;   
  $isHighSeason = false;  
  $bigStock = true;
      
  if($car == "bmw") {
    if(!$isHighSeason) {$discount += 5;}
    if($bigStock) {$discount += 7;} 
  } else if($car == "mercedes") {
    if(!$isHighSeason) {$discount += 4;}
    if($bigStock) {$discount += 10;}
  }
      
// return $coupon = "Get {$discount}% off the price of your new car.";

}
  
// echo couponGenerator("bmw");

interface carCouponGenerator {

    function addSeasonDiscount();
    function addStockDiscount();

}

class bmwCouponGenerator implements carCouponGenerator {

    private $discount = 0;
    private $isHighSeason = false;
    private $bigStock = true;
      
    function addSeasonDiscount() {

        if(!$this->isHighSeason) return $this->discount += 5;
        return $this->discount +=0;
    
    }
      
    function addStockDiscount() {

        if($this->bigStock) return $this->discount += 7;
        return $this->discount +=0;
    
    }

}

class mercedesCouponGenerator implements carCouponGenerator {

    private $discount = 0;
    private $isHighSeason = false;
    private $bigStock = true;
      
    function addSeasonDiscount() {

        if(!$this->isHighSeason) return $this->discount += 4;
        return $this->discount +=0;

    }
      
    function addStockDiscount() {

        if($this->bigStock) return $this->discount += 10;
        return $this->discount +=0;

    }

}

function couponObjectGenerator($car) {

    if($car == "bmw") {
        $carObj = new bmwCouponGenerator;
    } else if($car == "mercedes") {
        $carObj = new mercedesCouponGenerator;
    }
      
    return $carObj;

}

class couponGenerator {

    private $carCoupon;
    
    function __construct(carCouponGenerator $carCoupon) {
        $this->carCoupon = $carCoupon;
    }
     
    function getCoupon() {
      $discount = $this->carCoupon->addSeasonDiscount();
      $discount = $this->carCoupon->addStockDiscount();
      
      return $coupon = "get {$discount}% off the price of your new car now. \n";
    
    }
}

// testing code para bmw y mercedes
$car = "bmw";
$carObj = couponObjectGenerator($car);
$couponGenerator = new couponGenerator($carObj);
echo "If you have chosen " .$car. ", ";
echo $couponGenerator->getCoupon();

$car = "mercedes";
$carObj = couponObjectGenerator($car);
$couponGenerator = new couponGenerator($carObj);
echo "If you have chosen " .$car. ", ";
echo $couponGenerator->getCoupon();

?>