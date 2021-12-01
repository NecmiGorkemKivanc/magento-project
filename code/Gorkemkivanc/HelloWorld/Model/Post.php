<?php
namespace Gorkemkivanc\HelloWorld\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'Gorkemkivanc_HelloWorld_post';

	protected $_cacheTag = 'Gorkemkivanc_HelloWorld_post';

	protected $_eventPrefix = 'Gorkemkivanc_HelloWorld_post';

	protected function _construct()
	{
		$this->_init('Gorkemkivanc\HelloWorld\Model\ResourceModel\Post');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}