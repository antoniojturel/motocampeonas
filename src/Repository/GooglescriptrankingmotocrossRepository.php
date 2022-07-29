<?php

namespace App\Repository;

use App\Entity\Googlescriptrankingmotocross;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Googlescriptrankingmotocross>
 *
 * @method Googlescriptrankingmotocross|null find($id, $lockMode = null, $lockVersion = null)
 * @method Googlescriptrankingmotocross|null findOneBy(array $criteria, array $orderBy = null)
 * @method Googlescriptrankingmotocross[]    findAll()
 * @method Googlescriptrankingmotocross[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GooglescriptrankingmotocrossRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Googlescriptrankingmotocross::class);
    }

    public function add(Googlescriptrankingmotocross $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Googlescriptrankingmotocross $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Googlescriptrankingmotocross[] Returns an array of Googlescriptrankingmotocross objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('g.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Googlescriptrankingmotocross
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
