<?php

//Create Inventory Class
//There should be add item method which can add the new item and qty into the list property
//There should be a sale method which will reduce the qty of the item
class Inventory{
    private $itemList=[];
    function addItem(string $itemName,int $qty)
    {
        $newItem=$this->buildItem($itemName,$qty);
        array_push($this->itemList,$newItem);
       var_dump($this->itemList);
      
    }
    private function buildItem(string $itemName,int $qty)
    {
        return ['name'=>$itemName,'qty'=>$qty];
    }


   /* function reduceItem(string $itemName,int $soldqty)
    {
       
        $soldItem=$this->soldItem($itemName,$soldqty);
       /* foreach($soldItem as $sold)
        {
            $soldItem=$this->soldItem($itemName,$soldqty);
          return $this->qty-$this->soldqty;
        }
       array_push($this->itemList,$soldItem);
       var_dump($this->itemList);
    
     }*/
    function soldItem(string $itemName,int $soldqty)
     {  
       $name=array_column($this->itemList,'name');
        $key=array_search($itemName,$name);
      
        if($key!==false){
          $this->itemList[$key]['qty'] -=$soldqty;
          
        }
        var_dump($this->itemList);
     }
     
}
$inven=new  Inventory();
$inven->addItem('orange',20);
$inven->addItem('apple',20);
$inven->soldItem('orange',8);
