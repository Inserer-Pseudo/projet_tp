<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240113165838 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE habitant CHANGE genre genre_id INT NOT NULL');
        $this->addSql('ALTER TABLE habitant ADD CONSTRAINT FK_9BADFD8B4296D31F FOREIGN KEY (genre_id) REFERENCES genre (id)');
        $this->addSql('CREATE INDEX IDX_9BADFD8B4296D31F ON habitant (genre_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE habitant DROP FOREIGN KEY FK_9BADFD8B4296D31F');
        $this->addSql('DROP INDEX IDX_9BADFD8B4296D31F ON habitant');
        $this->addSql('ALTER TABLE habitant CHANGE genre_id genre INT NOT NULL');
    }
}
