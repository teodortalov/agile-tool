<?php
App::uses('AppController', 'Controller');
/**
 * Stories Controller
 *
 * @property Story $Story
 * @property PaginatorComponent $Paginator
 */
class StoriesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

}
