<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210610084157 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE usagers (id INT AUTO_INCREMENT NOT NULL, num_carte INT NOT NULL, num_usagers VARCHAR(30) NOT NULL, nom_famille VARCHAR(255) NOT NULL, nom_usage VARCHAR(255) DEFAULT NULL, prenom_1 VARCHAR(255) NOT NULL, prenom_2 VARCHAR(255) DEFAULT NULL, date_naissance DATE NOT NULL, adresse_1 VARCHAR(255) NOT NULL, adresse_2 VARCHAR(255) DEFAULT NULL, code_postal INT NOT NULL, ville VARCHAR(100) NOT NULL, date_creation_carte DATE NOT NULL, date_modification_carte DATE DEFAULT NULL, date_renouvellement_carte DATE DEFAULT NULL, date_suppression_carte DATE DEFAULT NULL, date_fin_validite DATE NOT NULL, statut_validite_carte TINYINT(1) NOT NULL, cim_1 TINYINT(1) NOT NULL, cim_3 TINYINT(1) NOT NULL, cim_4 TINYINT(1) NOT NULL, cim_5 TINYINT(1) NOT NULL, cim_6 TINYINT(1) NOT NULL, cim_7 TINYINT(1) NOT NULL, cim_8 TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE usagers');
    }
}
