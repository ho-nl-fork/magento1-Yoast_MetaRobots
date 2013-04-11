<?php
/**
 * Yoast_MetaRobots
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the H&O Commercial License
 * that is bundled with this package in the file LICENSE_HO.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.h-o.nl/license
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to info@h-o.com so we can send you a copy immediately.
 *
 * @category    Yoast
 * @package     Yoast_MetaRobots
 * @copyright   Copyright © 2013 H&O (http://www.h-o.nl/)
 * @license     H&O Commercial License (http://www.h-o.nl/license)
 * @author      Stephan van Iterson – H&O <info@h-o.nl>
 *
 *
 */
$installer = $this;
/* @var $installer Mage_Core_Model_Resource_Setup */

$installer->startSetup();

$installer->addAttribute(Mage_Catalog_Model_Category::ENTITY, 'meta_robots', array(
    'group'         => 'General Information',
    'input'         => 'select',
    'type'          => 'int',
    'label'         => 'Meta Robots',
    'backend'       => '',
    'visible'       => true,
    'required'      => false,
    'user_defined'  => false,
    'source'        => 'metarobots/attribute_source_metarobots',
    'default'       => Yoast_MetaRobots_Model_Attribute_Source_Metarobots::META_ROBOTS_INDEX_FOLLOW,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
));

$installer->endSetup();
