<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pokemon $pokemon
 */
use Cake\ORM\TableRegistry;

?>


    <h2><?= __('DashBoard') ?></h2>

   
    <h3><?= __('Poids moyen des pokemons de la 4éme génération :') ?></h3>
    <?php $pokemons = TableRegistry::getTableLocator()->get('Pokemons');

    $query = $pokemons->find('all');
    $query  ->select(['avg'=>$query->func()->avg('weight')])
            ->where(['Pokemons.Id BETWEEN 386 AND 494']);
        


    foreach ($query as $row) {
   
        echo $row->avg," kg  ";
    }
    ?>
    

    <h3><?= __('Nombre de pokemons de type fée entre les générations 1, 3 et 7.') ?></h3>
    <h4><?= __('Nombre de pokemons de type fée entre les générations 1 :') ?></h4>
    <?php $pokemons = TableRegistry::getTableLocator()->get('Pokemons');
        

    $query = $pokemons->find('all');
    $query->select(['count'=>$query->func()->count('pokemons.id')])
            ->join([
                'types' => [
                'table' => 'pokemon_types',
                'type' => 'INNER',
                'conditions' => 'types.pokemon_id = pokemons.id'],])
        
        ->where(['Pokemons.Id BETWEEN 1 AND 151'])
        ->andWhere(['types.type_id=10']);
        


    foreach ($query as $row) {
   
        echo $row->count,"    ";
    }
    ?>
    <h4><?= __('Nombre de pokemons de type fée entre les générations 3 :') ?></h4>
    <?php $pokemons = TableRegistry::getTableLocator()->get('Pokemons');
        

    $query = $pokemons->find('all');
    $query->select(['count'=>$query->func()->count('pokemons.id')])
            ->join([
                'types' => [
                'table' => 'pokemon_types',
                'type' => 'INNER',
                'conditions' => 'types.pokemon_id = pokemons.id'],])
        
        ->where(['Pokemons.Id BETWEEN 252 AND 386'])
        ->andWhere(['types.type_id=10']);
        


    foreach ($query as $row) {
   
        echo "  ",$row->count,"    ";
    }
    ?>
    <h4><?= __('Nombre de pokemons de type fée entre les générations 7 :') ?></h4>
    <?php $pokemons = TableRegistry::getTableLocator()->get('Pokemons');
        

        $query = $pokemons->find('all');
        $query->select(['count'=>$query->func()->count('pokemons.id')])
                ->join([
                    'types' => [
                    'table' => 'pokemon_types',
                    'type' => 'INNER',
                    'conditions' => 'types.pokemon_id = pokemons.id'],])
            
            ->where(['Pokemons.Id BETWEEN 722 AND 809'])
            ->andWhere(['types.type_id=10']);
            
    
    
        foreach ($query as $row) {
       
            echo "  ",$row->count,"    ";
        }
    ?>
    
    <h3><?= __('Afficher les 10 premier pokemons qui possède la plus grande vitesse') ?></h3>
    <?php $pokemons = TableRegistry::getTableLocator()->get('Pokemons');

        $query = $pokemons->find('all');
        $query->select(['name'])
             ->join([
                    'stats' => [
                    'table' => 'pokemon_stats',
                    'type' => 'INNER',
                    'conditions' => 'stats.pokemon_id = pokemons.id'],])
    
            
            ->Where(['stats.stat_id=6'])
            ->limit(10)
            ->order(['stats.value'=>'DESC']);
            
            
                        

        ?>

        <table>
        <?php $rang=array('1er','2e','3e','4e','5e','6e','7e','8e','9e','10e'); $i =0;?>
        <?php foreach ($query as $row) : ?>
            <tr> 
            <td><?php echo $rang[$i];$i++; ?></td>
            <td><?php echo "   ",$row->name , "   "; ?></td>
            </tr>
        <?php endforeach ;?>
        </table>    
    




    </div>    

