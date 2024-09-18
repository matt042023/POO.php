<?php

include "video.php";
include "dog.php";

echo '<h1>POO</h1>';

class Formation extends Video
{
    private string $avion; // visibilité public : propriéte publique, visible et modifiable par tout le monde
    private string $desc; // visibilité protected : propriéte protegee, accessible uniquement par la classe et ses enfants
    private int $price; // visibilité private : propriéte privee, accessible uniquement par la classe

    public function __construct(string $tit, string $desc, int $price)
    {
        $this->avion = $tit;
        $this->desc = $desc;
        $this->price = $price;
        $this->url = "";
    }

    public function getAvion()
    {
        return $this->avion;
    }

    public function setAvion($tit)
    {
        $this->avion = $tit;
    }



    public function getDesc()
    {
        return $this->desc;
    }

    public function setDesc($desc)
    {
        $this->desc = $desc;
    }


    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $limitPrice = 15;
        if ($price < $limitPrice) {
            $price = $limitPrice;
        }
        $this->price = $price;
        return $limitPrice;
    }

    public function getVideo()
    {
        return parent::getVideo();
        //return $this->url;
    }

    public function setVideo($url)
    {
        parent::setVideo($url);
        //$this->url = $url;
    }
}




$tuto1 = new Formation("HTML", "Tutoriel HTML", 45);
$tuto2 = new Formation("CSS", "Tutoriel CSS", 25);
$limitPrice = 15;
var_dump($tuto1);
var_dump($tuto2);

echo "Titre : " . $tuto1->getAvion() . "<br>";
echo "<br>";
$tuto1->setAvion("PHP");
echo "Titre modifié : " . $tuto1->getAvion();
echo "<br>";

echo "Descriptif : " . $tuto1->getDesc();
echo "<br>";
$tuto1->setDesc("Formation PHP");
echo "Descriptif modifié : " . $tuto1->getDesc();
echo "<br>";


$newPrice = 10;
echo "Prix : " . $tuto1->getPrice();
echo "<br>";
$tuto1->setPrice($newPrice);
echo "Si le prix entré est de " . $newPrice . "(inferieur à " . $limitPrice . "), la fonction enregistrera  : " . $tuto1->getPrice();
echo "<br>";

echo "Prix : " . $tuto1->getPrice();
echo "<br>";
$tuto1->setPrice("30");
echo "Prix modifié : " . $tuto1->getPrice();
echo "<br>";

echo "Lien URL vers la video : " . $tuto1->getVideo();
echo "<br>";
$tuto1->setvideo("https://www.youtube.com/embed/0D7XfQaBnqQ");
echo "Lien URL modifié vers la video : " . $tuto1->getVideo();
echo "<br>";


var_dump($tuto1);
var_dump($tuto2);
$dog1 = new Dog();
echo "<h1 style='font-size: 200px; color:red'>" . $dog1->bark() . "</h1>"





/*echo $tuto1 -> avion;
    echo "<br>";
    echo "titre : " . $tuto1 -> avion;
    */
?>