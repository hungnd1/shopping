<?php
use common\models\Product;
use kartik\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

?>
<div class="tabbable-custom ">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'name',
                'value' => $model->name,
            ],
            [
                'attribute' => 'status',
                'label' => 'Trạng thái',
                'format' => 'raw',
                'value' => ($model->status == Product::STATUS_ACTIVE) ?
                    '<span class="label label-success">' . $model->getStatusName() . '</span>' :
                    '<span class="label label-danger">' . $model->getStatusName() . '</span>',
            ],
            [
                'attribute' => 'id_category',
                'value' => \common\models\Category::findOne($model->id_category)->name,
            ],
            [                      // the owner name of the model
                'attribute' => 'price',
                'value' => Product::formatNumber($model->price).' VND'

            ],
            [                      // the owner name of the model
                'attribute' => 'sale',
                'value' => $model->sale?$model->sale:'0'.' %'

            ],

            [
                'attribute' => 'des',
                'format'=>'html',
                'value' => $model->des,
            ],
            [                      // the owner name of the model
                'attribute' => 'created_at',
                'label' => 'Ngày tạo',
                'value' => date('d/m/Y H:i:s', $model->created_at),
            ],
            [                      // the owner name of the model
                'attribute' => 'updated_at',
                'label' => 'Ngày thay đổi thông tin',
                'value' => date('d/m/Y H:i:s', $model->updated_at),
            ],
        ],
    ]) ?>
</div>