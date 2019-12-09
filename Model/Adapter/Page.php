<?php


namespace BrunoCanada\HrefLang\Model\Adapter;

use Magento\Cms\Model\Page as CmsPage;
use Magento\Cms\Model\Template\FilterProvider;
use Magento\Framework\UrlInterface;
use BrunoCanada\HrefLang\Model\AdapterInterface;
use BrunoCanada\HrefLang\Model\Property;
use BrunoCanada\HrefLang\Model\PropertyInterface;

class Page implements AdapterInterface
{
    /**
     * @var PropertyInterface
     */
    private $property;
    /**
     * @var CmsPage
     */
    private $page;
    /**
     * @var UrlInterface
     */
    private $url;
    /**
     * @var FilterProvider
     */
    private $filterProvider;

    public function __construct(
        CmsPage $page,
        UrlInterface $url,
        FilterProvider $filterProvider,
        PropertyInterface $property
    ) {
        $this->property = $property;
        $this->page = $page;
        $this->url = $url;
        $this->filterProvider = $filterProvider;
    }

    public function getProperty() : PropertyInterface
    {
        if ($this->page->getId()) {
            $this->property->setTitle((string) $this->page->getTitle());
            $this->property->setDescription(
                (string) $this->filterProvider->getBlockFilter()->filter($this->page->getContent())
            );
            $this->property->setUrl((string) $this->url->getUrl($this->page->getIdentifier()));
            $this->property->addProperty('item', $this->page->getData(), Property::META_DATA_GROUP);
        }
        return $this->property;
    }
}
