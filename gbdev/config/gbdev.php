<?php
/**
 * Created by PhpStorm.
 * User: McGregor
 * Date: 03/02/2020
 * Time: 3:30 AM
 * Project: Gbdev
 * Website: http://www.gb-dev.si
 */
$config['Gbdev_general_templateFolderName'] = 'gbdev_general';
$config['Gbdev_general_legaltermtemplateFolderName'] = 'gbdev_general_legal_term';
$config['Gbdev_general_admin_templateFolderName'] = 'gbdev_general_admin';
$config['max_upload_size'] = 20000; // KG
$config['backend_models'] = array('gbdev_general_admin_model');
$config['backend_helpers'] = array('admin_page_type','gbdev_form');
$config['frontend_models'] = array('gbdev_general_model');
$config['frontend_helpers'] = array();
