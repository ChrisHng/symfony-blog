<?php

namespace BlogBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use BlogBundle\Entity\Article;

/**
 * ArticleCategory
 */
class ArticleCategory {
    use TimeStampLoggerTrait;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var ArrayCollection|Article[]
     */
    private $articles;

    /**
     * ArticleCategory constructor.
     */
    public function __construct()
    {
        $this->articles = new ArrayCollection();
    }

    /**
     * @return Article[]|ArrayCollection
     */
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * @param \BlogBundle\Entity\Article $article
     */
    public function addArticle(Article $article)
    {
        $this->articles->add($article);
    }

    /**
     * @param \BlogBundle\Entity\Article $article
     */
    public function removeArticle(Article $article)
    {
        $this->articles->removeElement($article);
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return ArticleCategory
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

}

