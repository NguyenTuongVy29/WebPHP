<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs = array(
    'News' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List News', 'url' => array('index')),
    array('label' => 'Create News', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#news-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Danh sách </h1>

<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'news-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        /*
          'date_upd',
          'id_user',
          'quanty_cmt',
          'image_description',
          'image_content',
          'ratting',
         */
        array(
            'header' => 'Mã tin tức',
            'name' => 'id_news',
            'type' => 'raw',
        ),
        array(
            'header' => 'Loai Tin',
            'name' => 'id_news_type',
            'type' => 'raw',
        ),
        array(
            'header' => 'Tiêu đề',
            'name' => 'title',
            'type' => 'raw',
        ),
        array(
            'header' => 'Mô tả',
            'name' => 'description',
            'type' => 'raw',
            'htmlOptions'=>array('style'=>'width: 500px; text-align: center;',)
        ),
        array(
            'header' => 'Bình luận',
            'name' => 'content',
            'type' => 'raw',
        ),
    
        array(
            'header' => 'Người Dùng',
            'name' => 'id_user',
            'type' => 'raw',
        ),
       
        array(
            'header' => 'Ảnh mô tả',
            'name' => 'image_description',
            'type'=>'image',
            'value' => '(Yii::app()->baseUrl . "/" . $data->image_description)',
            'htmlOptions' => array('class' => 'image view view-first','style'=>'width:400px')
        ),
       array(
                        'class'=>'CButtonColumn',
                        'template'=>'{view}{update}{delete}',
                        'htmlOptions' => array('style'=>'width:20px'),
                        'afterDelete'=>'function(link,success,data){
                               window.location.reload();
                        }',
                ),
    ),
));
?>
