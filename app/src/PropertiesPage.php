<?php

namespace {
	use SilverStripe\CMS\Model\SiteTree;

	use SilverStripe\Forms\TabSet;
	use SilverStripe\Forms\Tab;
	use SilverStripe\Forms\TextField;
	use SilverStripe\Forms\TextareaField;
	use SilverStripe\Forms\CheckboxField;
	use SilverStripe\Forms\DateField;
	use SilverStripe\Forms\ReadonlyField;
	use SilverStripe\Forms\DropdownField;
	use SilverStripe\Forms\HTMLEditor\HTMLEditorField;

	use SilverStripe\Forms\GridField\GridField;
	use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
	use UndefinedOffset\SortableGridField\Forms\GridFieldSortableRows;
	use Bummzack\SortableFile\Forms\SortableUploadField;

	use SilverStripe\AssetAdmin\Forms\UploadField;
	use SilverStripe\Assets\Image;
	use SilverStripe\Assets\File;

	use SilverStripe\ORM\PaginatedList;
	use SilverStripe\ORM\DataObject;
	use SilverStripe\ORM\ArrayList;
	use SilverStripe\ORM\GroupedList;

	use SilverStripe\View\Requirements;
	use SilverStripe\View\ArrayData;

	use SilverStripe\Control\HTTPRequest;

	class PropertiesPage extends Page {

		private static $db = [
		
			// 'EmailRecipient' => 'Text',
		];

		private static $has_one = [

		];

		private static $owns = [
	
	    ];

		private static $allowed_children = "none";

		private static $defaults = array(
			'PageName' => 'Properties Page',
			'MenuTitle' => 'Properties',
			'ShowInMenus' => true,
			'ShowInSearch' => true,
		);

		public function getCMSFields() {
			$fields = parent::getCMSFields();

			#Remove by tab
			$fields->removeFieldFromTab('Root.Main', 'Content');
			

			/**
			* EMAIL RECEIPIENT : Text Field
			* - Flexibility purpose; to change email with ease.
			*/
			// $fields->addFieldsToTab('Root.Email Recipient', array(
			// 	$desc = new TextField('EmailRecipient', 'Email Address'),
			// ));

			# SET FIELD DESCRIPTION 
			// $uploadf->setDescription('Max file size: 2MB | Dimension: 1366px x 768px');
			// $desc->setDescription('Sample format: email@sample.com, email_2@sample.com');
			
			# Set destination path for the uploaded images.
			// $uploadf->setFolderName('propertiespage/frame-1');

			return $fields;
		}
	}

	class PropertiesPageController extends PageController {
		
	}
}
