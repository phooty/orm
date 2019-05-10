<?php
namespace Phooty\Orm\Support\Traits;

trait WasCreatedOn
{
    /**
     * @Column(type="datetime")
     * @var \DateTime
     */
    protected $created;

    /**
     * Get the value of created
     *
     * @return  \DateTime
     */ 
    public function getCreated()
    {
        return $this->created;
    }
}
