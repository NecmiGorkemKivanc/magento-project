<?php
namespace Gorkemkivanc\HelloWorld\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'post_id';
	protected $_eventPrefix = 'Gorkemkivanc_HelloWorld_post_collection';
	protected $_eventObject = 'post_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Gorkemkivanc\HelloWorld\Model\Post', 'Gorkemkivanc\HelloWorld\Model\ResourceModel\Post');
	}

}