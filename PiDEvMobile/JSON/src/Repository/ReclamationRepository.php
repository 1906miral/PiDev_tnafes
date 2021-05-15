<?php


namespace App\Repository;


use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Reclamation;
/**

 * @method Reclamation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reclamation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reclamation[]    findAll()
 * @method Reclamation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */

class ReclamationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reclamation::class);
    }
   /* public function count()
    {
        return $this->createQueryBuilder('r')
            ->select('count(r.idReclamation)')
            ->getQuery()
            ->getSingleScalarResult();
    }*/
    public function countByDate(){
        $query = $this->createQueryBuilder('r');
        $query
            ->select('SUBSTRING(r.date , 1 , 10) as dateReclam , COUNT(r) as count')
            ->groupBy('dateReclam')
        ;
        return $query->getQuery()->getResult();
    }
}