#
# Table structure for table 'tt_content'
#
CREATE TABLE tt_content (
    tx_contentelements_background_color varchar(255) DEFAULT '' NOT NULL,
    tx_contentelements_animation varchar(255) DEFAULT '' NOT NULL,
    tx_contentelements_card_header varchar(255) DEFAULT '' NOT NULL,
    tx_contentelements_card_footer varchar(255) DEFAULT '' NOT NULL,
    tx_contentelements_card_flip_enable smallint(5) unsigned DEFAULT '0' NOT NULL,
    tx_contentelements_card_image_overlay smallint(5) unsigned DEFAULT '0' NOT NULL,
    tx_contentelements_container_rendermode varchar(255) DEFAULT '' NOT NULL,
    tx_contentelements_container_no_gutters smallint(5) unsigned DEFAULT '0' NOT NULL,
    tx_contentelements_bodytext text
);
