<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211004121041 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(60) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(60) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE image (id INT AUTO_INCREMENT NOT NULL, project_id INT DEFAULT NULL, file VARCHAR(255) NOT NULL, INDEX IDX_C53D045F166D1F9C (project_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE project (id INT AUTO_INCREMENT NOT NULL, client_id INT DEFAULT NULL, maintitle VARCHAR(100) NOT NULL, subtitle VARCHAR(150) NOT NULL, banner VARCHAR(255) DEFAULT NULL, description LONGTEXT NOT NULL, date DATE NOT NULL, state TINYINT(1) NOT NULL, INDEX IDX_2FB3D0EE19EB6921 (client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE project_category (project_id INT NOT NULL, category_id INT NOT NULL, INDEX IDX_3B02921A166D1F9C (project_id), INDEX IDX_3B02921A12469DE2 (category_id), PRIMARY KEY(project_id, category_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045F166D1F9C FOREIGN KEY (project_id) REFERENCES project (id)');
        $this->addSql('ALTER TABLE project ADD CONSTRAINT FK_2FB3D0EE19EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE project_category ADD CONSTRAINT FK_3B02921A166D1F9C FOREIGN KEY (project_id) REFERENCES project (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE project_category ADD CONSTRAINT FK_3B02921A12469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE project_category DROP FOREIGN KEY FK_3B02921A12469DE2');
        $this->addSql('ALTER TABLE project DROP FOREIGN KEY FK_2FB3D0EE19EB6921');
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045F166D1F9C');
        $this->addSql('ALTER TABLE project_category DROP FOREIGN KEY FK_3B02921A166D1F9C');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE image');
        $this->addSql('DROP TABLE project');
        $this->addSql('DROP TABLE project_category');
    }
}
