<?php
class island
{
  public $name;
  public $shortDesc;
  public $longDesc;
  public $color;
  public $image;

  public function __construct($name, $shortDesc, $longDesc, $color, $image)
  {
    $this->name = $name;
    $this->shortDesc = $shortDesc;
    $this->longDesc = $longDesc;
    $this->color = $color;
    $this->image = $image;

  }



  public function buildCard()
  {
    return
    '
    <div class="col">
    <div class="card card-bg overflow-hidden"
        style="background:radial-gradient('.$this->color.')">
        <img src="bannerImg/'.$this->image.'" class="card-img-top " alt="...">
        <div class="card-body">
            <h5 class="card-title">'.$this->name.'</h5>
            <p class="card-text">'.$this->shortDesc.'</p>
            <a href="#" class="btn btn-primary">Go here</a>
        </div>
    </div>
</div>';
  }
}
?>


