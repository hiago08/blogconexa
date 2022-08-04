<?php

/**
 * This is the model base class for the table "usuario".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Usuario".
 *
 * Columns in table "usuario" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $id_usuario
 * @property string $nome
 * @property string $email
 * @property string $senha
 * @property string $coworking
 *
 */
abstract class BaseUsuario extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'usuario';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Usuario|Usuarios', $n);
	}

	public static function representingColumn() {
		return 'nome';
	}

	public function rules() {
		return array(
			array('nome, email, coworking', 'required'),
			array('nome', 'length', 'max'=>80),
			array('email, coworking', 'length', 'max'=>100),
<<<<<<< HEAD
			array('senha', 'length', 'max'=>60),
=======
			array('senha', 'length', 'max'=>35),
			array('senha', 'default', 'setOnEmpty' => true, 'value' => null),
>>>>>>> main
			array('id_usuario, nome, email, senha, coworking', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id_usuario' => Yii::t('app', 'Id Usuario'),
			'nome' => Yii::t('app', 'Nome'),
			'email' => Yii::t('app', 'Email'),
			'senha' => Yii::t('app', 'Senha'),
			'coworking' => Yii::t('app', 'Coworking'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id_usuario', $this->id_usuario);
		$criteria->compare('nome', $this->nome, true);
		$criteria->compare('email', $this->email, true);
		$criteria->compare('senha', $this->senha, true);
		$criteria->compare('coworking', $this->coworking, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}