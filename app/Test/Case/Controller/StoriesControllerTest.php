<?php
App::uses('StoriesController', 'Controller');

/**
 * StoriesController Test Case
 *
 */
class StoriesControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.story',
		'app.project',
		'app.user',
		'app.projects_user',
		'app.stories_user'
	);

}
