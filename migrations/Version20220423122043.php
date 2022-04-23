<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220423122043 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_81398E09D17F50A6 ON customer');
        $this->addSql('DROP INDEX UNIQ_81398E0924A232CF ON customer');
        $this->addSql('ALTER TABLE customer DROP sign_up_date, CHANGE user_name email VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE customer ADD CONSTRAINT FK_81398E0991E6A19D FOREIGN KEY (reseller_id) REFERENCES reseller (id)');
        $this->addSql('ALTER TABLE customer RENAME INDEX idx_81398e0947ee44e TO IDX_81398E0991E6A19D');
        $this->addSql('DROP INDEX UNIQ_444F97DDD17F50A6 ON phone');
        $this->addSql('DROP INDEX UNIQ_65091713D17F50A6 ON reseller');
        $this->addSql('ALTER TABLE reseller CHANGE uuid uuid VARCHAR(255) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_180158995126AC48 ON reseller (mail)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE customer DROP FOREIGN KEY FK_81398E0991E6A19D');
        $this->addSql('ALTER TABLE customer ADD sign_up_date DATETIME NOT NULL, CHANGE email user_name VARCHAR(255) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_81398E09D17F50A6 ON customer (uuid)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_81398E0924A232CF ON customer (user_name)');
        $this->addSql('ALTER TABLE customer RENAME INDEX idx_81398e0991e6a19d TO IDX_81398E0947EE44E');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_444F97DDD17F50A6 ON phone (uuid)');
        $this->addSql('DROP INDEX UNIQ_180158995126AC48 ON reseller');
        $this->addSql('ALTER TABLE reseller CHANGE uuid uuid VARCHAR(180) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_65091713D17F50A6 ON reseller (uuid)');
    }
}
