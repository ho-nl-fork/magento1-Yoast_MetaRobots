<?php
/**
 *
 * @category   Yoast
 * @package    Yoast_MetaRobots
 * @copyright  Copyright (c) 2009-2010 Yoast (http://www.yoast.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
/**
 * @category   Yoast
 * @package    Yoast_MetaRobots
 * @author     Yoast <magento@yoast.com>
 */
class Yoast_MetaRobots_Block_Cms_Page extends Mage_Cms_Block_Page
{

    protected function _prepareLayout()
    {
        parent::_prepareLayout();



        /** @var Mage_Page_Block_Html_Head $head */
        $head = $this->getLayout()->getBlock('head');
        if ($head) {
            $page = $this->getPage();
            $option = Mage::getSingleton('metarobots/attribute_source_metarobots');

            $head->setRobots($option->getOptionLabel($page->getMetaRobots()));
        }
    }
}
