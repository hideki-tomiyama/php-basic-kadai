<!DOCTYPE html>
<html lang="ja">

 <head>
   <title>PHP課題_016</title>
   <meta charset="UTF-8">
 </head>

 <body>
   <a>
     <?php
       //クラス Foodの定義
       class Food {
         private $name;
         private $price;
         //コントラフタ・メゾット定義
         public function __construct(string $name,int $price){
           $this->name = $name;
           $this->price =$price;  
          }
         public function show_price(){  
           echo $this->price. "<br>";
         }
        }
        
        //インスタンス設定
        $food = new Food("Potato",250);
        
        //プロパティ内の出力($food内)
        print_r($food);
        echo "<br>";

        //クラス Animaruの定義
       class Animal {
         private $name;
         private $height;
         private $weight;
         //コントラフタ・メゾット定義
         public function __construct(string $name,int $height,int $weight){
           $this->name = $name;
           $this->height = $height;
           $this->weight = $weight;
         }
         public function show_height(){
           echo $this->height. "<br>";   
         }
       }
       //インスタンス設定
       $animal = new Animal("dog",60,5000);
       
       //プロパティ内の出力
       print_r($animal);
       echo "<br>";

       //インスタンス設定(price,hight用)
       $food->show_price();
       $animal->show_height();
       
      ?>
    </a>
 </body>
</html>