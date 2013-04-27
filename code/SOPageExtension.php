<?php

class SOPageExtension extends DataExtension {
	
	static $db = array(
		"SummaryText" => "Text"
	);
	
	public function updateCMSFields(FieldList $fields) {
		if ($this->owner->Parent()->ClassName == "SectionOverviewPage") {
	 		$summaryfield = new TextareaField('SummaryText', 'Section Summary Text');
	 		$summaryfield->setRightTitle('Displayed on this page\'s section overview parent page ('.$this->owner->Parent()->MenuTitle.'), if left blank, uses first paragraph of the Content.');
	 		$fields->addFieldToTab("Root.Main", $summaryfield, 'Metadata');
 		}
	}
	
	
}