<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260416130031 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE candidature (id INT AUTO_INCREMENT NOT NULL, id_candidature INT NOT NULL, statut VARCHAR(255) NOT NULL, message VARCHAR(255) NOT NULL, cv VARCHAR(255) NOT NULL, date_creation DATETIME DEFAULT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE facture (id INT AUTO_INCREMENT NOT NULL, siret INT NOT NULL, numéro INT NOT NULL, libelle VARCHAR(255) NOT NULL, tva INT NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE candidature');
        $this->addSql('DROP TABLE facture');
    }
}
