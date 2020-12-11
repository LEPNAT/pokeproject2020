<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pokemon $pokemon
 */
?>

<head><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>


<div class="Row">
  <div class="G3_display">
    <div class="G3_rightnleft">
    <?= $this->Html->image($pokemon->main_sprite); ?>
    
    </div>
    <div class="G3_rightnleft">
    <h3><?= h($pokemon->name) ?></h3>
    <h3 class="card__type <?= $pokemon->first_type ?>">
            <?= $pokemon->first_type ?>
        </h3>

        <?php if ($pokemon->has_second_type) : ?>
        <h3 class="card__second_type <?= $pokemon->second_type ?>">
            <?= $pokemon->second_type ?>
        </h3>
    
      
        <?php endif; ?>

        <table>
              <?php $stats=array('HP','Defense','Attack','Special Attack','Special Defense','Speed'); $i=0;?>  
                <?php foreach ($pokemon->pokemon_stats as $pokemonStats) : ?>
                    <tr>
                            
                        <td><?=h($stats[$i]); $i++;?></td>
                        <td><?= h($pokemonStats->value) ?></td>
                           
                    </tr>
                        
                <?php endforeach; ?>
        </table>
    </div>
    </div>
        

   

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <?= $this->Html->image($pokemon->main_sprite); ?>
    </div>
    <div class="carousel-item">
    <?= $this->Html->image($pokemon->back_sprite); ?>
    </div>
    <div class="carousel-item">
    <?= $this->Html->image($pokemon->shiny_sprite); ?>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" ></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" ></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    
</div>