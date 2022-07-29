<?php

namespace App\Repository;

use App\Entity\Rankingmotocross;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Rankingmotocross>
 *
 * @method Rankingmotocross|null find($id, $lockMode = null, $lockVersion = null)
 * @method Rankingmotocross|null findOneBy(array $criteria, array $orderBy = null)
 * @method Rankingmotocross[]    findAll()
 * @method Rankingmotocross[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RankingmotocrossRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Rankingmotocross::class);
    }

    public function add(Rankingmotocross $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Rankingmotocross $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Rankingmotocross[] Returns an array of Rankingmotocross objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Rankingmotocross
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
