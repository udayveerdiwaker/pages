<!-- <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>iPortfolio Bootstrap Template Demo</title>
  <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="https://bootstrapmade.com/assets/css/demo.css?v=33">
  </head>
  <body>
  <header id="header">

    <div class="logo">
      <a href="https://bootstrapmade.com/" rel="home" title="Back to BootstrapMade Homepage"><img alt="BootstrapMade" src="https://bootstrapmade.com/assets/img/logo.png"></a>
    </div>
    <div class="preview-devices">
      <ul>
        <li class="preview-test preview-devices-active" id="preview-test-desktop" title="Desktop preview of the  iPortfolio template"><a href=""><svg class="icon icon-preview" fill="currentColor"><use xlink:href="https://bootstrapmade.com/assets/img/icons.svg#preview"></use></svg></a></li>
        <li class="preview-test" id="preview-test-tablet" title="Tablet preview of the iPortfolio template"><a href=""><svg class="icon icon-tablet" fill="currentColor"><use xlink:href="https://bootstrapmade.com/assets/img/icons.svg#tablet"></use></svg></a></li>
        <li class="preview-test" id="preview-test-mobile" title="Mobile preview of the iPortfolio template"><a href=""><svg class="icon icon-smartphone" fill="currentColor"><use xlink:href="https://bootstrapmade.com/assets/img/icons.svg#smartphone"></use></svg></a></li>
      </ul>
    </div>

    <div class="current-template">
              <a href="https://bootstrapmade.com/demo/Active/" title="Previous Template: Active" target="_top"><svg class="icon icon-chevron-left" fill="currentColor"><use xlink:href="https://bootstrapmade.com/assets/img/icons.svg#chevron-left"></use></svg></a>
            <a class="template-home" href="https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/" title="iPortfolio Template Home Page">iPortfolio</a>
            <a href="https://bootstrapmade.com/demo/MyResume/" title="Next Template: MyResume" target="_top"><svg class="icon icon-chevron-right" fill="currentColor"><use xlink:href="https://bootstrapmade.com/assets/img/icons.svg#chevron-right"></use></svg></a>
          </div>
    
    <div class="navigate">
      <a href="https://bootstrapmade.com/demo/templates/iPortfolio/" target="_top" title="Hide the demo bar"><svg class="icon icon-external-link" fill="currentColor"><use xlink:href="https://bootstrapmade.com/assets/img/icons.svg#external-link"></use></svg></a>
      <a class="download" href="https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/#download" title="Download the iPortfolio Template"><svg class="icon icon-download" fill="currentColor"><use xlink:href="https://bootstrapmade.com/assets/img/icons.svg#download"></use></svg> <span>Free Download</span></a>
    </div>

  </header>


  <div id="preview">
    <iframe id="preview-frame" class="preview-desktop" src="https://bootstrapmade.com/demo/templates/iPortfolio/" frameborder="0"></iframe>
  </div>

  <script src="https://bootstrapmade.com/assets/js/demo.js?v=33"></script>
  <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-P7JSYB1CSP"></script><script>window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-P7JSYB1CSP');</script>
<script defer="" src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon="{&quot;rayId&quot;:&quot;8baa8c1528865496&quot;,&quot;serverTiming&quot;:{&quot;name&quot;:{&quot;cfL4&quot;:true}},&quot;version&quot;:&quot;2024.8.0&quot;,&quot;token&quot;:&quot;68c5ca450bae485a842ff76066d69420&quot;}" crossorigin="anonymous"></script>



<a id="colorPickerDivHidden"><img src="chrome-extension://njolgcnddhepjpplfifbmagdgkidikpj/logo.png"></a></body> -->


<p class="c_p"><?php
class Car {

    public $make;
    public $model;
    private $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function startEngine() {
        return "The engine of the " . $this->make . " " . $this->model .$this->year. " is started.";
    }


    private function getYear() {
        return $this->year;
    }
}?>
</p>

<?php

$myCar = new Car("Toyota", " fortuner ", 2020);

echo $myCar->make;  
echo $myCar->model; 


echo $myCar->startEngine(); 
?><?php
  class ElectricCar extends Car {
      public $batteryLife;

      public function __construct($make, $model, $year, $batteryLife) {
          parent::__construct($make, $model, $year);
          $this->batteryLife = $batteryLife;  
      }

      public function charge() {
          return "Charging the " . $this->make . " " . $this->model;
      }
  }




  
  
?></p>

<?php
$a = 1;
while($a < 12);
$a++;
echo "$abr";
?>

