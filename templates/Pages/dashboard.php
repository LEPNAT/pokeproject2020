<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pokemon $pokemon
 */
use Cake\ORM\TableRegistry;

?>


    <h3><?= __('DashBoard') ?></h3>

    <div class="row">
    <? $pokemon = TableRegistry::getTableLocator()->get('pokemon');?>
    <?$query = $pokemon->find(all);?>

<?foreach ($query as $row)?> 
  
    <?    echo $row->title;?>

<? endforeach?>

    </div>    

