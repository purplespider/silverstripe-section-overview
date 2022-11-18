<?php

namespace PurpleSpider\SectionOverview;

use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use Page;

class SectionOverviewPage extends Page
{
    
    private static $singular_name = "Section Overview";
    private static $description = 'Shows the Title, Summary & Links for all subpages';
 
    private static $icon_class = 'font-icon-p-home';
    
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab("Root.Main", $editor = HTMLEditorField::create('Content', 'Intro Text'), "Metadata");
        $editor->setRows(20);
        return $fields;
    }
}
