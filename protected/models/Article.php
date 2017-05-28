<?php

/**
 * This is the model class for table "article".
 *
 * The followings are the available columns in table 'article':
 * @property integer $article_id
 * @property string $title
 * @property string $content
 * @property integer $category_id
 * @property integer $editor_id
 * @property string $date_created
 * @property string $slug
 * @property integer $order
 * @property integer $status
 */
class Article extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'article';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, category_id, editor_id, date_created', 'required'),
			array('category_id, editor_id, order, status', 'numerical', 'integerOnly'=>true),
			array('title, slug', 'length', 'max'=>100),
			array('content', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('article_id, title, content, category_id, editor_id, date_created, slug, order, status', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
            'relEditor'=>array(self::BELONGS_TO, 'Editor', 'editor_id'),
            'relCategory'=>array(self::BELONGS_TO, 'Category', 'category_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'article_id' => 'Döküman ID',
			'title' => 'Başlık',
			'content' => 'İçerik',
			'category_id' => 'Kategori',
			'editor_id' => 'Editör',
			'date_created' => 'Oluşturulma Tarihi',
			'slug' => 'Slug',
			'order' => 'Sıralama',
			'status' => 'Durum',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('article_id',$this->article_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('editor_id',$this->editor_id);
		$criteria->compare('date_created',$this->date_created,true);
		$criteria->compare('slug',$this->slug,true);
		$criteria->compare('order',$this->order);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Article the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
