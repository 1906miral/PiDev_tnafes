<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210409141619 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE abonnement_annuel DROP FOREIGN KEY fk_idabonnement_annnuel');
        $this->addSql('ALTER TABLE abonnement_annuel CHANGE id_abonnement id_abonnement INT NOT NULL');
        $this->addSql('ALTER TABLE abonnement_annuel ADD CONSTRAINT FK_631691F59098E86C FOREIGN KEY (id_abonnement) REFERENCES abonnement (id_abonnement)');
        $this->addSql('ALTER TABLE abonnement_mensuel DROP FOREIGN KEY fk_idabonnement_mensuel');
        $this->addSql('ALTER TABLE abonnement_mensuel CHANGE id_abonnement id_abonnement INT NOT NULL');
        $this->addSql('ALTER TABLE abonnement_mensuel ADD CONSTRAINT FK_1E5A0FAE9098E86C FOREIGN KEY (id_abonnement) REFERENCES abonnement (id_abonnement)');
        $this->addSql('ALTER TABLE activite DROP FOREIGN KEY fk_idcat');
        $this->addSql('ALTER TABLE activite DROP FOREIGN KEY fk_idcoach_act');
        $this->addSql('ALTER TABLE activite ADD CONSTRAINT FK_B8755515C9486A13 FOREIGN KEY (id_categorie) REFERENCES categorie (id_categorie)');
        $this->addSql('ALTER TABLE activite ADD CONSTRAINT FK_B8755515A5668A70 FOREIGN KEY (id_coachact) REFERENCES coach (id_coach)');
        $this->addSql('ALTER TABLE adminstrateur DROP FOREIGN KEY fk_idadmin');
        $this->addSql('ALTER TABLE adminstrateur CHANGE id_admin id_admin INT NOT NULL');
        $this->addSql('ALTER TABLE adminstrateur ADD CONSTRAINT FK_4B148F42668B4C46 FOREIGN KEY (id_admin) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY fk_idclientavis');
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY fkidpubrate');
        $this->addSql('ALTER TABLE avis CHANGE id_clientavis id_clientavis INT DEFAULT NULL, CHANGE idpub_rate idpub_rate INT DEFAULT NULL');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF040D4A179 FOREIGN KEY (id_clientavis) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF0DC20EF16 FOREIGN KEY (idpub_rate) REFERENCES publication (id_pub)');
        $this->addSql('ALTER TABLE client DROP FOREIGN KEY fk_idclient');
        $this->addSql('ALTER TABLE client CHANGE id_client id_client INT NOT NULL');
        $this->addSql('ALTER TABLE client ADD CONSTRAINT FK_C7440455E173B1B8 FOREIGN KEY (id_client) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE coach DROP FOREIGN KEY fk_idcoach');
        $this->addSql('ALTER TABLE coach CHANGE id_coach id_coach INT NOT NULL');
        $this->addSql('ALTER TABLE coach ADD CONSTRAINT FK_3F596DCCD1DC2CFC FOREIGN KEY (id_coach) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY fk_idpub');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY fk_idusercomment');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC434167E2 FOREIGN KEY (idpub) REFERENCES publication (id_pub)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCD731875A FOREIGN KEY (idclient_comment) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE compte DROP FOREIGN KEY fk_compte');
        $this->addSql('ALTER TABLE compte CHANGE id_user id_user INT DEFAULT NULL');
        $this->addSql('ALTER TABLE compte ADD CONSTRAINT FK_CFF652606B3CA4B FOREIGN KEY (id_user) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE event DROP FOREIGN KEY fk_idcatE');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT FK_3BAE0AA7C9486A13 FOREIGN KEY (id_categorie) REFERENCES categorie_event (id_categ_event)');
        $this->addSql('ALTER TABLE participation DROP FOREIGN KEY fk_event');
        $this->addSql('ALTER TABLE participation DROP FOREIGN KEY fk_participation');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT FK_AB55E24F8B13D439 FOREIGN KEY (id_evenement) REFERENCES event (id_event)');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT FK_AB55E24FE173B1B8 FOREIGN KEY (id_client) REFERENCES client (id_client)');
        $this->addSql('ALTER TABLE publication DROP FOREIGN KEY fk_iduserpub');
        $this->addSql('ALTER TABLE publication CHANGE iduser iduser INT DEFAULT NULL');
        $this->addSql('ALTER TABLE publication ADD CONSTRAINT FK_AF3C67795E5C27E9 FOREIGN KEY (iduser) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY fk_idclientreclam');
        $this->addSql('ALTER TABLE reclamation CHANGE idclient_rec idclient_rec INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE6064048E0844B2 FOREIGN KEY (idclient_rec) REFERENCES utilisateur (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE abonnement_annuel DROP FOREIGN KEY FK_631691F59098E86C');
        $this->addSql('ALTER TABLE abonnement_annuel CHANGE id_abonnement id_abonnement INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE abonnement_annuel ADD CONSTRAINT fk_idabonnement_annnuel FOREIGN KEY (id_abonnement) REFERENCES abonnement (id_abonnement) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE abonnement_mensuel DROP FOREIGN KEY FK_1E5A0FAE9098E86C');
        $this->addSql('ALTER TABLE abonnement_mensuel CHANGE id_abonnement id_abonnement INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE abonnement_mensuel ADD CONSTRAINT fk_idabonnement_mensuel FOREIGN KEY (id_abonnement) REFERENCES abonnement (id_abonnement) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE activite DROP FOREIGN KEY FK_B8755515C9486A13');
        $this->addSql('ALTER TABLE activite DROP FOREIGN KEY FK_B8755515A5668A70');
        $this->addSql('ALTER TABLE activite ADD CONSTRAINT fk_idcat FOREIGN KEY (id_categorie) REFERENCES categorie (id_categorie) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE activite ADD CONSTRAINT fk_idcoach_act FOREIGN KEY (id_coachact) REFERENCES coach (id_coach) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE adminstrateur DROP FOREIGN KEY FK_4B148F42668B4C46');
        $this->addSql('ALTER TABLE adminstrateur CHANGE id_admin id_admin INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE adminstrateur ADD CONSTRAINT fk_idadmin FOREIGN KEY (id_admin) REFERENCES utilisateur (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF040D4A179');
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF0DC20EF16');
        $this->addSql('ALTER TABLE avis CHANGE id_clientavis id_clientavis INT NOT NULL, CHANGE idpub_rate idpub_rate INT NOT NULL');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT fk_idclientavis FOREIGN KEY (id_clientavis) REFERENCES utilisateur (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT fkidpubrate FOREIGN KEY (idpub_rate) REFERENCES publication (id_pub) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE client DROP FOREIGN KEY FK_C7440455E173B1B8');
        $this->addSql('ALTER TABLE client CHANGE id_client id_client INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE client ADD CONSTRAINT fk_idclient FOREIGN KEY (id_client) REFERENCES utilisateur (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE coach DROP FOREIGN KEY FK_3F596DCCD1DC2CFC');
        $this->addSql('ALTER TABLE coach CHANGE id_coach id_coach INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE coach ADD CONSTRAINT fk_idcoach FOREIGN KEY (id_coach) REFERENCES utilisateur (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC434167E2');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCD731875A');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT fk_idpub FOREIGN KEY (idpub) REFERENCES publication (id_pub) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT fk_idusercomment FOREIGN KEY (idclient_comment) REFERENCES utilisateur (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE compte DROP FOREIGN KEY FK_CFF652606B3CA4B');
        $this->addSql('ALTER TABLE compte CHANGE id_user id_user INT NOT NULL');
        $this->addSql('ALTER TABLE compte ADD CONSTRAINT fk_compte FOREIGN KEY (id_user) REFERENCES utilisateur (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE event DROP FOREIGN KEY FK_3BAE0AA7C9486A13');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT fk_idcatE FOREIGN KEY (id_categorie) REFERENCES categorie_event (id_categ_event) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE participation DROP FOREIGN KEY FK_AB55E24F8B13D439');
        $this->addSql('ALTER TABLE participation DROP FOREIGN KEY FK_AB55E24FE173B1B8');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT fk_event FOREIGN KEY (id_evenement) REFERENCES event (id_event) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT fk_participation FOREIGN KEY (id_client) REFERENCES client (id_client) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE publication DROP FOREIGN KEY FK_AF3C67795E5C27E9');
        $this->addSql('ALTER TABLE publication CHANGE iduser iduser INT NOT NULL');
        $this->addSql('ALTER TABLE publication ADD CONSTRAINT fk_iduserpub FOREIGN KEY (iduser) REFERENCES utilisateur (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE6064048E0844B2');
        $this->addSql('ALTER TABLE reclamation CHANGE idclient_rec idclient_rec INT NOT NULL');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT fk_idclientreclam FOREIGN KEY (idclient_rec) REFERENCES utilisateur (id) ON UPDATE CASCADE ON DELETE CASCADE');
    }
}
