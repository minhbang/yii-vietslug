## mbVietSlug

#### mbVietSlug dùng để làm gì?

mbVietSlug là một Yii Framework Widget tự động tạo alias từ Tiếng Việt Unicode.

#### Tính năng
* Tạo slug theo "chuẩn" SEO: trim, bỏ dấu, thay khoảng trắng bằng gạch giữa'-',... 
* Widget lấy String từ 1 input(source), lạo slug và điền vào input khác (target).
* Tự động cập nhật target khi nội dung source thay đổi.

#### Cài đặt
1. Download hoặc Clone tất cả các file của widget
2. Giải nén vào thư mục ..protected/extensions

#### Sử dụng
Ví dụ model Post có 2 property 'name' và 'slug', trong view _form.php ta thêm như sau:
````php
<div class="form">
    <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'post-form',
            'enableAjaxValidation'=>true,
        )); ?>
        ...
        <div class="row">
            <?php echo $form->label($model,'name'); ?>
            <?php echo $form->textField($model,'name'); ?>
            <?php echo $form->error($model,'name'); ?>
        </div>
        <div class="row">
            <?php echo $form->label($model,'slug'); ?>
            <?php echo $form->textField($model,'slug'); ?>
            <?php echo $form->error($model,'slug'); ?>
        </div>
        ...
    <?php $this->endWidget(); ?>
</div>
<?php $this->widget('ext.yiiVietSlug.mbVietSlug', array(
    'model'=>$model,
)); ?>
````
Nếu 2 property không như tên mặc định thì sử dụng như sau:
````php
<?php $this->widget('ext.yiiVietSlug.mbVietSlug', array(
    'model' => $model,
    'source' => 'tên property nguồn',
    'target' => 'tên property cần tạo slug',
)); ?>
````
