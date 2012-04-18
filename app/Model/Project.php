<?php
App::uses('AppModel', 'Model');
/**
 * Project Model
 *
 */
class Project extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'project';
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';
}
