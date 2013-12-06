<?php
App::uses('AppModel', 'Model');
/**
 * StoriesUser Model
 *
 * @property Story $Story
 * @property User $User
 */
class StoriesUser extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'estimate';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Story' => array(
			'className' => 'Story',
			'foreignKey' => 'story_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
