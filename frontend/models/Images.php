<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "images".
 *
 * @property int $id
 * @property int $category_id
 * @property int $product_id
 * @property string $image
 */
class Images extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'images';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'product_id', 'image'], 'required'],
            [['category_id', 'product_id'], 'integer'],
            [['image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'product_id' => 'Product ID',
            'image' => 'Image',
        ];
    }

    public function getImagesKO()
    {
        return static::find()
            ->andWhere(['category_id' => '1'])
            ->all();
    }

    public function getImagesDK()
    {
        return static::find()
            ->andWhere(['category_id' => '2'])
            ->all();
    }

    public function getImagesKS()
    {
        return static::find()
            ->andWhere(['category_id' => '3'])
            ->all();
    }

    public function getImagesPT()
    {
        return static::find()
            ->andWhere(['category_id' => '4'])
            ->all();
    }

    public function getImagesLP()
    {
        return static::find()
            ->andWhere(['category_id' => '5'])
            ->all();
    }

    public function getImagesTG()
    {
        return static::find()
            ->andWhere(['category_id' => '6'])
            ->all();
    }
}
