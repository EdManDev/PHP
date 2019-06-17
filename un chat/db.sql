--
-- Structure de la table `chat_messages`
-- - message_id > L'ID du message
-- - message_user > L'ID de l'utilisateur
-- - message_time > La date d'envoi
-- - message_text > Le contenu du message
--
CREATE TABLE IF NOT EXISTS `chat_messages` (
`message_id` int(11) NOT NULL auto_increment,
`message_user` int(11) NOT NULL,
`message_time` bigint(20) NOT NULL,
`message_text` varchar(255) collate latin1_german1_ci NOT NULL, PRIMARY KEY (`message_id`)
) ENGINE=MyISAM ;
--
-- Structure de la table `chat_online`
-- - online_id > L'ID du membre connecte
-- - online_ip > Son adresse IP
-- - online_user > L'ID de l'utilisateur

-- - online_status > Pour informer les membres (ex : en ligne, absent, occupe)
-- - online_time > Pour indiquer la date de derniere actualisation
--
CREATE TABLE IF NOT EXISTS `chat_online` (
`online_id` int(11) NOT NULL auto_increment,
`online_ip` varchar(100) collate latin1_german1_ci NOT NULL, `online_user` int(11) NOT NULL,
`online_status` enum('0','1','2') collate latin1_german1_ci NOT
NULL,
`online_time` bigint(21) NOT NULL, PRIMARY KEY (`online_id`)
) ENGINE=MyISAM ;
--
-- Structure de la table `chat_annonce`
-- - annonce_id > L'ID de l'annonce
-- - annonce_text > Le contenu de l'annonce --
CREATE TABLE IF NOT EXISTS `chat_annonce` (
`annonce_id` int(11) NOT NULL auto_increment,
`annonce_text` varchar(300) collate latin1_german1_ci NOT NULL, PRIMARY KEY (`annonce_id`)
) ENGINE=MyISAM ;
--
-- Structure de la table `chat_accounts`
-- - account_id > L'ID du membre
-- - account_login > Le pseudo du membre entre 2 et 30 caractères
-- - account_pass > Le mot de passe
--
CREATE TABLE IF NOT EXISTS `chat_accounts` (
`account_id` int(11) NOT NULL auto_increment,
`account_login` varchar(30) collate latin1_german1_ci NOT NULL, `account_pass` varchar(255) collate latin1_german1_ci NOT NULL, PRIMARY KEY (`account_id`)
) ENGINE=MyISAM ;