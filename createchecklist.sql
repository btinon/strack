CREATE TABLE `checklist` (
  `checklist_record_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `checklist_server_name` varchar(20) NOT NULL,
  `common_server_id` int(6) unsigned NOT NULL,
  `checklist_notes_reviewed` tinyint(1) NOT NULL,
  `checklist_on_hold` tinyint(1) NOT NULL,
  `checklist_on_hold_reason` varchar(140) NOT NULL,
  `checklist_racked` tinyint(1) NOT NULL,
  `checklist_labeled` tinyint(1) NOT NULL,
  `checklist_cabled` tinyint(1) NOT NULL,
  `checklist_inventoried` tinyint(1) NOT NULL,
  `checklist_built` tinyint(1) NOT NULL,
  `checklist_post` tinyint(1) NOT NULL,
  `checklist_qa` tinyint(1) NOT NULL,
  `checklist_live` tinyint(1) NOT NULL,
  `checklist_server_owner_notified` tinyint(1) DEFAULT NULL,
  `checklist_tech_notes` varchar(140) DEFAULT NULL,
  PRIMARY KEY (`checklist_record_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1