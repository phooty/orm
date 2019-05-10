<?php
namespace Phooty\Orm\Support\Traits;

trait HasUuid
{
    /**
     * @var \Ramsey\Uuid\UuidInterface
     *
     * @Id
     * @Column(type="uuid", unique=true)
     * @GeneratedValue(strategy="CUSTOM")
     * @CustomIdGenerator(class="Ramsey\Uuid\Doctrine\UuidGenerator")
     */
    protected $id;
    
    /**
     * Get the Player's id
     *
     * @return  int
     */ 
    public function getId()
    {
        return $this->id;
    }
}
