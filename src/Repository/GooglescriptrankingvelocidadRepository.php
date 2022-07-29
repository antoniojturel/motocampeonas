<?php

namespace App\Repository;

use App\Entity\Googlescriptrankingvelocidad;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Googlescriptrankingvelocidad>
 *
 * @method Googlescriptrankingvelocidad|null find($id, $lockMode = null, $lockVersion = null)
 * @method Googlescriptrankingvelocidad|null findOneBy(array $criteria, array $orderBy = null)
 * @method Googlescriptrankingvelocidad[]    findAll()
 * @method Googlescriptrankingvelocidad[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GooglescriptrankingvelocidadRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Googlescriptrankingvelocidad::class);
    }

    public function add(Googlescriptrankingvelocidad $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Googlescriptrankingvelocidad $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Googlescriptrankingvelocidad[] Returns an array of Googlescriptrankingvelocidad objects
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

//    public function findOneBySomeField($value): ?Googlescriptrankingvelocidad
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
