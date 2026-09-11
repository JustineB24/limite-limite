-- Création de la table des questions (Cartes Noires)
CREATE TABLE IF NOT EXISTS `questions` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `texte` VARCHAR(255) NOT NULL,
    `nb_reponses` INT DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Création de la table des réponses (Cartes Blanches)
CREATE TABLE IF NOT EXISTS `reponses` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `texte` VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Cartes Noires (Questions bien grinçantes)
INSERT INTO `questions` (`texte`, `nb_reponses`) VALUES
('La rumeur dit que le pape a été aperçu en boîte de nuit en train de consommer ____.', 1),
('Pour financer leur voyage de noces, ce couple a décidé de vendre des vidéos de ____.', 1),
('Quel est le secret le mieux gardé de la famille royale britannique ? ____.', 1),
('La police m''a arrêté à la frontière avec un coffre rempli de ____.', 1),
('Ma pire rupture amoureuse s''est faite par SMS, juste après ____.', 1),
('Qu''est-ce qui va provoquer la fin du monde en 2027 ? ____.', 1),
('Pour intégrer cette école de commerce privée, le rituel de bizutage consiste à subir ____.', 1),
('Le dernier caprice de star de cette célébrité : exiger ____ dans sa loge.', 1),
('____ : la principale cause de divorce chez les plus de 60 ans.', 1),
('Mon psy m''a dit que tous mes traumatismes d''enfance venaient de ____.', 1);

-- Cartes Blanches (Réponses politiquement incorrectes et absurdes)
INSERT INTO `reponses` (`texte`) VALUES
('Un avortement clandestin pratiqué avec un cintre et un tuto YouTube'),
('L''oncle raciste qui s''ambiance sur du Saga Africa après trois ricards'),
('Une sextape volée entre deux profs de SVT de ton ancien collège'),
('Le cadavre de la mascotte du club de foot locale enterré dans le jardin'),
('Vendre les cendres de sa grand-mère sur Vinted en les faisant passer pour de la drogue'),
('Un fétichisme inavouable pour les pieds de la boulangère'),
('Le compte OnlyFans secret de ta prof de mathématiques'),
('Un curé qui installe l''application Tinder pendant la messe de minuit'),
('Un enfant de 8 ans qui trouve des trucs très bizarres dans l''historique de son père'),
('Une diarrhée explosive au milieu d''un entretien d''embauche pour un poste de cadre'),
('S''étouffer avec le jouet surprise d''un Happy Meal à l''âge de 25 ans'),
('Faire un coma éthylique à la fête de fin d''année de l''école primaire'),
('Un trafic international de faux tests de paternité'),
('Le slip sale d''un influenceur vendu aux enchères pour 3000 euros'),
('Un aveugle qui touche accidentellement le mauvais endroit dans le métro'),
('Les bruits suspects qui viennent de la chambre d''amis pendant les fêtes de famille'),
('Une fouille rectale approfondie par un douanier qui a l''air d''aimer son travail'),
('Pleurer de honte en payant son abonnement premium sur un site pour adultes'),
('Un grand-père qui confond ses pilules de Viagra avec ses médicaments pour le cœur'),
('Le stagiaire de troisième qui surprend le patron et la secrétaire dans la réserve');

