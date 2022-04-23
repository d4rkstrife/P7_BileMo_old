<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220423122539 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE customer ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_81398E09E7927C74 ON customer (email)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_444F97DD5E237E06 ON phone (name)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_180158994FBF094F ON reseller (company)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_81398E09E7927C74 ON customer');
        $this->addSql('ALTER TABLE customer DROP created_at');
        $this->addSql('DROP INDEX UNIQ_444F97DD5E237E06 ON phone');
        $this->addSql('DROP INDEX UNIQ_180158994FBF094F ON reseller');
    }
}
