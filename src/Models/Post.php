<?php

declare(strict_types=1);

namespace Apteles\Acme\Models;

use DateTime;
use InvalidArgumentException;

class Post
{
    /**
     * title of the post
     *
     * @var [string]
     */
    private $title;

    /**
     * Text of the post
     *
     * @var [string]
     */
    private $content;

    /**
     * date of publish
     *
     * @var [DateTime]
     */
    private $publish_date;

    /**
     * Undocumented function
     *
     * @param string $title
     * @return Post
     */
    public function setTitle(string $title):Post
    {
        $this->title = $this->validateArgument($title);;

        return $this;
    }

    /**
     * Undocumented function
     *
     * @return string
     */
    public function getTitle():string
    {
        return $this->title;
    }

    /**
     * Set a
     *
     * @param string $title
     * @return Post
     */
    public function setContent(string $content):Post
    {
        $this->content = $this->validateArgument($content);

        return $this;
    }
    
    /**
     * Undocumented function
     *
     * @return string
     */
    public function getContent():string
    {
        return $this->content;
    }

    /**
     * Undocumented function
     *
     * @param DateTime $date
     * @return Post
     */
    public function setDate(DateTime $date):Post
    {
        $this->date = $date;

        return $this;
    }   

    /**
     * Undocumented function
     *
     * @return DateTime
     */
    public function getDate():DateTime
    {
        return $this->date;
    }


    /**
     * Undocumented function
     *
     * @param string $attribute
     * @return string
     */
    private function validateArgument(string $attribute):string
    {
        if( empty($attribute) ) {
            throw new InvalidArgumentException("Content can't be empty or null");
        }

        return $attribute;
    }

    public function getAuthor()
    {
        // todo
    }

    public function setAuthor(User $userModel)
    {
        // todo
    }




}