<?php

namespace App\Repository;

use App\Entity\Rankingvelocidad;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Rankingvelocidad>
 *
 * @method Rankingvelocidad|null find($id, $lockMode = null, $lockVersion = null)
 * @method Rankingvelocidad|null findOneBy(array $criteria, array $orderBy = null)
 * @method Rankingvelocidad[]    findAll()
 * @method Rankingvelocidad[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RankingvelocidadRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Rankingvelocidad::class);
    }

    public function add(Rankingvelocidad $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Rankingvelocidad $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Rankingvelocidad[] Returns an array of Rankingvelocidad objects
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

//    public function findOneBySomeField($value): ?Rankingvelocidad
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
