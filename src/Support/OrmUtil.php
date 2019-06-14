<?php
namespace Phooty\Orm\Support;

use Doctrine\ORM\EntityManagerInterface;

class OrmUtil
{
    private $em;

    private $repos = [];

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function repo(string $model)
    {
        if (!isset($this->repos[$model])) {
            $this->repos[$model] = $this->em->getRepository($model);
        }
        return $this->repos[$model];
    }

    public function find(string $model, array $data, callable $callback = null)
    {
        $repo = $this->repo($model);
        $result = $repo->findOneBy($data);
        if (null === $result) {
            return null !== $callback ? call_user_func($callback, $data) : null;
        }
        return $result;
    }

    public function findAll(string $model, array $data, callable $callback = null)
    {
        $repo = $this->repo($model);
        $result = $repo->findBy($data);
        if (empty($result)) {
            return null !== $callback ? call_user_func($callback, $data) : null;
        }
        return $result;
    }
}
