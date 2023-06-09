<?php
    use yii\grid\gridview;
?>

<?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'id_mahasiswa',
            'foto_profil',
            
        ]
    ])
?>
