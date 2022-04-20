<?php

namespace App\Factory;

use App\Entity\Customer;
use Zenstruck\Foundry\Proxy;
use Symfony\Component\Uid\Uuid;
use Zenstruck\Foundry\ModelFactory;
use App\Repository\CustomerRepository;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Customer>
 *
 * @method static Customer|Proxy createOne(array $attributes = [])
 * @method static Customer[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Customer|Proxy find(object|array|mixed $criteria)
 * @method static Customer|Proxy findOrCreate(array $attributes)
 * @method static Customer|Proxy first(string $sortedField = 'id')
 * @method static Customer|Proxy last(string $sortedField = 'id')
 * @method static Customer|Proxy random(array $attributes = [])
 * @method static Customer|Proxy randomOrCreate(array $attributes = [])
 * @method static Customer[]|Proxy[] all()
 * @method static Customer[]|Proxy[] findBy(array $attributes)
 * @method static Customer[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static Customer[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static CustomerRepository|RepositoryProxy repository()
 * @method Customer|Proxy create(array|callable $attributes = [])
 */
final class CustomerFactory extends ModelFactory
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
            'firstName' => self::faker()->name(),
            'lastName' => self::faker()->name(),
            'userName' => self::faker()->name(),
            'adress' => self::faker()->text(),
            'SignUpDate' => self::faker()->dateTime(), // TODO add DATETIME ORM type manually
            'uuid' => Uuid::v4(), // TODO add UUID ORM type manually
        ];
    }

    protected function initialize(): self
    {
        // see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
        return $this
            // ->afterInstantiate(function(Customer $customer): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Customer::class;
    }
}
