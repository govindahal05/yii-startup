<?php 

use yii\helpers\Html;
use yii\widgets\ActiveForm;

if(Yii::$app->session->hasFlash('success')){
	echo yii::$app->session->getFlash('success');
}

$form = ActiveForm:: begin();
?>
<?= $form->field($model,'name'); ?>
<?= $form->field($model,'email'); ?>

<?= Html::submitButton('Submit',['class'=>'btn btn-success']); ?>
<?php $form = ActiveForm::end(); ?>