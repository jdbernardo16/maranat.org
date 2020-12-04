<?php

namespace {
    use SilverStripe\CMS\Model\SiteTree;
    use SilverStripe\ORM\DataObject;
    use SilverStripe\Assets\Image;
    use SilverStripe\Forms\FieldList;
    use SilverStripe\Forms\TextField;
    use SilverStripe\Forms\TextareaField;
    use SilverStripe\Forms\ReadonlyField;
    use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
    use SilverStripe\AssetAdmin\Forms\UploadField;
    use SilverStripe\Versioned\Versioned;
    use SilverStripe\Control\Controller;

    class ContactDetail extends DataObject {

        private static $db = [
            'SortOrder' => 'Int',
            'DetailText' => 'Text',
            'DetailLinkExternal' => 'Text',
            'DetailLinkMail' => 'Text',
            'DetailLinkPhone' => 'Text',
        ];

        private static $has_one = [
            'ContactUsPage' => 'ContactUsPage',
            'DetailIcon' => Image::class,
        ];

        private static $owns = [
            'DetailIcon',
        ];

        private static $summary_fields = [
            'SortOrder' => 'Sort Order',
            'DetailText' => 'Details',
        ];

        public function getCMSFields() {
            $fields = parent::getCMSFields();
            $fields->addFieldToTab('Root.Main', ReadonlyField::create('SortOrder', 'Sort Order'));

            $fields->addFieldToTab('Root.Main', new TextareaField('DetailText', 'Text'));
            $fields->addFieldToTab('Root.Main', new TextField('DetailLinkExternal', 'External Link'));
            $fields->addFieldToTab('Root.Main', new TextField('DetailLinkMail', 'Mail Link'));
            $fields->addFieldToTab('Root.Main', new TextField('DetailLinkPhone', 'Phone Link'));

            $fields->addFieldToTab('Root.Main', $upload_1 = new UploadField('DetailIcon', 'Social Media Icon'));


            $fields->removeByName('SortOrder');
            $fields->removeByName('ContactUsPageID');

            # SET FIELD DESCRIPTION 
            $upload_1->setDescription('Max file size: 2MB | Dimension: within 30px x 30px');

            # Set destination path for the uploaded images.
            $upload_1->setFolderName('ContactUsPage/icons');

            return $fields;
        }
    }
}
