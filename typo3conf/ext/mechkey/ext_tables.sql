#
# Edit Table structure for table 'tt_content'
#
CREATE TABLE tt_content (
	tx_mechkey_prevpage int(11) unsigned DEFAULT '0' NOT NULL,
	tx_mechkey_nextpage int(11) unsigned DEFAULT '0' NOT NULL,
	tx_mechkey_prevtext varchar(255) DEFAULT '' NOT NULL,
	tx_mechkey_nexttext varchar(255) DEFAULT '' NOT NULL,
);
