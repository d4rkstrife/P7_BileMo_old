<?php

namespace App\Factory;

use App\Entity\Reseeler;
use Zenstruck\Foundry\Proxy;
use Symfony\Component\Uid\Uuid;
use Zenstruck\Foundry\ModelFactory;
use App\Repository\ReseelerRepository;
use DateTime;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Reseeler>
 *
 * @method static Reseeler|Proxy createOne(array $attributes = [])
 * @method static Reseeler[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Reseeler|Proxy find(object|array|mixed $criteria)
 * @method static Reseeler|Proxy findOrCreate(array $attributes)
 * @method static Reseeler|Proxy first(string $sortedField = 'id')
 * @method static Reseeler|Proxy last(string $sortedField = 'id')
 * @method static Reseeler|Proxy random(array $attributes = [])
 * @method static Reseeler|Proxy randomOrCreate(array $attributes = [])
 * @method static Reseeler[]|Proxy[] all()
 * @method static Reseeler[]|Proxy[] findBy(array $attributes)
 * @method static Reseeler[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static Reseeler[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static ReseelerRepository|RepositoryProxy repository()
 * @method Reseeler|Proxy create(array|callable $attributes = [])
 */
final class ReseelerFactory extends ModelFactory
{
    public function __construct()
    {
        parent::__construct();

        // TODO inject services if required (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services)
    }

    protected function getDefaults(): array
    {
        return [
            // TODO add your default values here (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories)
            'uuid' => Uuid::v4(),
            'roles' => [],
            'password' => self::faker()->sentence($nbWords = 1, $variableNbWords = true),
            'company' => self::faker()->sentence($nbWords = 1, $variableNbWords = true),
            'mail' => self::faker()->email(),
            'createdAt' => self::faker()->dateTime(), // TODO add DATETIME ORM type manually
        ];
    }

    protected function initialize(): self
    {
        // see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
        return $this
            // ->afterInstantiate(function(Reseeler $reseeler): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Reseeler::class;
    }
}
