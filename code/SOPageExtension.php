<?php

namespace PurpleSpider\SectionOverview;

use SilverStripe\Forms\TextareaField;
use SilverStripe\ORM\DataExtension;
use SilverStripe\Forms\FieldList;

class SOPageExtension extends DataExtension
{
    
    private static $db = array(
        "SummaryText" => "Text"
    );
    
    public function updateCMSFields(FieldList $fields)
    {
        if ($this->owner->Parent()->ClassName == "PurpleSpider\SectionOverview\SectionOverviewPage") {
            $summaryfield = new TextareaField('SummaryText', 'Summary');
            $summaryfield->setDescription('Displayed on this page\'s section overview parent page ('.$this->owner->Parent()->MenuTitle.'). <br />If left blank, uses first paragraph of the above Content.');
            $fields->addFieldToTab("Root.Main", $summaryfield, 'Metadata');
        }
    }
}
