<?php
/* @var $this AuthController */
/* @var $model LoginForm */

?>

<!DOCTYPE html>
    <style type="text/css">
        .form-signin {
            max-width: 300px;
            padding: 19px 29px 29px;
            margin: 0 auto ;
            background-color: #fff;
            border: 1px solid #e5e5e5;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            box-shadow: 0 1px 2px rgba(0,0,0,.05);
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }
        .form-signin input[type="text"],
        .form-signin input[type="password"] {
            font-size: 16px;
            height: auto;
            margin-bottom: 15px;
            padding: 7px 9px;
        }

    </style>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'article-form',
    'enableClientValidation'=>true,
    'clientOptions'=>array(
        'validateOnSubmit'=>true,
    ),
    'htmlOptions'=>array(
        'class'=>'form-signin'
    )
)); ?>
<h2 class="form-signin-heading">Giriş Yap</h2>
<?php echo $form->error($model,'username'); ?>
<?php echo $form->error($model,'password'); ?>
<?php echo $form->textField($model, 'username', array('class'=>'input-block-level', 'placeholder'=>'Kullanıcı Adı')); ?>


<?php echo $form->passwordField($model, 'password', array('class'=>'input-block-level', 'placeholder'=>'Şifre')); ?>

<label class="checkbox">
    <?php echo $form->checkBox($model,'rememberMe'); ?> Beni Hatırla
</label>
<button class="btn btn-large btn-primary" type="submit">Giriş Yap</button>
<?php $this->endWidget(); ?>
